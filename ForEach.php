<?php
  $names = ["Eko", "Kuniawan", "Khannedy"];

  for($i = 0; $i < count($names); $i++){
    echo "Data ke $i = $names[$i]" . PHP_EOL;
  }

  foreach($names as $name){
    echo "Data $name" . PHP_EOL;
  }
