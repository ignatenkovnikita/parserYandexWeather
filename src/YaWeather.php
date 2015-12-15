<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov
 * Date: 20.08.15
 * Time: 22:05
 */

namespace YaWeather {


    class YaWeather {

        private $_citiyId;
        private $_url;
        private $_error = [];
        private $_success = [];

        /**
         * Construct $id is cityId
         * @param int $id
         */
        public function __construct($id = 27643, $url = "https://export.yandex.ru/weather-ng/forecasts/"){
            $this->_citiyId = $id;
            $this->_url = $url;
        }

        /**
         * Function to load weather from web
         */
        public function load() {

            $url = $this->CreateUrl();

            $userAgent = 'Googlebot/2.1 (+http://www.google.com/bot.html)';

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $output = curl_exec($ch);

            if(curl_errno($ch))
                $this->_error[] = "Error load weather from web. curl_error output: " .curl_error($ch).".";
            else
                $this->_success[] = "Load weather from web OK.";
            $this->saveToFile($output);
        }

        /**
         * Save output to File
         * @param $output
         */
        private function saveToFile($output) {
            $fileName = $this->getFileName();

            $fh = fopen($fileName, 'w');

            if(fwrite($fh, $output))
                $this->_success[] = "File success write.";
            else
                $this->_error[] = "Error file save.";
            fclose($fh);
        }

        /**
         * Get Error & Success status
         * @return string
         */
        public function logFormat() {
            $str = "";

            if($this->_error)
                $str .= "Error: ".implode(" ", $this->_error)."<br>";
            if($this->_success)
                $str .= "Success: ".implode(" ", $this->_success)."<br>";

            return $str;
        }

        /**
         * Get errors
         * @return array
         */
        public function getError() {
            return $this->_error;
        }

        /**
         * Get success
         * @return array
         */
        public function getSuccess(){
            return $this->_success;
        }


        /**
         * Return parse weather
         * @return string|Models\City
         */
        public function getResult() {

            $parse = new ParseXml($this->getFileName());

            if($parse->parse())
                return $parse->parse();
            else
                return false;

        }

        /**
         * show page html.php
         * @param bool $cp1251
         */
        public function show($cp1251 = false) {
            $file = "html.php";
            if($cp1251)
                $file = "htmlcp1251.php";

            $city = $this->getResult();

            $path = str_replace($_SERVER['DOCUMENT_ROOT'], "", __DIR__)."./../css";

            if($city != null)
                require_once(dirname(__DIR__).'/'.$file);
        }

        /**
         * Return url to load xml
         * @return string
         */
        private function CreateUrl() {
            return $this->_url . $this->_citiyId .".xml";
        }

        /**
         * Get path
         * @return string
         */
        public function getFileName() {
            return dirname(__DIR__)."/city_" . $this->_citiyId . ".xml";
        }

    }
}