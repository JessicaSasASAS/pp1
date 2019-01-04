<?php
/**
 * Created by PhpStorm.
 * User: jsas2
 * Date: 1/4/2019
 * Time: 10:39 AM
 */
function printArray($array)
{
    echo implode($array, ",");
}

function largest($array)
{
    echo max($array);
}

function average($array)
{
    $total= 0;
    $counter=0;foreach($array as $element)
    {
        $total+= $element;
    }
    echo $total/sizeof($array);
}