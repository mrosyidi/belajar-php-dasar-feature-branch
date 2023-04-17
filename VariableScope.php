<?php
  $name = "Eko";

  function sayName()
  {
    global $name;
    echo $name . PHP_EOL;
  }

  sayName();
