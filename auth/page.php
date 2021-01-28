<?php
session_start();
$login = $_SESSION['login'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Страница</title>
  </head>
  <body>
    <nav>
      <?php if (isset($login)): ?>
      <a href="logout.php">Выйти</a>
    <?php else: ?>
      <a href="form.php">Войти</a>
    <?php endif; ?>
    </nav>
    <h2>Контент доступен всем пользователям</h2>
    <!-- form: textarea input(submit) -->
    <div id="section"></div>
    <?php if (isset($login)): ?>
      <form class="" action=""  method="post">
        <textarea name="textarea" rows="8" cols="80"></textarea>
        <input type="submit" id="submit" name="" value="добавить">
      </form>
      <div class="" id="result_form">

      </div>
      <script src="ajax.js"></script>
      <?php endif; ?>
  </body>
</html>
