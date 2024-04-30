<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show All Tickets</title>
    <link rel="stylesheet" href="Default.css"> 
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body style="background-image: url(images/download.jpeg);">

    <div class="container" style="font-size:24px">
        <h1>All Tickets</h1>
        <div class="ticket-table">
            <table>
                <tr>
                    <th>Ticket ID</th>
                    <th>Train Number</th>
                    <th>Destination</th>
                    <th>Source</th>
                    <th>Date</th>
                    <th>Number of Passengers</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Aadhar Number</th>
                    <th>Action</th>
                </tr>
                <?php
                // Connect to your database
                session_start();
                $servername = "localhost";
                $port = 3307; // Adjust the port as needed
                $username = "root";
                $password = "";
                $database= "pjt2.0"; 

                // Create connection
                $conn = new mysqli($servername, $username, $password, $database, $port);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Retrieve all tickets from the database
                $sql = "SELECT * FROM booking";
                $result = $conn->query($sql);

                // Display tickets in a table
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["uname"] . "</td>";
                        echo "<td>" . $row["Tnumber"] . "</td>";
                        echo "<td>" . $row["class"] . "</td>";
                        echo "<td>" . $row["fromstn"] . "</td>";
                        echo "<td>" . $row["tostn"] . "</td>";
                        echo "<td>" . $row["Name"] . "</td>";
                        echo "<td>" . $row["Age"] . "</td>";
                        echo "<td>" . $row["sex"] . "</td>";
                        echo "<td>" . $row["Status"] . "</td>";
                        // echo "<td><a href='delete_ticket.php?id=" . $row["id"] . "'>Delete</a> | <a href='update_ticket.php?id=" . $row["id"] . "'>Update</a></td>"; // Links to delete and update ticket scripts
                        // echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>No tickets found.</td></tr>";
                }

                // Close connection
                $conn->close();
                ?>
            </table>
        </div>
    </div>
</body>
</html>
