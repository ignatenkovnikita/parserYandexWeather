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

    public $patternFileName = "(yastatic.+\/)([^/]+.\.svg)";
    public $patternFileName1 = "/[^/]+.\.svg/";

    public function parse() {
        foreach ($this->listCss as $value) {
            //echo $this->getFilePath($value);
            $contents = file_get_contents($this->getFilePath($value));

            if(preg_match_all($this->pattern, $contents, $matches)){
                //echo "Found matches:\n";
                //echo implode("\n", $matches[0]);
                foreach ($matches[0] as $val) {

                    //preg_match($this->patternFileName1, $val, $matc);
                    //var_dump($matc);
                    //echo $val;
                    $fileName = basename($val);
                    $path = str_replace($fileName, "", $val);
                    $path = str_replace("yastatic.net/", "", $path);
                    $path = "img/".$path;
                    //echo $path . " - " . $fileName."<br>";

                    if (!file_exists($path))
                        mkdir($path, 0777, true);

                    $image = file_get_contents("https://".$val);
                    file_put_contents($path.$fileName, $image);
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
