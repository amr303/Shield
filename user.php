<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Page</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="container">
  <h1>Hello <?php echo $username; ?></h1>
  <table>
    <thead>
      <tr>
        <th>User Name</th>
        <th>Score</th>
        <th>Note</th>
      </tr>
    </thead>
    <tbody>
      <!-- Here you can dynamically generate rows based on user data -->
      <!-- For this example, let's assume static data -->
      <tr>
        <td>John Doe</td>
        <td>95</td>
        <td>Excellent</td>
      </tr>
      <tr>
        <td>Jane Smith</td>
        <td>85</td>
        <td>Good</td>
      </tr>
      <!-- Add more rows as needed -->
    </tbody>
  </table>
</div>

</body>
</html>
