<?php

// Получаем данные из инпутов сайта
$name = $_POST['name'];
$telephone = $_POST['telephone'];
$source = "Модальное окно";

// Отправляем сообщение в телеграм бот
$message = "Новая заявка на сайте https://stk-elis.ru:%0A%0A";
$message .= "Имя: " . $name . "%0A";
$message .= "Телефон: " . $telephone . "%0A";
$message .= "Источник заявки: " . $source . "%0A";

// отправляем данные в телеграм бот
$telegramToken = '6003427585:AAEwa6L6ZsvTPdYLo0G6PLvF_Na-JqbfpQ0';
$chatId = '-974791065';
$telegramUrl = "https://api.telegram.org/bot{$telegramToken}/sendMessage?chat_id={$chatId}&text={$message}";
file_get_contents($telegramUrl);

echo "<script>window.location.href='https://stk-elis.ru/';</script>";
?>