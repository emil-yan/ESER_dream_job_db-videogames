<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO game_applicants 
    (first_name, last_name, email, contact_number, programming_language, experience_level, portfolio_link)
    VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['contact_number'],
        $_POST['programming_language'],
        $_POST['experience_level'],
        $_POST['portfolio_link']
    ]);

    echo "Record added successfully!";
}
?>