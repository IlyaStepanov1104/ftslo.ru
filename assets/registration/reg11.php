<?php
    session_start();
    $k = 0;
    ini_set('display_errors','On');
    error_reporting('E_ALL');
    $id = $_POST['id'];
    $id = htmlspecialchars($id);
    $id = urldecode($id);
    $id = trim($id);
    if ($id!="") {
      //Устанавливаем доступы к базе данных:
    $host = 'server2.hosting.reg.ru'; //имя хоста, на локальном компьютере это localhost
    $user = 'u1279356_ilya'; //имя пользователя, по умолчанию это root
    $password = '1Z1p6J2u'; //пароль, по умолчанию пустой
    $db_name = 'u1279356_dancers'; //имя базы данных

  //Соединяемся с базой данных используя наши доступы:
    $link = mysqli_connect($host, $user, $password, $db_name);

  //Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
    mysqli_query($link, "SET NAMES 'utf8'");
  //Формируем тестовый запрос:
    $query = "SELECT * FROM Dancers WHERE ID =".$id."";
  //Делаем запрос к БД, результат запроса пишем в $result:
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

  //Преобразуем то, что отдала нам база в нормальный массив PHP $data:
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    }
  ?>
<?php
    ini_set('display_errors','On');
    error_reporting('E_ALL');
    $id_female = $_POST['id_female'];
    $id_female = htmlspecialchars($id_female);
    $id_female = urldecode($id_female);
    $id_female = trim($id_female);
    if ($id_female!="") {
    //Устанавливаем доступы к базе данных:
      $host = 'server2.hosting.reg.ru'; //имя хоста, на локальном компьютере это localhost
      $user = 'u1279356_ilya'; //имя пользователя, по умолчанию это root
      $password = '1Z1p6J2u'; //пароль, по умолчанию пустой
      $db_name = 'u1279356_dancers'; //имя базы данных

    //Соединяемся с базой данных используя наши доступы:
      $link = mysqli_connect($host, $user, $password, $db_name);

    //Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
      mysqli_query($link, "SET NAMES 'utf8'");
    //Формируем тестовый запрос:
      $query1 = "SELECT * FROM Dancers WHERE ID =".$id_female."";
    //Делаем запрос к БД, результат запроса пишем в $result:
      $result1 = mysqli_query($link, $query1) or die(mysqli_error($link));

    //Преобразуем то, что отдала нам база в нормальный массив PHP $data:
      for ($data1 = []; $row = mysqli_fetch_assoc($result1); $data1[] = $row);
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
    <a href="../../index.php"><button class="btn nav-link">главная</button></a>
    <a href="../../calendar.html"><button class="btn nav-link">календарь</button></a>
    <a href="../../federation.html"><button class="btn nav-link">о федерации</button></a>
    <a href="../../documents.html"><button class="btn nav-link">документы</button></a>
    <a href="../../database.html"><button class="btn nav-link">база данных</button></a></nav>

  <!-- Фон для телефонов -->
  <div class="bg-mobile"></div>

  <div class="nav-mobile mobile" id="nav-mobile">
    <a href="../../index.php"><button class="btn nav-link-mobile">главная</button></a>
    <a href="../../calendar.html"><button class="btn nav-link-mobile">календарь</button></a>
    <a href="../../federation.html"><button class="btn nav-link-mobile">о федерации</button></a>
    <a href="../../documents.html"><button class="btn nav-link-mobile">документы</button></a>
    <a href="../../database.html"><button class="btn nav-link-mobile">база данных</button></a></div>
  
  <div class="content">
    <div class="title-content">ОНЛАЙН-РЕГИСТРАЦИЯ</div>
      <div style="display: flex; justify-content: space-around; align-items: center; width: 100%; flex-wrap: wrap;">
        <?php
        if ($data[0]["ID"] == "") {
          echo("<h2>Партнер не найден в базе данных!</h2>");
          ++$k;
        } else {
          $date = substr($data[0]["Date"], 8, 2).".".substr($data[0]["Date"], 5, 2).".".substr($data[0]["Date"], 0, 4);
          echo ("<h2> <center>Партнер</center><br>
          Номер стартовой книжки:<span style=\"font-weight: 100\"> ".$data[0]["ID"]."</span><br>
          ФИО:<span style=\"font-weight: 100\"> ".$data[0]["Name"]." ".$data[0]["Middle_Name"]."</span><br> 
          Дата рождения:<span style=\"font-weight: 100\"> ".$date."</span><br> 
          Класс ST:<span style=\"font-weight: 100\"> ".$data[0]["ST"]."</span><br> 
          Класс LA:<span style=\"font-weight: 100\"> ".$data[0]["LA"]."</span><br> 
          Спортивный разряд:<span style=\"font-weight: 100\"> ".$data[0]["Category"]."</span><br> 
          Танцевальный клуб:<span style=\"font-weight: 100\"> ".$data[0]["Club"]."</span></h2>");
        };
        if ($data1[0]["ID"] == "") {
          echo("<h2>Партнерша не найдена в базе данных!</h2>");
          ++$k;
        } else {
          $date1 = substr($data1[0]["Date"], 8, 2).".".substr($data1[0]["Date"], 5, 2).".".substr($data1[0]["Date"], 0, 4);
          echo ("<h2> <center>Партнерша</center><br>
          Номер стартовой книжки:<span style=\"font-weight: 100\"> ".$data1[0]["ID"]."</span><br>
          ФИО:<span style=\"font-weight: 100\"> ".$data1[0]["Name"]." ".$data1[0]["Middle_Name"]."</span><br> 
          Дата рождения:<span style=\"font-weight: 100\"> ".$date1."</span><br> 
          Класс ST:<span style=\"font-weight: 100\"> ".$data1[0]["ST"]."</span><br> 
          Класс LA:<span style=\"font-weight: 100\"> ".$data1[0]["LA"]."</span><br> 
          Спортивный разряд:<span style=\"font-weight: 100\"> ".$data1[0]["Category"]."</span><br> 
          Танцевальный клуб:<span style=\"font-weight: 100\"> ".$data1[0]["Club"]."</span></h2>");
        }
      if ($k==0) {
        echo("<div style=\"width:100%; height: 10px;\"></div><a href=\"continue.php\"><button class=\"btn-reg\">Продолжить регистрацию</button></a>");
        $_SESSION['male']= [$data[0]["ID"], $data[0]["Name"]." ".$data[0]["Middle_Name"], $date, $data[0]["ST"], $data[0]["LA"], $data[0]["Club"]];
        $_SESSION['female']= [$data1[0]["ID"], $data1[0]["Name"]." ".$data1[0]["Middle_Name"], $date1, $data1[0]["ST"], $data1[0]["LA"], $data1[0]["Club"]];
      }
      if ($k!=0) {
        echo("<div style=\"width:100%; height: 10px;\"></div><a href=\"../../reg.html\"><button class=\"btn-reg\">Назад</button></a>");
      }
     ?>
    </div>
  </div> 

  
  <!-- JS для мобильного меню -->
    <script src="../../assets/js/mobile-nav.js"></script>
  
</body>
</html>