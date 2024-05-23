<?php
//kwizera jean felix 222005550
require_once "db_connection.php";

if (isset($_GET['query'])) {
    $searchTerm = $conn->real_escape_string($_GET['query']);
    $output = "";

    $queries = [
        'appointment' => "SELECT AppointmentID, CoachID, ClientID, Date, Status FROM appointment WHERE AppointmentID LIKE '%$searchTerm%'",
        'clients' => "SELECT ClientID, UserID, Goals, Progress FROM  clients WHERE  ClientID LIKE '%$searchTerm%'",
        'users' => "SELECT UserID ,Username, Email, Password, Role,  RegistrationDate FROM users WHERE UserID LIKE '%$searchTerm%'",
        'coaches' => "SELECT CoachID, UserID, Bio, Specialization,Availability FROM coaches WHERE CoachID LIKE '%$searchTerm%'",
        'goals' => "SELECT GoalID,Description, TargetCompletionDate, ProgressStatus FROM goals WHERE GoalID LIKE '%$searchTerm%'",
        'payment' => "SELECT PaymentID, UserID, Amount, PaymentDate FROM payment WHERE PaymentID LIKE '%$searchTerm%'",
        'feedback' => "SELECT FeedbackID, SessionID, ClientID, Rating, Comments,Date FROM feedback WHERE FeedbackID LIKE '%$searchTerm%'",
        'notification' => "SELECT NotificationID, UserID, Message FROM notification WHERE NotificationID LIKE '%$searchTerm%'",
        'resource' => "SELECT ResourceID, Title, Type, Description, Link,CoachID FROM resource WHERE ResourceID LIKE '%$searchTerm%'",
        'admin' => "SELECT adminID, username,password,email,full_name FROM admin WHERE adminID LIKE '%$searchTerm%'",
        'sessions' => "SELECT SessionID, CoachID,ClientID, Date, Duration, Notes FROM sessions WHERE SessionID LIKE '%$searchTerm%'"
    ];

 $output .= "<h2><u>Search Results:</u></h2>";

    foreach ($queries as $table => $sql) {
        $result = $conn->query($sql);
        $output .= "<h3>Table of $table:</h3>";
        
        if ($result) {
            if ($result->num_rows > 0) {
                $output .= "<table border='1'>";
                // Output table header
                $output .= "<tr>";
                $row = $result->fetch_assoc(); // Fetch first row to get column names
                foreach ($row as $key => $value) {
                    $output .= "<th>$key</th>";
                }
                $output .= "</tr>";
                
                // Output table data
                do {
                    $output .= "<tr>";
                    foreach ($row as $value) {
                        $output .= "<td>$value</td>";
                    }
                    $output .= "</tr>";
                } while ($row = $result->fetch_assoc());
                
                $output .= "</table>";
            } else {
                $output .= "<p>No results found in $table matching the search term: '$searchTerm'</p>";
            }
        } else {
            $output .= "<p>Error executing query: " . $conn->error . "</p>";
        }
    }

    echo $output;

    $conn->close();
} else {
    echo "<p>No search term was provided.</p>";
}
?>

