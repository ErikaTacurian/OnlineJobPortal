<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
   
    <title>Contact Us</title>

    <link rel="stylesheet" href="../For_design/design.css">
    

</head>

<body>


    <header class="header">
        <section class="flex">
            <div id="menu-btn" class="fas fa-bars-staggered"></div>
           
           
            <a href="home.html" class="logo"><i class="fas fa-briefcase"></i> 
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

<div class="section-title">contact us</div>

<section class="contact">

    <div class="box-container">
        <div class="box">
            <i class="fas fa-phone"></i>
            <a href="tel:09950687551">0995-0687-551</a>
            <a href="tel:09959949327">0995-9949-327</a>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <a href="Mail:markjason@gmail.com">markjason@gmail.com</a>
            <a href="Mail:markcamanzolorenzo@gmail.com">markcamanzolorenzo@gmail.com</a>
        </div>
 
    <div class="box">
        <i class="fas fa-map-marker-alt"></i>
        <a href="#">Bisu Balilihan, room 208, Magsija, balilihan, bohol - 728564</a>
    </div>

    </div>
    
    <form action="" method="post">
        <h3>drop your message</h3>
        <div class="flex">
            <div class="box">
                <p>name<span>*</span></p>
                <input type="text" name="name" required maxlength="20"
                 placeholder="enter your name" class="input">
            </div>
            <div class="box">
                <p>email<span>*</span></p>
                <input type="email" name="email" required maxlength="50"
                 placeholder="enter your email" class="input">
            </div>
            <div class="box">
                <p>number<span>*</span></p>
                <input type="number" name="number" required min="0" max="99999999999" maxlength="20"
                 placeholder="enter your number" class="input">
            </div>
            <div class="box">
                <p>role<span>*</span></p>
               <select name="role" required class="input">
                <option value="employee">job seeker (employee)</option>
                <option value="employeer">job provider (employeer)</option>
            </select>
            </div>
        </div>
        <p>message <span>*</span></p>
        <textarea name="message" class="input" required maxlength="100"
       placeholder="enter your message" cols="30" rows="10"></textarea>
       <input type="submit" value="send message" name="send" class="btn">
    </form>


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