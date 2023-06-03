

<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $userType = $_POST['user-type'];
  $username = $_POST['nom'];
  $firstName = $_POST['prenom'];
  $mail = $_POST['mail'];

  // Create a new MySQLi instance (assuming MySQL server is running locally with default credentials)
  $mysqli = new mysqli('localhost', 'username', 'password', 'sportify');

  // Check if the connection was successful
  if ($mysqli->connect_errno) {
    echo 'Failed to connect to MySQL: ' . $mysqli->connect_error;
    exit();
  }

  // Prepare the query to check coach credentials
  $stmt = $mysqli->prepare('SELECT * FROM coach WHERE username = ? AND firstName = ? AND email = ?');
  $stmt->bind_param('sss', $username, $firstName, $email);
  $stmt->execute();
  $result = $stmt->get_result();

  // Check if a matching row was found
  if ($result->num_rows === 1) {
    // Authentication successful
    // Redirect to the coach's dashboard or perform any other necessary actions
    header('Location: coach_dashboard.php');
    exit();
  } else {
    // Authentication failed
    echo 'Invalid credentials. Please try again.';
  }

  // Close the statement and database connection
  $stmt->close();
  $mysqli->close();
}
?>
