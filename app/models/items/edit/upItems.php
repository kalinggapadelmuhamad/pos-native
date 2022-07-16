<?php

if (isset($_POST['items-edit'])) {

    //collect data
    $idItems        = $_POST['idItems'];
    $idCategories   = $_POST['categoriesItems'];
    $idSuppliers    = $_POST['suppliers'];
    $itemsNamenew   = $_POST['itemNamenew'];
    $itemsNameold   = $_POST['itemNameold'];
    $capitalPrice   = $_POST['capitalPrice'];
    $sellingPrice   = $_POST['sellingPrice'];
    $updateDate     = date('Y-m-d H:i:s');

    //check user old or new items name
    if ($itemsNamenew == $itemsNameold) {

        //use old items name 
        $upItemsold    = "UPDATE items SET
                                idCategories    = '$idCategories',
                                idSupplier      = '$idSuppliers',
                                itemsName       = '$itemsNameold',
                                capitalPrice    = '$capitalPrice',
                                sellingPrice    = '$sellingPrice',
                                updateDate      = '$updateDate'
                            WHERE idItems   = '$idItems'";

        $upItemsoldx   = $conn->query($upItemsold);

        //check query
        if ($upItemsoldx) {

            //true
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'success',
                        text: 'Berhasil Update Items',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'items';
                        }
                    })
                </script>";
        } else {

            //false
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'error',
                        text: 'Gagal Update Items',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'items';
                        }
                    })
                </script>";
        }

        //user new items name
    } else {

        //filter items name
        $selItemsname   = "SELECT itemsName FROM items WHERE itemsName = '$itemsNamenew'";
        $selItemsnamex  = $conn->query($selItemsname);
        $selItemsnamer  = $selItemsnamex->num_rows;

        //check rows
        if ($selItemsnamer > 0) {

            //data found 
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'error',
                        text: 'Items Sudah Ada',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'items';
                        }
                    })
                </script>";
        } else {

            //data not found uodate items
            $upItemsnew     = "UPDATE items SET
                                    idCategories    = '$idCategories',
                                    idSupplier      = '$idSuppliers',
                                    itemsName       = '$itemsNamenew',
                                    capitalPrice    = '$capitalPrice',
                                    sellingPrice    = '$sellingPrice',
                                    updateDate      = '$updateDate'
                                WHERE idItems   = '$idItems'";

            $upItemsnewx    = $conn->query($upItemsnew);

            //check query
            if ($upItemsnewx) {

                //true
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'success',
                        text: 'Berhasil Update Items',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'items';
                        }
                    })
                </script>";
            } else {

                //false
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'error',
                        text: 'Gagal Update items',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'items';
                        }
                    })
                </script>";
            }
        }
    }
}
