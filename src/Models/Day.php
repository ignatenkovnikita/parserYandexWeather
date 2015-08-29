<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov
 * Date: 21.08.15
 * Time: 1:28
 */

namespace YaWeather\Models;


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

    /**
     *
     * @param $value
     * @param bool $weekend
     * @return bool
     */
    public static function CheckWeekend($value, $weekend = false)
    {
        $dayNumber = date('w', strtotime($value));
        if($weekend && ($dayNumber == 0 || $dayNumber == 6))
            return true;
        elseif ($weekend == false && $dayNumber == 0)
            return true;
        else
            return false;
    }

    public static function getDayNumber($value) {
        return $str = date('j', strtotime($value));
    }

    public static function getMonthName($value) {
        $listMonths = ['','января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря'];
        return $listMonths[date("n", strtotime($value))];
    }

    public static function getDayName($value) {
        $str = "";

        $listDays = ['вс','пн', 'вт', 'ср', 'чт', 'пт', 'сб'];

        $date = Date('d.m.Y', strtotime("+1 days"));
        $match_date = date('d.m.Y', strtotime($value));

        if($date == $match_date)
            $str = "ЗАВТРА";
        else {
            $str = $listDays[date("w", strtotime($value))];

            //return $this->days[date('w', $date)].', '.(int)date('d',$date).' '.$this->months[date('n', $date)];
        }


        return $str;

    }
    /*public function __construct($data) {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }


    }*/

}