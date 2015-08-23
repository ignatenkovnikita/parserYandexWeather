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
use YandexWeather\Models\Fact;

class ParseFromXml {

    private $xml;
    private $city;


    private $nameSp = "YandexWeather\\Models\\";

    public function __construct($fileName)
    {
        $this->xml = simplexml_load_file($fileName);



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

        $city = new City();
        foreach($this->xml->attributes() as $key => $value) {
            if(isset(Mapping::mapCity()[$key]))
                $city->{Mapping::mapCity()[$key]} = (string) $value;
        }

        $fact = new Fact();
        foreach ($this->xml->fact[0] as $key => $value) {
            if(isset(Mapping::mapFact()[$key])) {
                $fact->{Mapping::mapFact()[$key]} = (string) $value;
            }

        }
        $city->fact = $fact;

        $fact = new Fact();
        foreach ($this->xml->yesterday[0] as $key => $value) {
            if(isset(Mapping::mapFact()[$key])) {
                $fact->{Mapping::mapFact()[$key]} = (string) $value;
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
                $detail = new Fact();
                foreach ($value2 as $key3 => $value3) {
                    if(isset(Mapping::mapFact()[$key3])) {

                        $detail->{Mapping::mapFact()[$key3]} = (string) $value3;
                    }
                }
                //echo $value2->attributes()["type"];
                //var_dump($detail);
                $day->{$value2->attributes()["type"]} = $detail;
            }

            //var_dump();
            $days[(string)$value->attributes()["date"]] = $day;
        }
        $city->days = $days;


        /*$map = Mapping::map();
        $structure = $map[$this->xml->getName()];
        $class = $this->nameSp.$structure["name"];

        $city = new $class();
        if($this->xml->attributes()) {
            foreach ($this->xml->attributes() as $key => $value) {
                if(isset($structure["attributes"][$key]))
                    $city->$structure["attributes"][$key] = (string) $value;
            }
        }


        foreach ($this->xml->children() as $value) {

            //echo $value->getName();
            $class = array_search('name', Mapping::map());
            $map = Mapping::map();
            //var_dump($this->getValues($map, "fact"));
            //var_dump($map);
            //var_dump(array_key_exists('forecast', $map));
            if(isset($map[$value->getName()]["name"])) {
                if(class_exists("YandexWeather\\Models\\".$map[$value->getName()]["name"])) {
                    echo 123;
                }
            }

            //var_dump();

            if($value->attributes())

                foreach($value->attributes() as $key => $value) {
                    //echo $key;
                }

        }*/

        //var_dump($city);

        /*$city = new City();
        foreach($this->xml->attributes() as $key => $value) {
            if(isset(Mapping::mapCity()[$key]))
                $city->{Mapping::mapCity()[$key]} = (string) $value;
        }*/

        //var_dump($this->xml->fact);
        //$city->fact = new Fact();

        /*foreach ($this->xml->children() as $child) {
            echo $child->getName();
            if(class_exists("YandexWeather\\Models\\".$child->getName())) {
                echo 123;
            }
            //var_dump();


        }*/

        /*foreach ($this->xml->fact[0] as $key => $value) {
            //echo $key;
            if(isset(Mapping::mapFact()[$key]))
                $city->fact->{Mapping::mapFact()[$key]} = (string) $value;
            //$city->fact->{$key} =  (string) $value;

        }*/


        return $city;
    }






}