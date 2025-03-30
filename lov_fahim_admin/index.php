<?php
require '../db.php'; // Include database connection

// Fetch all data
$sql = "SELECT name, bkash, amount, created_at FROM salami_requests ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admit Information</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Basic styling */
        body {
            font-family: 'Poppins', sans-serif;
            background: #f7f7f7;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 100%;
            background: white;
            padding: 20px;
            margin: 20px auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow-x: auto; /* Allow horizontal scrolling */
        }

        h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            font-size: 0.9em; /* Adjust font size for smaller screens */
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #28a745;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        @media screen and (max-width: 768px) {
            table {
                font-size: 0.8em;
            }
            th, td {
                padding: 8px;
            }
        }

        @media screen and (max-width: 480px) {
            h2 {
                font-size: 1.5em;
            }
            .container {
                padding: 15px;
            }
            table {
                font-size: 0.75em;
            }
            th, td {
                padding: 6px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Admit Information</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>bKash Number</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . htmlspecialchars($row['name']) . "</td>
                                <td>" . htmlspecialchars($row['bkash']) . "</td>
                                <td>" . htmlspecialchars($row['amount']) . "৳</td>
                                <td>" . date("d M Y, h:i A", strtotime($row['created_at'])) . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No data available</td></tr>";
                }
                $conn->close(); // Close connection
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
