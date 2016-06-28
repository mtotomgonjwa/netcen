<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['name']) === true && empty($_POST['name']) === false) {

    require_once '../db/connect.php';

    $query = pg_query("SELECT names.location
                        FROM names 
                        WHERE names.name = '" . pg_escape_string(trim($_POST['name'])) . "'");

    echo (pg_num_rows($query) !== 0) ? pg_result($query, 0, 'location') : 'Name not found';
}