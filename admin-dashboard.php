<?php
session_start();
// Check if the admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
 header("Location: index3.html");
 exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin Dashboard</title>
 
</head>
<body>
 <div class="dashboard-container">
 <h2>Admin Dashboard - Add Destination</h2>
 <form action="insert_student.php" method="POST">
 <label for="name">Name:</label>
 <input type="text" id="name" name="name" required><br><br>
 <label for="location">Location:</label>
 <input type="text" id="location" name="location" required><br><br>
 <label for="description">Description:</label>
 <select id="description" name="description" required>
 </select><br><br>
 <label for="best_time_to_visit">Best Time To Visit:</label>
 <input type="text" id="best_time_to_visit" name="best_time_to_visit" required><br><br>
 <label for="course">Course Selected:</label>
 <input type="text" id="created_at" name="created_at" required><br><br>
 <input type="submit" value="Submit">
 </form>
 </div>
</body>
</html>