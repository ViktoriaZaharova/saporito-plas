<?php

$recepient = "89268150215@mail.ru, pervova.daria@yandex.ru"; //ваша почта
$sitename = "Сапорито плас";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = "Имя: $name \nТелефон: $phone";

$pagetitle = "Заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");