<?php 
header('Content-Type: application/json');
include "bd.php";



$stmt = $db->prepare("SELECT * FROM personne");
$stmt -> execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);

?>