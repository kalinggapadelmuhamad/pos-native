<?php

if (isset($_POST['profile-settings'])) {

    //collect data
    $idUser         = $_POST['idUser'];
    $fullName       = $_POST['fullName'];
    $email          = $_POST['email'];
    $phone          = $_POST['phone'];
    $address        = $_POST['address'];
    $gender         = $_POST['gender'];
    $passwordPlain  = $_POST['password'];
    $passwordHash   = password_hash($passwordPlain, PASSWORD_DEFAULT);

    //update data dan exe to employes tabel 
    $upProfile  = "UPDATE employes SET
                        fullName        = '$fullName',
                        email           = '$email',
                        phone           = '$phone',
                        address         = '$address',
                        gender          = '$gender',
                        passwordPlain   = '$passwordPlain',
                        passwordHash    = '$passwordHash'
                    WHERE idUser    = '$idUser'";

    $upProfilex = $conn->query($upProfile);

    //chech query true or false
    if ($upProfilex) {

        //direct to dashboard profile page
        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'success',
                    text: 'Berhasil Update Data',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = 'profile';
                    }
                })
            </script>";
    } else {

        //query false
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'error',
                    text: 'Gagal Update Data',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = 'profile';
                    }
                })
            </script>";
    }
}
