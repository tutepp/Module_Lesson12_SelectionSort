<?php
function optionSort($array){

    for ( $i=0; $i< count($array);$i++) {

        $min = $i;
        for( $j=$i +1 ;$j < count($array); $j++ ){

            if ($array[$j]< $array[$min]){

                $min = $j;
            }
        }
        if ($min != $i)
        {
            $tmp = $array[$i];
            $array[$i] = $array[$min];
            $array[$min] = $tmp;
        }
    }
    return $array;
}
$arr = [1, 9, 4.5, 6.6, 5.7, -4.5];
var_dump( optionSort($arr));