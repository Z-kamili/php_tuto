<?php 

//intialize variable
 $numbers = [1, 5, 3, 19, 18, 25];


   //loop operator  [for,{while},{do,while}]
  
   $length = sizeof($numbers);

//    for(
//     $i = 0;
//     $i<$length;
//     $i++
//    ){

//      echo $numbers[$i] . ' ';

//    }

$j = $length;

// while($j<$length) {

//     echo $numbers[$j] . ' ';

//     $j = $j+1;

// }

do {

    echo $numbers[$j - 1] . ' ';

    $j = $j+1;

}while($j<$length);



