<?php
$_POST = json_decode( file_get_contents("php://input"), true );
echo var_dump($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (mail("faqqybob@yandex.ru", "Заявка с сайта", "Name:".$name.". Email: ".$email."Text:".$message ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>