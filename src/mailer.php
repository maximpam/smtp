<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer;

$mail->isSMTP();

$mail->Host = 'smtp-pulse.com';
$mail->SMTPAuth = true;
$mail->Username = 'maximpam@ukr.net';
$mail->Password = 'G73CDCj5DbnASSc';
$mail->SMTPSecure = 'ssl';
$mail->Port = '465';
$mail->CharSet = 'UTF-8';
$mail->From = 'mail@kwebpage.ru';
$mail->FromName = 'TEST';
//$mail->addAddress('maximpam@gmail.com');
$mail->isHTML(true);
$mail->Subject = 'TEST';
$mail->Encoding = 'base64';
$mail->Body = '
<html> 
<body>
<!-- START FOOTER -->
<p>THIS IS TEST</p>

<a href="http://web-data-extractor.net/last-release/demo/datacol7setup.exe" target="_blank" rel="noopener"> http://web-data-extractor.net/last-release/demo/datacol7setup.exe</a>
</body>
</html>

';

$mail->SMTPDebug  = 2;
$mail->Debugoutput = function($str, $level) {
    file_put_contents('smtp.log', gmdate('Y-m-d H:i:s'). "\t$level\t$str\n", FILE_APPEND | LOCK_EX);
};
$mail->AltBody='TEST';

for ($i=0; $i <= 1000; $i++){
    $mail->addAddress('afftar0787@mail.ru');
    $result = $mail->send();
    $mail->clearAddresses();
    $mail->addAddress('afftar0787@yandex.ru');
    $result = $mail->send();
    $mail->clearAddresses();
    $mail->addAddress('afftar0787@hotmail.com');
    $result = $mail->send();
    $mail->clearAddresses();
    $mail->addAddress('maximpam@yandex.ru');
    $result = $mail->send();
    $mail->clearAddresses();
    $mail->addAddress('maximpam@mail.ru');
    $result = $mail->send();
    $mail->clearAddresses();
}

//$mail->addAddress('maximpam@gmail.com');
//$result = $mail->send();

var_dump($result);
?>
