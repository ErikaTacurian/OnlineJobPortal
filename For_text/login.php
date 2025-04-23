<?php
session_start();
include("../Functions/db_connection.php");
$msg = '';

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    // Separate queries for employer and jobseeker
    $select_employer = "
        SELECT 'employer' AS user_type, Emp_email AS email, Emp_Pass AS password, employerID 
        FROM employers 
        WHERE Emp_email = '$email'
    ";
    
    $select_jobseeker = "
        SELECT 'jobseeker' AS user_type, User_email AS email, User_Pass AS password, user_Id 
        FROM jobseekers 
        WHERE User_email = '$email'
    ";

    // Check for employer
    $result_user = mysqli_query($conn, $select_employer);
    if (mysqli_num_rows($result_user) > 0) {
        $user = mysqli_fetch_assoc($result_user);
        if (password_verify($password, $user['password'])) {
            $_SESSION['employer_dashboard'] = $user['email'];
            $_SESSION['employerID'] = $user['employerID'];
            $_SESSION['success_message'] = "Login successful! Welcome, " . $user['email'] . ".";
            header("Location:employer_dashboard.php");
            exit;
        } else {
            $msg = "Incorrect email or password.";
        }
    }

    // Check for jobseeker
    $result_user = mysqli_query($conn, $select_jobseeker);
    if (mysqli_num_rows($result_user) > 0) {
        $user = mysqli_fetch_assoc($result_user);
        if (password_verify($password, $user['password'])) {
            $_SESSION['jobseeker_dashboard'] = $user['email'];
            $_SESSION['user_Id'] = $user['user_Id'];
            $_SESSION['success_message'] = "Login successful! Welcome, " . $user['email'] . ".";
            header("Location:jobseeker_dashboard.php");
            exit;
        } else {
            $msg = "Incorrect email or password.";
        }
    }

    $msg = "No account found with this email.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../For_design/design.css">
</head>
<body>
    <header class="header">
        <section class="flex">
            <div id="menu-btn" class="fas fa-bars-staggered"></div>
            <a href="home.php" class="logo"><i class="fas fa-briefcase"></i> Upwork.</a>
            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="about.php">about us</a>
                <a href="jobs.php">all jobs</a>
                <a href="contact.php">contact us</a>
                <a href="login.php">account</a>
            </nav>
            <a href="#" class="btn" style="margin-top: 0;">post job</a>
        </section>
    </header>

    <div class="account-form-container">
        <section class="account-form">
            <form action="" method="post">
                <h3>welcome back!</h3>
                <?php if (!empty($msg)): ?>
                    <div class="error-message" style="color: red; margin-bottom: 10px;">
                        <?php echo htmlspecialchars($msg); ?>
                    </div>
                <?php endif; ?>
                <input type="email" required name="email" maxlength="50" placeholder="enter your email" class="input">
                <input type="password" required name="pass" maxlength="20" placeholder="enter your password" class="input">
                <p>don't have an account? <a href="register.php">register now</a></p>
                <input type="submit" value="login now" name="submit" class="btn">
            </form>
        </section>
    </div>

    <footer class="footer">
        <section class="grid">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home </a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about </a>
                <a href="jobs.php"><i class="fas fa-angle-right"></i> all jobs </a>
                <a href="contact.php"><i class="fas fa-angle-right"></i> contact us</a>
                <a href="#"><i class="fas fa-angle-right"></i> filter search </a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> account </a>
                <a href="login.php"><i class="fas fa-angle-right"></i> login</a>
                <a href="register.php"><i class="fas fa-angle-right"></i> register</a>
                <a href="#"><i class="fas fa-angle-right"></i> post job</a>
                <a href="#"><i class="fas fa-angle-right"></i> dashboard</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
                <a href="#"><i class="fab fa-youtube"></i> youtube</a>
            </div>
        </section>
        <div class="credit">&copy; copyright @ 2025 by <span>mr. web designer</span> | all rights reserved!</div>
    </footer>

    <script src="../Functions/script.js"></script>
</body>
</html>