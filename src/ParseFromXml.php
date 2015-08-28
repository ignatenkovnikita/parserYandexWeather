<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov
 * Date: 23.08.15
 * Time: 4:51
 */

namespace YandexWeather;




use YandexWeather\Models\City;
use YandexWeather\Models\Day;
use YandexWeather\Models\Detail;

class ParseFromXml {

    private $xml;
    private $city;


    private $nameSp = "YandexWeather\\Models\\";

    public function __construct($fileName)
    {
        $this->xml = @simplexml_load_file($fileName);
    }

    function array_search_recursive($needle, $haystack, &$indexes=array())
    {
        foreach ($haystack as $key => $value) {
            if (is_array($value)) {
                $indexes[] = $key;
                $status = $this->array_search_recursive($needle, $value, $indexes);
                if ($status) {
                    return true;
                }
                $indexes = array();
            } else if ($value == $needle) {
                $indexes[] = $key;
                return true;
            }
        }
        return false;
    }

    public function parse() {

        // check xml load
        if(!$this->xml)
            return false;

        $city = new City();
        foreach($this->xml->attributes() as $key => $value) {
            if(isset(Mapping::mapCity()[$key]))
                $city->{Mapping::mapCity()[$key]} = (string) $this->encoding($value);
        }

        $fact = new Detail();
        foreach ($this->xml->fact[0] as $key => $value) {
            if(isset(Mapping::mapDetail()[$key])) {
                $fact->{Mapping::mapDetail()[$key]} = (string) $this->encoding($value);
            }

        }
        $city->fact = $fact;

        $fact = new Detail();
        foreach ($this->xml->yesterday[0] as $key => $value) {
            if(isset(Mapping::mapDetail()[$key])) {
                $fact->{Mapping::mapDetail()[$key]} = (string) $this->encoding($value);
            }

        }
        $city->yesterday = $fact;

        $days = array();
        foreach($this->xml->day as $value) {
            $day = new Day();
            foreach ($value as $key => $value1) {
                if(isset(Mapping::mapDay()[$key])) {
                    $day->{Mapping::mapDay()[$key]} = (string) $this->encoding($value1);
                }
                //var_dump($value1->attributes()["typeid"]);


            }
            foreach ($value->day_part as $key2 => $value2) {
                $detail = new Detail();
                foreach ($value2 as $key3 => $value3) {
                    if(isset(Mapping::mapDetail()[$key3])) {
                        $detail->{Mapping::mapDetail()[$key3]} = (string) $this->encoding($value3);
                    }
                    //echo $key3."<br>";
                    if(isset(Mapping::mapDetail()["inner"][$key3])) {

                        //echo Mapping::mapFact()["inner"][$key3]."<br>";

                        $detail->{Mapping::mapDetail()["inner"][$key3]} = (string) $this->encoding($value3->avg);
                    }

                    //var_dump((string) $value3->avg);
                }
                //echo $value2->attributes()["type"];
                //var_dump($detail);
                $day->{$value2->attributes()["type"]} = $detail;
            }

            //var_dump();
            $days[(string)$value->attributes()["date"]] = $day;
        }
        $city->days = $days;

        return $city;
    }

    private function encoding($value) {
        return iconv( "UTF-8", "windows-1251//TRANSLIT", $value);
    }






}