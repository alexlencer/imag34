<?php
    $("form").submit(function () {
        // Получение ID формы
        var formID = $(this).attr('id');
        // Добавление решётки к имени ID
        var formNm = $('#' + formID);
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["phone"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);
$address = "fotooboeff@gmail.com";
$sub = "Заявка с сайта IMag34.ru";
$mes = $form
Имя: $name    
Телефон: $tel
";



?>