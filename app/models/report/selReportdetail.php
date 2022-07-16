<?php


//sellect data invoice tabel by no Invoice
$selInv     = "SELECT invoice.*, items.* FROM invoice, items WHERE noInvoice = '$selDetinxd->noInvoice' AND invoice.idItems = items.idItems";
$selInvx    = $conn->query($selInv);

//get idItems bt no Inv
