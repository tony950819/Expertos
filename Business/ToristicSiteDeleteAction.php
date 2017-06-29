<?php

include '../Business/TouristicSiteBusiness.php';


$id = $_GET['id'];



$siteBusiness = new TouristicSiteBusiness();

$siteBusiness->deleteSite($id);

header("location: ../View/showTouristicSites.php");
