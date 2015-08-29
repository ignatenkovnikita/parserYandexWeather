<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov
 * Date: 23.08.15
 * Time: 4:51
 */

namespace YaWeather;




use YaWeather\Models\City;
use YaWeather\Models\Day;
use YaWeather\Models\Detail;

class ParseXml {

    private $xml;
    private $city;


    /**
     * @param $fileName
     */
    public function __construct($fileName)
    {
        $this->xml = @simplexml_load_file($fileName);
    }

    /**
     * Parse weather from XML and return Model City
     * @return bool|City
     */
    public function parse() {

        // check xml load
        if(!$this->xml)
            return false;

        $city = new City();
        foreach($this->xml->attributes() as $key => $value) {
            if(isset(Mapping::mapCity()[$key]))
                $city->{Mapping::mapCity()[$key]} = (string) $value;
        }

        $fact = new Detail();
        foreach ($this->xml->fact[0] as $key => $value) {
            if(isset(Mapping::mapDetail()[$key])) {
                $fact->{Mapping::mapDetail()[$key]} = (string) $value;
            }

        }
        $city->fact = $fact;

        $fact = new Detail();
        foreach ($this->xml->yesterday[0] as $key => $value) {
            if(isset(Mapping::mapDetail()[$key])) {
                $fact->{Mapping::mapDetail()[$key]} = (string) $value;
            }

        }
        $city->yesterday = $fact;

        $days = array();
        foreach($this->xml->day as $value) {
            $day = new Day();
            foreach ($value as $key => $value1) {
                if(isset(Mapping::mapDay()[$key])) {
                    $day->{Mapping::mapDay()[$key]} = (string) $value1;
                }
                //var_dump($value1->attributes()["typeid"]);


            }
            foreach ($value->day_part as $key2 => $value2) {
                $detail = new Detail();
                foreach ($value2 as $key3 => $value3) {
                    if(isset(Mapping::mapDetail()[$key3])) {
                        $detail->{Mapping::mapDetail()[$key3]} = (string) $value3;
                    }
                    if(isset(Mapping::mapDetail()["inner"][$key3])) {
                        $detail->{Mapping::mapDetail()["inner"][$key3]} = (string) $value3->avg;
                    }
                }
                $day->{$value2->attributes()["type"]} = $detail;
            }
            $days[(string)$value->attributes()["date"]] = $day;
        }
        $city->days = $days;

        return $city;
    }

    /**
     * static function encode string utf8 to cp1251
     * @param $value
     * @return string
     */
    public static function encoding($value) {
        return iconv( "UTF-8", "windows-1251//TRANSLIT", $value);
    }






}