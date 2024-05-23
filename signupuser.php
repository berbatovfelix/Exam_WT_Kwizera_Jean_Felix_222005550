<?php
//kwizera jean felix 222005550
// Include the database connection file
require_once "db_connection.php";

// Process sign-up form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $Username = $_POST["Username"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $Role = $_POST["Role"];
    $RegistrationDate = $_POST["RegistrationDate"];

    // SQL query to insert data into the user table
    $sql = "INSERT INTO users (Username, Email, Password, Role,  RegistrationDate) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Check if the statement was prepared successfully
    if ($stmt) {
        // Bind parameters to the prepared statement
        $stmt->bind_param("sssss", $Username, $Email, $Password, $Role,$RegistrationDate);

        // Execute the prepared statement
        if ($stmt->execute()) {
            // Success message
            echo "Sign-up successful. Redirecting...";

            // Redirect to a success page or any other page after successful sign-up
            header("Location: loginuser.html");
            exit();
        } else {
            // Error message
            echo "Error: Unable to execute SQL statement<br>";
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        // Error message if the statement preparation failed
        echo "Error: Unable to prepare SQL statement<br>";
        echo "Error: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
