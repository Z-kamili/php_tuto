<?php 

require('function.php');

//intialize variable
   $numbers = [1, 19, -4, 33, 38, 25, 100]; // [1,3,5];
   $results = [];

 //sort 

//  $length = sizeof($numbers);

 
//  $numbers = SortArray($numbers);


 //substraction

// $results = substraction($numbers);


 //min algorithms 

// $min = minimum($results);

function findminimumInterval(array $array) : int {

     $length = size($array);

     $array = SortArray($array);

     $diff = PHP_INT_MAX;

     for($i=0;$i<$length - 1;$i++){

        if($array[$i+1] - $array[$i] < $diff) {

            $diff = $array[$i+1] - $array[$i];

        }

     }
   
    return $diff;

}

$min = findminimumInterval($numbers);

echo $min;



 






   
   




