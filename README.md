# YaWeather
Parser Weather from Yandex Weather

[![Build Status](https://travis-ci.org/ignatenkovnikita/parserYandexWeather.svg?branch=master)](https://travis-ci.org/ignatenkovnikita/parserYandexWeather)
[![Dependency Status](https://www.versioneye.com/user/projects/56729494107997003e0005ec/badge.svg?style=flat)](https://www.versioneye.com/user/projects/56729494107997003e0005ec)

## Installation
```sh
git clone https://github.com/ignatenkovnikita/parserYandexWeather.git
cd parserYandexWeather
composer update
OR
composer require ignatenkovnikita/ya-weather
```
After this, run **index.php** from your web browser.

## Demo
You can test program from [this page](http://dv.ignatenkovnikita.ru/parserYandexWeather/)

## API
Simple usage

```php
require_once($_SERVER['DOCUMENT_ROOT'] . '/parserYandexWeather/vendor/autoload.php');

use YaWeather\YaWeather;
$cityId = 27643; // List of Town https://pogoda.yandex.ru/static/cities.xml
$parser = new YaWeather($cityId);
$parser->load(); // load xml
$parser->show(); // get html as pogoda.yandex
$parser->logFormat(); // get error & success AS string



var_dump($parser->getResult()); // Get Object City with Cities

```

## Testing 
For unit testing just run command from root directory of the project:
```sh
vendor/bin/phpunit test\
```
