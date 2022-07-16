<?php

$selStock    = "SELECT items.idItems,
                            categories.categoriesName,
                            suppliers.supplierName,
                            items.itemsCode,
                            items.itemsName,
                            items.capitalPrice,
                            items.sellingPrice,
                            items.stockMinimum,
                            items.stockReady,
                            items.inputDate,
                            items.updateDate 
                            FROM items, categories, suppliers 
                            WHERE items.idCategories = categories.idCategories AND
                            items.idSupplier = suppliers.idSupplier";

$selStockx = $conn->query($selStock);
