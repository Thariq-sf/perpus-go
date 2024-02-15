<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "perpusgo";//nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the username field is set and not empty
    if (isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["kelas"]) && !empty($_POST["kelas"])) {
        // Sanitize the input
        $username = htmlspecialchars($_POST["username"]);
        $kelas = htmlspecialchars($_POST["kelas"]);
        
        // Prepare an SQL statement to insert the username into the database
        $sql = "INSERT INTO pengunjung (nama, kelas) VALUES ('$username', '$kelas')";
        
        // Execute the prepared statement
        if ($conn->query($sql) === TRUE) {
            echo"<b>" . $username . "</b>"." from " . "<b>" . $kelas . "</b>" . " berhasil ditambahkan!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // If the username field is empty, display an error message
        echo "Error: Username field is required!";
    }
} else {
    // If the form is not submitted via POST method, redirect to another page or display an error message
    echo "Error: Form submission method is not POST!";
}

// Close the database connection
// $conn->close();
?>
