<?php

//collect data from supplier tabel
$selSupplierId  = "SELECT * FROM suppliers WHERE idSupplier = '$selSupplierd->idSupplier'";
$selSupplierIdx = $conn->query($selSupplierId);
$selSupplierIdd = $selSupplierIdx->fetch_object();
