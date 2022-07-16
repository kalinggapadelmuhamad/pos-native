<?php

//collect data
$selInv    = "SELECT MAX(noInvoice) as noInvoice FROM detailInvoice";
$selInvx   = $conn->query($selInv);
$selInvd   = $selInvx->fetch_object();


$noInv  = $selInvd->noInvoice;
$noUrut = substr($noInv, 9, 3);
$noUrut++;

$noInvdate  = date("jnyGi");
$noInvtext  = "INV";
$noInvfinal = $noInvtext . $noInvdate . sprintf("%03s", $noUrut);
