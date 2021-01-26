<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php include_once 'header.php'?>
    <form class="" action="form.php" method="post">
      <div class="">
        <p><?php echo $files['picture']['name']?></p>
        <p><img src="<?php echo $file['picture']?>"></p>
      </div>
    </form>

  </body>
</html>
