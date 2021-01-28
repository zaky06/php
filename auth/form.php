<?php
session_start();
$server = $_SERVER;

if (isset($_SESSION['login'])) {
  header('Location: account.php');
} 

if($server['REQUEST_METHOD'] === 'POST'){
  $post = $_POST; // login === qwerty | password === 123
  if (trim($post['login']) === 'qwerty' && trim($post['password']) === '123'){
    $_SESSION['login'] = $post['login'];
    header('Location: account.php');
  } else {
    $error = 'ошибка авторизации';
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Форма авторизации</title>
  </head>
  <body>
    <?php if (isset($error)): ?>
      <p><?php echo $error ?></p>
    <?php endif; ?>
    <form class="" action="form.php" method="post">
      <div class="">
        <label for="">
          Введите логин <input type="text" name="login">
        </label>
      </div>
      <div class="">
        <label for="">
          Введите пароль <input type="password" name="password">
        </label>
      </div>
      <input type="submit" value="войти">
    </form>
  </body>
</html>
