<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov_nv
 * Date: 27.08.2015
 * Time: 15:55
 */



class ParseCss {

    public $dir = "css/";
    public $listCss = ['_index.css'];
    public $pattern = "/yastatic.net.*.svg/";

    public function parse() {
        foreach ($this->listCss as $value) {
            //echo $this->getFilePath($value);
            $contents = file_get_contents($this->getFilePath($value));

            if(preg_match_all($this->pattern, $contents, $matches)){
                echo "Found matches:\n";
                echo implode("\n", $matches[0]);
                foreach ($matches[0] as $val) {
                    $image = file_get_contents('$val');
                    file_put_contents($val, $image);

                }

                //var_dump($matches);
            }

        }

        return null;

    }

    private function getFilePath($filename) {
        return $this->dir.$filename;
    }


}


$parse = new ParseCss();
$parse->parse();
