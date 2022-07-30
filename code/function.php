<?php 


function size($array) {

    $length = sizeof($array);

    return $length;

}

function SortArray($array){

   $length = size($array);

     //rules 
     for($i = 0;$i<$length - 1 ;$i++) 
     {
    
         $min = $array[$i];
    
         for($j=$i;$j<$length - 1;$j++){
    
              if($min > $array[$j + 1]) {
    
                  $per = $min;
                  $min = $array[$j + 1];
                  $array[$j + 1] = $per;
    
    
              }
    
         }
    
         $array[$i] = $min;
    
    
     }


    //output 

    return $array;


}

function substraction($arr) {

    $length = size($arr);

    $j = 0;

    $results = [];

    for($i=0;$i<$length - 1; $i++)
    {
   
        $results[$j] = $arr[$i+1] - $arr[$i];
        $j++;
   
    }

    return $results;



}

function minimum($array) {

    $min = $array[0];

    for($i=1;$i<sizeof($array);$i++)
    {
   
       if($min > $array[$i]){
   
           $min = $array[$i];
   
       }
   
    }

    return $min;

}


?>