<link rel="stylesheet" href="<?= $path ?>/_index.css">

<div class="content">
    <div class="content__top clearfix">
        <div class="current-weather">
            <div class="current-weather__today">Сейчас <span
                    class="current-weather__local-time"><?= date("H:i") ?></span></div>
            <span class="current-weather__col current-weather__col_type_now t_c_<?= $city->fact->temperature ?>"><i
                    class="icon icon_size_48 icon_thumb_<?= $city->fact->getIcon() ?>" data-width="48"></i><span
                    class="current-weather__comment"><?= \YaWeather\ParseXml::encoding($city->fact->weather_type) ?></span><div
                    class="current-weather__thermometer current-weather__thermometer_type_now"><?= $city->fact->getTemperatureStr() ?>
                    °C
                </div></span>
            <?php
                foreach ($city->getCurrentDay()->AdditionalState() as $key => $value) {
                    echo '<span class="current-weather__col current-weather__col_type_after t_c_'.$value->temperature_avg.'"><span
                        class="current-weather__thermometer-name">'.(\YaWeather\ParseXml::encoding($key)).'</span><i
                        class="icon icon_thumb_'.$value->getIcon().' icon_size_30"
                        data-width="30"></i><div
                        class="current-weather__thermometer current-weather__thermometer_type_after">'.$value->getTemperatureAvgStr().'</div></span>';
                    }
            ?>
            <span class="current-weather__col current-weather__info"><div
                    class="current-weather__info-row">
                    <span class="current-weather__info-label">Восход: </span><?= $city->getCurrentDay()->sunrise ?><span
                        class="current-weather__info-label current-weather__info-label_type_sunset">Закат: </span><?= $city->getCurrentDay()->sunset ?>
                </div><div class="current-weather__info-row current-weather__info-row_type_wind"><span
                        class="current-weather__info-label">Ветер: </span> <span
                        class="wind-speed"><?= $city->fact->wind_speed ?> м/с</span> <abbr
                        class=" icon-abbr" title="Ветер: северо-восточный"><?= \YaWeather\ParseXml::encoding($city->fact->getWindDirection()) ?></abbr><i
                        class="icon icon_size_12 icon_wind_<?= $city->fact->wind_direction ?> icon_wind"
                        data-width="12"></i></div><div
                    class="current-weather__info-row"><span
                        class="current-weather__info-label">Влажность: </span><?= $city->fact->humidity ?>%
                </div><div class="current-weather__info-row"><span
                        class="current-weather__info-label">Давление: </span><?= $city->fact->pressure ?> мм
                    рт. ст.
                </div><div class="current-weather__info-row current-weather__info-row_type_time">Данные
                    на <?= $city->fact->getObservationTime() ?></div></span>

            <div class="current-weather__yesterday">Вчера в это время: <?= $city->yesterday->getTemperatureStr() ?></div>
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
                                class="forecast-brief__item-dayname">' . \YaWeather\ParseXml::encoding($day->getDayName($key)) . '</span><span
                                class="forecast-brief__item-day">' . \YaWeather\ParseXml::encoding($day->getDayNumber($key) . ' ' . ($i > 0 ? "" : $day->getMonthName($key))) . '</span></div>
                        <div class="forecast-brief__item-description t_c_' . $day->day->temperature_avg . '"><i
                                class="icon icon_thumb_' . $day->day->getIcon() . ' icon_size_30" data-width="30"></i>

                            <div class="forecast-brief__item-comment">' . \YaWeather\ParseXml::encoding($day->day->weather_type) . '</div>
                            <div class="forecast-brief__item-temp-day" title="Максимальная температура днём">
                             ' . $day->day->getTemperatureAvgStr() . '
                             ' . ($i > 0 ? "" : "днём") . '
                            </div>
                        </div>
                        <div class="forecast-brief__item-temp-night t_c_' . $day->day->temperature_avg . '" title="Минимальная температура ночью">
                            ' . $day->night->getTemperatureAvgStr() . '
                            ' . ($i > 0 ? "" : "ночью") . '
                        </div>
                    </li>';

                        $i++;

                        if($i == 6) break;

                        /*if ($day->checkWeekend($key) && $i <= 5)
                            echo '<li class="forecast-brief__item forecast-brief__item_gap">&nbsp;</li>';*/








                    }

                    ?>

                </ul>
            </div>

        </div>
    </div>
</div>