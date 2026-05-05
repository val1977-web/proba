<?php

if (isset ($site)) {$site='Да';} else {$site='Нет';}
if (isset ($book)) {$book='Да';} else {$book='Нет';}
$V = mail ('test@test.ru', 'Заказ с сайта', 'На сайте был сделан заказ. \n Заказ пришел от: $fio Его пароль: $pass \n Его email: $email \n Выбрал формат диска: $format \n Выбрал курсы: \n Курс по созданию сайта: $site \n Курс по созданию электронных книг: $book \n Выбрал тип доставки: $delivery \n Адрес для доставки: $address', 'Content-type:text/plain; charset=Windows-1251\r\n',);
if ($V=='true') {echo 'Ваше сообщение успешно доставлено!'}
?>