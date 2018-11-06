<?php
    if ($_POST['login'] &&  $_POST['passwd'] && $_POST['submit'] === "OK")
    {
         if (!file_exists('../private')) {
            mkdir("../private");
        }
        if (!file_exists('../private/passwd')) {
            file_put_contents('../private/passwd', null);
        }
        $str = unserialize(file_get_contents('../private/passwd'));
        $for_record['login'] = $_POST['login'];
        $for_record['passwd'] = hash('whirlpool',$_POST['passwd']);        
        $num = 0;
        if ($str)
        {
            foreach ($str as $key => $value) {
                if ($value['login'] == $for_record['login'])
                {
                    echo "ERROR\n";
                    $num = 1;
                    break;
                }
            }
            if ($num == 0)
            {
                $str[] = $for_record;
                file_put_contents('../private/passwd', serialize($str));
                header('Location: index.html');
                echo "OK\n";
            }
        }
        else
        {
            $tmp[] = $for_record;
            file_put_contents('../private/passwd', serialize($tmp));
            header('Location: index.html');
            echo "OK\n";
        }
    }
    else
        echo "ERROR\n";
?>