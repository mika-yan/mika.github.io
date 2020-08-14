<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$family = $_POST['user_family'];
$adres = $_POST['user_adres'];
$name_tovar = $_POST['user_name_tovar'];
$color_size = $_POST['user_color_size'];
$index = $_POST['user_index'];




//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'kryugerkryuger15@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'mika2002'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('kryugerkryuger15@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('m1kkimaus01@inbox.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment($_FILES["upload"]["tmp_name"],$_FILES["upload"]["name"]);    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Новый заказ';
$mail->Body    = 'Имя: ' .$name. '<br>Фамилия: ' .$family. '<br>Номер телефона: ' .$phone. '<br>Почта: ' .$email. '<br>Наименование товара: ' .$name_tovar.  '<br>Цвет и размер: ' .$color_size. '<br>Адрес доставки: ' .$adres. '<br>Индекс:' .$index. $fileAttach ;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('Location: php/index.php');
}
?>