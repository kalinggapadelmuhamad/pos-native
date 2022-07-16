<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Categories</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../" class="text-success">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">categories</li>
        </ol>
    </div>

    <div class="row mb-3">
        <?php

        //print categories
        require_once "report/reportCategories.php"
        ?>
        <div class="col-xl-12 col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <?php

                    //filter level
                    if ($_SESSION['level'] == "admin") {

                        require_once "app/views/dashboard/categories/add/addCategories.php";
                    ?>
                        <a href="" class=" btn btn-sm btn-danger" onclick="document.title='Data Categories';window.print()"><i class="fas fa-file-pdf fa-fw"></i></a>
                    <?php } else {
                        require_once "app/views/dashboard/categories/add/addCategories.php"; ?>
                        <a href="" class=" btn btn-sm btn-danger" onclick="document.title='Data Categories';window.print()"><i class="fas fa-file-pdf fa-fw"></i></a>
                    <?php }
                    ?>
                </div>
                <div class="card-body text-kecil">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light text-center">
                                <tr>
                                    <th>NO</th>
                                    <th>Categories Name</th>
                                    <th>Description</th>
                                    <th>Input Date</th>
                                    <th>Update Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                while ($selCategoriesd = $selCategoriesx->fetch_object()) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $selCategoriesd->categoriesName ?></td>
                                        <td><?= $selCategoriesd->description ?></td>
                                        <td><?= $selCategoriesd->inputDate ?></td>
                                        <td><?= $selCategoriesd->updateDate ?></td>
                                        <?php

                                        //filter level
                                        if ($_SESSION['level'] == "admin") { ?>
                                            <td class="text-center">
                                                <?php include "app/views/dashboard/categories/edit/editCategories.php" ?>
                                                <a href="categories/delete/categories/<?= $selCategoriesd->idCategories ?>" class="mt-1 btn btn-sm btn-warning"><i class="fas fa-trash fa-fw"></i></a>
                                            </td>
                                        <?php } else { ?>
                                            <td>
                                                <?php include "app/views/dashboard/categories/edit/editCategories.php" ?>
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



    <!-- Modal Logout -->

</div>