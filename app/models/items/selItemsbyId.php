<?php

$selectItemsid      = "SELECT items.idItems,
                        categories.categoriesName,
                        suppliers.supplierName,
                        items.itemsCode,
                        items.itemsName,
                        items.capitalPrice,
                        items.sellingPrice,
                        items.stockReady,
                        items.inputDate,
                        items.updateDate 
                        FROM items, categories, suppliers 
                        WHERE items.idCategories = categories.idCategories AND
                        items.idSupplier = suppliers.idSupplier AND items.idItems = '$selItemsxd->idItems'";
$selectItemsidx     = $conn->query($selectItemsid);
$selectItemsidd     = $selectItemsidx->fetch_object();
