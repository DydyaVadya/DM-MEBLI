<?php 
    
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


    $dt = date("Y-m-d H:i:s");
    $email = 'hseredad@gmail.com';

    require 'src/Exception.php';
    require 'src/PHPMailer.php';

    $type = (!empty($_POST['type']) && isset($_POST['type'])) ? $_POST['type'] : false;
    
    try{

        switch($type){
           
            # ОСТАВЬТЕ ВАШИ КОНТАКТНЫЕ ДАННЫЕ, И МЫ ВАМ ПЕРЕЗВОНИМ
            case "call": 

                $tel_callback    = (!empty($_POST['tel_callback'])   && isset($_POST['tel_callback']))   ? $_POST['tel_callback']     : false;
                $name_callback   = (!empty($_POST['name_callback'])  && isset($_POST['name_callback']))  ? $_POST['name_callback']    : false;
                $img_callback    = (!empty($_POST['img_callback'])   && isset($_POST['img_callback']))   ? $_POST['img_callback']     : false;
                $dasc_callback   = (!empty($_POST['dasc_callback'])  && isset($_POST['dasc_callback']))  ? $_POST['dasc_callback']    : false;

                $mail = new PHPMailer(true); 

                $mail->setFrom('malati4ik123@gmail.com', 'Mailer');
                $mail->addAddress($email, 'Joe User');     

                $mail->isHTML(true);                                  
                $mail->Subject = 'Dm-medel Moylen';
                $mail->Body    = '
                    <strong>Заказ звонка</strong><br>
                    Телефон: '.$tel_callback.' <br>
                    Имя товара: '.$name_callback.' <br>
                    <img src="'.$img_callback.'" > <br>
                    Имя товара: '.$dasc_callback.' <br>
                ';

                $mail->send();

                $msg = "Дм мебель заказ"."%0A"."Дата: $dt"."%0A"."Имя Товара: $name_callback"."%0A"."Телефон: $tel_callback"."%0A"."Фото Товара: $img_callback"."%0A"."Описание товара: $dasc_callback";
                file_get_contents("https://api.telegram.org/bot570437910:AAEwPpGQmtVYaeRsLwiUSVr1crfjdjQ8WY4/sendMessage?chat_id=-1001218844444&text=$msg");


                echo('{
                    "result": true,
                    "message": "Ваше сообщение отправлено"
                }');

             break;

            # ОСТАВЬТЕ ВАШИ КОНТАКТНЫЕ ДАННЫЕ, И МЫ ВАМ ПЕРЕЗВОНИМ
            case "backcall": 

                $name_callback  = (!empty($_POST['name_callback'])  && isset($_POST['name_callback']))  ? $_POST['name_callback']   : false;
                $tel_callback   = (!empty($_POST['tel_callback'])   && isset($_POST['tel_callback']))   ? $_POST['tel_callback']    : false;
                $textarea       = (!empty($_POST['textarea'])       && isset($_POST['textarea']))       ? $_POST['textarea']    : false;

                $mail = new PHPMailer(true); 

                $mail->setFrom('malati4ik123@gmail.com', 'Mailer');
                $mail->addAddress($email, 'Joe User');     

                $mail->isHTML(true);                                  
                $mail->Subject = 'Dm-medel Moylen';
                $mail->Body    = '
                    <strong>ОСТАВЬТЕ ВАШИ КОНТАКТНЫЕ ДАННЫЕ, И МЫ ВАМ ПЕРЕЗВОНИМ</strong><br>
                    Имя: '.$name_callback.' <br>
                    Телефон: '.$tel_callback.' <br>
                    Коментарий: '.$textarea.' <br>
                ';

                $mail->send();

                $msg = "Дм мебель Обратный звонок"."%0A"."Дата: $dt"."%0A"."Телефон: $tel_callback";
                file_get_contents("https://api.telegram.org/bot570437910:AAEwPpGQmtVYaeRsLwiUSVr1crfjdjQ8WY4/sendMessage?chat_id=-1001218844444&text=$msg");

                echo('{
                    "result": true,
                    "message": "Ваше сообщение отправлено"
                }');

             break;

            # В БЛИЖАЙШЕЕ ВРЕМЯ С ВАМИ СВЯЖЕТСЯ НАШ СПЕЦИАЛИСТ, ЧТОБЫ ОБСУДИТЬ РЕАЛИЗАЦИЮ ЖЕЛАЕМОГО ДИВАНА
            case "consultation": 

                $name_callback  = (!empty($_POST['name_callback'])  && isset($_POST['name_callback']))  ? $_POST['name_callback']   : false;
                $tel_callback   = (!empty($_POST['tel_callback'])   && isset($_POST['tel_callback']))   ? $_POST['tel_callback']    : false;
                $textarea       = (!empty($_POST['textarea'])       && isset($_POST['textarea']))       ? $_POST['tel_callback']    : false;

                $mail = new PHPMailer(true); 

                $mail->setFrom('malati4ik123@gmail.com', 'Mailer');
                $mail->addAddress($email, 'Joe User');     

                $mail->isHTML(true);                                  
                $mail->Subject = 'Dm-medel Moylen';
                $mail->Body    = '
                    <strong>В БЛИЖАЙШЕЕ ВРЕМЯ С ВАМИ СВЯЖЕТСЯ НАШ СПЕЦИАЛИСТ, ЧТОБЫ ОБСУДИТЬ РЕАЛИЗАЦИЮ ЖЕЛАЕМОГО ДИВАНА</strong><br>
                    Имя:     '.$name_callback.' <br>
                    Телефон: '.$tel_callback.' <br>
                ';

                $mail->send();

                $msg = "Заказ консультации"."%0A"."Дата: $dt"."%0A"."Имя: $name_callback"."%0A"."Телефон: $tel_callback";
                file_get_contents("https://api.telegram.org/bot570437910:AAEwPpGQmtVYaeRsLwiUSVr1crfjdjQ8WY4/sendMessage?chat_id=-1001218844444&text=$msg");

                echo('{
                    "result": true,
                    "message": "Ваше сообщение отправлено"
                }');

            break;
            
            # Обсудить реализация
            default: 
            
                if(!empty($_FILES) && !empty($_POST['phone'])){
                    
                    $mail = new PHPMailer(true); 

                    $mail->setFrom('malati4ik123@gmail.com', 'Mailer');
                    $mail->addAddress($email, 'Joe User');     

                    $mail->isHTML(true);                                  
                    $mail->Subject = 'Dm-medel Moylen';
                    $mail->Body    = '
                        Обсудить реализацию. <br>
                        Телефон: '.$_POST['phone'].' <br>
                    ';

                    $saveFile = [];
                    
                    foreach($_FILES as $file){
                        
                        $info = new SplFileInfo($file['name']);

                        $saveFile[$file['tmp_name']] = __DIR__ . '/temp/' . md5($file['tmp_name']) . '.' . $info->getExtension();
                        
                        if(move_uploaded_file($file['tmp_name'], $saveFile[$file['tmp_name']])) {
                            
                            $mail->addAttachment($saveFile[$file['tmp_name']]);

                        }

                    }

                }

                $msg = "Обсудить реализацию"."%0A"."Дата: $dt"."%0A"."файл: " .$saveFile[$file['tmp_name']]."%0A"."Телефон: ".$_POST['phone']."%0A"."";
                file_get_contents("https://api.telegram.org/bot570437910:AAEwPpGQmtVYaeRsLwiUSVr1crfjdjQ8WY4/sendMessage?chat_id=-1001218844444&text=$msg");

                $mail->send();

                echo('{
                    "result": true,
                    "message": "Ваше сообщение отправлено"
                }');

            break;


        }

    }catch(Exception $e){
        
        echo('{
           "result": false,
           "message": "Просим прощение, но нам не удалось отправить сообщение"
        }');

    }

?>