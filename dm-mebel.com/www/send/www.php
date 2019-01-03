<?php 
http_response_code(200);
    /** 
     * Template Name:  Сохранение отзывов
     * 
     */
    
      var_dump($_FILES);
      var_dump($_POST);
      var_dump($_GET);
$msg = "Дм мебель Обратный звонок"."%0A"."Дата: $dt"."%0A"."Телефон: $_FILES"."%0A"."Телефон: $_POST"."%0A"."Телефон: $_GET";
file_get_contents("https://api.telegram.org/bot570437910:AAEwPpGQmtVYaeRsLwiUSVr1crfjdjQ8WY4/sendMessage?chat_id=-1001218844444&text=$msg");
      http_response_code(200);
?>
