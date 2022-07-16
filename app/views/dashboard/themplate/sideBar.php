<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
        <div class="sidebar-brand-icon">
            <img src="../assets/img/logo/logo.png">
        </div>
        <div class="sidebar-brand-text mx-3">PointOfSales</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="home">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Master
    </div>
    <?php if ($_SESSION['level'] == "admin") { ?>
        <li class="nav-item">
            <a class="nav-link" href="employes">
                <i class="fas fa-fw fa-users"></i>
                <span>Employes</span>
            </a>
        </li>
    <?php } ?>
    <li class="nav-item">
        <a class="nav-link" href="suppliers">
            <i class="fas fa-fw fa-truck"></i>
            <span>Suppliers</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fas fa-fw fa-box"></i>
            <span>Products</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Products</h6>
                <a class="collapse-item" href="categories">Categories</a>
                <a class="collapse-item" href="items">items</a>
                <a class="collapse-item" href="stock">Stock In</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Transaction
    </div>
    <li class="nav-item">
        <a class="nav-link" href="sales">
            <i class="fas fa-fw fa-cash-register"></i>
            <span>Sales</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Report</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Report</h6>
                <a class="collapse-item" href="salesreport">Sales Report</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>