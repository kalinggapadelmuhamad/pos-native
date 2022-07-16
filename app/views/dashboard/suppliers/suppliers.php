<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Suppliers</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../" class="text-success">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Suppliers</li>
        </ol>
    </div>

    <div class="row mb-3">
        <?php

        //print supplier
        require_once "report/reportSupplier.php";

        ?>
        <div class="col-xl-12 col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <?php

                    //filter level
                    if ($_SESSION['level'] == "admin") {

                        require_once "app/views/dashboard/suppliers/add/Addsupplier.php";
                    ?>
                        <a href="" class=" btn btn-sm btn-danger" onclick="document.title='Data Supplier';window.print()"><i class="fas fa-file-pdf fa-fw"></i></a>
                    <?php } else {

                        require_once "app/views/dashboard/suppliers/add/Addsupplier.php";
                    ?>
                        <a href="" class=" btn btn-sm btn-danger" onclick="document.title='Data Supplier';window.print()"><i class="fas fa-file-pdf fa-fw"></i></a>
                    <?php }
                    ?>
                </div>
                <div class="card-body text-kecil">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light text-center">
                                <tr>
                                    <th>NO</th>
                                    <th>Supplier Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                while ($selSupplierd = $selSupplierx->fetch_object()) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $selSupplierd->supplierName ?></td>
                                        <td><?= $selSupplierd->email ?></td>
                                        <td><?= $selSupplierd->phone ?></td>
                                        <td><?= $selSupplierd->address ?></td>
                                        <td><?= $selSupplierd->description ?></td>
                                        <?php

                                        //filter level
                                        if ($_SESSION['level'] == "admin") { ?>
                                            <td class="text-center">
                                                <?php require "app/views/dashboard/suppliers/edit/editsupplier.php" ?>
                                                <a href="suppliers/delete/suppliers/<?= $selSupplierd->idSupplier ?>" class=" btn btn-sm btn-warning mt-1"><i class="fas fa-trash fa-fw"></i></a>
                                            </td>
                                        <?php } else { ?>
                                            <td class="text-center">
                                                <?php require "app/views/dashboard/suppliers/edit/editsupplier.php" ?>
                                            </td>
                                        <?php   } ?>
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



    <!-- Modal Logout -->

</div>