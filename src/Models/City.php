<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov
 * Date: 21.08.15
 * Time: 1:22
 */

namespace YandexWeather\Models;


class City {

    public $city;
    public $country;
    public $region;

    public $fact;
    public $yesterday;

    public $days;


    public function getCurrentDay() {
        $current = date("Y-m-d");
        if(isset($this->days[$current]))
            return $this->days[$current];
        else
            return "not found current day";
    }

    public function getYesterday() {
        $yesterday = date("Y-m-d", time() - 86400);

        if(isset($this->days[$yesterday]))
            return $this->days[$yesterday];
        else
            return "not found yesterday day";
    }




    /*public $listDay = array();
    private $xml;

    public function __construct($fileName) {

        $this->xml = simplexml_load_file($fileName);
        /*$day = new Day();
        $day->p = 0;
        $day->p1 = 1;

        $this->listDay[] = $day;*/
        //echo $fileName;
        //$xml = simplexml_load_file($fileName, "Day");



        //$xml1 = $file = file_get_contents($fileName, true);;
        //var_dump($xml);
        //$xml1 = simplexml_load_string($xml, 'Day');
        //var_dump($xml->day[0]);
        //var_dump($xml);
        //var_dump($this->listDay);
    /*}

    public function getListDay() {




        foreach ($this->xml->day as $day) {
            $this->listDay[] = new Day($day);
            //var_dump($day->sunrise);

        }

        return $this->listDay;

    }*/


    /*public function getListDay() {
        return $this->listDay;
    }*/

}