


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlineJobs.ph</title>
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


<div class="home-container">
    <section class="home">
        <form action="" method="post">
            <h3>Find your next job</h3>
            <p>Job title<span>*</span></p>
            <input type="text" name="title" placeholder="keyword, category or company" required maxlength="20" class="input">
            <p>Job location</p>
            <input type="text" name="location" placeholder="city, state or country" required maxlength="50" class="input">
            <input type="submit" value="Search job" name="search" class="btn">
        </form>
    </section>
</div>

<section class="category">
    <h1 class="heading">Job Categories</h1>
    <div class="box-container">
        <a href="#" class="box">
            <i class="fas fa-code"></i>
            <div>
                <h3>Development</h3>
                <span>2200 jobs</span>
            </div>
        </a>
        <a href="#" class="box">
            <i class="fas fa-pen"></i>
            <div>
                <h3>Designer</h3>
                <span>500 jobs</span>
            </div>
        </a>
        <a href="#" class="box">
            <i class="fas fa-chalkboard-user"></i>
            <div>
                <h3>Teacher</h3>
                <span>1500 jobs</span>
            </div>
        </a>
        <a href="#" class="box">
            <i class="fas fa-headset"></i>
            <div>
                <h3>Service</h3>
                <span>3100 jobs</span>
            </div>
        </a>
        <a href="#" class="box">
            <i class="fas fa-wrench"></i>
            <div>
                <h3>Engineer</h3>
                <span>400 jobs</span>
            </div>
        </a>
        <a href="#" class="box">
            <i class="fas fa-hand-holding-dollar"></i>
            <div>
                <h3>Finance</h3>
                <span>1000 jobs</span>
            </div>
        </a>
        <a href="#" class="box">
            <i class="fas fa-wrench"></i>
            <div>
                <h3>Labour</h3>
                <span>4000 jobs</span>
            </div>
        </a>
    </div>
</section>

