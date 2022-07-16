<?php

$selFitur   = "SELECT * FROM fitur WHERE fiturName = 'hideItems'";
$selFiturx  = $conn->query($selFitur);
$selFiturd  = $selFiturx->fetch_object();
