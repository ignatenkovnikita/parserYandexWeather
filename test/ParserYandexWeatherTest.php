<?php
use YaWeather\YaWeather;

/**
 * Created by PhpStorm.
 * User: ignatenkov_nv
 * Date: 25.08.2015
 * Time: 8:51
 */
class ParserYandexWeatherTest extends PHPUnit_Framework_TestCase
{
    protected $parser;

    protected function setUp()
    {
        $cityId = 27643;
        $this->parser = new YaWeather($cityId);
    }

    public function testLoadFile() {
        $this->parser->load();
        $this->assertFileExists($this->parser->getFileName());
    }

    public function testParseFile() {
        var_dump($this->parser->getResult());
        $this->assertEmpty(!$this->parser->getResult());
    }


}
