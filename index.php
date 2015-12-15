<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>


<?php

require_once(__DIR__ . '/vendor/autoload.php');

use YaWeather\YaWeather;

$parser = new YaWeather();
$parser->load();
$parser->show();
//var_dump($parser->getResult());

echo $parser->logFormat();

?>
</body>
</html>
