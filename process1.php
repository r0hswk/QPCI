<?php
require_once 'class1/Image.php';
$app = new Image;

if (isset($_POST['upload'])) {
    $image      = $_FILES['image']['name'];
    $image_tmp  = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_ext  = strtolower(pathinfo($image, PATHINFO_EXTENSION));

    // check if file is empty
    if (empty($image)) {
        header("Location: ./?upload&error=Select image to upload.");
        die;
    }

    // valid image extension
    $valid_ext = ['jpeg', 'jpg', 'JPEG', 'JPG', 'png', 'PNG'];

    // check if image has valid extension
    if (in_array($image_ext, $valid_ext)) {
        // check image size
        if ($image_size > 100000) {
            header("Location: ./?upload&error=Image must not be more than 100kb.");
            die;
        }

        // if there is no error, go to upload method in Image.php class
        if ($app->upload($image, $image_tmp, $image_ext)) {
            header("Location: ./");
        }
    } else {
        header("Location: ./?upload&error=Image doesn't have a valid extension.");
    }
}
if (isset($_POST['uploadpost'])) {
    $image      = $_FILES['image']['name'];
    $image_tmp  = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_ext  = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $title=$_POST['title'];
    $content=$_POST['contents'];
    $price=$_POST['price'];
    $selected=$_POST['selected_option'];

    // check if file is empty
    if (empty($image)) {
        header("Location: ./?upload&error=Select image to upload.");
        die;
    }

    // valid image extension
    $valid_ext = ['jpeg', 'jpg', 'JPEG', 'JPG', 'png', 'PNG'];

    // check if image has valid extension
    if (in_array($image_ext, $valid_ext)) {
        // check image size
        if ($image_size > 1000000) {
            header("Location: ./?upload&error=Image must not be more than 100kb.");
            die;
        }

        // if there is no error, go to upload method in Image.php class
        if ($app->uploadpost($image, $image_tmp, $image_ext,$title,$content,$price,$selected)) {
            header("Location: ./adminsec/add_post.php");
        }
    } else {
        header("Location: ./adminsec/add_post.php/?upload&error=Image doesn't have a valid extension.");
    }
}

if (isset($_POST['update'])) {
    $image      = $_FILES['image']['name'];
    $image_tmp  = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_ext  = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $id         = $_POST['id'];

    if (empty($image)) {
        // header("Location: ./?upload&error=Select image to upload.");
        die;
    }

    // valid image extension
    $valid_ext = ['jpeg', 'jpg', 'JPEG', 'JPG', 'png', 'PNG'];

    // check if image has valid extension
    if (in_array($image_ext, $valid_ext)) {
        // check image size
        if ($image_size > 10000000) {
            header("Location: ./adminsec/edit_post.php?id=".$id."");
            die;
        }

        // if there is no error, go to update method in Image.php class
        if ($app->update($image, $image_tmp, $image_ext, $id)) {
            header("Location: ./adminsec/edit_post.php?id=".$id."");
        }
    } else {
        header("Location: ./adminsec/edit_post.php?id=".$id."");
    }
    
}
if (isset($_POST['updatelogo'])) {
    $image      = $_FILES['image']['name'];
    $image_tmp  = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_ext  = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $id         = 1;

    if (empty($image)) {
        // header("Location: ./?upload&error=Select image to upload.");
        header("Location: ./adminsec/ind.php");
        die;
    }

    // valid image extension
    $valid_ext = ['jpeg', 'jpg', 'JPEG', 'JPG', 'png', 'PNG'];

    // check if image has valid extension
    if (in_array($image_ext, $valid_ext)) {
        // check image size
        if ($image_size > 10000000) {
            // header("Location: ./adminsec/add_post.php/?upload&error=Image must not be more than 10mb.");
            header("Location: ./adminsec/ind.php");
            die;
        }

        // if there is no error, go to update method in Image.php class
        if ($app->update($image, $image_tmp, $image_ext, $id)) {
            // header("Location: ./adminsec/add_post.php/");
            header("Location: ./adminsec/ind.php");
        }
    } else {
        header("Location: ./adminsec/ind.php");
    }
    
}
if (isset($_POST['updatepost'])) {
    $image      = $_FILES['image']['name'];
    $image_tmp  = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_ext  = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $id         = $_POST['id'];
    $title=$_POST['title'];
    $content=$_POST['contents'];
    $price=$_POST['price'];
    $selected_option=$_POST['selected_option'];

    if (empty($image)) {
        header("Location: ./?upload&error=Select image to upload.");
        die;
    }

    // valid image extension
    $valid_ext = ['jpeg', 'jpg', 'JPEG', 'JPG', 'png', 'PNG'];

    // check if image has valid extension
    if (in_array($image_ext, $valid_ext)) {
        // check image size
        if ($image_size > 10000000) {
            header("Location: ./adminsec/edit_post.php?id=".$id."");
            die;
        }

        // if there is no error, go to update method in Image.php class
        if ($app->updatepost($image, $image_tmp, $image_ext, $id, $title, $content,$price,$selected_option)) {
            header("Location: ./adminsec/edit_post.php?id=".$id."");
        }
    } else {
        header("Location: ./adminsec/edit_post.php/?upload&error=Image doesn't have a valid extension.");
    }
    
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // go to delete method
    if ($app->delete($id)) {
        header("Location: ./");
    }
}