<section class="jobs-container">
    <h1 class="heading">Latest Jobs</h1>
    <div class="box-container">
        <!-- IT Infosys Co. -->
        <div class="box">
            <div class="company">
                <img src="https://cdn-icons-png.freepik.com/256/3291/3291670.png" alt="">
                <div>
                    <h3>IT Infosys Co.</h3>
                    <p>2 days ago</p>
                </div>
            </div>
            <h3 class="job-title">Senior Web Developer</h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i> <span>Tagbilaran, Philippines</span></p>
            <div class="tags">
                <p><i class="fas fa-solid fa-peso-sign"></i><span>10k - 25k</span></p>
                <p><i class="fas fa-briefcase"></i><span>Part-time</span></p>
                <p><i class="fas fa-clock"></i><span>Day shift</span></p>
            </div>
            <div class="flex-btn">
                <a href="view_job.php" class="btn">View Details</a>
                <button type="submit" class="far fa-heart" name="save"></button>
            </div>
        </div>

        <!-- Tech Solutions Inc. -->
        <div class="box">
            <div class="company">
                <img src="https://cdn-icons-png.freepik.com/256/5968/5968672.png" alt="">
                <div>
                    <h3>Tech Solutions Inc.</h3>
                    <p>1 day ago</p>
                </div>
            </div>
            <h3 class="job-title">Junior PHP Developer</h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i> <span>Cebu, Philippines</span></p>
            <div class="tags">
                <p><i class="fas fa-solid fa-peso-sign"></i><span>15k - 20k</span></p>
                <p><i class="fas fa-briefcase"></i><span>Full-time</span></p>
                <p><i class="fas fa-clock"></i><span>Flexible shift</span></p>
            </div>
            <div class="flex-btn">
                <a href="view_job.php" class="btn">View Details</a>
                <button type="submit" class="far fa-heart" name="save"></button>
            </div>
        </div>

        <!-- Digital Creations -->
        <div class="box">
            <div class="company">
                <img src="https://cdn-icons-png.freepik.com/256/732/732190.png" alt="">
                <div>
                    <h3>Digital Creations</h3>
                    <p>3 days ago</p>
                </div>
            </div>
            <h3 class="job-title">Graphic Designer</h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i> <span>Manila, Philippines</span></p>
            <div class="tags">
                <p><i class="fas fa-solid fa-peso-sign"></i><span>12k - 18k</span></p>
                <p><i class="fas fa-briefcase"></i><span>Contract</span></p>
                <p><i class="fas fa-clock"></i><span>Day shift</span></p>
            </div>
            <div class="flex-btn">
                <a href="view_job.php" class="btn">View Details</a>
                <button type="submit" class="far fa-heart" name="save"></button>
            </div>
        </div>

        <!-- Data Systems -->
        <div class="box">
            <div class="company">
                <img src="https://cdn-icons-png.freepik.com/256/753/753244.png" alt="">
                <div>
                    <h3>Data Systems</h3>
                    <p>5 days ago</p>
                </div>
            </div>
            <h3 class="job-title">Database Administrator</h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i> <span>Davao, Philippines</span></p>
            <div class="tags">
                <p><i class="fas fa-solid fa-peso-sign"></i><span>20k - 30k</span></p>
                <p><i class="fas fa-briefcase"></i><span>Full-time</span></p>
                <p><i class="fas fa-clock"></i><span>Night shift</span></p>
            </div>
            <div class="flex-btn">
                <a href="view_job.php" class="btn">View Details</a>
                <button type="submit" class="far fa-heart" name="save"></button>
            </div>
        </div>

        <!-- Web Masters -->
        <div class="box">
            <div class="company">
                <img src="https://cdn-icons-png.freepik.com/256/919/919836.png" alt="">
                <div>
                    <h3>Web Masters</h3>
                    <p>1 week ago</p>
                </div>
            </div>
            <h3 class="job-title">Frontend Developer</h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i> <span>Bacolod, Philippines</span></p>
            <div class="tags">
                <p><i class="fas fa-solid fa-peso-sign"></i><span>18k - 25k</span></p>
                <p><i class="fas fa-briefcase"></i><span>Part-time</span></p>
                <p><i class="fas fa-clock"></i><span>Flexible shift</span></p>
            </div>
            <div class="flex-btn">
                <a href="view_job.php" class="btn">View Details</a>
                <button type="submit" class="far fa-heart" name="save"></button>
            </div>
        </div>

        <!-- Cloud Innovations -->
        <div class="box">
            <div class="company">
                <img src="https://cdn-icons-png.freepik.com/256/2103/2103633.png" alt="">
                <div>
                    <h3>Cloud Innovations</h3>
                    <p>3 days ago</p>
                </div>
            </div>
            <h3 class="job-title">DevOps Engineer</h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i> <span>Iloilo, Philippines</span></p>
            <div class="tags">
                <p><i class="fas fa-solid fa-peso-sign"></i><span>25k - 35k</span></p>
                <p><i class="fas fa-briefcase"></i><span>Full-time</span></p>
                <p><i class="fas fa-clock"></i><span>Day shift</span></p>
            </div>
            <div class="flex-btn">
                <a href="view_job.php" class="btn">View Details</a>
                <button type="submit" class="far fa-heart" name="save"></button>
            </div>
        </div>
    </div>
    <div style="text-align: center; margin-top: 2rem;">
        <a href="jobs.php" class="btn">View All</a>
    </div>
</section>

<footer class="footer">
    <section class="grid">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
            <a href="jobs.php"><i class="fas fa-angle-right"></i> All Jobs</a>
            <a href="contact.php"><i class="fas fa-angle-right"></i> Contact Us</a>
        </div>
        <div class="box">
            <h3>Extra Links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> Account</a>
            <a href="login.php"><i class="fas fa-angle-right"></i> Login</a>
            <a href="register.php"><i class="fas fa-angle-right"></i> Register</a>
            <a href="#"><i class="fas fa-angle-right"></i> Post Job</a>
            <a href="#"><i class="fas fa-angle-right"></i> Dashboard</a>
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
            <a href="#"><i class="fab fa-youtube"></i> YouTube</a>
        </div>
    </section>
    <div class="credit">&copy; copyright @ 2025 by <span>mr. web designer</span> | All rights reserved!</div>
</footer>

<script src="../Functions/script.js"></script>
</body>
</html>
        
