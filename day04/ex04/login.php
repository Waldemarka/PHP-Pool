<?php
    require_once('auth.php');

    session_start();
    $che = auth($_POST['login'], $_POST['passwd']);
    if ($_POST['login'] && $_POST['passwd'] && $che)
    {
        $_SESSION['loggued_on_user'] = $_POST['login'];
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>42Chat</title>
        </head>
        <body style="background-color: #00c7ff">
            <iframe name="chat" src="chat.php" width="100%" height="550px"
            style="border-radius: 8px; background-color: #a5ebff;
            border-color: #00c7ff;"></iframe>
            <iframe name="speak" src="speak.php" width="100%" height="50px"
            style="border-radius: 8px; border-color: #00c7ff; background-color: #a5ebff"></iframe>
        </body>
        </html>
        <?php
    }
    else
    {
        $_SESSION['loggued_on_user'] = "";
        header('Location: index.html');
        echo "ERROR\n";
    }
