<?php
  $sayHello = function(string $name){
    echo "Hello $name" . PHP_EOL;
  };

  $sayHello("Eko");
  $sayHello("Budi");

  function sayGoodBye(string $name, $filter)
  {
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
  }

  sayGoodBye("Eko", function(string $name){
    return strtoupper($name);
  });

  $filterFunction = function(string $name) : string {
    return strtoupper($name);
  };

  sayGoodBye("Eko", $filterFunction);
