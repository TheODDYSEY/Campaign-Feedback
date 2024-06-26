<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campaign_feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$rating = $_POST['rating'];

$sql = "INSERT INTO feedback (name, email, feedback, rating, submission_date)
VALUES ('$name', '$email', '$feedback', $rating, NOW())";

if ($conn->query($sql) === TRUE) {
    echo "<div style='background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px; padding: 10px; margin-top: 10px;'>";
    echo "Feedback submitted successfully!";
    echo "</div>";

    // Add a green button
    echo "<a href='feedback_form.html' style='display: block; width: 200px; margin: 20px auto; background-color: #4CAF50; color: white; text-align: center; text-decoration: none; padding: 10px 20px; border-radius: 4px;'>Back to Form</a>";
} else {
    echo "<div style='background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 4px; padding: 10px; margin-top: 10px;'>";
    echo "Error: ". $sql. "<br>". $conn->error;
    echo "</div>";

    // Add a green button with different text if submission failed
    echo "<a href='feedback_form.html' style='display: block; width: 200px; margin: 20px auto; background-color: #4CAF50; color: white; text-align: center; text-decoration: none; padding: 10px 20px; border-radius: 4px;'>Try Again</a>";
}

$conn->close();
?>
