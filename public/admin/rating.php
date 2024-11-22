<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["user"])) {
    header("location: index.php"); // Adjust the redirection URL according to your login page
    exit(); // Ensure that the script stops execution after the redirection
}

$servername = "your_database_host";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch reviews from the database
$sqlReviews = "SELECT * FROM testimonials";
$resultReviews = $conn->query($sqlReviews);

// Fetch ratings from the database
$sqlRatings = "SELECT AVG(rating) AS avg_rating FROM testimonials";
$resultRatings = $conn->query($sqlRatings);
$averageRating = ($resultRatings->num_rows > 0) ? $resultRatings->fetch_assoc()['avg_rating'] : 0;

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Reviews</title>
    <style>
        /* Add your styles here */
    </style>
</head>
<body>

<!-- Admin Panel Header -->
<div>
    <h2>Reviews</h2>
    <p>Average Rating: <?php echo number_format($averageRating, 1); ?>/5</p>
</div>

<!-- Display Reviews -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>Rating</th>
        <th>Comment</th>
        <th>User</th>
        <th>Country</th>
    </tr>
    <?php
    if ($resultReviews->num_rows > 0) {
        while ($row = $resultReviews->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["rating"] . "</td>";
            echo "<td>" . $row["comment"] . "</td>";
            echo "<td>" . $row["user"] . "</td>";
            echo "<td>" . $row["country"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No reviews found</td></tr>";
    }
    ?>
</table>

</body>
</html>
