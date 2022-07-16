<?php

//select data from detailinvoice tabe;
$selDetin   = "SELECT detailinvoice.idDetailinvoice,
                employes.fullName,
                detailinvoice.noInvoice,
                detailinvoice.qtyTotal,
                detailinvoice.grandTotal,
                detailinvoice.pay,
                detailinvoice.change,
                detailinvoice.inputDate
                FROM detailinvoice, employes
                WHERE detailinvoice.idUser = employes.idUser";

$selDetinx  = $conn->query($selDetin);


$selDetinsum   = "SELECT detailinvoice.idDetailinvoice,
                employes.fullName,
                detailinvoice.noInvoice,
                SUM(detailinvoice.qtyTotal) as totalQty,
                SUM(detailinvoice.grandTotal) as subtotal,
                detailinvoice.pay,
                detailinvoice.change,
                detailinvoice.inputDate
                FROM detailinvoice, employes
                WHERE detailinvoice.idUser = employes.idUser;";

$selDetinsumx  = $conn->query($selDetinsum);
$selDetinsumd = $selDetinsumx->fetch_object();

$selInvp     = "SELECT invoice.*, items.* FROM invoice, items WHERE invoice.idItems = items.idItems";
$selInvpx    = $conn->query($selInvp);
$submodal    = 0;
