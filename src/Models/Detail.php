<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov
 * Date: 23.08.15
 * Time: 4:56
 */

namespace YaWeather\Models;


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



    public function getTemperatureStr()
    {
        return $this->temperature > 0 ? '+'.$this->temperature : $this->temperature;
    }

    public function getTemperatureAvgStr() {
        return $this->temperature_avg > 0 ? '+'.$this->temperature_avg : $this->temperature_avg;
    }
    /**
     * Get current time
     * @return bool|string
     */
    public function getObservationTime() {
        return $time = date("H:i",strtotime($this->observation_time));
    }

    /**
     * Get icon for weather
     * @return mixed
     */
    public function getIcon() {
        if(substr($this->image_v3,  -3, 1) == "-") {
            $this->image_v3 =  str_replace("-", "", $this->image_v3);
        }
        $this->image_v3 = str_replace("+", "", $this->image_v3);
        return str_replace("_", "-", $this->image_v3);
    }

    /**
     * Get wind direction
     * @return mixed
     */
    public function getWindDirection() {
        $windDirection =  [
            's'=>'Ю',
            'n'=>'С',
            'w'=>'З',
            'e'=>'В',
            'sw'=>'ЮЗ',
            'se'=>'ЮВ',
            'nw'=>'СЗ',
            'ne'=>'СВ'];

        if(isset($windDirection[$this->wind_direction]))
            return $windDirection[$this->wind_direction];

        return null;

    }



}