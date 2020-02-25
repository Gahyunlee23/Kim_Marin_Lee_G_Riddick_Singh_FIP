<?php 
function login($username, $password) {
    // return sprintf('You are trying username=>%s, password=>%s', $username, $password);

    $pdo = Database::getInstance()->getConnection();

    $check_exist_query = 'SELECT COUNT(*) FROM `tbl_login` WHERE user_name = :username';
    $user_set = $pdo->prepare($check_exist_query);
    $user_set ->execute(
        array(
            ':username'=>$username
        )
    );
    
    if($user_set->fetchColumn()>0) {
        //check after that
        $check_match_query ='SELECT * FROM `tbl_login` WHERE user_name = :username';
        $check_match_query .=' AND user_pass = :password';
        $user_match = $pdo->prepare($check_match_query);
        $user_match->execute(
            array(
                ':username'=>$username,
                ':password'=>$password
            )
        );

        if($user_match){
            redirect_to('index.html');
        } else {
            return 'Wrong pass!';
        }
    } else { 
        return 'User does not exist!';
    }

    


}