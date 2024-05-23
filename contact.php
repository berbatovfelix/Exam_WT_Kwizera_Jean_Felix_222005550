
<?php
//kwizera jean felix 222005550
// Include the database conn file
require_once 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $Name = mysqli_real_escape_string($conn, $_POST['Name']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Message = mysqli_real_escape_string($conn, $_POST['Message']);
    

    // Attempt to insert the data into the database
    $sql = "INSERT INTO contact_submissions (name, email, message) 
            VALUES ('$Name', '$Email', '$Message')";

    if (mysqli_query($conn, $sql)) {
        echo "feedback record added successfully.";

        
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // Close conn
    mysqli_close($conn);
}
?>