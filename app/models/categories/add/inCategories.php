<?php

if (isset($_POST['categories-add'])) {

    //collect data
    $categoriesName     = $_POST['categoriesName'];
    $description        = $_POST['description'];
    $tglInput           = date('Y-m-d H:i:s');

    //filter categories name
    $selCategoriesname  = "SELECT categoriesName  FROM categories WHERE categoriesName = '$categoriesName'";
    $selCategoriesnamex = $conn->query($selCategoriesname);
    $selCategoriesnamer = $selCategoriesnamex->num_rows;

    //cheack data found or not
    if ($selCategoriesnamer > 0) {

        //data found redirect to dashboard page catgoeries
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

        //data not found insert catgeorie
        $inCategories   = "INSERT INTO categories VALUES('','$categoriesName','$description','$tglInput',DEFAULT)";
        $inCategoriesx  = $conn->query($inCategories);

        //check query true or false
        if ($inCategoriesx) {

            //query true redirect to dashboard page categories
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'success',
                        text: 'Berhasil Tambah Categoires',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'categories';
                        }
                    })
                </script>";
        } else {

            //query false redirect to dashboard page categorie
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'error',
                        text: 'Gagal Tambah Categories',
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
