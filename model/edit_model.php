<?php
    require_once('../database/database.php');
    if (isset($_FILES['file'])){
        $imageName = $_FILES['file']['name'];
        if ($imageName !== ""){
            if ($_FILES['file']['error'] > 0){
                echo "Error: " . $_FILES["file"]["error"] . "<br>";
            }else {
                $imageName = $_FILES['file']['name'];
                $tmp_name = $_FILES['file']['tmp_name'];
                $folder = '../images/';
    
                move_uploaded_file($tmp_name, $folder.$imageName);
                editPost($_POST, $imageName);
            }
        }else{
            $image = $_POST['image'];
            editPost($_POST, $image);
        }
        
    }else {
        echo "Fail";
    }