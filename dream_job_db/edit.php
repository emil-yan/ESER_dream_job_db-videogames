<?php
require 'config.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM game_applicants WHERE id=?");
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Applicant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">
<h2>Edit Applicant</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">

    First Name:
    <input type="text" name="first_name" value="<?= $row['first_name']; ?>">

    Last Name:
    <input type="text" name="last_name" value="<?= $row['last_name']; ?>">

    Email:
    <input type="email" name="email" value="<?= $row['email']; ?>">

    Contact Number:
    <input type="text" name="contact_number" value="<?= $row['contact_number']; ?>">

    Programming Language:
    <input type="text" name="programming_language" value="<?= $row['programming_language']; ?>">

    Experience Level:
    <select name="experience_level">
        <option <?= $row['experience_level']=="Beginner"?"selected":"" ?>>Beginner</option>
        <option <?= $row['experience_level']=="Intermediate"?"selected":"" ?>>Intermediate</option>
        <option <?= $row['experience_level']=="Advanced"?"selected":"" ?>>Advanced</option>
    </select>

    Portfolio Link:
    <input type="text" name="portfolio_link" value="<?= $row['portfolio_link']; ?>">

    <button type="submit">Update Applicant</button>
</form>

<br>
<a href="index.php">⬅ Back to List</a>
</div>

</body>
</html>