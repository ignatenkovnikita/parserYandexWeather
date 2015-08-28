<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov
 * Date: 20.08.15
 * Time: 21:58
 */
error_reporting(-1);

require_once('vendor/autoload.php');

require_once('config.php');

use YandexWeather\ParserYandexWeather;

$parser = new ParserYandexWeather($settings['cityId'], $settings['parseUrl']);
$city = $parser->getResult();

//var_dump($city);
?>

<!DOCTYPE html>
<!-- saved from url=(0031)https://pogoda.yandex.ru/vyksa/ -->
<html class="i-ua_js_yes i-ua_css_standard i-ua_svg_yes i-ua_inlinesvg_yes i-ua_placeholder_yes" lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$city->city?>.Прогноз погоды на 10 дней</title>

    <link rel="stylesheet" href="./css/_index.css">
    <!--<![endif]--><!--[if IE 6]>
    <link rel="stylesheet" href="./css/_index.ie6.css"/>
    <![endif]--><!--[if IE 7]>
    <link rel="stylesheet" href="./css/_index.ie7.css"/>
    <![endif]--><!--[if IE 8]>
    <link rel="stylesheet" href="./css/_index.ie8.css"/>
    <![endif]--><!--[if IE 9]>
    <link rel="stylesheet" href="./css/_index.ie9.css"/>
    <![endif]-->
    <link rel="stylesheet" href="./css/print.css" media="print">
    <meta name="viewport" content="width=1000">
</head>
<body>
<div class="content">
    <div class="content__top clearfix">
        <div class="navigation-city"><h1 class="title title_level_1"><?=$city->city?>. Погода</h1></div>
        <div class="current-weather">
            <div class="current-weather__today">Сейчас <span
                    class="current-weather__local-time"><?= date("H:i") ?></span></div>
            <span class="current-weather__col current-weather__col_type_now t t_c_13"><i
                    class="icon icon_size_48 icon_thumb_<?= $city->fact->getIcon() ?>" data-width="48"></i><span
                    class="current-weather__comment">пасмурно</span><div
                    class="current-weather__thermometer current-weather__thermometer_type_now"><?= $city->fact->temperature ?>
                     °C
                </div></span><span class="current-weather__col current-weather__col_type_after t t_c_8"><span
                    class="current-weather__thermometer-name">ночью</span><i
                    class="icon icon_thumb_<?= $city->getCurrentDay()->night->getIcon() ?> icon_size_30"
                    data-width="30"></i><div
                    class="current-weather__thermometer current-weather__thermometer_type_after"><?= $city->getCurrentDay()->night->temperature_avg ?>
                </div></span><span class="current-weather__col current-weather__col_type_after t t_c_11"><span
                    class="current-weather__thermometer-name">днём</span><i
                    class="icon icon_thumb_<?= $city->getCurrentDay()->day->getIcon() ?> icon_size_30"
                    data-width="30"></i><div
                    class="current-weather__thermometer current-weather__thermometer_type_after"><?= $city->getCurrentDay()->day->temperature_avg ?>
                </div></span><span class="current-weather__col current-weather__info"><div
                    class="current-weather__info-row">
                    <span class="current-weather__info-label">Восход: </span><?= $city->getCurrentDay()->sunrise ?><span
                        class="current-weather__info-label current-weather__info-label_type_sunset">Закат: </span><?= $city->getCurrentDay()->sunset ?>
                </div><div class="current-weather__info-row current-weather__info-row_type_wind"><span
                        class="current-weather__info-label">Ветер: </span> <span
                        class="wind-speed"><?= $city->fact->wind_speed ?> м/с</span> <abbr
                        class=" icon-abbr" title="Ветер: северо-восточный"><?= $city->fact->getWindDirection() ?></abbr><i
                        class="icon icon_size_12 icon_wind_<?= $city->fact->wind_direction ?> icon_wind"
                        data-width="12"></i></div><div
                    class="current-weather__info-row"><span
                        class="current-weather__info-label">Влажность: </span><?= $city->fact->humidity ?>%
                </div><div class="current-weather__info-row"><span
                        class="current-weather__info-label">Давление: </span><?= $city->fact->pressure ?> мм
                    рт. ст.
                </div><div class="current-weather__info-row current-weather__info-row_type_time">Данные
                    на <?= $city->fact->getObservationTime() ?></div></span>

            <div class="current-weather__yesterday">Вчера в это время: <?= $city->yesterday->temperature ?></div>
        </div>
    </div>
    <div class="forecasts">
        <div class="tabs-panes i-bem" data-bem="{&quot;tabs-panes&quot;:{&quot;id&quot;:&quot;forecasts&quot;}}">
            <div class="tabs-panes__pane tabs-panes__pane_active_yes" role="tabpanel" aria-labelledby="forecasts-tab-0"
                 aria-expanded="true">
                <ul class="forecast-brief forecast-item">
                    <?php


                    $i = 0;
                    foreach ($city->getListDays() as $key => $day) {


                        echo '<li class="forecast-brief__item">
                        <div class="forecast-brief__item-date ' . ($day->checkWeekend($key, true) ? "forecast-brief__item-date_weekend_yes" : "") . '"><span
                                class="forecast-brief__item-dayname">' . $day->getDayName($key) . '</span><span
                                class="forecast-brief__item-day">' . $day->getDayNumber($key) . ' ' . ($i > 0 ? "" : $day->getMonthName($key)) . '</span></div>
                        <div class="forecast-brief__item-description t t_c_17"><i
                                class="icon icon_thumb_' . $day->day->getIcon() . ' icon_size_30" data-width="30"></i>

                            <div class="forecast-brief__item-comment">' . $day->day->weather_type . '</div>
                            <div class="forecast-brief__item-temp-day" title="Максимальная температура днём">
                             ' . $day->day->temperature_avg . '
                             ' . ($i > 0 ? "" : "днём") . '
                            </div>
                        </div>
                        <div class="forecast-brief__item-temp-night t t_c_9" title="Минимальная температура ночью">
                            ' . $day->night->temperature_avg . '
                            ' . ($i > 0 ? "" : "ночью") . '
                        </div>
                    </li>';

                        if ($day->checkWeekend($key))
                            echo '<li class="forecast-brief__item forecast-brief__item_gap">&nbsp;</li>';

                        $i++;


                    }

                    ?>

                </ul>
            </div>

        </div>
    </div>
</div>


</body>
</html>
