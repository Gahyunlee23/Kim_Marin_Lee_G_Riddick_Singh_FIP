<?php

function getAll($tbl) {
    $pdo = Database::getInstance()->getConnection();

    $queryAll = 'SELECT * FROM '.$tbl;
    $results = $pdo->query($queryAll);

    if($results) {
        return $results;
    } else {
        return 'There was a problem accessing this info';
    }
};

function addProduct($product) {
    // var_dump($product);
    try {
        $pdo = Database::getInstance()->getConnection();

        $img = $product['img'];
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


        
        $add_product_query = 'INSERT INTO tbl_product(product_img, product_name, product_color, product_rate, product_description, product_price)';
        $add_product_query .= ' VALUE(:product_img, :product_name, :product_color, :product_rate, :product_description, :product_price)';
        
        $set_product = $pdo->prepare($add_product_query);
        $add_product_result = $set_product->execute(
            array(
                ':product_img' => $generated_filename,
                ':product_name' => $product['name'],
                ':product_color' => $product['color'],
                ':product_rate' => $product['rate'],
                ':product_description' => $product['description'],
                ':product_price' => $product['price'],
            )
        );

        $last_uploaded_id = $pdo->lastInsertId();
        
        if($add_product_result && !empty($last_uploaded_id)) {
            $update_category_query = 'INSERT INTO tbl_cat_pro(product_id, category_id) VALUE (:product_id, :category_id)';
            $update_category = $pdo->prepare($update_category_query);
            $update_category->execute(
                array(
                    ':product_id' => $last_uploaded_id,
                    'category_id' => $product['category']
                )
            );
           
        }

        redirect_to('index.php');

    } catch (Exception $e) {
        $error = $e->getMessage();
        return $error;

    }
}

function getContent() {
    $pdo = Database::getInstance()->getConnection();

    $get_all_pro = 'SELECT * FROM tbl_';
    $get_all = $pdo->query($get_all_pro);

    if($get_all) {
        return $get_all;
    } else {
        return false;
    }
    
}

function deleteProduct($id) {
    $pdo = Database::getInstance()->getConnection();

    $delete_pro_query = 'DELETE FROM tbl_product WHERE product_id = :id';
    $delete_pro_set = $pdo->prepare($delete_pro_query);
    $delete_results = $delete_pro_set->execute(
        array(
            ':id' => $id
        )
    );

    if($delete_results && $delete_pro_set->rowCount() > 0) {
        redirect_to('index.php');
    } else {
        return false;
    }
}

function getSingleProduct($id) {
    $pdo = Database::getInstance()->getConnection();

    $get_product_query = 'SELECT * FROM tbl_product WHERE product_id = :id';
    $get_product_set = $pdo->prepare($get_product_query);
    $get_product_result = $get_product_set->execute(
        array(
            ':id'=>$id
        )
    );
    // echo $get_product_set->debugDumpParams();
    // exit;

    if($get_product_result && $get_product_set->rowCount()){
        return $get_product_set;
    }else{
        return false;
    }

    
}

function editProduct($id, $img, $name, $color, $rate, $description, $price) {
    $pdo = Database::getInstance()->getConnection();
    
    $edit_pro_query = 'UPDATE tbl_product SET product_img = :product_img, product_name = :product_name, product_color = :product_color, product_rate = :product_rate, product_description = :product_description, product_price = :product_price';
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

    $search_key_query = 'SELECT * FROM tbl_product WHERE product_name LIKE :search';
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