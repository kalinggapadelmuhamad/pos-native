<?php

if (isset($_POST['items-add'])) {

    //collcet data
    $idCategories   = $_POST['categoriesItems'];
    $idSuppliers    = $_POST['suppliers'];

    //select categories name
    $selCategoriesnameidx   = $conn->query("SELECT categoriesName FROM categories WHERE idCategories = '$idCategories'");
    $selCategoriesnameidd   = $selCategoriesnameidx->fetch_object();
    $textCat                = strtoupper(substr($selCategoriesnameidd->categoriesName, 0, 2));

    //select supplier name
    $selSuppliernameidx = $conn->query("SELECT supplierName FROM suppliers WHERE idSupplier = '$idSuppliers'");
    $selSuppliernameidd = $selSuppliernameidx->fetch_object();
    $textSup            = strtoupper(substr($selSuppliernameidd->supplierName, 0, 2));

    //generate items code
    $itemsCodes = $textCat . $textSup . date('YmdHis');

    //collect data
    $itemsName      = $_POST['itemName'];
    $capitalPrice   = $_POST['capitalPrice'];
    $sellingPrice   = $_POST['sellingPrice'];
    $stockItem      = $_POST['stock'];
    $inputDate      = date('Y-m-d H:i:s');

    //chech items name user or not
    $selItemsname   = "SELECT * FROM items WHERE itemsName = '$itemsName'";
    $selItemsnamex  = $conn->query($selItemsname);
    $selItemsnamer  = $selItemsnamex->num_rows;

    if ($selItemsnamer > 0) {

        //query true redirect to dashboard paga items
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

        //insert to items
        $inItems    = "INSERT INTO items VALUES(
                            '', 
                            '$idCategories', 
                            '$idSuppliers', 
                            '$itemsCodes', 
                            '$itemsName', 
                            '$capitalPrice', 
                            '$sellingPrice', 
                            '$stockItem',
                            DEFAULT,
                            '$inputDate', 
                            DEFAULT)";

        $inItemsx   = $conn->query($inItems);

        //chechk query 
        if ($inItemsx) {

            //true
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'success',
                        text: 'Berhasil Tambah Items',
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
                        text: 'Gagal Tambah Items',
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
