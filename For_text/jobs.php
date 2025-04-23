<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
   
    <title>All jobs</title>

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

    <section class="job-filter">

        <h1 class="heading">filter jobs</h1>

        <form action="" method="post">
            <div class="flex">
                <div class="box">
                    <p>job title<span>*</span></p>
                    <input type="text" name="title" placeholder="keyword, category or company"required maxlength="20" class="input">
                </div>
                     <div class="box">

                     <p> job location</p>
                     <input type="text" name="location" placeholder=" city,  state or country"
                     required maxlength="50" class="input">
                  
                </div>
            </div>
              <div class="dropdown-container">
                <div class="dropdown">
                    <input type="text" readonly placeholder="date posted"
                   maxlength="20" name="date"
                    class="output">
                    <div class="lists">
                        <p class="items">today</p>
                        <p class="items">3 days ago</p>
                        <p class="items">7 days ago</p>
                        <p class="items">10 days ago</p>
                        <p class="items">15 days ago</p>
                        <p class="items">30 days ago</p>

                    </div>
                </div>

                <div class="dropdown">
                    <input type="text" readonly name="date" placeholder="estimated"
                   maxlength="20"  class="output">
                   
                    <div class="lists">
                        <p class="items">55k - 80k</p>
                        <p class="items">50k - 75k</p>
                        <p class="items">45k - 65k</p>
                        <p class="items">40k - 60k</p>
                        <p class="items">35k - 55k</p>
                        <p class="items">30k - 50k</p>
                        <p class="items">25k - 45k</p>
                        <p class="items">20k - 40k</p>
                        <p class="items">15k - 30k</p>
                        <p class="items">12k - 25k</p>
                        <p class="items">10k - 22k</p>
                        <p class="items">9k - 20k</p>
                        <p class="items">7k - 18k</p>
                        <p class="items">4k - 16k</p>
                        <p class="items">5k - 10k</p>
                        <p class="items">1k or more</p>

                    </div>
                </div>




                <div class="dropdown">
                    <input type="text" readonly name="date" placeholder="job type"
                   maxlength="20"  class="output">
                   
                    <div class="lists">
                        <p class="items">full-time</p>
                        <p class="items">part-time</p>
                        <p class="items">internship</p>
                        <p class="items">contract</p>
                        <p class="items">temporary</p>
                        <p class="items">fresher</p>

                    </div>
                </div>


                <div class="dropdown">
                    <input type="text" readonly name="date" placeholder="education level" maxlength="20" 
                    class="output">
                    <div class="lists">
                        <p class="items">10 pass</p>
                        <p class="items">12th pass</p>
                        <p class="items">bachelor's degree</p>
                        <p class="items">master's degree</p>
                        <p class="items">diploma</p>

                    </div>
                </div>

                <div class="dropdown">
                    <input type="text" readonly name="date" placeholder="work shifts"
                   maxlength="20" 
                    class="output">
                    <div class="lists">
                        <p class="items">day shift</p>
                        <p class="items">night shift</p>
                        <p class="items">flexible shift</p>
                        <p class="items">fixed shift</p>
                    </div>
                </div>
              </div>
        </form>

    </section>



    <section class="jobs-container">
        <h1 class="heading">all jobs</h1>
    
        <div class="box-container">
            
            <div class="box">
                <div class="company">
                    <img src="https://cdn-icons-png.freepik.com/256/3291/3291670.png?ga=GA1.1.173187149.1743160049&semt=ais_hybrid" alt="">
    
                    <div>
                        <h3>IT infosys co.</h3>
                        <p>2 days ago</p>
                    </div>
                </div>
<div class="job-info">
    <h3 class="job-title">senior web developer</h3>
    <p class="location"><i class ="fas fa-map-marker-alt"></i>
    <span>Tagbilaran, Philippines</span></p>
