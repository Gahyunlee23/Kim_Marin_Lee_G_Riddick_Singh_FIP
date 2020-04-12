<?php
require_once '../load.php';
confirm_logged_in();

if(isset($_POST['submit'])) {
  
    $content = array(
        'img' => $_FILES['img'],
        'name' => trim($_POST['name']),
        'rate' => trim($_POST['rate']),
        'price' => trim($_POST['price']),
        'description' => trim($_POST['description']),
        'color' => trim($_POST['color']),
        'category' => trim($_POST['catList']),
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
        <form action="admin_add_content.php" method="post" enctype="multipart/form-data">

            <label>Story Image:</label><br>
            <input type="file" name="img" value=""><br><br>

            <label>Story Title:</label><br>
            <input type="text" name="name" value=""><br><br>

            <label>Story Description:</label><br>
            <input type="text" name="rate" value=""><br><br>

            <label>Story Video Link:</label><br>
            <input type="text" name="price" value=""><br><br>

            <label>Product Color:</label><br>
            <input type="text" name="color" value=""><br><br>

            <label>Product Description:</label><br>
            <textarea name="description"></textarea><br><br>


            <button type="submit" name="submit">Add Product</button>
        </form>
</body>
</html>