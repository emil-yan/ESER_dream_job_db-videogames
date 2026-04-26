<?php
require 'config.php';
$stmt = $pdo->query("SELECT * FROM game_applicants");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Applicants List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">
<h2>Game Developer Applicants</h2>

<a href="create.php" class="btn-add">+ Add Applicant</a>

<table class="table">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Language</th>
    <th>Experience</th>
    <th>Actions</th>
</tr>

<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
<tr>
    <td><?= $row['first_name']." ".$row['last_name']; ?></td>
    <td><?= $row['email']; ?></td>
    <td><?= $row['programming_language']; ?></td>
    <td><?= $row['experience_level']; ?></td>
    <td class="actions">
        <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
        |
        <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Delete this record?')">Delete</a>
    </td>
</tr>
<?php endwhile; ?>

</table>
</div>

</body>
</html>