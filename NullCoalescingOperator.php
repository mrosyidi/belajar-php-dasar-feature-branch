<?php
  $data = [];

  if(isset($data["action"])){
    $action = $data["action"];
  }else{
    $action = "Nothing";
  }

  echo $action . PHP_EOL;
