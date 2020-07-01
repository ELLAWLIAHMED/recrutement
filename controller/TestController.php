<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
chdir('..');
include_once 'service/ConcourService.php';


$ms = new ConcourService();


header('Content-type: application/json');
echo json_encode($ms->findAll());
?>
