<?php
$task = [
  'id' => 3,
  'title' => 'Лондон',
  'big price' => 2345,
  'img' => 'london.jpg'
];

extract($task);
var_dump($id, $title, $bigprice);
