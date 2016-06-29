<?php


class UserTools
{
    public function login($login_username, $login_password)
    {

        $sql = "select * from users where username = '$login_username' and password1 = '$login_password';";
        $result = pg_query($sql) or die ("Unable to Query Database" . pg_errormessage());


    }
}