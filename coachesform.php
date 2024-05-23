<?php
//kwizera jean felix 222005550
// Include the database conn file
require_once 'db_connection.php';

// Check if form of coach is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $UserID = mysqli_real_escape_string($conn, $_POST['UserID']);
    $Bio = mysqli_real_escape_string($conn, $_POST['Bio']);
    $Specialization = mysqli_real_escape_string($conn, $_POST['Specialization']);
    $Availability = mysqli_real_escape_string($conn, $_POST['Availability']);


    // Attempt to insert the data into the database
    $sql = "INSERT INTO coaches (UserID, Bio, Specialization,Availability) 
            VALUES ('$UserID', '$Bio', '$Specialization','$Availability')";

    if (mysqli_query($conn, $sql)) {
        echo "coaches record added successfully.";

        
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // Close conn
    mysqli_close($conn);
}
?>