</div>

                <div class="tags">
                    <p><i class="fas fa-solid fa-peso-sign"></i><span> 10k - 25k</span> </p>
                    <p><i class="fas fa-briefcase"></i><span>part-time</span></p>
                    <p><i class="fas fa-clock"></i><span>day shift</span></p>
                </div>
                <div class="flex-btn">
                    <a href="view_job.php" class="btn">view details</a>
                    <button type="submit" class="far fa-heart" name="save"></button>
                </div>
            </div>
    
    
    
        <div class="box">
            <div class="company">
                <img src="https://cdn-icons-png.freepik.com/256/732/732190.png?ga=GA1.1.173187149.1743160049&semt=ais_hybrid" alt="">
    
                <div>
                    <h3>all media ltd</h3>
                    <span>2 days ago</span>
                </div>
            </div>
<div class="job-info">
    <h3 class="job-title">qualified developer</h3>
    <p class="location"><i class ="fas fa-map-marker-alt"></i>
    <span>Tagbilaran, Philippines</span></p>
</div>

            <div class="tags">
                <p><i class="fas fa-solid fa-peso-sign"></i><span> 9000</span> </p>
                <p><i class="fas fa-briefcase"></i><span>full-time</span></p>
                <p><i class="fas fa-clock"></i><span>flexible shifts</span></p>
            </div>
            <div class="flex-btn">
                <a href="view_job.php" class="btn">view details</a>
                <button class="far fa-heart"></button>
            </div>
        </div>
    
    
    
    
    
    
        <div class="box">
            <div class="company">
                <img src="https://cdn-icons-png.freepik.com/256/721/721671.png?ga=GA1.1.173187149.1743160049&semt=ais_hybrid" alt="">
    
                <div>
                    <h3>software solution</h3>
                    <span>posted today</span>
                </div>
            </div>
<div class="job-info">
    <h3 class="job-title">javascript developer</h3>
    <p class="location"><i class ="fas fa-map-marker-alt"></i>
    <span>Tagbilaran, Philippines</span></p>
</div>

            <div class="tags">
                <p><i class="fas fa-solid fa-peso-sign"></i><span> 10k - 25k</span> </p>
                <p><i class="fas fa-briefcase"></i><span>fresher</span></p>
                <p><i class="fas fa-clock"></i><span>fixed shift</span></p>
            </div>
            <div class="flex-btn">
                <a href="view_job.php" class="btn">view details</a>
                <button class="far fa-heart"></button>
            </div>
        </div>
    
    
    
    
    
    
        <div class="box">
            <div class="company">
                <img src="https://i.pinimg.com/474x/bb/c1/42/bbc142512320c86652e9ef63d1926aa7.jpg" alt="">
    
                <div>
                    <h3>IT world</h3>
                    <span>19 days ago</span>
                </div>
            </div>
<div class="job-info">
    <h3 class="job-title">junior front-end</h3>
    <p class="location"><i class ="fas fa-map-marker-alt"></i>
    <span>Tagbilaran, Philippines</span></p>
</div>

            <div class="tags">
                <p><i class="fas fa-solid fa-peso-sign"></i><span> 20 - 50k</span> </p>
                <p><i class="fas fa-briefcase"></i><span>contract</span></p>
                <p><i class="fas fa-clock"></i><span>fixed shift</span></p>
            </div>
            <div class="flex-btn">
                <a href="view_job.php" class="btn">view details</a>
                <button type="submit" class="far fa-heart"></button>
            </div>
        </div>
    
    
    
    
    
        <div class="box">
            <div class="company">
                <img src="https://i.pinimg.com/736x/41/07/a8/4107a8da9978f4b585f31ea79cbb8e6b.jpg" alt="">
    
                <div>
                    <h3>info statics</h3>
                    <span>2 days ago</span>
                </div>
            </div>
            <h3 class="job-title">junior assistant</h3>
            <p class="location"><i class ="fas fa-map-marker-alt"></i>
            <span>Tagbilaran, Philippines</span></p>
            <div class="tags">
                <p><i class="fas fa-solid fa-peso-sign"></i><span>5000</span> </p>
                <p><i class="fas fa-briefcase"></i><span>temporary</span></p>
                <p><i class="fas fa-clock"></i><span>flexible shifts</span></p>
            </div>
            <div class="flex-btn">
                <a href="view_job.php" class="btn">view details</a>
                <button type="submit" class="far fa-heart"></button>
            </div>
        </div>
    
    
    
    
    
    
    
        <div class="box">
            <div class="company">
                <img src="https://i.pinimg.com/736x/3a/72/70/3a72704290deda01ad43d1e4cfbf9437.jpg" alt="">
    
                <div>
                    <h3>mass idea</h3>
                    <span>2 days ago</span>
                </div>
            </div>
