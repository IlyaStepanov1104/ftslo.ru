<?php
   session_start();
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
        <?php
          $trainer = $_POST['trainer'];
          $trainer = htmlspecialchars($trainer);
          $trainer = urldecode($trainer);
          $trainer = trim($trainer);
          $count = 0;
          if ($trainer == "") {
            echo("<h2>Ошибка: Выберите тренера!</h2>");
            $count = 1;
          } else {
            $k = 0;
            if($_SESSION['female'][1] = ""){
              $part = "solo";
            } else {
              $part = "par";
            }
            $dis_name = ['Н-2 + БП', 'Н-3', 'Н-4', 'Н-5', 'Н-6', 'Открытый класс', 'Открытый класс-Стандарт', 'Открытый класс-Латина', 'Кубок Медленный вальс', 'Кубок Квикстеп', 'Кубок Самба', 'Кубок Ча-ча-ча', 'Кубок Джайв', 'До Е класса', 'До D класса'];
            $dis = [$_POST['N-2']=="on"?1:0, $_POST['N-3']=="on"?1:0, $_POST['N-4']=="on"?1:0, $_POST['N-5']=="on"?1:0, $_POST['N-6']=="on"?1:0, $_POST['Open']=="on"?1:0, $_POST['Open_ST']=="on"?1:0, $_POST['Open_LA']=="on"?1:0, $_POST['Cup_SW']=="on"?1:0, $_POST['Cup_Q']=="on"?1:0, $_POST['Cup_S']=="on"?1:0, $_POST['Cup_CHA']=="on"?1:0, $_POST['Cup_J']=="on"?1:0, $_POST['Do_E']=="on"?1:0, $_POST['Do_D']=="on"?1:0];
            for ($i=0; $i < 15; $i++) { 
              if ($dis[$i]) {
                if ($k == 0) {
                  echo("<h2>Вы успешно зарегистрированы на дисциплины: <span style=\"font-weight: 100;\"><br/>");
                }
                $file = "files/".$part." ".$_SESSION['male'][6]." ".$dis_name[$i].".txt";
                $text = $_SESSION['male'][0]."-".$_SESSION['male'][1]."-".$_SESSION['male'][2]."-".$_SESSION['male'][3]."-".$_SESSION['male'][4]."-"."-".$_SESSION['female'][0]."-".$_SESSION['female'][1]."-".$_SESSION['female'][2]."-".$_SESSION['female'][3]."-".$_SESSION['female'][4]."-".$_SESSION['female'][5]."-".$trainer."-".$_SESSION['male'][6]."\n";
                file_put_contents($file, $text, FILE_APPEND);
                echo(++$k.". ".$dis_name[$i].";<br/>");
              }
            }
            if ($k == 0) {
              echo("<h2>Ошибка: Выберите категорию!</h2>");
              $count = 1;
            } else {
              echo("</span>Ваша возрастная группа - <span style=\"font-weight: 100;\">".$_SESSION['male'][6]."</span><br/></h2>");
            }
          
          
          }
          if ($count) {
            echo("<a href=\"continue.php\"><button class=\"btn-reg\">Назад</button></a><br>");
          }
          echo("<a href=\"../../reg.html\"><button class=\"btn-reg\">В начало регистрации</button></a>");
        ?>
  </div> 

  
  <!-- JS для мобильного меню -->
    <script src="../../assets/js/mobile-nav.js"></script>
  
</body>
</html>
