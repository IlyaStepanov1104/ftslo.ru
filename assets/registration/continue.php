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
              if($_SESSION['female']!=""){
                $age = 2021 - min((int)substr($_SESSION['male'][2], 6, 4), (int)substr($_SESSION['female'][2], 6, 4));
              } else {
                $age = 2021 - (int)substr($_SESSION['male'][2], 6, 4);
              }
              if ($age <= 7) {
                $age_group = "Дети";
              } elseif (($age == 9) or ($age == 8)) {
                $age_group = "Дети-1";
              }
              elseif (($age == 10) or ($age == 11)) {
                $age_group = "Дети-2";
              }
              elseif (($age == 12) or ($age == 13)) {
                $age_group = "Юниоры-1";
              }
              elseif (($age == 14) or ($age == 15)) {
                $age_group = "Юниоры-2";
              }
              elseif (($age == 16) or ($age == 17) or ($age == 18)) {
                $age_group = "Молодежь";
              }
              elseif ($age >= 19) {
                $age_group = "Взрослые";
              }
            echo("<form class=\"reg-1\" method=\"post\" action=\"proc.php\">
                <label for=\"trainer\">Выберите тренера: 
                <select required size=\"1\" name=\"trainer\">
                  <option disabled selected>Выберите тренера</option>");
            if ($_SESSION['male'][5] == "Алгоритм") {
              echo("
                  <option value=\"Альниченкова А. В.\">Альниченкова А. В.</option>
                  <option value=\"Дудаков Д. В.\">Дудаков Д. В.</option>");
            } else if ($_SESSION['male'][5] == "Алекс") {
              echo("
                  <option value=\"Александров И. В.\">Александров И. В.</option>
                  <option value=\"Александрова П. С.\">Александрова П. С.</option>");
            } elseif ($_SESSION['male'][5] == "Блеск") {
              echo("
                  <option value=\"Лех А. Р.\">Лех А. Р.</option>
                  <option value=\"Лех Л. Б.\">Лех Л. Б.</option>
                  <option value=\"Рожкова А. А.\">Рожкова А. А.</option>");
            } elseif ($_SESSION['male'][5] == "Вива-Виктория") {
              echo("
                  <option value=\"Устинович-Лелецкая В. Г.\">Устинович-Лелецкая В. Г.</option>");
            } elseif ($_SESSION['male'][5] == "Грация") {
              echo("
                  <option value=\"Королева Е. Н.\">Королева Е. Н.</option>");
            } elseif ($_SESSION['male'][5] == "ГТЦ") {
              echo("
                  <option value=\"Хромченко Ю. Р. \">Хромченко Ю. Р. </option>
                  <option value=\"Хромченко Л. И. \">Хромченко Л. И. </option>
                  <option value=\"Трифонов Р. О. \">Трифонов Р. О. </option>
                  <option value=\"Трифонова И. Н. \">Трифонова И. Н. </option>");
            } elseif ($_SESSION['male'][5] == "Джайв") {
              echo("
                  <option value=\"Якобсон А. С.\">Якобсон А. С.</option>");
            } elseif ($_SESSION['male'][5] == "Дуэт") {
              echo("
                  <option value=\"Балашов К. К. \">Балашов К. К. </option>
                  <option value=\"Cтромова Е. В. \">Cтромова Е. В. </option>
                  <option value=\"Лаврентьев Д. В. \">Лаврентьев Д. В. </option>");
            } elseif ($_SESSION['male'][5] == "Жемчужина") {
              echo("
                  <option value=\"Квачёв Е. Ю.\">Квачёв Е. Ю.</option>
                  <option value=\"Квачёва И. В.\">Квачёва И. В.</option>");
            } elseif ($_SESSION['male'][5] == "Забава") {
              echo("
                  <option value=\"Дудина Т. Ю.\">Дудина Т. Ю.</option>
                  <option value=\"Дудин А. В.\">Дудин А. В.</option>");
            } elseif ($_SESSION['male'][5] == "Империя") {
              echo("
                  <option value=\"Калакуцкая Л. С.\">Калакуцкая Л. С.</option>");
            } elseif ($_SESSION['male'][5] == "Ника") {
              echo("
                  <option value=\"Злобина Е. Л.\">Злобина Е. Л.</option>");
            } elseif ($_SESSION['male'][5] == "Олимпия") {
              echo("
                  <option value=\"Карпунин В. Ф. \">Карпунин В. Ф. </option>
                  <option value=\"Карпунина Л. А. \">Карпунина Л. А. </option>
                  <option value=\"Карпунина М. В. \">Карпунина М. В. </option>
                  <option value=\"Санников И. В. \">Санников И. В. </option>");
            } elseif ($_SESSION['male'][5] == "Ронд") {
              echo("
                  <option value=\"Курганов С. В.\">Курганов С. В.</option>
                  <option value=\"Задорожная М. С.\">Задорожная М. С.</option>
                  <option value=\"Шаврина Е. В.\">Шаврина Е. В.</option>");
            } elseif ($_SESSION['male'][5] == "Снежинка") {
              echo("
                  <option value=\"Тихомирова Г. М.\">Тихомирова Г. М.</option>
                  <option value=\"Туназ Г. Ю.\">Туназ Г. Ю.</option>
                  <option value=\"Гончарук Н. Ю.\">Гончарук Н. Ю.</option>");
            } elseif ($_SESSION['male'][5] == "Таланто") {
              echo("
                  <option value=\"Шипилов Д. К.\">Шипилов Д. К.</option>
                  <option value=\"Лесняк С. Ю.\">Лесняк С. Ю.</option>");
            } elseif ($_SESSION['male'][5] == "ЦТС") {
              echo("
                  <option value=\"Дюков Ю. Г.\">Дюков Ю. Г.</option>
                  <option value=\"Дюкова М. А.\">Дюкова М. А.</option>");
            } elseif ($_SESSION['male'][5] == "Эльдорадо") {
              echo("
                  <option value=\"Седова Н. Н.\">Седова Н. Н.</option>
                  <option value=\"Архипкин К. В.\">Архипкин К. В.</option>");
            } elseif ($_SESSION['male'][5] == "Энкор") {
              echo("
                  <option value=\"Петров И. Ю.\">Петров И. Ю.</option>
                  <option value=\"Поличук Е. В.\">Поличук Е. В.</option>");
            } elseif ($_SESSION['male'][5] == "Эталон") {
              echo("
                  <option value=\"Сначев Н. С. \">Сначев Н. С. </option>
                  <option value=\"Поршнев И. В. \">Поршнев И. В. </option>
                  <option value=\"Одирейко Д. В. \">Одирейко Д. В. </option>
                  <option value=\"Поршнева А. А. \">Поршнева А. А. </option>");
            }
            echo("</select></label>");
            if($_SESSION['female']!=""){
              $ST = min($_SESSION['male'][3], $_SESSION['female'][3]);
              $_SESSION['male'][3] = $ST;
              $_SESSION['female'][3] = $ST;
              $LA = min($_SESSION['male'][4], $_SESSION['female'][4]);
              $_SESSION['male'][4] = $LA;
              $_SESSION['female'][4] = $LA;
            } else {                
              $ST = $_SESSION['male'][3];
              $LA = $_SESSION['male'][4];
            }
            echo("<h3>Выберите дисциплину: </h3>");
                if ($age_group == "Дети") {
                  echo("
                    <input name=\"N-2\" id=\"N-2\" type=\"checkbox\"><label for=\"N-2\">Н-2 + Берлинская Полька</label><br/>
                    <input name=\"N-3\" id=\"N-3\" type=\"checkbox\"><label for=\"N-3\">Н-3</label><br/>");
                } elseif ($age_group == "Дети-1") {
                  echo("
                    <input name=\"N-2\" id=\"N-2\" type=\"checkbox\"><label for=\"N-2\">Н-2 + Берлинская Полька</label><br/>
                    <input name=\"N-3\" id=\"N-3\" type=\"checkbox\"><label for=\"N-3\">Н-3</label><br/>
                    <input name=\"N-4\" id=\"N-4\" type=\"checkbox\"><label for=\"N-4\">Н-4</label><br/>
                    <input name=\"N-5\" id=\"N-5\" type=\"checkbox\"><label for=\"N-5\">Н-5</label><br/>
                    <input name=\"Cup_SW\" id=\"Cup_SW\" type=\"checkbox\"><label for=\"Cup_SW\">Кубок Медленный вальс</label><br/> 
                    <input name=\"Cup_CHA\" id=\"Cup_CHA\" type=\"checkbox\"><label for=\"Cup_CHA\">Кубок Ча-ча-ча</label><br/>
                    <input name=\"Cup_S\" type=\"checkbox\"><label for=\"Cup_S\">Кубок Самба</label><br/>
                    <input name=\"Open\" id=\"Open\" type=\"checkbox\"><label for=\"Open\">Открытый класс</label><br/>  ");
                } elseif ($age_group == "Дети-2") {
                  echo("
                    <input name=\"N-2\" id=\"N-2\" type=\"checkbox\"><label for=\"N-2\">Н-2 + Берлинская Полька</label><br/>
                    <input name=\"N-3\" id=\"N-3\" type=\"checkbox\"><label for=\"N-3\">Н-3</label><br/> 
                    <input name=\"N-4\" id=\"N-4\" type=\"checkbox\"><label for=\"N-4\">Н-4</label><br/>
                    <input name=\"N-5\" id=\"N-5\" type=\"checkbox\"><label for=\"N-5\">Н-5</label><br/>
                    <input name=\"Do-E\" id=\"Do-E\" type=\"checkbox\"><label for=\"Do-E\">До E класса</label><br/>
                    <input name=\"Cup_Q\" id=\"Cup_Q\" type=\"checkbox\"><label for=\"Cup_Q\">Кубок Квикстеп</label><br/>
                    <input name=\"Cup_SW\" id=\"Cup_SW\" type=\"checkbox\"><label for=\"Cup_SW\">Кубок Медленный вальс</label><br/> 
                    <input name=\"Cup_CHA\" id=\"Cup_CHA\" type=\"checkbox\"><label for=\"Cup_CHA\">Кубок Ча-ча-ча</label><br/>
                    <input name=\"Cup_J\" id=\"Cup_J\" type=\"checkbox\"><label for=\"Cup_J\">Кубок Джайв</label><br/>
                    <input name=\"Open\" id=\"Open\" type=\"checkbox\"><label for=\"Open\">Открытый класс</label><br/>");
                } elseif ($age_group == "Юниоры-1") {
                  echo("
                    <input name=\"N-5\" id=\"N-5\" type=\"checkbox\"><label for=\"N-5\">Н-5</label><br/>
                    <input name=\"N_6\" id=\"N_6\" type=\"checkbox\"><label for=\"N_6\">Н-6</label><br/>
                    <input name=\"Do-E\" id=\"Do-E\" type=\"checkbox\"><label for=\"Do-E\">До E класса</label><br/>
                    <input name=\"Do-D\" id=\"Do-D\" type=\"checkbox\"><label for=\"Do-D\">До D класса</label><br/>
                    <input name=\"Open_ST\" id=\"Open_ST\" type=\"checkbox\"><label for=\"Open_ST\">Открытый класс ST</label><br/>
                    <input name=\"Open_LA\" id=\"Open_LA\" type=\"checkbox\"><label for=\"Open_LA\">Открытый класс LA</label><br/>");
                } elseif ($age_group == "Юниоры-2") {
                  echo("
                    <input name=\"Do-E\" id=\"Do-E\" type=\"checkbox\"><label for=\"Do-E\">До E класса</label><br/>
                    <input name=\"Do-D\" id=\"Do-D\" type=\"checkbox\"><label for=\"Do-D\">До D класса</label><br/>
                    <input name=\"Open_ST\" id=\"Open_ST\" type=\"checkbox\"><label for=\"Open_ST\">Открытый класс ST</label><br/>
                    <input name=\"Open_LA\" id=\"Open_LA\" type=\"checkbox\"><label for=\"Open_LA\">Открытый класс LA</label><br/>");
                } elseif ($age_group == "Молодежь") {
                  echo("
                    <input name=\"Open_ST\" id=\"Open_ST\" type=\"checkbox\"><label for=\"Open_ST\">Открытый класс ST</label><br/>
                    <input name=\"Open_LA\" id=\"Open_LA\" type=\"checkbox\"><label for=\"Open_LA\">Открытый класс LA</label><br/>");
                } elseif ($age_group == "Взрослые") {
                  echo("
                    <input name=\"Open_ST\" id=\"Open_ST\" type=\"checkbox\"><label for=\"Open_ST\">Открытый класс ST</label><br/>
                    <input name=\"Open_LA\" id=\"Open_LA\" type=\"checkbox\"><label for=\"Open_LA\">Открытый класс LA</label><br/>");
                }
            echo("<input type=\"submit\" class=\"btn-reg\" value=\"Зарегистрировать\">
                  </form><a href=\"../../reg.html\"><button class=\"btn-reg\">Назад</button></a>");
            array_push($_SESSION['male'], $age_group);
        ?>
  </div> 

  
  <!-- JS для мобильного меню -->
    <script src="../../assets/js/mobile-nav.js"></script>
  
</body>
</html>
