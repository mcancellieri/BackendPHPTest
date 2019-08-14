<?php
/**
 * Created by PhpStorm.
 * User: mc26486
 * Date: 14/08/2019
 * Time: 14:57
 */
include "Downloader.php";
include "JsonParser.php";
include "SubjectParser.php";
$downloader = new Downloader();
$response=$downloader->downloadFrom("https://gist.github.com/mcancellieri/4b34782468d779ac937deb5d0ee7fcad/raw/4b0803fd36641913b996abf85bc71ea816280623/Subject%2520types%2520of%2520CORE");
$parser=new SubjectParser();
$subjects=$parser->parseFromResponse($response);

//TODO print the first 10 lines

print_r($subjects);
