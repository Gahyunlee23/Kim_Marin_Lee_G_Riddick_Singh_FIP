<?php
    require_once 'load.php';
    
    $stroy_table = 'tbl_stories';
    $getContent = getAll($story_table);
?>

<!DOCTYPE html>
<html lang="en">
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
<body>
<main>
    <!-- HEADER  -->
    <header id="header-story1">
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
                    <li><a href="stories.html" id="stories">STORIES</a></li>
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

         <!-- Stories Description -->
         <section id="stories-description">
            <h1 class="hidden">Stories description</h1>
            <h1>SOME TITLE</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus in omnis neque quas quo dolorum repellendus soluta, aspernatur impedit atque placeat qui architecto cumque laborum nihil aperiam facilis facere nesciunt.
            </p>
        </section>

        <?php while ($item = $getContent->fetch(PDO::FETCH_ASSOC)): ?> 
        <div id="story">
                <img src="images/<?php echo $item["story_img"]; ?>" alt="<?php echo $item["story_img"]; ?>">
                <h1><?php echo $item["story_title"]; ?></h1>
                <p><?php echo $item["story_description"]; ?></p>
                <a href="<?php echo $item["story_title"]; ?>"><?php echo $item["story_title"]; ?></a>
            </div>
            <?php endwhile;?>

</body>
</html>