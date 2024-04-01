<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
// Add admin authentication logic here

// Dummy data for demonstration
$users = array(
    array("John Doe", 95, "Excellent"),
    array("Jane Smith", 85, "Good")
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="container">
  <h1>All Users</h1>
  <table>
    <thead>
      <tr>
        <th>User Name</th>
        <th>Score</th>
        <th>Note</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $user): ?>
      <tr>
        <td><?php echo $user[0]; ?></td>
        <td><?php echo $user[1]; ?></td>
        <td><?php echo $user[2]; ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>
