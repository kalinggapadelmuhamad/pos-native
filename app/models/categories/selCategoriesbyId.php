<?php

$selCategoriesId    = "SELECT * FROM categories WHERE idCategories = '$selCategoriesd->idCategories' ";
$selCategoriesIdx   = $conn->query($selCategoriesId);
$selCategoriesIdd   = $selCategoriesIdx->fetch_object();
