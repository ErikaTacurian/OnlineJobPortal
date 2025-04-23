<?php
include("../Functions/db_connection.php");
$msg = '';
if (isset($_POST['submit'])) {
    $company_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['c_pass'];

    if ($password !== $cpassword) {
        $msg = "Passwords do not match!";
    } else {
        $select = "SELECT * FROM `jobseekers` WHERE User_email = '$email'";
        $select_user = mysqli_query($conn, $select);

        if (mysqli_num_rows($select_user) > 0) {
            $msg = "User already exists!";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert = "INSERT INTO `jobseekers`(`username`, `User_email`, `User_Pass`) VALUES ('$company_name', '$email', '$hashed_password')";
            if (mysqli_query($conn, $insert)) {
                $msg = "Registration successful!";
                header('location:login.php');
               
            } else {
                $msg = "Error during registration.";
            }
        }
    }
}
?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Registration</title>
    <link rel="stylesheet" href="../For_design/design.css">
</head>
<body>
    <header class="header">
        <section class="flex">
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
                <h3>Jobseeker Registration</h3>
                <p>Are you a employer? <a href="Employer.php">Employer</a></p>
                <?php if (!empty($msg)): ?>
                <div class="error-message" style="color: red; margin-bottom: 10px;">
                    <?php echo htmlspecialchars($msg); ?>
                </div>
                <?php endif; ?>
                <input type="text" required name="full_name" maxlength="50" placeholder="Full Name" class="input">
                <input type="email" required name="email" maxlength="50" placeholder="Enter your email" class="input">
                <input type="password" required name="pass" maxlength="20" placeholder="Enter your password" class="input">
                <input type="password" required name="c_pass" maxlength="20" placeholder="Confirm your password" class="input">
                <p>Already have an account? <a href="login.php">Login now</a></p>
                <input type="submit" value="Register Now" name="submit" class="btn">
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

    <div class="credit">&copy; copyright @ 2025 by <span>mr. web designer
    </span> | all rights reserved!</div>
</footer>






    <script src="../Functions/script.js"></script>
       

    <body>
    </html>