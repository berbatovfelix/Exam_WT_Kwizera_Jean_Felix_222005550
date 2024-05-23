<?php
//kwizera jean felix 222005550
// Include the database conn file
require_once 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $SessionID = mysqli_real_escape_string($conn, $_POST['SessionID']);
    $ClientID = mysqli_real_escape_string($conn, $_POST['ClientID']);
    $Rating = mysqli_real_escape_string($conn, $_POST['Rating']);
    $Comments = mysqli_real_escape_string($conn, $_POST['Comments']);
    $Date = mysqli_real_escape_string($conn, $_POST['Date']);

    // Attempt to insert the data into the database
    $sql = "INSERT INTO feedback (SessionID, ClientID, Rating, Comments,Date) 
            VALUES ('$SessionID', '$ClientID', '$Rating', '$Comments','$Date')";

    if (mysqli_query($conn, $sql)) {
        echo "feedback record added successfully.";

        
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // Close conn
    mysqli_close($conn);
}
?>
