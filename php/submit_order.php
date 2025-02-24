<?php
print_r($_POST['name']);
// Замените XXXXXXXXXXXX на ваш токен бота и YYYYYYYYYY на ваш чат ID
$telegram_token = "7112223381:AAHO_RBIpe0xwk-e8Cv_O_xKOAtpccQKUEI";
$telegram_chat_id = "466165034";

// Получаем данные из формы
$name = $_POST['name'];
$phone = $_POST['phone'];

// Формируем сообщение для отправки в телеграм
$message = "Новый заказ!\n\n";
$message .= "Имя: " . $name . "\n";
$message .= "Телефон: " . $phone . "\n";

// Отправляем сообщение в телеграм
$telegram_url = "https://api.telegram.org/bot" . $telegram_token . "/sendMessage?chat_id=" . $telegram_chat_id . "&text=" . urlencode($message);
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $telegram_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
return 1;

