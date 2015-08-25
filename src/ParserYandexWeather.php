<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov
 * Date: 20.08.15
 * Time: 22:05
 */

namespace YandexWeather;


class ParserYandexWeather {

    private $_citiyId;
    private $_url = "https://export.yandex.ru/weather-ng/forecasts/";

    private $data = array();

    /**
     * Construct $id is cityId
     * @param int $id
     */
    public function __construct($id = 27643){
        $this->_citiyId = $id;
    }

    /**
     * Function to load information
     */
    public function load() {

        $url = $this->CreateUrl();

        $userAgent = 'Googlebot/2.1 (+http://www.google.com/bot.html)';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
        $output = curl_exec($ch);



        $this->saveToFile($output);

    }

    /**
     * Save output to File
     * @param $output
     */
    private function saveToFile($output) {
        $fileName = $this->getFileName();
        $fh = fopen($fileName, 'w');
        fwrite($fh, $output);
        fclose($fh);
    }


    /**
     * Return parse document
     * @return string|Models\City
     */
    public function getResult() {

        $parse = new ParseFromXml($this->getFileName());

        //$city = new City($this->getFileName());

        if($parse->parse())
            return $parse->parse();
        else
            return "Error parse document";

    }

    /**
     * Return url to load xml
     * @return string
     */
    private function CreateUrl() {
        return $this->_url . $this->_citiyId .".xml";
    }

    /**
     * Get FileName for save
     * @return string
     */
    public function getFileName() {
        return "city_" . $this->_citiyId . ".xml";
    }

}