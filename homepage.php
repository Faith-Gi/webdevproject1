<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WanderLuxe Travel Portfolio</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <header>
        <h1>WanderLuxe</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#destinations">Destinations</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <a href="./admins.php">Add Destinations</a>
        </nav>
        <marquee style="padding: 25px;" direction="right">Special Special destinations Coming soon on 20/2/2025.</marquee>
    </header>

    <!-- Home Section -->
    <div class="container" id="home">
        <h2>Welcome to WanderLuxe</h2>
        <p>Discover breathtaking travel destinations and create unforgettable memories with our curated travel experiences.</p>
    </div>

    <!-- Destinations Section -->
    <div class="container" id="destinations">
        <h2>Popular Destinations</h2>
        <div class="destination-gallery" id="destinationGallery">
            <!-- Destination cards will be loaded here by JavaScript -->
        </div>
    </div>

    <!-- About Section -->
    <div class="container about" id="about">
        <h2>About Us</h2>
        <p>WanderLuxe is dedicated to bringing you the best travel experiences around the globe. We offer personalized travel packages, insightful information, and beautiful photography to inspire your next adventure.</p>
    </div>

    <!-- Contact Section -->
    <div class="container contact" id="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance, feel free to reach out to us at <a href="mailto:info@wanderluxe.com">info@wanderluxe.com</a>.</p>
    </div>

    <footer>
        <p>&copy; 2024 WanderLuxe. All rights reserved.</p>
    </footer>

    <!-- Login Modal
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span onclick="closeModal('loginModal')" style="cursor:pointer; float:right;">&times;</span>
            <h2>Login</h2>
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <button class="button" onclick="login()">Login</button>
        </div>
    </div> -->

    <!-- Admin Dashboard
    <div id="adminDashboard" class="modal">
        <div class="modal-content">
            <span onclick="closeModal('adminDashboard')" style="cursor:pointer; float:right;">&times;</span>
            <h2>Admin Dashboard</h2>
            <button class="button" onclick="openAddDestinationModal()">Add New Destination</button>
            <table id="adminTable" style="width:100%; border-collapse: collapse;">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                Destination management will be loaded here
            </table>
        </div>
    </div> -->

    <!-- Add Destination Modal -->
    <!-- <div id="addDestinationModal" class="modal">
        <div class="modal-content">
            <span onclick="closeModal('addDestinationModal')" style="cursor:pointer; float:right;">&times;</span>
            <h2>Add New Destination</h2>
            <input type="text" id="newName" placeholder="Destination Name" required>
            <input type="text" id="newLocation" placeholder="Location" required>
            <textarea id="newDescription" placeholder="Description" required></textarea>
            <input type="text" id="newBestTime" placeholder="Best Time to Visit" required>
            <input type="file" id="newImages" multiple required>
            <button class="button" onclick="addDestination()">Add Destination</button>
        </div>
    </div> -->
    
    <script src="./index.js"></script>
</body>

</html>


