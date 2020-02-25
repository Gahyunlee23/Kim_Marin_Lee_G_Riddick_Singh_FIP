<?php 
    require_once '../load.php';

    if(isset($_POST['submit'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if(!empty($username) && !empty($password)) {
            $message = login($username, $password);
        } else {
            $message = 'Please fill out the field!';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <?php echo !empty($message) ? $message:'' ?>
    <form action="admin_login.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username" value="" /><br>

        <label>Password:</label><br>
        <input type="text" name="password" value="" /><br>

        <button name="submit">Submit</button>

    </form>
</body>
</html>