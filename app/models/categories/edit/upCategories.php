<?php

if (isset($_POST['categories-update'])) {

    //collect data
    $idKategori          = $_POST['idKategori'];
    $categoriesNameOld   = $_POST['categoriesNameOld'];
    $categoriesNameNew   = $_POST['categoriesNameNew'];
    $deskKat             = $_POST['deskKat'];
    $tglUpdt             = date('Y-m-d H:i:s');

    //chech categories name
    if ($categoriesNameNew == $categoriesNameOld) {

        //user categories odl
        $upCategoriesOld    = "UPDATE categories SET
                                    categoriesName          = '$categoriesNameOld',
                                    description             = '$deskKat',
                                    updateDate              = '$tglUpdt'
                                WHERE idCategories      = '$idKategori'";

        $upCategoriesOldx   = $conn->query($upCategoriesOld);

        //check query true or false
        if ($upCategoriesOldx) {

            //true
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'success',
                        text: 'Berhasil Update Categories',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'categories';
                        }
                    })
                </script>";
        } else {

            //fasle
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Gagal Update Categories',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'categories';
                        }
                    })
                </script>";
        }

        //user categorie name new
    } else {

        //check categories name
        $selCategoriesname  = "SELECT categoriesName  FROM categories WHERE categoriesName = '$categoriesNameNew'";
        $selCategoriesnamex = $conn->query($selCategoriesname);
        $selCategoriesnamer = $selCategoriesnamex->num_rows;

        //chech if supplier name found
        if ($selCategoriesnamer > 0) {

            //data found redirect to dashboard page categories
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'error',
                        text: 'Categories Sudah Ada',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'categories';
                        }
                    })
                </script>";
        } else {

            //update categories use new name
            $upCategoriesNew    = "UPDATE categories SET 
                                        categoriesName          = '$categoriesNameNew',
                                        description             = '$deskKat',
                                        updateDate              = '$tglUpdt'
                                    WHERE idCategories      = '$idKategori'";

            $upCategoriesNewx   = $conn->query($upCategoriesNew);

            //check query 
            if ($upCategoriesNew) {

                //true
                echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'success',
                            text: 'Berhasil Update Categories',
                            confirmButtonText: 'Ok'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.location = 'categories';
                            }
                        })
                    </script>";
            } else {

                //fasle
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'error',
                            text: 'Gagal Update Categories',
                            confirmButtonText: 'Ok'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.location = 'categories';
                            }
                        })
                    </script>";
            }
        }
    }
}
