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

    const HOUR_NIGHT = 6;
    const HOUR_MORNING = 12;
    const HOUR_DAY = 18;
    const HOUR_EVENING = 23;


    public $sunrise;
    public $sunset;
    public $moon_phase;

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
            $str = "Завтра";
        else {
            $str = $listDays[date("w", strtotime($value))];

            //return $this->days[date('w', $date)].', '.(int)date('d',$date).' '.$this->months[date('n', $date)];
        }


        return $str;

    }

    public function AdditionalState()
    {
        $arrAdditionWeather = [];
        $hour = date("G");
        if ($hour > self::HOUR_EVENING OR $hour <= self::HOUR_NIGHT) {
            $arrAdditionWeather["Утром"] = $this->morning;
            $arrAdditionWeather["Днём"] = $this->day;
        }
        if ($hour > self::HOUR_NIGHT && $hour <= self::HOUR_MORNING) {
            $arrAdditionWeather["Днём"] = $this->day;
            $arrAdditionWeather["Вечером"] = $this->evening;
        }
        if ($hour > self::HOUR_MORNING && $hour <= self::HOUR_DAY) {
            $arrAdditionWeather["Вечером"] = $this->evening;
            $arrAdditionWeather["Ночью"] = $this->night;
        }
        if ($hour > self::HOUR_DAY && $hour <= self::HOUR_EVENING) {
            $arrAdditionWeather["Ночью"] = $this->night;
            $arrAdditionWeather["Утром"] = $this->morning;
        }

        return $arrAdditionWeather;
    }

    public function getListDetail() {
        return ["Утром" => $this->morning, "Днём" => $this->day, "Вечером" => $this->evening, "Ночью" => $this->night];
    }

}