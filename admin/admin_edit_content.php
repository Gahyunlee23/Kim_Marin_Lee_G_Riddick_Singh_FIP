<?php
    require_once '../load.php';
    
    $id = $_GET['id'];
    $currentStory = getSingleStory($id);
    
    if(!$currentStory) {
        $message = 'Failed to load content info';
    } 

    if(isset($_POST['submit'])) {  
        $id = $_POST['id'];
        $img = $_POST['img'];
        $title = $_POST['title'];
        $video = $_POST['video'];
        $explain = $_POST['explain'];
        $description = $_POST['description'];
        $background = $_POST['background'];
    
        $message = editContent($id, $img, $title, $video, $explain, $description, $background);
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Content</title>
</head>
<body>
<h2>Edit Story</h2>
    <?php echo !empty($message)? $message:''; ?>
    <form action="admin_edit_content.php" method="post">
        <?php if($currentStory): ?>

        <?php while($coninfo = $currentStory->fetch(PDO::FETCH_ASSOC)): ?> 
        <label>story ID</label>
        <input type="text" name="id" value="<?php echo $coninfo['story_id'];?>"><br><br>

        <label>Story Image</label>
        <input type="text" name="img" value="<?php echo $coninfo['story_img'];?>"><br><br>

        <label>Story Name</label>
        <input type="text" name="title" value="<?php echo $coninfo['story_title'];?>"><br><br>

        <label>Story Video</label>
        <input type="text" name="video" value="<?php echo $coninfo['story_video'];?>"><br><br>

        <label>Story Explain</label>
        <input type="text" name="explain" value="<?php echo $coninfo['story_explain'];?>"><br><br>

        <label>Story Descirption</label><br>
        <textarea type="text" name="description" rows="5" col="60"><?php echo $coninfo['story_description'];?></textarea><br><br>

        <label>Story Descirption</label><br>
        <input type="text" name="background" value="<?php echo $coninfo['story_background'];?>"><br><br>

        <button type="submit" name="submit">Edit Account</button>


        <?php endwhile;?>
        <?php endif;?>
    </form>
    
</body>
</html>