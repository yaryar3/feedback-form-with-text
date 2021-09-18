<?php
$to = "yar2041@ya.ru";
$theme = "Заявка"; // 
$message = "<strong>Ваше имя:</strong> ".$_POST['name']."<br>";
$message .= "<strong>Номер телефона:</strong> ".$_POST['phone']."<br>";
$message .= "<strong>Email:</strong> ".$_POST['email']."<br>"; 
$message .= "<strong>Название товара:</strong> ".$_POST['msg']."<br>"; 
$headers  = 'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
mail($to, $theme, $message, $headers); 
?>