<?php


if (isset($_POST['items-hidden'])) {

    $itemsHidden    = $_POST['stockHidden'];

    $upFitur    = "UPDATE fitur SET qty = '$itemsHidden', isTrue = '1' WHERE fiturName = 'hideItems'";
    $upFiturx   = $conn->query($upFitur);

    if ($upFiturx) {

        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'success',
                    text: 'Hidden Items On',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = 'items';
                    }
                })
            </script>";
    }
}

if (isset($_POST['offHidden'])) {

    $upFitur    = "UPDATE fitur SET qty = '0', isTrue = '0' WHERE fiturName = 'hideItems'";
    $upFiturx   = $conn->query($upFitur);

    if ($upFiturx) {

        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'success',
                    text: 'Hidden Items Off',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = 'items';
                    }
                })
            </script>";
    }
}
