<?php

if (isset($_POST['sales-checkout'])) {

    //collect data
    $idUser     = $_SESSION['idUser'];
    $noInv      = $_POST['noInv'];
    $qtyTotal   = $_POST['qtyTotal'];
    $grandTotal = $_POST['grandTotal'];
    $pay        = $_POST['pay'];
    $change     = $_POST['change'];
    $inDate     = date('Y-m-d H:i:s');

    //update noInv to tabel cart
    $upCart     = "UPDATE cart SET noInvoice = '$noInv'";
    $upCartx    = $conn->query($upCart);

    //insert to invoice tabel
    $inInvoice  = "INSERT INTO invoice (idItems,noInvoice,qty) SELECT idItems,noInvoice,qty FROM cart;";
    $inInvoicex = $conn->query($inInvoice);

    //insert to detailInvoice tabel
    $inDetinv   = "INSERT INTO detailinvoice VALUES ('','$idUser','$noInv','$qtyTotal','$grandTotal','$pay','$change','$inDate')";
    $inDetinvx  = $conn->query($inDetinv);

    //clear cart
    $delCart    = "DELETE FROM cart";
    $delCartx   = $conn->query($delCart);

    //direct to page if true
    if ($upCartx && $inInvoicex && $inDetinvx) {

        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: '',
                    text: 'Pembayarn Berhasil',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = 'sales';
                    }
                })
            </script>";
    }
}
