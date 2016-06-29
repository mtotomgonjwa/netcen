<?php
include_once 'db/connect.php';

class users
{
    public function listUsers()
    {
        $sql = "SELECT username FROM users;";
        $res = pg_query($sql) or die(pg_errormessage());

        $result = pg_query($sql);


        while ($fetch = pg_fetch_array($result)) {
            $user [] = $fetch['username'];
        }
        echo implode(" <br/>", $user);
    }
}


