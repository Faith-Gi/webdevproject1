<?php
// Include database connection
include 'db.php';
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $title = $_POST["title"];
 $rating = $_POST["rating"];
 $link = $_POST["link"];
 $best = $_POST["best"];
 $locations = $_POST["location"];
 $descriptions = $_POST["description"];
 $image_url = $_POST["image"];
 // Insert student data into the database
 $sql = "INSERT INTO travellers (title, rating, link, best, locations,descriptions,images) 
 VALUES ('$title', '$rating', '$link', '$best', '$locations','$descriptions','$image_url')";
 if ($conn->query($sql) === TRUE) {
    //echo "New Travel record created successfully";
    echo "<script>alert('New Travel record created successfully');
     window.location.replace(\"homepage.php\");</script>";
    //header("location: index3.html");
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 // Close the connection
 $conn->close();
}
?>