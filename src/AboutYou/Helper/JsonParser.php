<?php
namespace AboutYou\Helper;
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 26/09/2017
 * Time: 11:05 ص
 */
class JsonParser
{
    public static function getData() {

        $json = file_get_contents('././data/17325.json');

        //Decode JSON
        $json_data = json_decode($json,true);

        return $json_data;
    }
}