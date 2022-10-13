<?php
   session_start();
	session_unset();
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
				ini_set('display_errors','On');
				error_reporting('E_ALL');
				$book = $_POST['book'];
				$partner = $_POST['partner'];
				if ($book != '' and $partner != '') {
					echo ("
						<form action=\"reg11.php\" method=\"post\" style=\"display: flex; justify-content: space-around; align-items: center; width: 100%; flex-wrap: wrap;\">
							<label for=\"id\">Номер стартовой книжки партнера: <input type=\"text\" name=\"id\" placeholder=\"Номер книжки\"></label>
							<label for=\"id_female\">Номер стартовой книжки партнерши: <input type=\"text\" name=\"id_female\" placeholder=\"Номер книжки\"></label>
  							<div style=\"width:100%; height: 10px;\"></div>
							<input type=\"submit\" class=\"btn-reg\" value=\"Отправить на проверку\">
						</form>");
				};
				if ($book != '' and $partner == '') {
					echo ("
						<form action=\"reg10.php\" method=\"post\" style=\"display: flex; justify-content: space-around; align-items: center; width: 100%; flex-wrap: wrap;\">
							<label for=\"id\">Номер стартовой книжки танцора: <input type=\"text\" name=\"id\" placeholder=\"Номер книжки\"></label>
							<div style=\"width:100%; height: 10px;\"></div>
							<input type=\"submit\" class=\"btn-reg\" value=\"Отправить на проверку\">
						</form>");
				};
				if ($book == '' and $partner != '') {
					echo ("
						<form action=\"reg01.php\" method=\"post\" style=\"display: flex; justify-content: space-around; align-items: center; width: 100%; flex-wrap: wrap;\">
							<table>
								<tr><td colspan=\"2\"><h2> <center>Партнер</center></h2></td></tr>
								<tr><td><label for=\"fio\">ФИО: </label></td><td><input type=\"text\" name=\"fio\" placeholder=\"Фамилия Имя Отчество\"></td></tr>
								<tr><td><label for=\"born\">Дата рождения: </label></td><td><input type=\"date\" name=\"born\"></td></tr>
							</table>
							<table>
								<tr><td colspan=\"2\"><h2> <center>Партнерша</center></h2></td></tr>
								<tr><td><label for=\"fio_female\">ФИО: </label></td><td><input type=\"text\" name=\"fio_female\" placeholder=\"Фамилия Имя Отчество\"></td></tr>
								<tr><td><label for=\"born_female\">Дата рождения: </label></td><td><input type=\"date\" name=\"born_female\"></td></tr>
							</table>
  							<div style=\"width:100%; height: 10px;\"></div>
  							<label for=\"club\">Танцевальный клуб: 
  								<select size=\"1\" name=\"club\">
  									<option disabled selected>Выберите клуб</option>
  									<option value=\"Алгоритм\">Алгоритм</option>
									<option value=\"Алекс\">Алекс</option>
									<option value=\"Блеск\">Блеск</option>
									<option value=\"Вива-Виктория\">Вива-Виктория</option>
									<option value=\"Грация\">Грация</option>
									<option value=\"ГТЦ\">ГТЦ </option>
									<option value=\"Джайв\">Джайв</option>
									<option value=\"Дуэт\">Дуэт</option>
									<option value=\"Жемчужина\">Жемчужина</option>
									<option value=\"Забава\">Забава</option>
									<option value=\"Империя\">Империя</option>
									<option value=\"Ника\">Ника</option>
									<option value=\"Олимпия\">Олимпия</option>
									<option value=\"Ронд\">Ронд</option>
									<option value=\"Снежинка\">Снежинка</option>
									<option value=\"Таланто\">Таланто</option>
									<option value=\"ЦТС\">ЦТС</option>
									<option value=\"Эльдорадо\">Эльдорадо</option>
									<option value=\"Энкор\">Энкор</option>
									<option value=\"Эталон\">Эталон</option>
  								</select>
  							</label>
  							<div style=\"width:100%; height: 10px;\"></div>
							<input type=\"submit\" class=\"btn-reg\" value=\"Проверить данные\">
						</form>");
				};
				if ($book == '' and $partner == '') {
					echo ("
						<form action=\"reg00.php\" method=\"post\" style=\"display: flex; justify-content: space-around; align-items: center; width: 100%; flex-wrap: wrap;\">
							<table>
								<tr><td><label for=\"fio\">ФИО: </label></td><td><input type=\"text\" name=\"fio\" placeholder=\"Фамилия Имя Отчество\"></td></tr>
								<tr><td><label for=\"born\">Дата рождения: </label></td><td><input type=\"date\" name=\"born\"></td></tr>
							</table>
  							<div style=\"width:100%; height: 10px;\"></div>
  							<label for=\"club\">Танцевальный клуб: 
  								<select size=\"1\" name=\"club\">
  									<option disabled selected>Выберите клуб</option>
  									<option value=\"Алгоритм\">Алгоритм</option>
									<option value=\"Алекс\">Алекс</option>
									<option value=\"Блеск\">Блеск</option>
									<option value=\"Вива-Виктория\">Вива-Виктория</option>
									<option value=\"Грация\">Грация</option>
									<option value=\"ГТЦ Сосновый Бор\">ГТЦ Сосновый Бор</option>
									<option value=\"Джайв\">Джайв</option>
									<option value=\"Дуэт\">Дуэт</option>
									<option value=\"Жемчужина\">Жемчужина</option>
									<option value=\"Забава\">Забава</option>
									<option value=\"Империя\">Империя</option>
									<option value=\"Ника\">Ника</option>
									<option value=\"Олимпия\">Олимпия</option>
									<option value=\"Ронд\">Ронд</option>
									<option value=\"Снежинка\">Снежинка</option>
									<option value=\"Таланто\">Таланто</option>
									<option value=\"ЦТС Тосно\">ЦТС Тосно</option>
									<option value=\"Эльдорадо\">Эльдорадо</option>
									<option value=\"Энкор\">Энкор</option>
									<option value=\"Эталон\">Эталон</option>
  								</select>
  							</label>
  							<div style=\"width:100%; height: 10px;\"></div>
							<input type=\"submit\" class=\"btn-reg\" value=\"Проверить данные\">
						</form>");
				};
			?>
		</div>	

	<!-- JS для мобильного меню -->
  	<script src="../../assets/js/mobile-nav.js"></script>
  
</body>
</html>