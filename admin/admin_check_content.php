<?php
    require_once '../load.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $edit_content_result = editContent($id);
    
        if(!$edit_content_result) {
            $message = "Failed to edit content";
        }
    }

    $story = 'tbl_story';
    $contents = getAll($story);
    
    if(!$contents) {
        $message = 'failed to bring product info';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Story</title>
</head>
<body>
    <h1>Choose what story you wanna edit</h1>

    <?php echo !empty($message)? $message: ''; ?>
    <?php if($contents):?>
    <table>
        <thead>
            <tr>
                <td>Story ID</td>
                <td>Story Title</td>
                <td>Story Background</td>
                <td>Story Explain</td>
                <td>Edit</td>
            </tr>
        </thead>
        <?php while($content = $contents->fetch(PDO::FETCH_ASSOC)):?>
        <tbody>
            <tr>
                <td><?php echo $content['story_id'];?></td>
                <td><?php echo $content['story_title'];?></td>
                <td><?php echo $content['story_background'];?></td>
                <td><?php echo $content['story_explain'];?></td>
                <td><a href="admin_edit_content.php?id=<?php echo $content['story_id'];?>">Edit</a></td>
            </tr>
        <?php endwhile;?>
        </tbody>
    </table>
        <?php endif;?>
</body>
</html>