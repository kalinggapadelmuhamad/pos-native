<?php

//auth
require "app/models/auth/auth.php";

//profile
require "app/models/profile/selProfile.php";
require "app/models/profile/update/upProfile.php";

//employes
require "app/models/employes/selEmployes.php";
require "app/models/employes/add/inEmployes.php";
require "app/models/employes/edit/upEmployes.php";

//supplier
require "app/models/supplier/selSupplier.php";
require "app/models/supplier/add/inSupplier.php";
require "app/models/supplier/edit/upSupplier.php";

//categories
require "app/models/categories/selCategories.php";
require "app/models/categories/add/inCategories.php";
require "app/models/categories/edit/upCategories.php";

//items
require "app/models/items/selItems.php";
require "app/models/items/add/inItems.php";
require "app/models/items/edit/upItems.php";
require "app/models/items/hidden/selectFitur.php";
require "app/models/items/hidden/hiddenItems.php";

//stcok in
require "app/models/stock/selStock.php";
require "app/models/stock/edit/upStock.php";

//sales
require "app/models/sales/selCart.php";
require "app/models/sales/selNota.php";
require "app/models/sales/add/inCart.php";
require "app/models/sales/add/inInv.php";
require "app/models/sales/edit/upCart.php";

//report
require "app/models/report/selReport.php";

require "app/models/delete/delete.php";
