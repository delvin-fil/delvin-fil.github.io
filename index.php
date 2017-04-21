<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="my.css" />
<title><?php 
date_default_timezone_set('Asia/Krasnoyarsk');
echo date('d-n-y H:m'); 
?></title>
</head>
<body>
    <div id="header">
        <?php         require_once ('header.php');
        ?>
    </div>
<div id="content">
<br><br><br><br>
<p> Если вы можете прочитать этот текст, значит ваш веб-сервер работает и настроен правильно. </p>
<a href="index.py">Здесь Python</a>				<a href=mail.php>А здесь ссылки </a>			<a href="edit.html">Редактор</a>
<form method = "post">
<input type = "submit" name = "sort" value = "Показать инфу о PHP">
<input type = 'submit' name = 'hid' value = 'Скрыть нахуй!'>
</form>

<?php
if (isset($_POST['sort'])) // если кнопка  'order' нажата 
{
	echo "Во, бля! 😎";
    phpinfo();
}
if (isset($_POST['hid']))
{
echo "ЕПТ! 😈\r\n";
} 
?>

<h2 class="contentheading">	Камеры г. Ленинск-Кузнецкий"</h2>
<object id="videoplayer224" type="application/x-shockwave-flash" data="http://195.178.25.205/uppod-osmfhls.swf" width="720" height="430"><param name="bgcolor" value="#ffffff"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="movie" value="http://195.178.25.205/uppod-osmfhls.swf"><param name="flashvars" value="st=http://195.178.25.205/st/video146-1157.txt&amp;pl=http://195.178.25.205/pl/playlist_video146-224.txt"></object>

<h2 class="contentheading">	Камера п. Шерегеш, кафе "Финиш"</h2>
<object width="720" height="430" id="videoplayer15480" type="application/x-shockwave-flash" data="http://kts42.ru/uppod/uppod.swf" style="visibility: visible;"><param name="bgcolor" value="#ffffff"><param name="wmode" value="direct"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="id" value="videoplayer15480"><param name="flashvars" value="uid=videoplayer15480&amp;comment=Кафе  Финиш &amp;st=02AchBGDNJaI=Hx58iJw692MdWRf06T2UcYZm5iRd0bpm52Izv5fZJ0coFW5ntu0c9BMr9&amp;file=02AEEAOIYxwD7hsQiL2Mn7W0fVL2M3RSYf=9xYctxGfLkaTcaBGrLf0Xh5W5ntu0c9BMr9&amp;poster=22AE0d0qELfG663G6zB0rn7W0VL2M3RSsYf=xYctxGfLZkacaBGrLf0XnhW5ntu0c9BMrE"></object>

<embed src="http://192.168.0.7:4444/webcam.swf" width="550" height="400"></embed>

</div>


</body>
</html>