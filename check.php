<?php 
 // print_r($_POST);
 $email = $_POST['email'];
 $message = $_POST['message'];

 // через if и else можем выполнить проверку ,если требуется

 echo('От кого : '."$email ".'<br>');
 echo('Что пишет :'."$message");
 ?>