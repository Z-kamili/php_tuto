<?php 

$array = Array(80,1,4,25,12,60,78,70);

$result = Array();

function findsmallestInterval(array $numbers) 
{

     //Number of items in the array 
      $length = count($numbers);

      global $result;

      //sort array in ascending order
      sort($numbers);

      //Initialize difference with the max integer allowed by PHP in the constant 
      //Usually int(2147483647) 
       $diff = PHP_INT_MAX;
       

       //find the smallest interval comparing the adjacent pairs in the sorted array

       $j = 0;
        
       for($i = 0; $i< $length - 1 ; $i++) {

           if($numbers[$i + 1] - $numbers[$i] < $diff) {

                $diff = $numbers[$i + 1] - $numbers[$i];

                $result[$j] = $numbers[$i];

                $result[$j+1] = $numbers[$i+1];

           }

       }

       return $diff;
}



 echo "minimum interval is " . findsmallestInterval($array) . ' between ' . $result[0] . ' And ' . $result[1];



 

?>
