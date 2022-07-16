<?php

if (isset($_POST['stock-in'])) {

    //colect data
    $idItems    = $_POST['idItems'];
    $stockIn    = $_POST['stockIn'];

    $upStock    = "UPDATE items SET stockReady = stockReady+'$stockIn' WHERE idItems = '$idItems'";
    $upStockx = $conn->query($upStock);

    if ($upStockx) {

        echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'success',
                        text: 'Berhasil Update Stock',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'stock';
                        }
                    })
                </script>";
    } else {

        echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'errorr',
                        text: 'Gagal Update Stock',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'stcok';
                        }
                    })
                </script>";
    }
}
