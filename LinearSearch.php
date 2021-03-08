<?php  
  function linearSearch($list, $target){
    for ($i = 0; $i < count($list); $i++) {
      if($list[$i] == $target){
        return $i;
      }
    }
    return -1;
  }
?>