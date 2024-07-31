<?php
header('Content-Type: application/json');
include "bd.php";


$id = (int) $_GET['id'];
$stmt = $db->prepare("SELECT * FROM personne WHERE id = ? ");
$stmt -> execute([ $id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode(
    [
        'resultat' => $result
    ]
);
?>