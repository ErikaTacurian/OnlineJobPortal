<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
   
    <title>View job</title>

    <link rel="stylesheet" href="../For_design/design.css">
    

</head>

<body>


    <header class="header">
        <section class="flex">
            <div id="menu-btn" class="fas fa-bars-staggered"></div>
           
           
            <a href="home.php" class="logo"><i class="fas fa-briefcase"></i> 
                Upwork.</a>
            
            
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

<section class="job-details">

<h1 class="heading">job details</h1>

 <div class="details">
    <div class="job-info">
    <h3>senior web designer</h3>
    <a href="view_company.php">IT infosys co.</a>
    <p><i class="fas fa-map-marker-alt"></i>Tagbilaran City, Bohol</p>

</div>
<div class="basic-details">
    <h3>salary</h3>
    <p>10000 - 25000 per month</p>
    <h3>benefits</h3>
    <p>work from home, health insurance</p>
    <h3>schedule</h3>
    <p>day shift</p>
</div>
<ul>
    <h3>requirements</h3>
    <li>education : <span>graduate</span></li>
    <li>age : <span>25+</span></li>
    <li>language : <span>Filipino, english</span></li>
    <li>experience : <span>3+ years</span></li>
</ul>
<ul>
    <h3>qualifications</h3>
    <li>Bachelor's (Preferred)</li>
    <li>PHP: 1 year (Preferred)</li>
    <li>web design: 1 year (Preferred)</li>
    <li>WordPress: 1 year (Preferred)</li>
    <li>total work : 3 years (Preferred)</li>
</ul>
<ul>
<h3>skills</h3>
<li>html5 and css3</li>
<li>javascript</li>
<li>node.js</li>
<li>reach.js</li>
<li>php</li>
<li>mysql</li>
</ul>
<div class="description">
    <h3>job description</h3>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti velit reprehenderit, 
    porro aliquid hic esse maiores a. Fuga sunt perspiciatis quas dicta! Quia, aspernatur. 
    Magnam fugit blanditiis tempore eius delectus?</p>
    <ul>
        <li>Hiring 2 candidate for this role</li>
        <li>posted 2 day ago</li>
    </ul>
</div>
<form action="" method="post" class="flex-btn" id="applyForm">
    <input type="submit" value="apply now" name="apply" class="btn" id="applyBtn">
    <button type="submit"class="save"><i class="far fa-heart "></i><span>save job</span></button>
</form>

<script>
document.getElementById('applyForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Check if user is logged in (this would typically check a session/cookie)
    const isLoggedIn = checkLoginStatus(); // Function from script.js
    
    if(!isLoggedIn) {
        // Store the current job URL to redirect back after login
        fetch('set_redirect.php?url=' + encodeURIComponent(window.location.href))
            .then(() => {
                window.location.href = 'login.php';
            });
    } else {
        // If logged in, submit the form normally
        this.submit();
    }
});
</script>
</div>

</section>



       




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