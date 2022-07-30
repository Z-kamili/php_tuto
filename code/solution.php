<?php 

require('function.php');

//intialize variable
   $numbers = [80,1,4,25,12,60,78,70]; // [1,3,5];
   $results = [];

 //sort 

 $numbers = SortArray($numbers);


 //soustraction 

$results = soustraction($numbers);


 //min algorithms 

$min = minimum($results);

 echo $min;



 






   
   




