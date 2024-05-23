<?php
//kwizera jean felix 222005550
// Include the database conn file
require_once 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $Title = mysqli_real_escape_string($conn, $_POST['Title']);
    $Type = mysqli_real_escape_string($conn, $_POST['Type']);
    $Description = mysqli_real_escape_string($conn, $_POST['Description']);
    $Link = mysqli_real_escape_string($conn, $_POST['Link']);
    $CoachID = mysqli_real_escape_string($conn, $_POST['CoachID']);

    // Attempt to insert the data into the database
    $sql = "INSERT INTO resource (Title, Type, Description, Link,CoachID) 
            VALUES ('$Title', '$Type', '$Description', '$Link','$CoachID')";

    if (mysqli_query($conn, $sql)) {
        echo "resource record added successfully.";

        
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // Close conn
    mysqli_close($conn);
}
?>
