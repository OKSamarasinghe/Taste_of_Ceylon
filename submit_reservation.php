<?php
// Database connection credentials
$servername = "localhost";
$username = "root";  // default username for phpMyAdmin
$password = "";      // default password for phpMyAdmin is empty
$dbname = "taste_of_ceylon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $persons = $_POST['persons'];
    $message = $_POST['message'];

    // Prepare the SQL query to insert the reservation data
    $sql = "INSERT INTO reservations (name, email, phone, date, time, persons, message)
            VALUES ('$name', '$email', '$phone', '$date', '$time', '$persons', '$message')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect to the reservation page with a success message
        echo "<script>alert('Table booking reservation message sent.'); window.location.href='reservation.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
