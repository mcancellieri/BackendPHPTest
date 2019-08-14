<?php
/**
 * Created by PhpStorm.
 * User: mc26486
 * Date: 14/08/2019
 * Time: 14:58
 */

class JsonParser
{
    public function parse($jsonString){
        return json_decode($jsonString);
    }
}