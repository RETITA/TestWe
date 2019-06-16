<?php

require 'CityBuilder.php';

/**
 *
 */
class HeavyRain extends CityBuilder
{
    function __construct(){}

    public function exec($rand = false)
    {
        $city   = $rand ? $this->randomCity() : $this->staticCity();
        $result = 0;
        $leftBorder = 0;

        /* add your code here */

        $max = $city[0];
        $results = array();
        $j = 0;

//Sens début -> fin        
        for ($i = 0; $i <= count($city); $i++) {
            $results[] = 0;
        }

        for($i = 1; $i < count($city) ; $i++){
            if($max <= $city[$i]){
                $max = $city[$i];
                $j+=1;
            }else{
                if($i != (count($city) - 1)){ 
                    $results[$j] = $results[$j] + ($max - $city[$i]);
                }else{ 
                    $results[$j] = 0;
                }
            }
        }

        $result = max($results);        

        $max = $city[(count($city)-1)];
        $j = 0;

        for ($i = 0; $i <= count($city); $i++) {
            $results[] = 0;
        }
//Sens fin -> début
        for($i = (count($city) - 2); $i >= 0 ; $i--){
            if($max <= $city[$i]){
                $max = $city[$i];
                $j+=1;
            }else{
                if($i != 0 ){
                    $results[$j] = $results[$j] + ($max - $city[$i]);
                }else{
                    $results[$j] = 0;
                }
            }
        }

        $result = max($results) > $result ? max($results) : $result;
        echo json_encode($city) . " => " . $result . "\n";
    }
}
