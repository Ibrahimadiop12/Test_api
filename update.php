<?php
header('Content-Type: application/json');
include "bd.php";

$id = (int) $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = (int) $_POST['age'];

$stmt = $db->prepare("UPDATE personne SET nom = ?, prenom = ?, age = ? WHERE id = ?");
$result = $stmt->execute([$nom, $prenom, $age, $id]);

echo json_encode([
    'success' => $result
]);
?>
