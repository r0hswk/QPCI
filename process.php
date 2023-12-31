<?php
require_once 'class/Database.php';
require_once 'class/Image.php';
require_once 'resources/init.php';
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
        if ($image_size > 10000000) {
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

if (isset($_POST['update'])) {
    $title=$_REQUEST['title'];
    $desc=$_REQUEST['desc'];
    $image      = $_FILES['image']['name'];
    if (!empty($image)) {
    $image_tmp  = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_ext  = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $id         = $_POST['id'];

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
            header("Location: ./?upload&error=Image must not be more than 100kb.");
            die;
        }

        // if there is no error, go to update method in Image.php class
        if ($app->update($image, $image_tmp, $image_ext, $id)) {
            header("Location: ./");
        }
    } else {
        header("Location: ./?upload&error=Image doesn't have a valid extension.");
    }
}
    
             if(!empty($title)){
                $query=mysqli_query($conn,"UPDATE "."title"." SET title= '$title' WHERE id=1");
                
                }
            if(!empty($desc)){
                $query=mysqli_query($conn,"UPDATE "."title"." SET description= '$desc' WHERE id=1");
                
            }
            if(!empty($query)){
            if($query){
                echo '<script>alert("Updated");</script>';
                header("Location: adminsec/ind.php");
             }
             else{
               echo '<script>alert("not updated!");</script>';
               header("Location: adminsec/ind.php");
             }}
             else{
                header("Location: adminsec/ind.php");
             }
           /* elseif(!empty($title) && !empty($desc)){
                $query=mysqli_query($conn,"UPDATE "."title"." SET description= '$desc' title= '$title' where id=1");
            }*/
            
        
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // go to delete method
    if ($app->delete($id)) {
        header("Location: ./");
    }
}