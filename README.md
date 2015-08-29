# YaWeather
Parser Weather from Yandex


## Installation
```sh
git clone https://github.com/ignatenkovnikita/parserYandexWeather.git
cd parserYandexWeather
composer update
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



var_dump($parser->getResult()); // Get Object City with Cities

```

## Testing 
For unit testing just run command from root directory of the project:
```sh
vendor/bin/phpunit test\
```