<?php
require 'config.php';

if (isset($_GET['id'])) {
    $sql = "DELETE FROM game_applicants WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['id']]);

    echo "Record deleted!";
}
?>