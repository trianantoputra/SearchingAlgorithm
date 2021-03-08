<?php  
  include 'BinarySearch.php';
  include 'LinearSearch.php';

  // DRIVER
  $arr    = [1,2,3,1];
  $target = 1;
  // SELALU SORTING LIST SEBELUM SEARCHING
  sort($arr);

  $result = linearSearch($arr, $target);
  $result = binarySearch($arr, $target);

  echo "LIST: ".implode(" ", $arr)."<br>";
  echo "TARGET: ".$target."<br><br>";


  echo $result == -1 ? 
    "TARGET ($target) NOT FOUND.":
    "TARGET ($target) FOUND AT INDEX: ".$result;
?>