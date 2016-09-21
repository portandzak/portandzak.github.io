<?php

$recepient = "andrew.zakrevskiy@gmail.com";
$sitename = "Portfolio";

$name = trim($_GET["name"]);
$email = trim($_GET["email"]);
$text = trim($_GET["text"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nEmail: $email \nТекст: $text";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");