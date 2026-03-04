<?php
// db.php ko yahan connect kiya
include 'db.php';

if (isset($_POST['submit'])) {
    // Data sanitize karna
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // SQL Query - Prepared Statements use karna zyada behtar hota hai
    $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Shukriya Faakhir! Message receive ho gaya hai.');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Connection close karna
$conn->close();
?>