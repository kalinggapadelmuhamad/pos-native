<?php

if (isset($_GET['table'])) {

    //collect data
    $tabel      = $_GET['table'];
    $id         = $_GET['id'];
    $page       = $_GET['page'];
    $params     = '';

    //filter tabel
    if ($tabel == 'employes') {

        $params = 'idUser';
    } else if ($tabel == 'suppliers') {

        $params = 'idSupplier';
    } else if ($tabel == 'categories') {

        $params = 'idCategories';
    } else if ($tabel == 'items') {

        $params = 'idItems';
    } else if ($tabel == 'sales') {

        $params = 'idCart';
        $tabel  = 'cart';
    }

    if (isset($_GET['qty'])) {

        $qty        = $_GET['qty'];
        $idItems    = $_GET['idItems'];

        $upStock  =  "UPDATE items SET stockReady = stockReady+'$qty' WHERE idItems = '$idItems'";
        $upStockx = $conn->query($upStock);

        $delData    = "DELETE FROM $tabel WHERE $params = '$id'";
        $delDatax  = $conn->query($delData);

        //chech query tru or false
        if ($upStockx && $delDatax) {

            //direct to dashboard
            echo "<script>
                    Swal.fire({
                        icon    : 'success',
                        title   : 'success',
                        text    : 'Data Berhasil Di Hapus',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = '../../../../../" . $page . "';
                        }
                    })
                </script>";
        } else {

            //query false
            echo "<script>
                    Swal.fire({
                        icon    : 'error',
                        title   : 'error',
                        text    : 'Gagal Menghapus Data',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = '../../../../" . $page . "';
                        }
                    })
                </script>";
        }
    } else if (isset($_GET['idInv'])) {


        $idInv      = $_GET['idInv'];
        $idDetinv   = $_GET['id'];

        $delDetinv  = "DELETE FROM detailinvoice WHERE idDetailinvoice = '$idDetinv'";
        $delDetinvx = $conn->query($delDetinv);

        $delInv     = "DELETE FROM invoice WHERE noInvoice = '$idInv'";
        $delInvx    = $conn->query($delInv);

        //chech query 
        if ($delDetinvx && $delInvx) {

            //direct to page sales report
            echo "<script>
                        Swal.fire({
                            icon    : 'success',
                            title   : 'success',
                            text    : 'Data Berhasil Di Hapus',
                            confirmButtonText: 'Ok'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.location = '../../../../" . $page . "';
                            }
                        })
                    </script>";
        } else {

            //query false
            echo "<script>
                    Swal.fire({
                        icon    : 'error',
                        title   : 'error',
                        text    : 'Gagal Menghapus Data',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = '../../../../" . $page . "';
                        }
                    })
                </script>";
        }
    } else {

        //delete data from tabel
        $delData    = "DELETE FROM $tabel WHERE $params = '$id'";
        $delDatax  = $conn->query($delData);

        //chech query tru or false
        if ($delDatax) {

            //direct to dashboard
            echo "<script>
                Swal.fire({
                    icon    : 'success',
                    title   : 'success',
                    text    : 'Data Berhasil Di Hapus',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = '../../../" . $page . "';
                    }
                })
            </script>";
        } else {

            //query false
            echo "<script>
                Swal.fire({
                    icon    : 'error',
                    title   : 'error',
                    text    : 'Gagal Menghapus Data',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = '../../../" . $page . "';
                    }
                })
            </script>";
        }
    }
}
