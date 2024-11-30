<?php
require_once('system/controllers/feed_controller.php');

$feed_controller = new Feed_controller();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stayinspired</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+HR+Lijeva:wght@100..400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/feed.css">
</head>

<body>
  <?php require_once("system/modules/header.php"); ?>
  <div class="main-container">
    <?php
    $feed_controller->render_post('', 'a.livanov', 'Разработчик', '54', 'Hello World!', 'Hi', '25.01.2023', '14.8 тыс', '14 тыс', '0', '8.3 тыс', '');
    $feed_controller->render_post('', 'a.livanov', 'Участник', '54', 'Hello World!', 'Hi', '25.01.2023', '14.8 тыс', '14 тыс', '0', '8.3 тыс', '');
    $feed_controller->render_post('', 'a.livanov', 'Участник', '54', 'Hello World!', 'Hi', '25.01.2023', '14.8 тыс', '14 тыс', '0', '8.3 тыс', '');
    ?>
  </div>
  <?php require_once("system/modules/bottom_panel.php"); ?>
  <script src="js/func.js"></script>
</body>

</html>