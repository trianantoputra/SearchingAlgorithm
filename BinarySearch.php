<?php  
  function binarySearch($list, $target){
    $left  = 0;
    $right = count($list)-1;

    while ($left <= $right) {

      $mid = intval(($left + $right) / 2);

      if ($target == $list[$mid]) 
        return $mid;
      else if ($target < $list[$mid])
        $right = $mid - 1;
      else 
        $left = $mid + 1;
    }
    return -1;
  }
?>