<?php
session_start();
// Check if the admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
 header("Location: index.php");
 exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin.css">
    <title>Document</title>
</head>
<body>
    <h1>Admin ADD DESTINATION</h1>
    <form action="./insert.php" method="post">
        
        <label for="title">Title : </label>
        <input type="text" name="title" id="title" ><br>
        <label for="rating">Rating : </label>
        <input type="number" name="rating" id="rating" min="0" max="6" value="0"required><br>
        <label for="link">Link : </label>
        <input type="url" name="link" id="link"required><br>
        <label for="best">Best Time To Visit : </label>
        <input type="date" name="best" id="best"required><br>
        <label for="location">Location : </label>
        <input type="text" name="location" id="location" placeholder="location"required><br>
        <label for="description">Description : </label>
        <input type="text"name="description" id="description" required><br>
        <label for="image">Image :</label>
        <input type="url" name="image" id="image" required> <br>
        <input type="submit" value="Upload" name="upload">
    </form>
    <a href="./homepage.php">Skip -></a>
</body>
</html>