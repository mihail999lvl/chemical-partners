<?php 

$type = $_POST['type'];

if ($type == "price") {

  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $search = $_POST['search'];
  $volume = $_POST['volume'];
  $city = $_POST['city'];
  $message = $_POST['message'];

  $subject = 'Поступила новая заяка! (Запрос цен)'; 

  $message = ($name ? '<b>Имя пользователя: ' . $name . ' </b> </br> ' : '') .
             ($phone ? '<b>Его телефон: ' . $phone . ' </b> </br> ' : '') .
             ($email ? '<b>Email: ' . $email . ' </b> </br> ' : '') .
             ($search ? '<b>Что интересует: ' . $search . ' </b> </br> ' : '') .
             ($volume ? '<b>Объём: ' . $volume . ' </b> </br> ' : '') .
             ($city ? '<b>Город: ' . $city . ' </b> </br> ' : '') .
             ($message ? '<b>Комментарий: ' . $message . ' </b> </br> ' : '');

}

if ($type) {
  $utm_source = $_POST['utm_source'];
  $utm_medium = $_POST['utm_medium'];
  $utm_campaign = $_POST['utm_campaign'];
  $utm_content = $_POST['utm_content'];
  $utm_term = $_POST['utm_term'];

  if ($utm_source || $utm_medium || $utm_campaig || $utm_content || $utm_term) {
    $message .= '<br>
                 <b>Информация о UTM</b> <br>
                 <b>Источник кампании: ' . $utm_source . '</b> <br>
                 <b>Тип трафика: ' . $utm_medium . '</b> <br>
                 <b>Название кампании: ' . $utm_campaign . '</b> <br>
                 <b>Идентификатор объявления: ' . $utm_content . '</b> <br>
                 <b>Ключевое слово: ' . $utm_term . '</b>';
  }

  $to = "ildar.nyabiullin@propartners.ru, landing-r@yandex.ru";
  
  $headers  = "Content-type: text/html; charset=UTF-8 \r\n"; 
  $headers .= "From: System Chemical Partners <chemistry@gmail.com>\r\n"; 

  echo mail($to, $subject, $message, $headers); 
} else {
  echo false;
}
