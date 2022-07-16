<?php

if (isset($_POST['supplier-add'])) {

    //collect data
    $supplierName       = $_POST['supplierName'];
    $email              = $_POST['email'];
    $phone              = $_POST['phone'];
    $address            = $_POST['address'];
    $description        = $_POST['description'];

    //filter supplier name
    $selSuppliername    = "SELECT * FROM suppliers WHERE supplierName = '$supplierName'";
    $selSuppliernamex   = $conn->query($selSuppliername);
    $selSuppliernamer   = $selSuppliernamex->num_rows;

    //check if supplier name found or not 
    if ($selSuppliernamer > 0) {

        //supplier found redirect to dashboard page suppliers
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'error',
                    text: 'Supplier Sudah Ada',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = 'suppliers';
                    }
                })
            </script>";
    } else {

        //supplier no found insert supplier
        $inSupplier     = "INSERT INTO suppliers VALUES('','$supplierName','$email','$phone','$address','$description')";
        $inSupplierx    = $conn->query($inSupplier);

        //check query true or false
        if ($inSupplierx) {

            //query true redirect to dashboard page suppliers
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'success',
                        text: 'Berhasil Tambah Suppliers',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'suppliers';
                        }
                    })
                </script>";
        } else {

            //query false redirect to dashboard page suppliers
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Gagal Tambah Suppliers',
                            confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'suppliers';
                        }
                    })
                </script>";
        }
    }
}
