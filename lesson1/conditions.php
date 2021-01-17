<?php

// логические операторы
// и && and
// или || or
// не !
// исключающее или - xor

$a = 55;
$b = 45;
var_dump($a === '45' || $b < 50); // true
var_dump($a == '45' && $b === 50); // fasle
// xor возвращает true если один из операндов true, но не оба
var_dump($a === 55 xor $b === 45); // false

$bool = false || true; // &&
var_dump($bool); // true
$bool = false or true; // and
var_dump($bool); // false
$bool = (false or true);
var_dump($bool); // true

// тернатрный оператор
// результат = условие ? значение 1 : значение 2;
$a = 23;
$b = 100;
$c = 12;

$result = $a <= $c && $c <= $b ? 'YES' : 'NO';
var_dump($result);

$login = isset($login) ? $login : 'Гость';
var_dump($login);

// начиная с версии 7.0 можно заменить оператором объединения с null - ??
// если значение переменной login установлено, оператор вернет это значеине,
// в противном случае вернет значение по умолчанию
$login = $login ?? 'Гость';

// if else
$month = 3;
if ($month == 1 || $month == 2 || $month == 12) {
   var_dump('Зима');
  } else if ($month == 3 || $month == 4 || $month == 5) {
   var_dump('Весна');
  } else if ($month == 6 || $month == 7 || $month == 8) {
   var_dump('Лето');
  } else if ($month == 9 || $month == 10 || $month == 11) {
   var_dump('Осень');
 } else {
   var_dump('Месяц указан с ошибкой');
 }

// когда в php выступает в роли шаблонизатора принято использовать альтернативный синтаксис
/*
if(условие):
    инструкции;
elseif(условие2):
    инструкции;
else:
    инструкции;
endif;
*/
/*
$num = 'N26';
 В зависимости от номера маршрута
  вывести протяженность и вид городского транспорта.
  автобус №29 - протяженность 12
  троллейбус №34 - протяженность 6
  троллейбус №56 - протяженность 6
  трамвай №2 - протяженность 18
  трамвай №26 - протяженность 12
  троллейбус №31 - протяженность 17

*/

/*
switch(переменная или выражение):
  case case_1:
  инструкции;
  break;
  case case_2:
  case case_3:
  инструкции;
  break;
  default:
  инструкции:
endswitch;

*/

$num = '№26';
switch ($num) {
    case '№29':
      echo('автобус протяженность 12');
      break;
    case '№34':
      echo('троллейбус протяженность 6');
      break;
    case '№56':
      echo('троллейбус протяженность 6');
      break;
    case '№2':
      echo('трамвай протяженность 18');
      break;
    case '№26':
      echo('трамвай протяженность 12');
      break;
    case '№31':
      echo('троллейбус протяженность 17');
}


$auth = true;
$login = 'qwerty';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>document</title>
  </head>
  <body>
    <?php if ($auth): ?>
      <h2>Добро пожаловать, <?php echo $login ?></h2>
      <a href="#">выйти</a>
    <?php else: ?>
      <h2>Вы вошли как гость<?php echo $login ?></h2>
      <a href="#">войти в личный кабинет</a>
    <?php endif; ?>
  </body>
</html>
