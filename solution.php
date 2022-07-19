<?php 

 $numbers = [1, 5, 3, 19, 18, 25];
 
 $results = [];

 $min ;

 $length = count($numbers);

 sort($numbers);

 print_r($numbers);

 $j = 0;

 for($i=0;$i<$length;$i++) {

     $results[$j] = $numbers[$i+1] - $numbers[$i];

     $j++;

 }

 print_r($results);





 

?>