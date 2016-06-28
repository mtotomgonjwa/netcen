<?php
require_once 'db/connect.php';

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password1 = trim($_POST['typepassword1']);
$password2 = trim($_POST['typepassword2']);

$query = "SELECT * FROM USERS where username = '$username'";

$sql = "INSERT INTO USERS (username,email,password1,password2) 
                              VALUES ('$username','$email','$password1','$password2');";
$result = pg_query($query);

if (empty($username) || empty($email) || empty($password1) || empty($password2)) {
    echo "You did not fill the required fields";
} else if ($result && pg_num_rows($result) > 0) {

    echo "Username Exists";

} elseif (!$password1 === $password2) {
    echo
    ("Oops! Password did not match! Try again. ");
} else if (pg_query($sql)) {

    echo "Record successfull inserted";
} else {
    echo pg_errormessage();
}
