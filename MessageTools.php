<?php

include_once "db/connect.php";

class MessageTools
{
    public function postMessages()
    {
        session_start();
        $username = $_SESSION['username'];
        $message = trim($_POST['InputMessage']);
        $date_time = date("Y-m-d H:i:s", time());
        $sql = "INSERT INTO conversation(chat) 
              VALUES ('{ \"username\": \"$username\", 
                           \"chat\": { \"datetime\": \"$date_time\", \"message\": \"$message\" } }');";
        if (empty($message)) {
            echo "Error! Empty Message";
        } else {
            pg_query($sql) or die(pg_errormessage());
        }
    }

}

$posmess = new MessageTools();
$posmess->postMessages();