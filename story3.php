<?php
    // echo "dana is stupid!";
    //require('includes/connect.php');
?>

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
    <header id="header-story3">
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
            <h1>IT DIDN'T SEEM LIKE A BIG DEAL</h1>
        </div>
    </header>
    <!-- BODY -->
    <body>
        <!-- Story 3 video -->
        <section id="stories-video">
            <h1 class="hidden">Video Story 3</h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/yiU8nQ_-q9s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
        </section>

        <!-- Story 3 info -->
        <section id="stories-info">
            <h1 class="hidden">Story 3 information</h1>
            <!-- <h1>FACING STIGMA TOGETHER</h1> -->
            <article>
                I am 25. My sister is the only family I have left. Our parents died when we were still very young. I found out some time later that I was born with HIV and that I would have to live with this virus for the rest of my life. It didn’t seem like a big deal when I first found out. My uncle took me to the hospital and I started taking antiretroviral treatment - that was a pat on the back for him. <br> <br>
                <img src="images/stories-3-1.jpg" alt="Man alone">
                As I was growing up so my fear of living with HIV grew. I was grieving a lot and began to live in denial. I used to ask God why? I stigmatised myself. I tried committing suicide several times in high school. I used to stockpile my medication and then throw it down the toilet on my clinic day. <br> <br>
                I was separated from my sister so I faced all this alone. Later I developed resistance to the first-line drug combination I’d been taking. My viral load was too high and I was sick most of the time. So my doctor recommended that I move to second-line treatment. That was very scary because I thought that it was almost the last option in the HIV world. I was heartbroken but faced the reality of switching medication. <br> <br>
                I was under other pressures at home and at school but my biggest fear was failing my new treatment. I was also worried about adjusting to the physical side effects of the new drug combination. <br> <br>
                After a few counselling sessions I switched to second-line treatment, knowing well the side effects that might come with it but also knowing what to do if and when that happened. <br> <br>
                This journey is tough and you need to have support. My friends really went out of their way to help me adjust to my new medication. <br> <br>
                Today HIV is not a big deal to me. I can take my medicine in public and I am healthy. If you fight stigma and denial within yourself first it's very easy to live a positive life. <br> <br>
                <img src="images/stories-3-2.jpg" alt="Friends talking">

            </article>
        </section>

        <!-- More stories -->
        <section id="more-stories">
            <h1 class="hidden">Choose more stories to read.</h1>

            <!-- Next story -->
            <div id="stories-parent">
                <img src="images/information-illustration1.svg" alt="Story 2">
                <h2>SARAH IN 10 YEARS</h2>
                <button><a href="story2.php"></a>Read More</button>
            </div>

            <!-- Next next story -->
            <div id="stories-parent">
                <img src="images/information-illustration2.svg" alt="Story 3">
                <h2>SARAH IN 10 YEARS</h2>
                <button><a href="story3.php"></a>Read More</button>
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