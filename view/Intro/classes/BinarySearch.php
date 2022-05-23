<?php 

class BinarySearch {
public $needle;
public $array;

public function __construct($needle = null, $array = null)
{
  if(isset($needle)){
    $this->needle = $needle;
  }

  if(isset($array)){
    $this->array = $array;
  }
  
}

public function binarySearch($needle, $array) {
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
  return null;
}

}


?>