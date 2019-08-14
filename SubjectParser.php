<?php
/**
 * Created by PhpStorm.
 * User: mc26486
 * Date: 14/08/2019
 * Time: 15:00
 */

class SubjectParser
{
public function parseFromResponse($jsonRespone, $jsonParser=null){
    $response = $jsonParser->parse($jsonRespone);
    $buckets=$response->aggregations->sub->buckets;
    $toReturn=array();
    foreach ($buckets as $b ){
        $toReturn[$b->key]=$b->count_value;
    }
    return $toReturn;
}
}