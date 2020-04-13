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

        $add_content_query = 'INSERT INTO tbl_story(story_title, story_img, story_description, story_video, story_explain, story_background)';
        $add_content_query .= ' VALUE(:story_title, :story_img, :story_description, :story_video, :story_explain, :story_background)';
        
        $set_content = $pdo->prepare($add_content_query);
        $add_content_result = $set_content->execute(
            array(
                ':story_title' => $content['title'],
                ':story_img' => $generated_filename,
                ':story_video' => $content['video'],
                ':story_explain' => $content['explain'],
                ':story_description' => $content['description'],
                ':story_background' => $content['background']
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

function getSingleStory($id) {
    $pdo = Database::getInstance()->getConnection();

    $get_str_query = 'SELECT * FROM tbl_story WHERE story_id = :id';
    $set_str = $pdo->prepare($get_str_query);
    $get_str_result = $set_str->execute(
        array(
            ':id' => $id
        )
    );

    if($get_str_result && $set_str->rowCount()) {
        return $set_str;
    } else {
        return false;
    }
}


function editContent($id, $img, $title, $video, $explain, $description, $background) {
    $pdo = Database::getInstance()->getConnection();
    
    $edit_con_query = 'UPDATE tbl_story SET story_id = :id, story_title = :story_title, story_img = :story_img, story_explain = :story_explain, story_description = :story_description, story_video = :story_video, story_background = :story_background';
    $edit_con_query .= ' WHERE story_id = :id';
    $set_con_edit = $pdo->prepare($edit_con_query);
    $edit_results = $set_con_edit->execute(
        array(
            ':id' => $id,
            ':story_img' => $img,
            ':story_title' => $title,
            ':story_explain' => $explain,
            ':story_description' => $description,
            ':story_video' => $video,
            ':story_background' => $background
        )
    );

    // echo $set_con_edit->debugDumpParams();
    // exit;
    

    if($edit_results){
        redirect_to('index.php');
    }else{
        return 'Update failed...';
    }
}


