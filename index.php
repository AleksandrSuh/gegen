<?
/*
 *
 *
 * тормозной ты коммитчик 26.10.2021   18:00
 *
 * втророй коммит был бес буша 26.10.2021    18:14
 *
 *
 * на третий сделаем push 18:!7 и попробуем поставить оригинальный комментарий, а не повторять первый
 *
 * четвёртый коммит (на 3й пуш через шторм не получился)
 *
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <title>Главная страница!</title>
    <style>
        .wrapo {
            width: 1000px;
            margin: 20px auto;
        }
        p {
            margin: 0;
            padding: 3px;
        }
    </style>
</head>
<body>
<div class="wrapo">
    <h1>Рабочие трудности</h1>
    <?='Почему на удалёнке не робите?'?><br/>мы - робим<br/>
    <? for($i=1;$i<20;$i++):?>
        <p>Всё, что вы видите <?=$i * 3 + $i?></p>
    <? endfor;?>
    <a href="master.php">Идите к мастеру</a>
</div>
</body>