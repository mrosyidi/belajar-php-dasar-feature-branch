<?php
  $name = "Eko Kurniawan Khannedy";
  echo "Nama : " . $name . PHP_EOL;
  echo "Nilai : " . 100 . "\n";

  $valueString = (string)100;
  var_dump($valueString);

  $valueInt = (int)"100";
  var_dump($valueInt);

  $valueFloat = (float)"1.01";
  var_dump($valueFloat);

  $name = "Eko";
  echo $name[0] . PHP_EOL;
  echo $name[1] . PHP_EOL;
  echo $name[2] . PHP_EOL;

  echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;
  echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;

  $var = "var";
  echo "This is {$var}s" . PHP_EOL;
