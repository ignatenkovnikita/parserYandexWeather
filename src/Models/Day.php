<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov
 * Date: 21.08.15
 * Time: 1:28
 */

namespace YandexWeather\Models;


class Day{

    const TYPE_MORNING = 1;
    const TYPE_DAY = 2;
    const TYPE_EVENING = 3;
    const TYPE_NIGHT = 4;
    const TYPE_DAY_SHORT = 5;
    const TYPE_NIGHT_SHORT = 6;

    public $sunrise;
    public $sunset;

    public $morning;
    public $day;
    public $evening;
    public $night;
    public $day_short;
    public $night_short;

    /*public function __construct($data) {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }


    }*/

}