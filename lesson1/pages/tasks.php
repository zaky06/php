<?php
$tasks = [
    [
        'title' => 'Задача 1',
        'date' => 'yesterday',
        'participants' => ['Артур', 'Полина'],
        'closed' => false
    ],
    [
        'title' => 'Задача 2',
        'date' => 'tomorrow',
        'participants' => [],
        'closed' => false
    ],
    [
        'title' => 'Задача 3',
        'date' => 'today',
        'participants' => ['Артур', 'Глеб'],
        'closed' => false
    ],
    [
        'title' => 'Задача 4',
        'date' => 'yesterday',
        'participants' => ['Павел', 'Полина'],
        'closed' => true
    ]
];
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Задачи</title>
  </head>
  <body>
    <section>
      <?php foreach ($tasks as $task): ?>
      <article class="">
        <h3>Название задачи <?php echo $task['title']?></h3>
        <p>срок выполнения задачи <?php echo $task['date']?></p>
        <p>статус: <?php echo $task['closed'] ? "выполнена" : "не выполнена";?></p>
        <div class="">
          <h4>Участники:</h4>
          <ul>
            <?php foreach ($task['participants'] as $participant):?>
              <li><?php echo $participant;?></li>
              <?php endforeach; ?>
          </ul>
        </div>
      </article>
      <?php endforeach; ?>
    </section>
  </body>
</html>
