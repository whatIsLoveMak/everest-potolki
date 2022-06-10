<?php
$msgs = [];

$token = "5430187423:AAFpr7S09HoZpwMezgsdxjZEkIXeqR1f5dc";
$chat_id = "-627357149";
$bot_url = "https://api.telegram.org/bot{$token}/";
$empty_text = 'не заполнено %0A';

if (isset($_POST['site'])) {
    if (!empty($_POST['site'])) {
        $site = "Сайт: " . $_POST['site'] . "%0A";
    } else {
        $site = "";
    }
}
if (isset($_POST['client-name'])) {
    if (!empty($_POST['client-name'])) {
        $name = "Имя: %20%20" . strip_tags($_POST['client-name']) . "%0A";
    } else {
        $name = "Имя: " . $empty_text;
    }
}
if (isset($_POST['client-phone'])) {
    if (!empty($_POST['client-phone'])) {
        $phone = "Телефон: %20%20%2b" . strip_tags($_POST['client-phone']) . "%0A";
    } else {
        $phone = "Телефон:   " . $empty_text;
    }
}
if (isset($_POST['accept-politic'])) {
    if (!empty($_POST['accept-politic'])) {
        $politics = "Политики: %20%20приняты%0A";
    } else {
        $politics = "Политики: " . $empty_text;
    }
}
if (isset($_POST['tab-age'])) {
    if (!empty($_POST['tab-age'])) {
        $age = "Бюджет: %20%20" . strip_tags($_POST['tab-age']) . "%0A";
    } else {
        $age = "Бюджет:   " . $empty_text;
    }
}
if (isset($_POST['tab_potolki'])) {
    if (!empty($_POST['tab_potolki'])) {
        $potolki = "Место: %20%20" . strip_tags($_POST['tab_potolki']) . "%0A";
    } else {
        $potolki = "Место:   " . $empty_text;
    }
}
if (isset($_POST['tab-body'])) {
    if (!empty($_POST['tab-body'])) {
        $body = "Планирование отдыха: %20%20" . strip_tags($_POST['tab-body']) . "%0A";
    } else {
        $body = "Планирование отдыха: " . $empty_text;
    }
}

if (isset($_POST['tab_design'])) {
    if (!empty($_POST['tab_design'])) {
        $boobs = "Дизайн потолка(ов): %20%20" . strip_tags($_POST['tab_design']) . "%0A";
    } else {
        $boobs = "Дизайн потолка(ов): " . $empty_text;
    }
}

if (isset($_POST['tab_hair'])) {
    if (!empty($_POST['tab_hair'])) {
        $hair = "Площадь: %20%20" . strip_tags($_POST['tab_hair']) . "%0A";
    } else {
        $hair = "Площадь: " . $empty_text;
    }
}

if (isset($_POST['tab_dop'])) {
    if (!empty($_POST['tab_dop'])) {
        $height = "Допы: %20%20" . strip_tags($_POST['tab_dop']) . "%0A";
    } else {
        $height = "Допы: " . $empty_text;
    }
}

if (isset($_POST['tab-place'])) {
    if (!empty($_POST['tab-place'])) {
        $place = "Обращаю внимание на: %20%20" . strip_tags($_POST['tab-place']);
    } else {
        $place = "Обращаю внимание на: " . $empty_text;
    }
}
// Формируем текст сообщения
$txt =  $site .
        $name .
        $phone .
        $potolki .
        $hair .
        $boobs .
        $height .
        $body .
        $age .
        $place;
        $politics . "%0A" .

//The url you wish to send the POST request to
$url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}";

 //$result = fopen($url,"r");

try {
   //open connection
   $ch = curl_init($url);

   if ($ch === false) {
       throw new Exception('failed to initialize');
   }
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch,CURLOPT_POST, true);
   curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

   $result = curl_exec($ch);

   if ($result === false) {
       echo curl_error($ch);
       throw new Exception(curl_error($ch), curl_errno($ch));
   }

   echo curl_error($ch);
   curl_close($ch);

}catch (Exception $error) {
   echo json_encode($error);
}

// if ($result) {
//     $msgs['okSend'] = 'Thanks for send message!';
//     echo json_encode($result);
//     return true;
// } else {
//     $msgs['err'] = 'Error. message no sended!';
//     echo json_encode($msgs);
// }
?>