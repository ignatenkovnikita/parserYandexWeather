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
    private $_url;

    private $data = [];
    private $error = [];
    private $success = [];

    /**
     * Construct $id is cityId
     * @param int $id
     */
    public function __construct($id = 27643, $url){
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

        if(!curl_errno($ch))
            $this->error[] = "Ошибка при загрузке погоды с веба.";
        else
            $this->success[] = "Погода упешно загружена с веба.";

        $this->saveToFile($output);
    }

    /**
     * Save output to File
     * @param $output
     */
    private function saveToFile($output) {
        $fileName = $this->getFileName();

        if(is_writable($this->getFileName())) {
            $fh = fopen($fileName, 'w');

            if(fwrite($fh, $output))
                $this->success[] = "Файл успешно сохранен.";
            else
                $this->error[] = "Ошибка при сохранении файла.";
            fclose($fh);
        }
        else {
            $this->error[] = "Нет доступа на запись в файл.";
        }
    }

    public function logFormat() {
        $str = "";

        if($this->error)
            $str .= "Ошибки: ".implode(" ", $this->error)."<br>";
        if($this->success)
            $str .= "Успешно: ".implode(" ", $this->success)."<br>";

        return $str;
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
        return __DIR__."/../city_" . $this->_citiyId . ".xml";
    }

}