<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov
 * Date: 20.08.15
 * Time: 21:58
 */
error_reporting(-1);

require_once('vendor/autoload.php');


use YandexWeather\ParserYandexWeather;

$parser = new ParserYandexWeather(27643);
//$parser->load();
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
    <title>Прогноз погоды в Выксе на 10 дней — Яндекс.Погода</title>
    <script>;
        (function (d, e, c, r) {
            e = d.documentElement;
            c = "className";
            r = "replace";
            e[c] = e[c][r]("i-ua_js_no", "i-ua_js_yes");
            if (d.compatMode != "CSS1Compat")e[c] = e[c][r]("i-ua_css_standart", "i-ua_css_quirks")
        })(document);
        ;
        (function (d, e, c, n, w, v, f) {
            e = d.documentElement;
            c = "className";
            n = "createElementNS";
            f = "firstChild";
            w = "http://www.w3.org/2000/svg";
            e[c] += " i-ua_svg_" + (!!d[n] && !!d[n](w, "svg").createSVGRect ? "yes" : "no");
            v = d.createElement("div");
            v.innerHTML = "<svg/>";
            e[c] += " i-ua_inlinesvg_" + ((v[f] && v[f].namespaceURI) == w ? "yes" : "no");
        })(document);
        ;
        (function (d, e, p) {
            e = d.documentElement;
            p = "placeholder";
            e.className += " i-ua_" + p + (p in d.createElement("input") ? "_yes" : "_no")
        })(document);</script>
    <!--[if gt IE 9]><!-->
    <link rel="stylesheet" href="https://yastatic.net/weather-frontend/3.10.1/desktop.bundles/index/_index.css">
    <!--<![endif]--><!--[if IE 6]>
    <link rel="stylesheet" href="//yastatic.net/weather-frontend/3.10.1/desktop.bundles/index/_index.ie6.css"/>
    <![endif]--><!--[if IE 7]>
    <link rel="stylesheet" href="//yastatic.net/weather-frontend/3.10.1/desktop.bundles/index/_index.ie7.css"/>
    <![endif]--><!--[if IE 8]>
    <link rel="stylesheet" href="//yastatic.net/weather-frontend/3.10.1/desktop.bundles/index/_index.ie8.css"/>
    <![endif]--><!--[if IE 9]>
    <link rel="stylesheet" href="//yastatic.net/weather-frontend/3.10.1/desktop.bundles/index/_index.ie9.css"/>
    <![endif]-->
    <link rel="stylesheet" href="https://yastatic.net/weather-frontend/3.10.1/i/print/print.css" media="print">
    <meta name="viewport" content="width=1000">
    <meta name="description"
          content="Подробный прогноз погоды для Выксы на сегодня, завтра, неделю, 10 дней. Температура воздуха и воды, осадки, давление и влажность, скорость ветра. Погодные карты, информер для сайта и информация о климате регионов. ">
    <meta property="og:title" content="Прогноз погоды в Выксе на 10 дней  — Яндекс.Погода">
    <meta property="og:description"
          content="Подробный прогноз погоды для Выксы на сегодня, завтра, неделю, 10 дней. Температура воздуха и воды, осадки, давление и влажность, скорость ветра. Погодные карты, информер для сайта и информация о климате регионов. ">
    <meta property="og:image" content="/og_image.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Яндекс.Погода">
    <link rel="shortcut icon" href="https://pogoda.yandex.ru/favicon.ico">
    <meta name="msapplication-TileImage" content="/tile-square-transp.png">
    <meta name="msapplication-TileColor" content="#ee0000">
    <meta name="application-name" content="Яндекс.Погода">
    <meta name="msapplication-square70x70logo" content="/tile-tiny-transp.png">
    <meta name="msapplication-square150x150logo" content="/tile-square-transp.png">
    <meta name="msapplication-wide310x150logo" content="/tile-wide-transp.png">
    <meta name="msapplication-square310x310logo" content="/tile-large-transp.png">
    <link rel="search" type="application/opensearchdescription+xml" title="Яндекс.Погода"
          href="https://pogoda.yandex.ru/opensearch.ru.xml">
    <link rel="canonical" href="https://pogoda.yandex.ru/vyksa">
    <style type="text/css"></style>

