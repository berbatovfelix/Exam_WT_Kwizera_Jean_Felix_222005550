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
    <title>resource Management</title>
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
    <h2>resource Management</h2>
    <!-- Display the table -->
    <table id="dataTable" class="table table-hover text-center">
        <tr>
            <th>ResourceID</th>
            <th>Title</th>
            <th>Type </th>
            <th>Description</th>
            <th>Link</th>
            <th>CoachID</th>
            <th>Actions</th>
        </tr>
        <?php
        // Fetch data from the resource table
        $sql = "SELECT * FROM resource";
        $result = $conn->query($sql);

        // Output data of each row
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ResourceID"] . "</td>"; //resourceID
                echo "<td>" . $row["Title"] . "</td>"; //     Title
                echo "<td>" . $row["Type"] . "</td>"; // Type 
                echo "<td>" . $row["Description"] . "</td>"; // Description
                echo "<td>" . $row["Link"] . "</td>"; // Link
                echo "<td>" . $row["CoachID"] . "</td>"; // CoachID
                
                echo "<td>";
                // Edit and delete actions
              echo "<a href='updateresource.html?id=" . $row["ResourceID"] .  "'onclick='return confirm(\"Are you sure you want to update this resource?\")'><button class='button update-button'>Edit</button></a>";
                // Delete action
                echo "<a href='deleteresource.html?id=" . $row["ResourceID"] . "'onclick='return confirm(\"Are you sure you want to delete this resource?\")'><button class='button delete-button'>Delete</button></a>";
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
