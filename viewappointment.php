<?php
//kwizera jean felix 222005550
// Include the database connection file
require_once "db_connection.php";

// Display any alert messages
if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">' . $msg . '
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointment Management</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <style>
       table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>appointment Management</h2>
    <!-- Display the table -->
    <table id="dataTable" class="table table-hover text-center">
        <tr>
            <th>AppointmentID</th>
            <th>CoachID</th>
            <th>ClientID</th>
            <th>Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php
        // Fetch data from the appointment table
        $sql = "SELECT * FROM appointment";
        $result = $conn->query($sql);

        // Output data of each row
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["AppointmentID"] . "</td>"; //AppointmentID
                echo "<td>" . $row["CoachID"] . "</td>"; // CoachID
                echo "<td>" . $row["ClientID"] . "</td>"; // ClientID
                echo "<td>" . $row["Date"] . "</td>"; // Date
                echo "<td>" . $row["Status"] . "</td>"; // Status
                
                echo "<td>";
                // Edit and delete actions
              echo "<a href='updateappointment.html?id=" . $row["AppointmentID"] .  "'onclick='return confirm(\"Are you sure you want to update this Course?\")'><button class='button update-button'>Edit</button></a>";
                // Delete action
                echo "<a href='deleteappointment.html?id=" . $row["AppointmentID"] . "'onclick='return confirm(\"Are you sure you want to delete this certificate?\")'><button class='button delete-button'>Delete</button></a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No data found</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
