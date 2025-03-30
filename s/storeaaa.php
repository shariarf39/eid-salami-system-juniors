<?php
require '../db.php'; // Include the database connection

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']); // Sanitize input
    $bkash = mysqli_real_escape_string($conn, $_POST['bkash']); // Sanitize input
    $amount = $_POST['amount']; // Assuming amount is validated elsewhere

    // Prepare the SQL query using prepared statements
    $stmt = $conn->prepare("INSERT INTO salami_requests (name, bkash, amount) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $bkash, $amount); // Bind parameters: s = string

    // Execute the query and check for success
    if ($stmt->execute()) {
        echo "<script>
                alert('Eid Salami Request Received!');
                window.location.href = '../index.php'; // Change to the page you want to redirect to
              </script>";
    } else {
        echo "<script>alert('Something went wrong! Try again.');</script>";
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
