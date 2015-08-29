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

use YaWeather\YaWeather;

$parser = new YaWeather($settings['cityId'], $settings['parseUrl']);
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
    <title><?=$city->city?>.������� ������ �� 10 ����</title>

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
        <div class="navigation-city"><h1 class="title title_level_1"><?=$city->city?>. ������</h1></div>
        <div class="current-weather">
            <div class="current-weather__today">������ <span
                    class="current-weather__local-time"><?= date("H:i") ?></span></div>
            <span class="current-weather__col current-weather__col_type_now t t_c_13"><i
                    class="icon icon_size_48 icon_thumb_<?= $city->fact->getIcon() ?>" data-width="48"></i><span
                    class="current-weather__comment">��������</span><div
                    class="current-weather__thermometer current-weather__thermometer_type_now"><?= $city->fact->temperature ?>
                    ?�C
                </div></span><span class="current-weather__col current-weather__col_type_after t t_c_8"><span
                    class="current-weather__thermometer-name">�����</span><i
                    class="icon icon_thumb_<?= $city->getCurrentDay()->night->getIcon() ?> icon_size_30"
                    data-width="30"></i><div
                    class="current-weather__thermometer current-weather__thermometer_type_after"><?= $city->getCurrentDay()->night->temperature_avg ?>
                </div></span><span class="current-weather__col current-weather__col_type_after t t_c_11"><span
                    class="current-weather__thermometer-name">����</span><i
                    class="icon icon_thumb_<?= $city->getCurrentDay()->day->getIcon() ?> icon_size_30"
                    data-width="30"></i><div
                    class="current-weather__thermometer current-weather__thermometer_type_after"><?= $city->getCurrentDay()->day->temperature_avg ?>
                </div></span><span class="current-weather__col current-weather__info"><div
                    class="current-weather__info-row">
                    <span class="current-weather__info-label">������: </span><?= $city->getCurrentDay()->sunrise ?><span
                        class="current-weather__info-label current-weather__info-label_type_sunset">�����: </span><?= $city->getCurrentDay()->sunset ?>
                </div><div class="current-weather__info-row current-weather__info-row_type_wind"><span
                        class="current-weather__info-label">�����: </span> <span
                        class="wind-speed"><?= $city->fact->wind_speed ?> �/�</span> <abbr
                        class=" icon-abbr" title="�����: ������-���������"><?= $city->fact->getWindDirection() ?></abbr><i
                        class="icon icon_size_12 icon_wind_<?= $city->fact->wind_direction ?> icon_wind"
                        data-width="12"></i></div><div
                    class="current-weather__info-row"><span
                        class="current-weather__info-label">���������: </span><?= $city->fact->humidity ?>%
                </div><div class="current-weather__info-row"><span
                        class="current-weather__info-label">��������: </span><?= $city->fact->pressure ?> ��
                    ��. ��.
                </div><div class="current-weather__info-row current-weather__info-row_type_time">������
                    �� <?= $city->fact->getObservationTime() ?></div></span>

            <div class="current-weather__yesterday">����� � ��� �����: <?= $city->yesterday->temperature ?></div>
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
                            <div class="forecast-brief__item-temp-day" title="������������ ����������� ����">
                             ' . $day->day->temperature_avg . '
                             ' . ($i > 0 ? "" : "����") . '
                            </div>
                        </div>
                        <div class="forecast-brief__item-temp-night t t_c_9" title="����������� ����������� �����">
                            ' . $day->night->temperature_avg . '
                            ' . ($i > 0 ? "" : "�����") . '
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
