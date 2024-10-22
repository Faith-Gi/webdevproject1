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
    <title>Document</title>
</head>
<body>
    <form action="./insert.php" method="post">
        <label for="title">Title : </label>
        <input type="text" name="title" id="title" ><br><br>
        <label for="rating">Rating : </label>
        <input type="number" name="rating" id="rating" min="0" max="6" value="0"required><br><br>
        <label for="link">Link : </label>
        <input type="url" name="link" id="link"required><br><br>
        <label for="best">Best Time To Visit : </label>
        <input type="date" name="best" id="best"required><br><br>
        <label for="location">Location : </label>
        <input type="text" name="location" id="location" placeholder="location"required><br><br>
        <label for="description">Description : </label>
        <input type="text"name="description" id="description" required><br><br>
        <label for="image">Image :</label>
        <input type="url" name="image" id="image" required> <br><br>
        <input type="submit" value="Upload" name="upload">
    </form>
</body>
</html>