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

    /**
     * init
     */
    protected function setUp()
    {
        $cityId = 27643;
        $this->parser = new YaWeather($cityId);
    }

    /**
     * test load file from yandex pogoda
     */
    public function testLoadFile() {
        $this->parser->load();
        $this->assertFileExists($this->parser->getFileName());
    }

    /**
     * test parse file xml
     */
    public function testParseFile() {
        $this->assertEmpty(!$this->parser->getResult());
    }

    /**
     * test view error
     */
    public function testError() {
        $this->assertEmpty($this->parser->getError());
    }
    public function testSuccess()
    {
        $this->assertNotNull($this->parser->getSuccess());
    }

    public function testLogFormat() {
        $this->assertNotNull($this->parser->logFormat());
    }

    public function testEncoding(){
        $text = \YaWeather\ParseXml::encoding('простой текст');

        $this->assertTrue(mb_detect_encoding($text, 'windows-1251') != 'windows-1251');
    }




}
