<?php

if (isset($_POST['sales-edit'])) {

    //collecy data
    $idItems    = $_POST['idItems'];
    $idCart     = $_POST['idCart'];
    $qty        = $_POST['qty'];

    //sellect items
    $selItemsid     = "SELECT * FROM items WHERE idItems = '$idItems'";
    $selItemsidx    = $conn->query($selItemsid);
    $selItemsidd    = $selItemsidx->fetch_object();

    //get stock
    $stock      = $selItemsidd->stockReady;
    $cekStock   = $stock - $qty;

    //check stokReady enough or not
    if ($cekStock < 0) {

        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'error',
                    text: 'Stock Tidak Mencukupi',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = 'sales';
                    }
                })
            </script>";
    } else {

        //enough update qty
        $upQty  =  "UPDATE cart SET qty = qty+'$qty' WHERE idCart = '$idCart'";
        $upQtyx = $conn->query($upQty);

        //uodate qty items
        $upStock  =  "UPDATE items SET stockReady = stockReady-'$qty' WHERE idItems = '$idItems'";
        $upStockx = $conn->query($upStock);

        echo "<script>
                document.location = 'sales';
            </script>";
    }
}