</head>
<body class="b-page b-page_type_index inquire geo-stat b-page__body i-ua i-ua_interaction_yes i-global i-bem b-page_js_inited inquire_js_inited i-ua_platform_other i-ua_js_inited i-global_js_inited"
      data-bem="{&quot;b-page&quot;:{},&quot;inquire&quot;:{&quot;inquire&quot;:{&quot;top&quot;:&quot;.content__top a&quot;,&quot;btm&quot;:&quot;.info__ratatuy a&quot;},&quot;level&quot;:2,&quot;maxLevel&quot;:3},&quot;geo-stat&quot;:{},&quot;i-ua&quot;:{},&quot;i-global&quot;:{&quot;lang&quot;:&quot;ru&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;content-region&quot;:&quot;ru&quot;,&quot;click-host&quot;:&quot;//clck.yandex.ru&quot;,&quot;passport-host&quot;:&quot;https://passport.yandex.ru&quot;,&quot;pass-host&quot;:&quot;https://pass.yandex.ru&quot;,&quot;social-host&quot;:&quot;https://social.yandex.ru&quot;,&quot;export-host&quot;:&quot;https://export.yandex.ru&quot;,&quot;login&quot;:&quot;MustangXP&quot;,&quot;lego-static-host&quot;:&quot;//yastatic.net/lego/2.10-142&quot;,&quot;id&quot;:&quot;weather&quot;,&quot;host&quot;:&quot;https://pogoda.yandex.ru&quot;,&quot;user-region&quot;:&quot;ru&quot;,&quot;secret-key&quot;:&quot;yafd339789e7f51da41042bbfe20da711&quot;,&quot;retpath&quot;:&quot;https://pogoda.yandex.ru/vyksa/&quot;,&quot;social-retpath&quot;:&quot;https://pogoda.yandex.ru/social-broker__closer.html&quot;,&quot;uid&quot;:&quot;16370760&quot;,&quot;yu&quot;:&quot;1168825731435355130&quot;,&quot;rid&quot;:20040,&quot;urid&quot;:47,&quot;slug&quot;:&quot;vyksa&quot;,&quot;metrikaId&quot;:115080}}"
      data-interaction="pointer">
<div class="content">
    <div class="content__top clearfix">
        <div class="current-weather">
            <div class="current-weather__today">Сейчас <span class="current-weather__local-time"><?=date("H:i")?></span></div>
            <span class="current-weather__col current-weather__col_type_now t t_c_13"><i
                    class="icon icon_size_48 icon_thumb_<?=$city->fact->getIcon()?>" data-width="48"></i><span class="current-weather__comment">пасмурно</span><div
                    class="current-weather__thermometer current-weather__thermometer_type_now"><?=$city->fact->temperature?> °C
                </div></span><span class="current-weather__col current-weather__col_type_after t t_c_8"><span
                    class="current-weather__thermometer-name">ночью</span><i class="icon icon_thumb_<?=$city->getCurrentDay()->night->getIcon()?> icon_size_30"
                                                                             data-width="30"></i><div
                    class="current-weather__thermometer current-weather__thermometer_type_after"><?=$city->getCurrentDay()->night->temperature_avg?>
                </div></span><span class="current-weather__col current-weather__col_type_after t t_c_11"><span
                    class="current-weather__thermometer-name">днём</span><i class="icon icon_thumb_<?=$city->getCurrentDay()->day->getIcon()?> icon_size_30"
                                                                             data-width="30"></i><div
                    class="current-weather__thermometer current-weather__thermometer_type_after"><?=$city->getCurrentDay()->day->temperature_avg?>
                </div></span><span class="current-weather__col current-weather__info"><div class="current-weather__info-row">
                    <span class="current-weather__info-label">Восход: </span><?=$city->getCurrentDay()->sunrise?><span
                        class="current-weather__info-label current-weather__info-label_type_sunset">Закат: </span><?=$city->getCurrentDay()->sunset?>
                </div><div class="current-weather__info-row current-weather__info-row_type_wind"><span
                        class="current-weather__info-label">Ветер: </span> <span class="wind-speed"><?=$city->fact->wind_speed?> м/с</span> <abbr
                        class=" icon-abbr" title="Ветер: северо-восточный"><?=$city->fact->getWindDirection()?></abbr><i
                        class="icon icon_size_12 icon_wind_<?=$city->fact->wind_direction?> icon_wind" data-width="12"></i></div><div
                    class="current-weather__info-row"><span class="current-weather__info-label">Влажность: </span><?=$city->fact->humidity?>%
                </div><div class="current-weather__info-row"><span class="current-weather__info-label">Давление: </span><?=$city->fact->pressure?> мм
                    рт. ст.
                </div><div class="current-weather__info-row current-weather__info-row_type_time">Данные на <?=$city->fact->getObservationTime()?></div></span>

            <div class="current-weather__yesterday">Вчера в это время: <?=$city->yesterday->temperature?></div>
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
                        <div class="forecast-brief__item-date '.($day->checkWeekend($key, true) ? "forecast-brief__item-date_weekend_yes" : "").'"><span
                                class="forecast-brief__item-dayname">'.$day->getDayName($key).'</span><span
                                class="forecast-brief__item-day">'.$day->getDayNumber($key).' '.($i>0? "" : $day->getMonthName($key)).'</span></div>
                        <div class="forecast-brief__item-description t t_c_17"><i
                                class="icon icon_thumb_'.$day->day->getIcon().' icon_size_30" data-width="30"></i>

                            <div class="forecast-brief__item-comment">'.$day->day->weather_type.'</div>
                            <div class="forecast-brief__item-temp-day" title="Максимальная температура днём">
                             '.$day->day->temperature_avg.'
                             '.($i>0? "" : "днём").'
                            </div>
                        </div>
                        <div class="forecast-brief__item-temp-night t t_c_9" title="Минимальная температура ночью">
                            '.$day->night->temperature_avg.'
                            '.($i>0? "" : "ночью").'
                        </div>
                    </li>';

                        if($day->checkWeekend($key))
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
