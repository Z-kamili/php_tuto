<?php 

$prices = [124,34,89,38];

  function calculateTotalPrice(array $prices,$discount = 5) 
  {

     $max = max($prices);

     $final_price = $max - ($max * $discount / 100);

     $final = array_sum($prices);

     $result = $final + $final_price;

     return $result;

  }


  echo calculateTotalPrice($prices,10);


?>