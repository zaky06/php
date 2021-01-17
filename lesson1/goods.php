<?php

$goods = [
    [
        'id' => 1,
        'title' => 'Flute',
        'price' => 20000,
        'img' => 'fleita.jpg',
        'description' => [
            'color' => 'white',
            'material' => 'bamboo'
        ]
    ],
    [
        'id' => 2,
        'title' => 'Гитара',
        'price' => 18000,
        'img' => 'gitara.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'linden'
        ]
    ],
    [
        'id' => 3,
        'title' => 'Барабан',
        'price' => 68000,
        'img' => 'barabani.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'steel'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Инструменты</title>
    <link rel="stylesheet" href="goods.css">
  </head>
  <body>
    <section>
      <?php foreach ($goods as $good): ?>
    <article class="">
      <h2>Название <?php echo $good['title']?></h2>
      <p>Стоимость <?php echo $good['price']?></p>
      <img src="img/<?php echo $good['img']?>" alt="" height="300" width="500"><br>
      <table>
        <?php foreach($good['description'] as $color => $value): ?>
          <tr><?php echo $color?> : <?php echo $value?></tr> <br>
            <?php endforeach; ?>
      </table>
    </article>
    <?php endforeach; ?>
    </section>
  </body>
</html>
