<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scoreboard</title>
    <link rel="stylesheet" href="styles1.css">
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 3px solid #4EB33E;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            padding: 15px;
        }
    </style>
</head>
<header>
        <h2 class="logo">javaboi</h2>
            <nav class="navigation">
                  <a href="competency.php">competency</a>                
                  <a href="topic.php">level</a>
                  <a href="login.html" class="btnlogout">LOG OUT</a> 
 
             </nav>
   </header>
<body>
    <h1>Scoreboard</h1>
<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "javaboi";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to update the 'allpoints' column
$updateQuery = "UPDATE user_info SET allpoints = points + quiz_score + level3 + level4";
if ($conn->query($updateQuery) === TRUE) {
    echo "";
} else {
    echo "Error updating allpoints: " . $conn->error;
}

// SQL query to fetch the overall points and username
$sql = "SELECT username, allpoints FROM user_info  ORDER BY allpoints DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'><tr><th>Username</th><th>Overall Points</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["username"] . "</td><td>" . $row["allpoints"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No results found";
}

// Close the database connection
$conn->close();
?>
 <style>
        /* Style for the form */
        form {
            text-align: center;
            margin-top: 20px;
        }

        /* Style for the submit button */
        input[type="submit"] {
            background-color: #4EB33E;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
 <form method="post" action="certificate.php">
        <input type="submit" name="get_certificate" value="GET CERTIFICATE">
    </form>
   
</body>
</html>