<?php

//collect data from items table
$selItems    = "SELECT items.idItems,
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
                            items.idSupplier = suppliers.idSupplier";

$selItemsx = $conn->query($selItems);
$selItemsrx = $conn->query($selItems);
