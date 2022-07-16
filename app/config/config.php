<?php

session_start();
date_default_timezone_set("Asia/Jakarta");

$db_server  = "Localhost";
$db_user    = "root";
$db_pass    = "";
$db_name    = "posapp";

$conn   = new mysqli($db_server, $db_user, $db_pass, $db_name);

function baseUrl($url)
{
    echo "   yourbaseUrl/pointofsales/" . $url;
}
