<?php

if (isset($_POST['itemsCode'])) {

    //collect data
    $itemsCode  = $_POST['itemsCode'];

    //select stck from items tabel by id
    $selItemsid     = "SELECT * FROM items WHERE itemsCode = '$itemsCode'";
    $selItemsidx    = $conn->query($selItemsid);
    $selItemsidd    = $selItemsidx->fetch_object();
    $selItemsidr    = $selItemsidx->num_rows;

    //filter query
    if ($selItemsidr < 1) {

        //data not found
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'error',
                    text: 'Barang Tidak Ditemukan',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = 'sales';
                    }
                })
            </script>";
    } else {

        //data found check stock items
        if ($selItemsidd->stockReady == 0) {

            //data found but stock is empty
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'error',
                        text: 'Stock Barang Kosong',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'sales';
                        }
                    })
                </script>";
        } else {

            //check data from tabel cart
            $selCartid  = "SELECT * FROM cart WHERE idItems = '$selItemsidd->idItems'";
            $selCartidx = $conn->query($selCartid);
            $selCartidr = $selCartidx->num_rows;

            //check query
            if ($selCartidr == 0) {

                //data found enough stock and not inputed
                $inCart     = "INSERT INTO cart VALUES ('','$selItemsidd->idItems','','1')";
                $inCartx    = $conn->query($inCart);

                $upStock  =  "UPDATE items SET stockReady = stockReady-'1' WHERE idItems = '$selItemsidd->idItems'";
                $upStockx = $conn->query($upStock);

                //success goto sales page
                echo "<script>
                        document.location = 'sales'    
                    </script>";
            } else {

                //data was inputed
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'error',
                            text: 'Barang Sudah Di Input',
                            confirmButtonText: 'Ok'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.location = 'sales';
                            }
                        })
                    </script>";
            }
        }
    }
}
