<?php ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Applicant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">
<h2>Add Game Developer Applicant</h2>

<form action="insert.php" method="POST">
    First Name:
    <input type="text" name="first_name" required>

    Last Name:
    <input type="text" name="last_name" required>

    Email:
    <input type="email" name="email" required>

    Contact Number:
    <input type="text" name="contact_number" required>

    Programming Language:
    <input type="text" name="programming_language" required>

    Experience Level:
    <select name="experience_level">
        <option>Beginner</option>
        <option>Intermediate</option>
        <option>Advanced</option>
    </select>

    Portfolio Link:
    <input type="text" name="portfolio_link">

    <button type="submit">Add Applicant</button>
</form>

<br>
<a href="index.php">⬅ Back to List</a>
</div>

</body>
</html>