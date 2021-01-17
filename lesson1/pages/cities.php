<?php

$cities = [
    [
        'id' => 1,
        'title' => 'Париж',
        'price' => 1234,
        'img' => 'parish.jpg'
    ],
    [
        'id' => 2,
        'title' => 'Нью-Йорк',
        'price' => 4526,
        'img' => 'newyork.jpg'
    ],
    [
        'id' => 3,
        'title' => 'Лондон',
        'price' => 2345,
        'img' => 'london.jpg',
    ],
];
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- article -->
    <!-- h2 название -->
    <!-- p Стоимость: -->
    <!-- img изображение: -->
    <!-- article -->
    <section>
      <?php foreach ($cities as $city): ?>
        <article class="">
          <h2>Название: <?php echo $city['title']?></h2>
          <p>Стоимость: <?php echo $city['price']?></p>
          <img src="../img/<?php echo $city['img']?>" alt="" height="200" width="800">
          <a href="city.php?id=<?php echo $city['id']?>">Подробнее</a>
        </article>
    <?php endforeach; ?>
    </section>
  </body>
</html>
