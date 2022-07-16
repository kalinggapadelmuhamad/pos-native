<?php

if (isset($_GET['page'])) {

    $page = $_GET['page'];

    if ($page == "home") {

        require_once "app/views/dashboard/home/home.php";
    } else if ($page == "profile") {

        require_once "app/views/dashboard/profile/profile.php";
    } else if ($page == "employes") {

        require_once "app/views/dashboard/employes/employes.php";
    } else if ($page == "suppliers") {

        require_once "app/views/dashboard/suppliers/suppliers.php";
    } else if ($page == "categories") {

        require_once "app/views/dashboard/categories/categories.php";
    } else if ($page == "items") {

        require_once "app/views/dashboard/items/items.php";
    } else if ($page == "stock") {

        require_once "app/views/dashboard/stock/stock.php";
    } else if ($page == "sales") {

        require_once "app/views/dashboard/sales/sales.php";
    } else if ($page == "salesreport") {

        require_once "app/views/dashboard/report/salesreport.php";
    } else {

        echo "<script>document.location = 'home'</script>";
    }
    // elseif ($page == "profile") {

    //     require_once "app/views/dashboard/profile/showProfile.php";
    // } elseif ($page == "user") {

    //     require_once "app/views/dashboard/user/showUser.php";
    // } elseif ($page == "supplier") {

    //     require_once "app/views/dashboard/supplier/showSupplier.php";
    // } elseif ($page == "categories") {

    //     require_once "app/views/dashboard/categories/showCategories.php";
    // } elseif ($page == "Penjualan") {
    //     // require_once "app/views/admin/report/penjualan.php";
    // } elseif ($page == "Setting") {
    //     // require_once "app/views/admin/themplate/profile.php";
    // } elseif ($page == "Supplier") {
    //     // require_once "app/views/admin/suplier/suplier.php";
    // } else {
    //     echo "<script>document.location = 'dashboard/home'</script>";
    // }
} else {
    echo "<script>document.location = 'dashboard/home'</script>";
}
