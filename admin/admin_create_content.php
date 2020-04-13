<?php
require_once '../load.php';
confirm_logged_in();

if(isset($_POST['submit'])) {
  
    $content = array(
        'img' => $_FILES['img'],
        'title' => trim($_POST['title']),
        'video' => trim($_POST['video']),
        'explain' => trim($_POST['explain']),
        'description' => trim($_POST['description']),
        'background' => trim($_POST['background'])
    );

    $result = addContent($content);
    $message = $result;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Stories</title>
</head>
<body>
    <h2>Add New Story!</h2>
    <?php echo !empty($message)? $message:''; ?>
        <form action="admin_create_content.php" method="post" enctype="multipart/form-data">

            <label>Story Image:</label><br>
            <input type="file" name="img" value=""><br><br>

            <label>Story Title:</label><br>
            <input type="text" name="title" value=""><br><br>

            <label>Story Video Link:</label><br>
            <input type="text" name="video" value=""><br><br>

            <label>Story Explain:</label><br>
            <input type="text" name="explain" value=""><br><br>

            <label>Story Description:</label><br>
            <textarea type="text" name="description" value=""></textarea><br><br>

            <label>Story Background:</label><br>
            <input type="text" name="background" value=""><br><br>
            
            <button type="submit" name="submit">Add Content</button>
        </form>
</body>
</html>