<?php
    session_start();
    $k = 0;
    ini_set('display_errors','On');
    error_reporting('E_ALL');
    $fio = $_POST['fio'];
    $fio = htmlspecialchars($fio);
    $fio = urldecode($fio);
    $fio = trim($fio);
    $fio_female = $_POST['fio_female'];
    $fio_female = htmlspecialchars($fio_female);
    $fio_female = urldecode($fio_female);
    $fio_female = trim($fio_female);
    $born = $_POST['born'];
    $born = htmlspecialchars($born);
    $born = urldecode($born);
    $born = trim($born);
    $born_female = $_POST['born_female'];
    $born_female = htmlspecialchars($born_female);
    $born_female = urldecode($born_female);
    $born_female = trim($born_female);
    $club = $_POST['club'];
    $club = htmlspecialchars($club);
    $club = urldecode($club);
    $club = trim($club);
    if (($fio == "") or ($fio_female == "") or ($born == "") or ($born_female == "") or ($club == "")) {
      $k = 1;
    }
  ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
      m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(71927647, "init", {
           clickmap:true,
           trackLinks:true,
           accurateTrackBounce:true,
           webvisor:true
      });
  </script>
  <noscript><div><img src="../../https://mc.yandex.ru/watch/71927647" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
  
  <title>Онлайн-регистрация ФТСЛО</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/media.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon"> 
    <!-- Подключение шрифта Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Forum&display=swap" rel="stylesheet">
    <!-- Подключение JQuery-->
    <script src="../../https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- JS для слайдера -->
    <script src="../../assets/js/modernizr.custom.53451.js"></script>
    
</head>
<body>
  <header class="header">
    <div class="title">
      <div class="herb">
      <img src="../../assets/img/gerbs/FTSLO.png" class="herb" alt="Логотип ФТСЛО">
      <a href="https://lenobl.ru/"><img src="../../assets/img/gerbs/LO.png" class="herb"alt="Герб ЛО"></a>
    </div>
      <div class="title-text"><div class="title-top">
        Федерация Танцевального Спорта 
      </div>
      <div class="title-bottom">
        Ленинградской области
      </div>
    </div></div>
    <div class="member">
      <a href="https://www.worlddancesport.org/"><div class="wdsf">
        <div class="text-member">Член Всемирной Федерации<br>Танцевального Спорта<br>WDSF</div>
        <img src="../../assets/img/gerbs/WDSF.png" alt="Логотип WDSF">
      </div></a>
      <a href="https://fdsarr.ru/"><div class="ftsarr">
        <img src="../../assets/img/gerbs/FTSARR.png" class="ftsarr-img" alt="Логотип ФТСАРР">
        <div class="text-member">Член Всероссийской федерации<br>танцевального спорта и<br>акробатического рок-н-ролла</div>
      </div></a>
    </div>
    <div class="herbs mobile">
    <input type="checkbox" id="nav-mobile-check" class="custom-checkbox">
    <label for="nav-mobile-check"></label>
    </div></header>

  <nav class="nav-pc">
    <a href="../../index.html"><button class="btn nav-link">главная</button></a>
    <a href="../../calendar.html"><button class="btn nav-link">календарь</button></a>
    <a href="../../federation.html"><button class="btn nav-link">о федерации</button></a>
    <a href="../../documents.html"><button class="btn nav-link">документы</button></a>
    <a href="../../database.html"><button class="btn nav-link">база данных</button></a></nav>

  <!-- Фон для телефонов -->
  <div class="bg-mobile"></div>

  <div class="nav-mobile mobile" id="nav-mobile">
    <a href="../../index.html"><button class="btn nav-link-mobile">главная</button></a>
    <a href="../../calendar.html"><button class="btn nav-link-mobile">календарь</button></a>
    <a href="../../federation.html"><button class="btn nav-link-mobile">о федерации</button></a>
    <a href="../../documents.html"><button class="btn nav-link-mobile">документы</button></a>
    <a href="../../database.html"><button class="btn nav-link-mobile">база данных</button></a></div>
  
  <div class="content">
    <div class="title-content">ОНЛАЙН-РЕГИСТРАЦИЯ</div>
      <div style="display: flex; justify-content: space-around; align-items: center; width: 100%; flex-wrap: wrap;">
        <?php
        if ($k == 1) {
          echo "<h2>Ошибка: Введите все данные!</h2>";
        } else {
          $date = substr($born, 8, 2).".".substr($born, 5, 2).".".substr($born, 0, 4);
          echo ("<h2> <center>Партнер</center><br>
          ФИО:<span style=\"font-weight: 100\"> "."$fio"."</span><br> 
          Дата рождения:<span style=\"font-weight: 100\"> ".$date."</span><br>
          Танцевальный клуб:<span style=\"font-weight: 100\"> ".$club."</span></h2>");
          $date_female = substr($born_female, 8, 2).".".substr($born_female, 5, 2).".".substr($born_female, 0, 4);
          echo ("<h2> <center>Партнерша</center><br>
          ФИО:<span style=\"font-weight: 100\"> ".$fio_female."</span><br> 
          Дата рождения:<span style=\"font-weight: 100\"> ".$date_female."</span><br>
          Танцевальный клуб:<span style=\"font-weight: 100\"> ".$club."</span></h2>");
        };
      if ($k == 0) {
        echo("<div style=\"width:100%; height: 10px;\"></div><a href=\"continue.php\"><button class=\"btn-reg\">Продолжить регистрацию</button></a>");
        $_SESSION['male'] = ['', $fio, $date, 'H', 'H', $club];
        $_SESSION['female'] = ['', $fio_female, $date_female, 'H', 'H', $club];
      };
      if ($k == 1) {
        echo("<div style=\"width:100%; height: 10px;\"></div><a href=\"../../reg.html\"><button class=\"btn-reg\">Назад</button></a>");
      };
     ?>
    </div>
  </div> 

  
  <!-- JS для мобильного меню -->
    <script src="../../assets/js/mobile-nav.js"></script>
  
</body>
</html>
