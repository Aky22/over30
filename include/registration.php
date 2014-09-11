<?php
    $_error = "";
    $varname = array('name', 'nick', 'phone', 'email', 'state', 'city', 'age', 'height', 'weight', 'hobby', 'about');
    $messagename = array('Név', 'Becenév', 'Telefonszám', 'Email cím', 'Megye', 'Város', 'Életkor', 'Magasság', 'Súly', 'Hobbi', 'Bemutatkozás');
    
    if(isset($_POST['submit']))
    {
        if(checkexist($varname, $messagename) == 'true')
        {
            $name = addslashes(stripslashes($_POST['name']));
            $nick = addslashes(stripslashes($_POST['nick']));
            $phone = addslashes(stripslashes($_POST['phone']));
            $email = addslashes(stripslashes($_POST['email']));
            $state = addslashes(stripslashes($_POST['state']));
            $city = addslashes(stripslashes($_POST['city']));
            $age = addslashes(stripslashes($_POST['age']));
            $height = addslashes(stripslashes($_POST['height']));
            $weight = addslashes(stripslashes($_POST['weight']));
            $hobby = addslashes(stripslashes($_POST['hobby']));
            $about = addslashes(stripslashes($_POST['about']));
            
            
        }
        else
        {
            $_error = checkexist($varname, $messagename);
        }
    }
?>