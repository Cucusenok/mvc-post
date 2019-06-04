<?php

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'remont-vann-spb@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '2364loves'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('remont-vann-spb@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('remont-vann-spb@mail.ru');     // Кому будет уходить письмо
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML


$body='<body style="margin: 0; padding: 0;">
<style>
td{
  text-align:center;
}
.info-span{
  color:#ffcb1b;
  font-weight:bold;
}
table{
  background-color:#337ab7;
  color:white;
  font-size:2em;
  border-color:white;
}
</style>
<table align="center" border="1" cellpadding="0" cellspacing="0" width="600">
<tr>
 <td> Имя Заказчика: <span class="info-span">'.$name.'</span></td>
</tr>
<tr>
 <td> Номер телефона: <span class="info-span">'.$phone.'</span></td>
</tr>

</table>
</body>';


$mail->Subject = 'Заявка с http://remont-spb.ru.com';
$mail->Body    = $body;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {

}
?>
