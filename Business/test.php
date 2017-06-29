<?php

/* 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include '../Business/TouristicSiteBusiness.php';

$site = new TouristicSiteBusiness();

$s = new TouristicSite(0, 1, 'Sitio 1', 'hssadvfs', 100, '849y43urehgjhg', 'vjniefngrei', '4837hgewudivs', 'A');
echo "hok,a" . $site->insertTouristicSite($s);
