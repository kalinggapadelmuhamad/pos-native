<?php

if (isset($_POST['supplier-edit'])) {

    //collect data
    $idSupplier             = $_POST['idSupplier'];
    $supplierNameOld        = $_POST['supplierNameOld'];
    $supplierNameNew        = $_POST['supplierNameNew'];
    $email                  = $_POST['email'];
    $phone                  = $_POST['phone'];
    $address                = $_POST['address'];
    $description            = $_POST['description'];

    //filter supplier name 
    if ($supplierNameNew == $supplierNameOld) {

        //use supplier name old
        $upSupplierold = "UPDATE suppliers SET 
                                supplierName    = '$supplierNameOld',
                                email           = '$email',
                                phone           = '$phone',
                                address         = '$address', 
                                description     = '$description'
                            WHERE idSupplier    = '$idSupplier'";

        $upSupplieroldx = $conn->query($upSupplierold);

        //check query true or false
        if ($upSupplieroldx) {

            //query true redirect to dashboard page supplier
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'success',
                        text: 'Berhasil Update Supplier',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'suppliers';
                        }
                    })
                </script>";
        } else {

            //query false redirect to dashboard page supplier
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'errror',
                        text: 'Gagal Update Supplier',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'suppliers';
                        }
                    })
                </script>";
        }

        //user supplier name new
    } else {

        //fillter username new
        $selSuppliername    = "SELECT * FROM suppliers WHERE supplierName = '$supplierNameNew'";
        $selSuppliernamex   = $conn->query($selSuppliername);
        $selSuppliernamer   = $selSuppliernamex->num_rows;

        //chech if supplier name found
        if ($selSuppliernamer > 0) {

            //supplier name found redirect to dashboard page suppliers
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

            //supplier not found user new supplier name
            $upSuppliernew  = "UPDATE suppliers SET
                                    supplierName     = '$supplierNameNew',
                                    email            = '$email',
                                    phone            = '$phone',
                                    address          = '$address',
                                    description      = '$description'
                                WHERE idSupplier = '$idSupplier'";

            $upSuppliernewx = $conn->query($upSuppliernew);

            //check query true or false
            if ($upSuppliernewx) {

                //true redirect to dashborad page suppliers
                echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'success',
                            text: 'Berhasil Update Supplier',
                            confirmButtonText: 'Ok'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.location = 'suppliers';
                            }
                        })
                    </script>";
            } else {

                //fasle redirect to dashboard page suppliers
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'error',
                            text: 'Gagal Update Supplier',
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
}
