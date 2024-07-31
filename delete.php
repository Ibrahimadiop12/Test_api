<?php
header('Content-Type: application/json');
include "bd.php";

$id = (int) $_POST['id'];
$stmt = $db->prepare("DELETE FROM personne WHERE id = ? ");
$result = $stmt->execute([$id]);

echo json_encode([
    'id' => $id,
    'success' => $result
]);
?>
