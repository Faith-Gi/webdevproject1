<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin Login</title>
 <link rel="stylesheet" href="styles.css">
</head>
<body>
 <div class="login-container">
 <h2>Admin Login</h2>
 <form action="login.php" method="POST" onsubmit="return validateLogin()">
 <label for="username">Username:</label>
 <input type="text" id="username" name="username" required><br><br>
 
 <label for="password">Password:</label>
 <input type="password" id="password" name="password" required><br><br>
 
 <input type="submit" value="Login">
 </form>
 <div id="error-message" style="color: red; display: none;">
 Incorrect username or password!
 </div>
 </div>
</body>
<script src="scripts.js"></script>
</html>