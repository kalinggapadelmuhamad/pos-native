<?php

if (isset($_POST['employes-update'])) {

    //collect data
    $idUser         = $_POST['idUser'];
    $fullName       = $_POST['fullName'];
    $email          = $_POST['email'];
    $phone          = $_POST['phone'];
    $address        = $_POST['address'];
    $gender         = $_POST['gender'];
    $level          = $_POST['level'];

    //check for password
    if (empty($_POST['passwordUserNew'])) {

        //use old password
        $passwordUser    = $_POST['passwordUserOld'];
        $passHashUser    = password_hash($passwordUser, PASSWORD_DEFAULT);
    } else {

        //user new password
        $passwordUser    = $_POST['passwordUserNew'];
        $passHashUser    = password_hash($passwordUser, PASSWORD_DEFAULT);
    }

    //update data to employes table
    $upEmployes     = "UPDATE employes SET
                            fullname        = '$fullName',
                            email           = '$email',
                            phone           = '$phone',
                            address         = '$address',    
                            gender          = '$gender',
                            passwordPlain   = '$passwordUser',
                            passwordHash    = '$passHashUser',                                
                            level           = '$level'
                        WHERE idUser    = '$idUser'";

    $upEmployesx    = $conn->query($upEmployes);

    //cek query tru or false
    if ($upEmployesx) {

        echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'success',
                        text: 'Berhasil Update Employes',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'employes';
                        }
                    })
                </script>";
    } else {

        echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'error',
                        text: 'Gagal Update Employes',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'employes';
                        }
                    })
                </script>";
    }
}
