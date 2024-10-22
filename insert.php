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
 // Insert student data into the database
 $sql = "INSERT INTO travellers (title, rating, link, best, locations,descriptions) 
 VALUES ('$title', '$rating', '$link', '$best', '$locations','$descriptions')";
 if ($conn->query($sql) === TRUE) {
    //echo "New Travel record created successfully";
    echo "<script>alert('New Travel record created successfully');
     window.location.replace(\"index3.php\");</script>";
    //header("location: index3.html");
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 // Close the connection
 $conn->close();
}
?>