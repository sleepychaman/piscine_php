<?php
	if (!$_POST['submit'] || !$_POST['login'] || !$_POST['oldpw'] || !$_POST['newpw']) {
		echo "ERRhhhhOR\n";
        exit (0);
    }
    $account = unserialize(file_get_contents('../private/passwd'));
    if ($account) {
        foreach ($account as $k => $v) {
           if ($v['passwd'] === hash('whirlpool', $_POST['oldpw']) || $v['login'] === $_POST['login'])
             $account[$k]['passwd'] = hash('whirlpool', $_POST['newpw']);
        }
        file_put_contents('../private/passwd', serialize($account));
        header("Location: index.html");
        echo "OK\n";

    }
    else {
        echo "ERROR\n";
        exit (0);
    }
   
?>