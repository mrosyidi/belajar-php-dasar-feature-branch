<?php
  function sayHello($firstName, $lastName = "")
  {
    echo "Hello $firstName $lastName" . PHP_EOL;
  }

  sayHello("Eko");
  sayHello("Budi");
  sayHello("Eko", "Kurniawan");

  function sum(int $first, int $last)
  {
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
  }

  sum(100, 100);
  sum("100", "100");
  sum(true, false);
