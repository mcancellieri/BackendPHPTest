<?php
/**
 * Created by PhpStorm.
 * User: mc26486
 * Date: 14/08/2019
 * Time: 14:54
 */

class Downloader
{
    public function downloadFrom ($url){
        $file = file_get_contents($url);
        return $file;
    }
}