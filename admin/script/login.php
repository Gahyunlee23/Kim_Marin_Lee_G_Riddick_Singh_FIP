<?php 
function login($username, $password, $login_date) {

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

        while($existuser = $user_match->fetch(PDO::FETCH_ASSOC)) {
            $id = $existuser['login_id'];

            $_SESSION['login_id'] = $id;
            $_SESSION['login_fname'] = $existuser['login_fname'];

            $update = 'UPDATE tbl_login SET login_date = :login_date WHERE login_id = :id';
            $user_update = $pdo->prepare($update);
            $user_update -> execute(
                array(
                    ':login_date'=>$login_date,
                    ':id'=>$id
                )
            );
        }
        
        if(isset($id)){
            redirect_to('index.php');
            return 'You logged in successfully!';
        }else{

            return 'Wrong pass';
        }

        
    } else { 
        return 'User does not exist!';
    }

}

function confirm_logged_in() {
    if(!isset($_SESSION['login_id'])) {
        redirect_to('admin_login.php');
    }
}

function logout() {
    session_destroy();
    redirect_to('admin_login.php');
}
