<?php
  function sayHello($firstName, $lastName = "")
  {
    echo "Hello $firstName $lastName" . PHP_EOL;
  }

  sayHello("Eko");
  sayHello("Budi");
  sayHello("Eko", "Kurniawan");
