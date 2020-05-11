<?php

chdir('..');
include_once 'service/CommissionService.php';
include_once 'service/ConcourService.php';

extract($_POST);

$cs = new CommissionService();
$ms = new ConcourService();
if($op == 'commission'){
header('Content-type: application/json');
echo json_encode($cs->countMembers($idEtab));
}elseif ($op=='postulation') {
  header('Content-type: application/json');
  echo json_encode($ms->findcountpostuleByEtab($idEtab));
}
