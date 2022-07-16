<?php

if (isset($_POST['employes-add'])) {

    //collect data
    $fullName       = $_POST['fullName'];
    $email          = $_POST['email'];
    $phone          = $_POST['phone'];
    $address        = $_POST['address'];
    $gender         = $_POST['gender'];
    $username       = $_POST['username'];
    $passwordPlain  = $_POST['password'];
    $passwordHash   = password_hash($passwordPlain, PASSWORD_DEFAULT);
    $level          = $_POST['level'];

    //filter username
    $selUsername    = "SELECT * FROM employes WHERE username = '$username'";
    $selUsernamex   = $conn->query($selUsername);
    $selUsernamer   = $selUsernamex->num_rows;

    //query filter username true
    if ($selUsernamer > 0) {

        //direct to dashboard page employes
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'error',
                    text: 'Username Sudah Digunakan',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = 'employes';
                    }
                })
            </script>";
    } else {

        //insert data into employes tabel
        $inEmployes     = "INSERT INTO employes VALUES ('','$fullName','$email','$phone','$address','$gender','$username','$passwordPlain','$passwordHash','$level')";
        $inEmployesx    = $conn->query($inEmployes);

        //chech query true or false
        if ($inEmployesx) {

            //direct to dashboard page employes
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'success',
                        text: 'Berhasil Tambah Employes',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'employes';
                        }
                    })
                </script>";
        } else {

            //query false
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'error',
                        text: 'Gagal Tambah Employes',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = 'employes';
                        }
                    })
                </script>";
        }
    }
}
