<link rel="stylesheet" href="<?= $path ?>/_index.css">
<link rel="stylesheet" href="<?= $path ?>/forsuite.css">

<div class="content">
    <div class="content__top clearfix">
        <div class="current-weather">
            <div class="current-weather__today">������ <span
                    class="current-weather__local-time"><?= date("H:i") ?></span></div>
            <span class="current-weather__col current-weather__col_type_now t_c_<?= $city->fact->temperature ?>"><i
                    class="icon icon_size_48 icon_thumb_<?= $city->fact->getIcon() ?>" data-width="48"></i><span
                    class="current-weather__comment"><?= \YaWeather\ParseXml::encoding($city->fact->weather_type) ?></span><div
                    class="current-weather__thermometer current-weather__thermometer_type_now"><?= $city->fact->getTemperatureStr() ?>
                    �C
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
                    <span class="current-weather__info-label">������: </span><?= $city->getCurrentDay()->sunrise ?><span
                        class="current-weather__info-label current-weather__info-label_type_sunset">�����: </span><?= $city->getCurrentDay()->sunset ?>
                </div><div class="current-weather__info-row current-weather__info-row_type_wind"><span
                        class="current-weather__info-label">�����: </span> <span
                        class="wind-speed"><?= $city->fact->wind_speed ?> �/�</span> <abbr
                        class=" icon-abbr" title="�����: ������-���������"><?= \YaWeather\ParseXml::encoding($city->fact->getWindDirection()) ?></abbr><i
                        class="icon icon_size_12 icon_wind_<?= $city->fact->wind_direction ?> icon_wind"
                        data-width="12"></i></div><div
                    class="current-weather__info-row"><span
                        class="current-weather__info-label">���������: </span><?= $city->fact->humidity ?>%
                </div><div class="current-weather__info-row"><span
                        class="current-weather__info-label">��������: </span><?= $city->fact->pressure ?> ��
                    ��. ��.
                </div><div class="current-weather__info-row current-weather__info-row_type_time">������
                    �� <?= $city->fact->getObservationTime() ?></div></span>

            <div class="current-weather__yesterday">����� � ��� �����: <?= $city->yesterday->getTemperatureStr() ?></div>
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
                            <div class="forecast-brief__item-temp-day" title="������������ ����������� ����">
                             ' . $day->day->getTemperatureAvgStr() . '
                             ' . ($i > 0 ? "" : "����") . '
                            </div>
                        </div>
                        <div class="forecast-brief__item-temp-night t_c_' . $day->day->temperature_avg . '" title="����������� ����������� �����">
                            ' . $day->night->getTemperatureAvgStr() . '
                            ' . ($i > 0 ? "" : "�����") . '
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

            <h1 class="title title_level_1">������� �� 10 ����</h1>

            <div class="tabs-panes__pane tabs-panes__pane_active_yes" role="tabpanel" aria-labelledby="forecasts-tab-1" aria-expanded="false">
                <dl class="forecast-detailed forecast-item">

                    <?php
                    $i = 0;
                    foreach($city->getListDays() as $key => $day){

                        echo '<dt class="forecast-detailed__day ' . ($day->checkWeekend($key, true) ? "forecast-detailed__day_weekend" : "") . '">
                                <small class="forecast-detailed__weekday">' . \YaWeather\ParseXml::encoding($day->getDayName($key)) . '</small>
                                <strong class="forecast-detailed__day-number">' . $day->getDayNumber($key) . '<span class="forecast-detailed__day-month">'.\YaWeather\ParseXml::encoding($day->getMonthName($key)).'</span></strong>
                            </dt>';

                        echo '<dd class="forecast-detailed__day-info '.($i<1 ? "forecast-detailed__day-info_first": "").'">
                                <table class="weather-table">
                                    <thead class="weather-table__head">
                                    <tr>
                                        <th class="weather-table__head-cell" colspan="3"></th>
                                        <th class="weather-table__head-cell">
                                            <div class="weather-table__value">��������, <br>�� ��. ��.</div>
                                        </th>
                                        <th class="weather-table__head-cell">
                                            <div class="weather-table__value">���������</div>
                                        </th>
                                        <th class="weather-table__head-cell weather-table__head-cell_type_wind" colspan="2">
                                            <div class="weather-table__value">�����, �/�</div>
                                        </th>
                                    </tr>
                                </thead>';
                        //var_dump($day->getListDetail());
                        echo '<tbody class="weather-table__body">';

                        foreach ($day->getListDetail() as $key => $detail) {

                            echo '<tr class="weather-table__row t t_c_' . $detail->temperature_avg . '">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">'.\YaWeather\ParseXml::encoding($key).'</div>
                                    <div class="weather-table__temp">'.$detail->getTemperatureFromTo().'</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_'.$detail->getIcon().'"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">' . \YaWeather\ParseXml::encoding($detail->weather_type) . '</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">'.$detail->pressure.'</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">'.$detail->humidity.'%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="�����: ��������">'.\YaWeather\ParseXml::encoding($detail->getWindDirection()).'</abbr><i
                                            class="icon icon_size_12 icon_wind_'.$detail->wind_direction.' icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">'.$detail->wind_speed.'</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>

                            ';

                        }

                        echo '</tbody>';

                        echo '</table>
                                <!--<div class="forecast-detailed__geomagnetic-field">
                                    <small class="forecast-detailed__key">��������� ����:</small>
                                    <div class="forecast-detailed__value">����� �����������</div>
                                </div>-->
                                <div class="forecast-detailed__moon"><i class="icon icon_size_26 icon_moon_'.$day->moon_phase.'" title=""
                                                                        data-width="26"></i></div>
                                <div class="forecast-detailed__sunset">
                                    <small class="forecast-detailed__key">�����</small>
                                    <div class="forecast-detailed__value">'.$day->sunset.'</div>
                                </div>
                                <div class="forecast-detailed__sunrise">
                                    <small class="forecast-detailed__key">������</small>
                                    <div class="forecast-detailed__value">'.$day->sunrise.'</div>
                                </div>
                            </dd>';



                        $i++;
                    }

                    ?>




                </dl>
            </div>


        </div>
    </div>
</div>