<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov
 * Date: 23.08.15
 * Time: 4:56
 */

namespace YandexWeather\Models;


class Detail {

    public $temperature_from;
    public $temperature_to;
    public $temperature_avg;

    public $station;
    public $observation_time;
    public $uptime;
    public $temperature;
    public $weather_condition;
    public $image;
    public $image_v2;
    public $image_v3;
    public $weather_type;
    public $wind_direction;
    public $wind_speed;
    public $humidity;
    public $pressure;
    public $mslp_pressure;
    public $daytime;
    public $season;
    public $ipad_image;


    public function getObservationTime() {
        return $time = date("H:i",strtotime($this->observation_time));
    }

    public function getWindDirection() {
        $windDirection =  [
            's'=>'&#8593; ю',
            'n'=>'&#8595; с',
            'w'=>'&#8594; з',
            'e'=>'&#8592; в',
            'sw'=>'&#8599; юз',
            'se'=>'&#8598; юв',
            'nw'=>'&#8600; сз',
            'ne'=>'&#8601; св'];

        if(isset($windDirection[$this->wind_direction]))
            return $windDirection[$this->wind_direction];

    }



}