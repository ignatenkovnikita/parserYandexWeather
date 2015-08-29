<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov_nv
 * Date: 28.08.2015
 * Time: 10:10
 */

error_reporting(-1);

require_once('vendor/autoload.php');

use YaWeather\YaWeather;


$parser = new YaWeather();
$parser->load();
echo $parser->logFormat();