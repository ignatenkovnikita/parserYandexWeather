<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>


<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/parserYandexWeather/vendor/autoload.php');

use YaWeather\YaWeather;

$parser = new YaWeather();
$parser->show();



var_dump($parser->getResult());

?>
</body>
</html>
