<?php
// rand(min, max);
// while(true) + break:
// выводить случайные числа в диапазоне от 20 до 100
// до тех пор, пока не встретится числа больше 90
// for:  повторить 3 раза

for ($i = 0; $i < 3; $i++) {
  while (true) {
    $num = rand(20, 100);
    if ($num > 90) {
      var_dump($num);
      break;
    }
  }
}

/*
  * альтернативный синтаксис:
while(условие):
    тело цикла
endwhile;

for(инициализация; условия; обновление счетчиков):
  тело цикла;
endfor;

у цикла do while альтернативного синтаксиса нет 
*/