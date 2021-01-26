<?php
$server = $_SERVER;
if ($server['REQUEST_METHOD'] === 'POST') {
    $files = $_FILES;
    var_dump($files['picture']);
    $file_name = $files['picture']['name'];
    $tmp_name = $files['picture']['tmp_name'];
    if (move_upload_file($tmp_name, 'photo/$file_name')){
      echo 'Файл успешно загружен';
    } else {
      echo 'ошибка';
    };
    if (file_put_contents('src.txt', $file_name . PHP_EOL, FILE_APPEND | LOCK_EX) !== false) {
      echo 'данные записаны в файл'
    };

$data_arr = file('src.txt', FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>фото</title>
</head>
<body>
    <?php include_once 'header.php'?>
    <section>
        <?php foreach ($data_arr as $img): ?>
            <img src="photo/<?php echo $img?>" alt="">
        <?php endforeach; ?>
    </section>
</body>
</html>
