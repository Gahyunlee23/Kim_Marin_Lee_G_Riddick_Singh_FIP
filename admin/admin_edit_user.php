<?php
require_once '../load.php';
confirm_logged_in();


$id = $_SESSION['login_id'];
$current_user = getSingleUser($id);

if(!$current_user) {
    $message = 'Failed to load user info ㅠ_ㅠ';
}

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $message = editUser($id, $fname, $username, $password, $email);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <?php echo !empty($message)? $message:''; ?>
    <form action="admin_edit_user.php" method="post">
        <?php if($current_user): ?>

        <?php while($user_info = $current_user->fetch(PDO::FETCH_ASSOC)): ?> 
        <label> First Name </label>
        <input type="text" name="fname" value="<?php echo $user_info['login_fname'];?>"><br><br>

        <label> Username </label>
        <input type="text" name="username" value="<?php echo $user_info['login_name'];?>"><br><br>

        <label> Password </label>
        <input type="text" name="password" value="<?php echo $user_info['login_pass'];?>"><br><br>

        <label> Email </label>
        <input type="text" name="email" value="<?php echo $user_info['login_email'];?>"><br><br>

        <button type="submit" name="submit">Edit Account</button>
        <?php endwhile;?>
        <?php endif;?>
    </form>
    
</body>
</html>