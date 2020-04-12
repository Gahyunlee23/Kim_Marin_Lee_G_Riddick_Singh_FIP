<?php

function addContent($content) {
    // var_dump($content);
    try {
        $pdo = Database::getInstance()->getConnection();

        $img = $content['img'];
        $upload_file = pathinfo($img['name']);
        $accepted_types = array('gif', 'jpg', 'jpeg', 'jpe', 'png', 'webp', 'JPG');
        if(!in_array($upload_file['extension'], $accepted_types)) {
            throw new Exception('wrong file extension!');
        } 

        $image_path = '../images/';

        $generated_name = md5($upload_file['filename'].time());
        $generated_filename = $generated_name.'.'.$upload_file['extension'];
        $targetpath = $image_path.$generated_filename;
        
        
        if(!move_uploaded_file($img['tmp_name'], $targetpath)) {
            throw new Exception('Failed to load file, check permission');
        }


        
        $add_content_query = 'INSERT INTO tbl_story(story_title, story_img, story_description, story_video, story_explain)';
        $add_content_query .= ' VALUE(:story_title, :story_img, :story_description, :story_video, :story_explain)';
        
        $set_content = $pdo->prepare($add_content_query);
        $add_content_result = $set_content->execute(
            array(
                ':story_title' => $content['title'],
                ':story_img' => $generated_filename,
                ':story_video' => $content['video'],
                ':story_explain' => $content['explain'],
                ':story_description' => $content['description'],
            )
        );

        //    echo $set_content->debugDumpParams();
        //    exit;
    

        redirect_to('index.php');

    } catch (Exception $e) {
        $error = $e->getMessage();
        return $error;

    }
}

function getContent() {
    $pdo = Database::getInstance()->getConnection();

    $get_all_pro = 'SELECT * FROM '.$tbl;
    $get_all = $pdo->query($get_all_pro);

    if($get_all) {
        return $get_all;
    } else {
        return false;
    }
    
}

function deleteContent($id) {
    $pdo = Database::getInstance()->getConnection();

    $delete_con_query = 'DELETE FROM tbl_story WHERE story_id = :id';
    $delete_con_set = $pdo->prepare($delete_con_query);
    $delete_results = $delete_con_set->execute(
        array(
            ':id' => $id
        )
    );

    if($delete_results && $delete_con_set->rowCount() > 0) {
        redirect_to('index.php');
    } else {
        return false;
    }
}


function editProduct($id, $img, $name, $color, $rate, $description, $price) {
    $pdo = Database::getInstance()->getConnection();
    
    $edit_pro_query = 'UPDATE tbl_story SET product_img = :product_img, product_name = :product_name, product_color = :product_color, product_rate = :product_rate, product_description = :product_description, product_price = :product_price';
    $edit_pro_query .= ' WHERE product_id = :id';
    $set_pro_edit = $pdo->prepare($edit_pro_query);
    $edit_results = $set_pro_edit->execute(
        array(
            ':id' => $id,
            ':product_img' => $img,
            ':product_name' => $name,
            ':product_color' => $color,
            ':product_rate' => $rate,
            ':product_description' => $description,
            ':product_price' => $price
        )
    );

    // echo $set_pro_edit->debugDumpParams();
    // exit;
    

    if($edit_result){
        redirect_to('index.php');
    }else{
        return 'Update failed...';
    }
}


function searchKeyWord($search) {
    $pdo = Database::getInstance()->getConnection();

    $search_key_query = 'SELECT * FROM tbl_story WHERE product_name LIKE :search';
    $set_search = $pdo->prepare($search_key_query);
    $set_search->bindValue(':search', '%' . $search . '%');
    $set_results = $set_search->execute(
        array(
            ':search' => $search
        )
    );

    echo $set_search->debugDumpParams();
    exit;

    if($set_results) {
        return $set_results;
    } else {
        return false;
    }
    
}