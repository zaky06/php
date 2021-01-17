<?php
// однострочный комментарий
# однострочный комментарий
/*
многострочный
комментарий
*/
// все инструкции разделяются ;
// вывод информации на экран echo
echo 'Выводимая инвормация';
// отладка
var_dump('Отладка');

// имена переменных начинаются с $
// далее следует буква или _, затем любой набор букв, цифр и _
// имена переменных чувствительны к регистру:
// $login и $LOGIN - разные переменные

$login = 'qwerty';
var_dump($login);
$login = 'reanno';

// empty - true, если переменная пуста
// переменная не существует, значение переменной равно false и то, что может быть приведено к false
// (null, 0, '', '0')
// isset - true, если переменной было установленно значение
// и это значение не null
$pwd = null;
var_dump(empty($pwd));
var_dump(isset($pwd));

unset($login);

// типы данных
/*
1. Скалярные типы данных
 string (строки в двойных и одинарных кавычках)
 integer (целые числа)
 float/double/real (числа с плавующей точкой)
 boolean (true/false)
2. Смешанные типы данных
 array (массивы)
 object (объекты)
 callable
 iterable
3. Специальные типы данных
  null
  resources (дескриптор ресурсов)
*/
$login = 'qwerty';
// sttring (строки в двойных и одинарных кавычках)
$first_string = 'Отображает все символы, как есть $login \n';
$second_string = "Интерпретатор обрабатывает специальные символы \n и распознает переменные $login";
var_dump($first_string);
var_dump($second_string);

// привести к типу string
$login = (string) $login;

// проверка на тип string
var_dump(is_string($login));

// gettype() возвращает тип данных
var_dump(gettype($login));

// integer (целые числа)

// приведение к типу integer (int) / (integer)
$login = (int) $login;
var_dump($login);

// проверка на integer
var_dump(is_integer($login));

// double / float / real числа с плавающей точкой
$double_var = 45.89;

// приведение к числу с плавающей точкой (float) / (double) / (real)
$login = (float) $login;

// проверка на тип с плавающей точкой
var_dump(is_float($login));
var_dump(is_double($login));

// логический тип Boolean
$active = false;
$connected = true;

// приведение к boolean (bool) / (boolean)
$login = (bool) $login;
// к false преобразуется:
// 0 / -0 / 0.0 / '' / '0' / null / пустой массив
// все остальное будет преобразованно к true

// проверка на boolean
var_dump(is_bool($login));

// константы
// константам необходимо присвоить значение в момент объявления
// значение константы нельзя изменить

// объявили константу STATUS_OK со значеним 'Ok'
define('STATUS_OK', 'Ok');
// 1. имя переменной (константы)
// 2. значение переменной
// до версии php 7.0 значениями могут быть только скалярные типы
// начиная с php 7.0 значениями могут быть скалярные типы и массивы

// объявили константу STATUS_ERROR со значеним 'Error'
const STATUS_ERROR = 'Error';
// до версии php 5.6 значениями могут быть только скалярные типы
// начиная с php 5.6 значениями могут быть скалярные типы и массивы

var_dump(STATUS_OK);
var_dump(STATUS_ERROR);
var_dump(UNKNOWN);
var_dump(some_text);
