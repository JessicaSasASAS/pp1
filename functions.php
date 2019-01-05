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
    foreach($array as $element)
    {
        $total+= $element;
    }
    echo $total/sizeof($array);
}

function removeDups($array)
{
    //grab the first element
    //$first_element= $array[0];
    for($i=0; $i<sizeof($array); $i++)
    {
        for ($j=1; $j < sizeof($array); $j++)
        {
            if($array[$j] == $array[$i])
            {
                unset($array[$j]);
            }
        }
    }
    echo implode($array, ",");
}