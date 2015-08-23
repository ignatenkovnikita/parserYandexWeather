<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov
 * Date: 23.08.15
 * Time: 4:56
 */

namespace YandexWeather\Models;


class Fact {

    public $temperature_from;
    public $temperature_to;

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



}