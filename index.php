<?php

require "app/config/config.php";

if (isset($_SESSION['idUser'])) {

    require_once "app/views/dashboard/themplate/dashboard.php";
} else {

    $login = baseUrl('login');

    header("Location:     yourbaseurl/login");
}
