<?php
session_start();
if (!isset($_SESSION['jobseeker_dashboard'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job Seeker Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['jobseeker_dashboard']); ?>!</h1>
    <p>This is the job seeker dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>