<?php
require_once("../models/villes_france.php");

if(isset($_POST['ville_code_postal'])){
    $cpField = $_POST['ville_code_postal'];
    $villes = array();

    $villes_france = new villes_france();
    $villes_france->ville_code_postal = $cpField;
    $villes = $villes_france->getVilles();
    echo json_encode($villes);
    exit();
}

require_once("../views/getVille.php");

?>