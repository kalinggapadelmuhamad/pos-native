<?php

//select data from employes table by id
$selEmployesId  = "SELECT * FROM employes WHERE idUser = '$selEmployesd->idUser'";
$selEmployesIdx = $conn->query($selEmployesId);
$selEmployesIdd = $selEmployesIdx->fetch_object();
