<?php 
class Binare {
  public $needle = 3;
  public $array = [1, 3, 5, 7, 9];


  function binarySearch($needle, $array) {
    $low = 0; 
    $high = count($array) - 1; 
    while ($low <= $high) { 
      $middle = floor(($low + $high) / 2); 
      if ($array[$middle] == $needle) {
        return $middle; 
      }
      if ($array[$middle] > $needle) {
        $high = $middle - 1;
      } else {
        $low = $middle + 1;
      }
    }
    return 'Result search - null!'; 
  }

}


?>