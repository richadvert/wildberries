<?php

/**

Доступные параметры:
$_REQUEST['tracking']     - click id
$_REQUEST['number']       - ID заказа
$_REQUEST['order_name']   - Имя клиента
$_REQUEST['order_phone']  - Телефон клиента
$_REQUEST['aim']          - Цель

*/

?>

<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

    <link type="text/css" rel="stylesheet" href="//leadtrade.ru/landing/css/style.css" />

    <script src="//leadtrade.ru/landing/js/jquery.min.js"></script>

    <script type="text/javascript" src="//leadtrade.ru/landing/js/script.js"></script>

    <title>Заявка отправлена</title>


</head>

<body>

<div class="wrap_block_success">

    <div class="block_success">

        <h2>ПОЗДРАВЛЯЕМ! ВАШ ЗАКАЗ №<?php echo $_REQUEST['number']; ?> ПРИНЯТ!</h2>

        <a href="//leadtrade.ru/landing/moreinfo" class="url_more_info">Нажмите здесь для получения более подробной информации о заказе</a>

        <p class="success">В ближайшее время с вами свяжется оператор для подтверждения заказа. Пожалуйста, включите ваш контактный телефон.</p>

        <h3>Пожалуйста, проверьте правильность введенной вами информации</h3>

        <div class="wrap_list_info">

            <ul class="list_info">

                <li><span>Ф.И.O.: </span><?php echo $_REQUEST['order_name']; ?></li>
                <li><span>Телефон: </span><?php echo $_REQUEST['order_phone']; ?></li>

            </ul>
        </div>

<!--        <p class="fail">Если вы ошиблись при заполнении формы, то, пожалуйста, <a href="/?id_st=59">заполните заявку еще раз</a></p>-->

        <h3>Для получения специальных предложений оставьте адрес электронной почты</h3>

        <form class="email" onsubmit="return false;">

            <span class="error" id="error_mail"></span>

            <div class="mail_block">

                <input type="text" name="email" id="email" />

                <input type="hidden" name="ltsource" id="ltsource"  value="<?php echo $_REQUEST['tracking']; ?>">

                <input type="hidden" name="id_usr" id="id_usr" value="1" />

                <input type="hidden" name="id_st" id="id_st" value="60" />

                <a class="button" href="javascript:void(0)" onclick="checkForm();return false;">Отправить</a>

            </div>

        </form>

    </div>

</div>

</body>

</html>