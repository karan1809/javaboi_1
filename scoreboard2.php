<?php
// Include your database connection code here
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "javaboi";

$db_connection = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($db_connection->connect_error) {
    die("Connection failed: " . $db_connection->connect_error);
}

// Query to retrieve user scores
$query = "SELECT username, quiz_score FROM user_info ORDER BY level3 DESC";
$result = $db_connection->query($query);

if ($result->num_rows > 0) {
    $scoreboardData = array();
    while ($row = $result->fetch_assoc()) {
        $scoreboardData[] = $row;
    }
} else {
    $scoreboardData = array();
}

// Close the database connection
$db_connection->close();
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
    <?php if (!empty($scoreboardData)) : ?>
        <table>
            <tr>
                <th>Username</th>
                <th>Score</th>
            </tr>
            <?php foreach ($scoreboardData as $row) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['username']); ?></td>
                    <td><?php echo $row['quiz_score']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <p>No scores found.</p>
    <?php endif; ?>
</body>
</html>