<div class="job-info">
    <h3 class="job-title">PHP developer</h3>
    <p class="location"><i class ="fas fa-map-marker-alt"></i>
    <span>Tagbilaran, Philippines</span></p>
</div>

            <div class="tags">
                <p><i class="fas fa-solid fa-peso-sign"></i><span> 30k - 10k</span> </p>
                <p><i class="fas fa-briefcase"></i><span>fresher</span></p>
                <p><i class="fas fa-clock"></i><span>fixed shift</span></p>
            </div>
            <div class="flex-btn">
                <a href="view_job.php" class="btn">view details</a>
                <button class="far fa-heart"></button>
            </div>
        </div>
    
        <div class="box">
            <div class="company">
                <img src="https://cdn-icons-png.freepik.com/256/5968/5968672.png?ga=GA1.1.2089779121.1743241104&semt=ais_hybrid" alt="">
    
                <div>
                    <h3>info statics</h3>
                    <span>2 days ago</span>
                </div>
            </div>
            <h3 class="job-title">junior assistant</h3>
            <p class="location"><i class ="fas fa-map-marker-alt"></i>
            <span>Tagbilaran, Philippines</span></p>
            <div class="tags">
                <p><i class="fas fa-solid fa-peso-sign"></i><span>5000</span> </p>
                <p><i class="fas fa-briefcase"></i><span>temporary</span></p>
                <p><i class="fas fa-clock"></i><span>flexible shifts</span></p>
            </div>
            <div class="flex-btn">
                <a href="view_job.php" class="btn">view details</a>
                <button type="submit" class="far fa-heart"></button>
            </div>
        </div>


        <div class="box">
            <div class="company">
                <img src="https://cdn-icons-png.freepik.com/256/919/919836.png?ga=GA1.1.2089779121.1743241104&semt=ais_hybrid" alt="">
    
                <div>
                    <h3>Software Solutions</h3>
                    <span>2 days ago</span>
                </div>
            </div>
            <h3 class="job-title">junior assistant</h3>
            <p class="location"><i class ="fas fa-map-marker-alt"></i>
            <span>Tagbilaran, Philippines</span></p>
            <div class="tags">
                <p><i class="fas fa-solid fa-peso-sign"></i><span>10k - 25k</span> </p>
                <p><i class="fas fa-briefcase"></i><span>internship</span></p>
                <p><i class="fas fa-clock"></i><span>night shift</span></p>
            </div>
            <div class="flex-btn">
                <a href="view_job.php" class="btn">view details</a>
                <button type="submit" class="far fa-heart"></button>
            </div>
        </div>


        <div class="box">
            <div class="company">
                <img src="https://cdn-icons-png.freepik.com/256/753/753244.png?ga=GA1.1.2089779121.1743241104&semt=ais_hybrid" alt="">
    
                <div>
                    <h3>IT infosys Co.</h3>
                    <span>2 days ago</span>
                </div>
            </div>
            <h3 class="job-title">Senior Web Developer</h3>
            <p class="location"><i class ="fas fa-map-marker-alt"></i>
            <span>Tagbilaran, Philippines</span></p>
            <div class="tags">
                <p><i class="fas fa-solid fa-peso-sign"></i><span>10k - 25k</span> </p>
                <p><i class="fas fa-briefcase"></i><span>part-time</span></p>
                <p><i class="fas fa-clock"></i><span>day shift</span></p>
            </div>
            <div class="flex-btn">
                <a href="view_job.php" class="btn">view details</a>
                <button type="submit" class="far fa-heart"></button>
            </div>
        </div>


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
       

<script>

let dropdown_items = document.querySelectorAll('.job-filter form .dropdown-container .dropdown .lists .items');

dropdown_items.forEach(items =>{

    items.onclick = () =>{
    items_parent = items.parentElement.parentElement;
    let output = items_parent.querySelector('.output');
    output.value = items.innerText;
    }
});


</script>


    <body>
    </html>