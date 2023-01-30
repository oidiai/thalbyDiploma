<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];

$txt = "Кто-то подписался на рассылку...%0A%0AИмя: $name%0AФамилия: $surname%0AПочта: $email";

$token = "1234567890qwerty";
$chat_id = "1234567890";

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}+","r");

?>
