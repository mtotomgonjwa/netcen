<?php
include_once 'db/connect.php';

$sql = "SELECT username FROM users;";
$res = pg_query($sql) or die(pg_errormessage());

$result = pg_query($sql);
$end = pg_num_fields($sql);


while ($fetch = pg_fetch_array($result)) {
    print_r($fetch);
}
