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
  <header>
    <div class="logo-field">
      Stayinspired
    </div>
    <div class="icon-field">
      β
    </div>
    <div class="search-field">
      <input type="text" placeholder="> Ищете кого-то?">
    </div>
    <div class="search-button">
      <input type="button" name="search-button" id="search-button" value="Найти">
    </div>
  </header>
  <div class="main-container" style="height: 10000px;">
    <?php
    $feed_controller->render_post('', 'a.livanov', '54', 'Hello World!', 'Hi', '25.01.2023', '14.8 тыс', '14 тыс', '0', '8.3 тыс', '');
    $feed_controller->render_post('', 'a.livanov', '54', 'Hello World!', 'Hi', '25.01.2023', '14.8 тыс', '14 тыс', '0', '8.3 тыс', '');
    $feed_controller->render_post('', 'a.livanov', '54', 'Hello World!', 'Hi', '25.01.2023', '14.8 тыс', '14 тыс', '0', '8.3 тыс', '');
    ?>
  </div>
  <div class="bottom_panel">
    <div class="bottom-panel-button">
      <a href="" class="icon-button" title="Главная">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
          <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
          <path d="M10 12h4v4h-4z" />
        </svg>
      </a>
    </div>
    <div class="bottom-panel-button">
      <a href="" class="icon-button" title="TwinFeed">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layers-linked" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M19 8.268a2 2 0 0 1 1 1.732v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-8a2 2 0 0 1 2 -2h3" />
          <path d="M5 15.734a2 2 0 0 1 -1 -1.734v-8a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-3" />
        </svg>
      </a>
    </div>
    <div class="bottom-panel-button">
      <a href="" class="icon-button" title="Новости">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
          <path d="M8 8l4 0" />
          <path d="M8 12l4 0" />
          <path d="M8 16l4 0" />
        </svg>
      </a>
    </div>
    <div class="bottom-panel-button">
      <a href="" class="icon-button" title="Профиль">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
          <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
          <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
        </svg>
      </a>
    </div>
  </div>
  <script src="js/func.js"></script>
</body>

</html>