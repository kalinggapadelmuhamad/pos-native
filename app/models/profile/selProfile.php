<?php

//check session idUser
if (isset($_SESSION['idUser'])) {

    //collect data
    $idUser = $_SESSION['idUser'];

    //sekect data employes from table
    $selProfile     = "SELECT * FROM employes WHERE idUser = '$idUser'";
    $selProfilex    = $conn->query($selProfile);
    $selProfiled    = $selProfilex->fetch_object();

    //set session level user
    $_SESSION['level']      = $selProfiled->level;
    $_SESSION['fullName']  = $selProfiled->fullName;
}
