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
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: orange;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Form container */
form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 400px;
    box-sizing: border-box;
}

/* Form labels */
label {
    font-size: 16px;
    font-weight: bold;
    display: block;
    margin-bottom: 6px;
    color: blue;
}

/* Input fields */
input[type="text"],
input[type="number"],
input[type="url"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    border: 1px solid transparent;
    border-radius: 4px;
    font-size: 14px;
    margin-bottom: 20px;
    box-sizing: border-box;
}

/* Submit button */
input[type="submit"] {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 12px;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
}

input[type="submit"]:hover {
    background-color: green;
}

/* Form layout spacing */
form > label, form > input {
    margin-bottom: 12px;
}

/* Adjustments for smaller screens */
@media (max-width: 480px) {
    form {
        width: 100%;
        padding: 15px;
    }
}
    </style>
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