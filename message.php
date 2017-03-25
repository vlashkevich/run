<?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$msg = htmlspecialchars($msg);

$name = urldecode($name);
$email = urldecode($email);
$msg = urldecode($msg);

$name = trim($name);
$email = trim($email);
$msg = trim($msg);

if (mail("vicktorlashkevich@gmail.com", "Сообщение с сайта Kyiv Capital Cup", "Имя:".$name.". E-mail: ".$email.". Сообщение: ".$msg , "From: vicktorlashkevich@gmail.com \r\n"))
 	{   
 		echo '<script type="text/javascript">alert("Cообщение успешно отправлено!");</script>';
 		echo '<script type="text/javascript">window.location.href="contacts.html";</script>'; 
	} else { 
		echo '<script type="text/javascript">alert("При отправке сообщения возникли ошибки!");</script>';
 		echo '<script type="text/javascript">window.location.href="contacts.html";</script>'; 
	}
?>