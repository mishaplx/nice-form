<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sass/style.css">

    <title>feedback form</title>
</head>

<body>

    <div class="login-box">
        <h1>feedback form</h1>
        <form action="" class="form__textbox" method="POST" id="ajax_form">
            <div class="textbox">
                <input type="text" name="name" class="inp" placeholder="Введите Имя">
            </div>
            <div class="textbox">
                <input type="text" name="surname" class="inp" placeholder="Введите Фамилию">
            </div>
            <div class="textbox">
                <input type="email" name="email" class="inp" placeholder="Введите Email">
            </div>
            <div class="textbox">
                <input type="text" name="phone" class="inp" placeholder="+375(XX)-XXX-XX-XX">
            </div>
            <input type="button" name="" class="btn" id="btn" value="Отправить">
        </form>
    </div>
    <div class="result">
        <div id="result_form"></div>
        <div id="response"></div>
    </div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/ajax.js"></script>
</body>

</html>