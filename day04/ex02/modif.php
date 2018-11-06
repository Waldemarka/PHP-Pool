<?php
    if ($_POST['login'] &&  $_POST['oldpw'] &&  $_POST['newpw'] && $_POST['submit'] === "OK"
        && file_exists('../private') && file_exists('../private/passwd'))
    {
        $str = unserialize(file_get_contents('../private/passwd'));
        $for_check['login'] = $_POST['login'];
        $for_check['newpw'] = hash('whirlpool',$_POST['newpw']);
        $for_check['oldpw'] = hash('whirlpool',$_POST['oldpw']);      
        $num = 0;
        if ($str)
        {
            foreach ($str as $key => $value) {
                if ($value['login'] === $for_check['login'] && $value['passwd'] === $for_check['oldpw'])
                {
                    $str[$key]['passwd'] = $for_check['newpw'];
                    $num = 1;
                    break;
                }
            }
            if ($num == 1)
            {
                file_put_contents('../private/passwd', serialize($str));
                echo "OK\n";
            }
            else
                echo "ERROR\n";
        }
        else
            echo "ERROR\n";
    }
    else
        echo "ERROR\n";
?>