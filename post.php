<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($_POST['name']) && (!empty($_POST['uemail']) || !empty($_POST['phone']))){
if (isset($_POST['name'])) {
$uname = strip_tags($_POST['name']);
$unameFieldset = "<b>Имя отправителя:</b>";
}

if (isset($_POST['phone'])) {
$uphone = strip_tags($_POST['phone']);
$uphoneFieldset = "<b>Телефон:</b>";
}
if (isset($_POST['formData'])) {
$formInfo = strip_tags($_POST['formData']);
$formInfoFieldset = "Внимание заказ с сайта Imag34.ru";
}

$to = "imag34.ru@yandex.ru"; /*Укажите адрес, на который должно приходить письмо*/
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
$headers .= "Content-Transfer-Encoding: 8bit \r\n";
$subject = "$formInfoFieldset";
$message = " Хочу купить или получить консультацию по телефону <b>$formInfo<b> <br>
$unameFieldset $uname<br>
$uphoneFieldset $uphone<br>
";

$send = mail ($to, $subject, $message, $headers);
if ($send == 'true') {
echo '<p class="success">Спасибо за отправку вашего сообщения!</p>';
} else {
echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
}
} else {
echo '<p class="fail">Ошибка. Вы заполнили не все обязательные поля!</p>';
}
} else {
header ("Location: http://lowenet.biz"); // главная страница вашего лендинга
}