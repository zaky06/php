<?php
// массивы: нумерованный / ассоциативные
// $arr = array(); // array это функция, аргументов не передали получили пустой массив
$arr = []; // так проще
var_dump($arr);

// нумерованные массивы
// индексы    0   1   2    3    4
// элементы [45, 89, 12, -900, 100]

$arr = array(45, 89, 12, -900, 100);
$arr = [45, 89, 12, -900, 100];
var_dump($arr);


echo $arr; // Array

// обращение к элементам массива через [] по индексу
var_dump($arr[3]); // -900
$arr[2] = 1000;
var_dump($arr[2]);
$arr[50] = 10;
var_dump($arr);

unset($arr[2]);
var_dump($arr);

// возвращаем количество элементов в массиве
$arr_len = count($arr);
var_dump($arr_count);

// функция count возвращает количество элементов в массиве
$arr_count = count($arr);
var_dump($arr_count);

/*
$arr = [
  key => value,
  key2 => value,
];
в качестве ключей могут быть использованы строки
*/

$arr = [
  'id' => 1,
  'login' => 'qwerty',
  'pwd' => 'qwerty333'
];
// получили элемент массива user по ключу
var_dump($user['login']); // qwerty
var_dump($user['pwd']); // qwerty333

// в массив user добавили пару ключ - значение:
// ключ - name, значение - Михаил
$user['name'] = 'Михаил';
// изменили значение элемента массива
$user['login'] = 'wind';

var_dump($user);

$arr = [
  true => 'true', // 1 => true
  null => null, // '' => null
  100 => 100,
  'str' => 'Строка',
  '' => 'empty string',
  1.1 => 1.1, // 1 => 1.1
  '10' => 10
];
var_dump($arr);
// тип bloolean -> преобразуется к типу integer
// null преобразуется к пустой строке ''
// числа с плавающей точкой преобразуются к integer (дробная часть отбрасывается)
// строка с числом преобразуется к integer
// массивы и обЪекты нельзя использовать в качестве ключей


// перебор массивов
$nums = [-90, 100, 34, 144, 99, 12];

// foreach(массив as значение) {}
// на каждой итерации в value будет копироваться значение элемента массива
foreach ($nums as $value) {
    var_dump($value);
}

$pos_nums = [];

// добавление элементов в конец массива:
// array_push(массив, элемент);
// массив[] = элемент;

foreach ($nums as $value) { // форич не позволяет изменять элементы массива $nums
  if ($value > 0) {
    //array_push($pos_nums, $value); можно и так
    $pos_nums[] = $value;
  }
}
// увеличить значение элементов массива в 2 раза
// использовать цикл for
$nums_count = count($nums);
for ($i = 0; $i < $nums_count; $i++) {
  $nums[$i] *= 2;
}

// for ($i = 0; $i < count($nums); $i++) { так тоже  можно, но медленее
//  $nums[$i] *= 2;
// }

// начиная с версии php 7.0 можно изменять значения
// элементов массива и через foreach, если они передаются в цикл по ссылке
// a -> 100 | b -> 89
$a = 89;
$b = $a;
$a = 100;

// x -> 100 <- y
$x = 89;
$y = &$x;

$x = 100;

foreach ($nums as &$value) {
  $value *= 2;
}

$pos_nums = [];
$nums = [
  [12, 45, 1],
  [0, -8, 90 ,122],
  [200, -1985, 34, 12],
];

foreach ($nums as $value) {
  foreach ($value as $elem) {
    if ($elem > 0) {
      $pos_nums[] = $elem;
    }
  }
}
var_dump($pos_nums);

$task = [
  'id' => 3,
  'title' => 'Лондон',
  'price' => 2345,
  'img' => 'london.jpg'
];

// foreach (массив as ключ => значение) {}
foreach ($task as $key => $value) {
  var_dump($key . ': ' . $value);
}

/*
foreach (массив as значение):
  инструкции;
endforeach;

foreach (массив as ключ => значение):
  инструкции;
endforeach;
*/
