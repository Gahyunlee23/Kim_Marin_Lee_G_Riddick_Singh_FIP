<?php 
function login($username, $password) {

    $pdo = Database::getInstance()->getConnection();

    $check_user_exist = 'SELECT COUNT(*) FROM `tbl_login` WHERE login_name = :username';
    $user_set = $pdo->prepare($check_user_exist);
    $user_set ->execute(
        array(
            ':username'=>$username
        )
    );
    
    if($user_set->fetchColumn()>0) {

        $check_match_query ='SELECT * FROM `tbl_login` WHERE login_name = :username';
        $check_match_query .=' AND login_pass = :password';
        $user_match = $pdo->prepare($check_match_query);
        $user_match->execute(
            array(
                ':username'=>$username,
                ':password'=>$password
            )
        );

        if($user_match) {
            redirect_to('index.php');
        } else {
            return 'Wrong pass!';
        }
    } else { 
        return 'User does not exist!';
    }

}
