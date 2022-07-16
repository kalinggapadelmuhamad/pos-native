<?php

if (isset($_POST['employes-auth'])) {

    //collect data
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    //select data from employes tabel
    $selAuth    = "SELECT * FROM employes WHERE username = '$username'";
    $selAuthx   = $conn->query($selAuth);
    $selAuthr   = $selAuthx->num_rows;

    //check user true or false
    if ($selAuthr > 0) {

        //select password if username true and verify password
        $selAuthd       = $selAuthx->fetch_object();
        $passwordHash   = $selAuthd->passwordHash;
        $passwordVerify = password_verify($password, $passwordHash);

        //check password true or false
        if ($passwordVerify) {

            //make session
            $_SESSION['idUser'] = $selAuthd->idUser;

            //redirect to dashboard
            echo "<script>
                    Swal.fire({
                        icon    : 'success',
                        title   : 'success',
                        text    : 'Berhasil Login',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'dashboard';
                        }
                    })
                </script>";
        } else {

            //password false
            echo "<script>
                    Swal.fire({
                        icon    : 'error',
                        title   : 'error',
                        text    : 'Password Salah',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'login';
                        }
                    })
                </script>";
        }
    } else {

        //username false
        echo "<script>
                Swal.fire({
                    icon    : 'error',
                    title   : 'error',
                    text    : 'Username Salah',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = 'login';
                    }
                })
            </script>";
    }
}
