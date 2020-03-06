
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo_o.ico">

   <!-- CSS links -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- Fonts links -->
    <link rel="stylesheet" href="https://use.typekit.net/qmt1wjz.css">

    <title>#I am Part of the Cure</title>
</head>
<main>
    <!-- HEADER  -->
    <header id="header-stories">
        <div id="logo-header">
            <a href="index.html">
                <img src="images/logo-blue.svg" alt="Blue Logo">
            </a>
        </div>
        <!-- Hamburger Menu -->
        <div class="menu-collapsed">
            <div class="bar"></div>
            <!-- menu options -->
            <nav>
                <ul>
                    <li><a href="index.html" id="home">HOME</a></li>
                    <li><a href="about.html" id="about">ABOUT</a></li>
                    <li><a href="stories.php" id="stories">STORIES</a></li>
                    <li><a href="info.html" id="info">INFO</a></li>
                    <li><a href="contact.html" id="contact">CONTACT</a></li>
                </ul>
                <!-- Donate now button -->
                <button id="donate-button">donate now</button>
                    <!-- Social Media Header -->
                <div id="social-media-header">
                    <a href="facebook.com"><img src="images/facebook-white.svg" alt="Facebook"></a>
                    <a href="instagram.com"><img src="images/instagram-white.svg" alt="Instagram"></a>
                    <a href="snapchat.com"><img src="images/snap-white.svg" alt="Snapchap"></a>
                    <a href="tiktok.com"><img src="images/tiktok-white.svg" alt="TikTok"></a>
                </div>
            </nav>
        </div>
        <!-- Hero Text + Buttons -->
        <div id="hero-text">
            <h1>Real stories. Real people. Real HIV.</h1>
        </div>
        <div id="hero-buttons">
            <button><a href="contact.html">contact us</a></button>
        </div>
    </header>
    <!-- BODY -->
    <body>
        <!-- Stories Description -->
        <section id="stories-description">
            <h1 class="hidden">Stories description</h1>
            <h1>SOME TITLE</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus in omnis neque quas quo dolorum repellendus soluta, aspernatur impedit atque placeat qui architecto cumque laborum nihil aperiam facilis facere nesciunt.
            </p>
        </section>

        <!-- Stories flexbox -->
        <section id="stories-flexbox">
            <h1 class="hidden">Stories Options to Read.</h1>
            <!-- Story 1 -->
            <div id="story">
                <img src="images/stories-1-1.jpg" alt="Afro-American kids playing on school's backyard.">
                <h1>FACING STIGMA TOGETHER</h1>
                <p>
                    “When I was still in primary school, one of my classmates was HIV-positive,” says Collins, a 16-year-old living in Homabay...
                </p>
                <button><a href="story1.php">Read More</a></button>
            </div>
            <!-- Story 2 -->
            <div id="story">
                <img src="images/stories-2-1.jpg" alt="Afro-American kids playing on school's backyard.">
                <h1>LIVING AS AN HIV-POSITIVE TEEN</h1>
                <p>
                    “As I started progressing in high school, I told more people, I didn’t know if they were going to be mean,” Murphy says...
                </p>
                <button><a href="story2.php">Read More</a></button>
            </div>
            <!-- Story 3 -->
            <div id="story">
                <img src="images/stories-3-1.jpg" alt="Afro-American kids playing on school's backyard.">
                <h1>IT DIDN'T SEEM LIKE A BIG DEAL</h1>
                <p>
                    This journey is tough and you need to have support. My friends really went out of their way to help me adjust to my new medication...
                </p>
                <button><a href="story3.php">Read More</a></button>
            </div>
            <!-- Story 4 -->
            <div id="story">
                <img src="images/more-coming-soon.jpg" alt="Afro-American kids playing on school's backyard.">
                <h1>THIS IS THE TITLE</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, eveniet, porro similique nam quia quo sunt sit nihil nesciunt.
                </p>
                <button><a href="story4.php">Read More</a></button>
            </div>
          
        </section>
    </body>
    <!-- FOOTER -->
    <footer>
        <a href="index.html">
            <img id="logo-footer" src="images/logo-blue.svg" alt="Blue Logo">
        </a>
        <!-- Footer menu -->
        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="stories.php">STORIES</a></li>
                <li><a href="info.html">INFO</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </nav>
        <!-- Footer Social Media -->
        <div id="social-media-footer">
            <a href="facebook.com"><img src="images/facebook-blue.svg" alt="Facebook"></a>
            <a href="instagram.com"><img src="images/instagram-blue.svg" alt="Instagram"></a>
            <a href="snapchat.com"><img src="images/snap-blue.svg" alt="Snapchap"></a>
            <a href="tiktok.com"><img src="images/tiktok-blue.svg" alt="TikTok"></a>
        </div>
        <!-- Footer Copyrights -->
        <div id="copyrights">
            <h3>In association with <a href="hivaidsconnection.com">HIV/AIDS Connection</a></h3>
            <h3>I am Part Of the Cure &copy; 2020</h3>
        </div>
    </footer>
    <script src="js/main.js" type="module"></script>
</main>
</html>