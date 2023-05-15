<?php
class UtilService
{
       public static function decodeArrayToUtf8($array)
{

        $arr =[];
        foreach($array as $k => $v) {
    $arr [$K] =UTF8_DECODE($v);

        }
        return   $arr;   
}
}