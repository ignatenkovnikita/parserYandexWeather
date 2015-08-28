<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov_nv
 * Date: 28.08.2015
 * Time: 10:10
 */

error_reporting(-1);

require_once('vendor/autoload.php');

require_once('config.php');

use YandexWeather\ParserYandexWeather;


$parser = new ParserYandexWeather($settings['cityId'], $settings['parseUrl']);
$parser->load();
echo $parser->logFormat();