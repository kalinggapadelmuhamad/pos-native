<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Employes</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../" class="text-success">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Employes</li>
        </ol>
    </div>
    <div class="row mb-3">

        <?php

        //print employes
        require_once "report/reportEmployes.php"
        ?>

        <div class=" col-xl-12 col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <?php

                    //filter level
                    if ($_SESSION['level'] == "admin") {

                        require_once "app/views/dashboard/employes/add/addEmployes.php";
                    ?>
                        <a href="" class=" btn btn-sm btn-danger" onclick="document.title='Data Employes';window.print()"><i class="fas fa-file-pdf fa-fw"></i></a>
                    <?php } else { ?>
                    <?php }
                    ?>
                </div>
                <div class="card-body text-kecil">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light text-center">
                                <tr>
                                    <th>NO</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <?php

                                    //filter level
                                    if ($_SESSION['level'] == "admin") { ?>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                while ($selEmployesd   = $selEmployesx->fetch_object()) {    ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $selEmployesd->fullName ?></td>
                                        <td><?= $selEmployesd->email ?></td>
                                        <td><?= $selEmployesd->phone ?></td>
                                        <td><?= $selEmployesd->address ?></td>
                                        <td><?= $selEmployesd->gender ?></td>
                                        <?php

                                        //filter level
                                        if ($_SESSION['level'] == "admin") { ?>
                                            <td><?= $selEmployesd->username ?></td>
                                            <td><?= $selEmployesd->level ?></td>
                                            <td class="text-center">
                                                <?php require "app/views/dashboard/employes/edit/editEmployes.php" ?>
                                                <a href="employes/delete/employes/<?= $selEmployesd->idUser ?>" class=" btn btn-sm btn-warning"><i class="fas fa-trash fa-fw"></i></a>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->
</div>