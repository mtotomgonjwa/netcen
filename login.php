<?php
//connet to the server
include_once 'db/connect.php';


//get values from the login form in login.html files
$login_username = $_POST['login-username'];
$login_password = $_POST['login-password'];

//prevent pg-sqll injection

$login_username = stripcslashes($login_username);
$login_password = stripcslashes($login_password);
$login_username = pg_escape_string($login_username);
$login_password = pg_escape_string($login_password);

//query the database foe the user
session_start();
$_SESSION ['username'] = $login_username;

$sql = "select * from users where username = '$login_username' and password1 = '$login_password';";
$result = pg_query($sql) or die ("Unable to Query Database" . pg_errormessage());

$row = pg_fetch_row($result);
//die(var_dump($row[1]));

if ($row[1] == $login_username && $row[3] == $login_password) {
    echo "login success";
    header('Location: netcen.php ');
} else {
    echo "Failed to login";
}
