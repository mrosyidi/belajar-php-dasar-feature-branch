<?php
  function sum(int $first, int $second)
  {
    return $first + $second;
  }

  $total = sum(10, 10);
  var_dump($total);

  $total = sum(100, 100);
  var_dump($total);
