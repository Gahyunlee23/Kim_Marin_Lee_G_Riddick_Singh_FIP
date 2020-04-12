<?php
function createUser($fname, $username, $password, $email){
    $pdo = Database::getInstance()->getConnection();

    $create_user_query = 'INSERT INTO tbl_login(login_fname, login_name, login_pass, login_email)';
    $create_user_query .= ' VALUES(:fname, :username, :password, :email)';
    $create_user_set = $pdo->prepare($create_user_query);
    $create_user_result = $create_user_set->execute(
        array(
            ':fname'=>$fname,
            ':username'=>$username,
            ':password'=>$password,
            ':email'=>$email
        )
    );

    if($create_user_result) {
        redirect_to('index.php');
    } else{
        return 'This individual sucks!';
    }
}

function getSingleUser($id){
    $pdo = Database::getInstance()->getConnection();

    $get_user_query = 'SELECT * FROM tbl_login WHERE login_id = :id';
    $get_user_set = $pdo->prepare($get_user_query);
    $get_user_result = $get_user_set->execute(
        array(
            ':id'=>$id
        )
    );

    // echo $get_user_set->debugDumpParams();
    // exit;

    if($get_user_result && $get_user_set->rowCount()){
        return $get_user_set;
    }else{
        return false;
    }
}


function editUser($id, $fname, $username, $password, $email){
    $pdo = Database::getInstance()->getConnection();
 
    $update_user_query = 'UPDATE tbl_login SET login_fname=:fname, login_name=:username';
    $update_user_query .= ', login_pass=:password, login_email=:email';
    $update_user_query .= ' WHERE login_id=:id';
    $update_user_set = $pdo->prepare($update_user_query);
    $update_user_result = $update_user_set->execute(
        array(
            ':fname'=>$fname,
            ':username'=>$username,
            ':password'=>$password,
            ':email'=>$email,
            ':id'=>$id
        )
    );

    if($update_user_result){
        redirect_to('index.php');
    }else{
        return 'Update failed...';
    }
}

function getAllUsers() {
    $pdo = Database::getInstance()->getConnection();

    $get_all_query = 'SELECT * FROM tbl_login';
    $set_users = $pdo->query($get_all_query);

    if($set_users) {
        return $set_users;
    } else {
        return false;
    }

}

function deleteUser($id) {

    $pdo = Database::getInstance()->getConnection();

    $delete_user_query = 'DELETE FROM tbl_login WHERE login_id = :id';
    $delete_user_set = $pdo->prepare($delete_user_query);
    $delete_result = $delete_user_set->execute(
        array(
            ':id'=>$id
        )
    );


    if($delete_result && $delete_user_set->rowCount() > 0) {
        redirect_to('admin_delete_user.php');
    } else {
        return false;
    }
    
}