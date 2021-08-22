<?php
    require_once('../database/database.php');
    if (isset($_FILES['file'])){
        if ($_FILES['file']['error'] > 0){
            echo "Error: " . $_FILES["file"]["error"] . "<br>";
        }else {
            $imageName = $_FILES['file']['name'];
            $tmp_name = $_FILES['file']['tmp_name'];
            $folder = '../images/';
            move_uploaded_file($tmp_name, $folder.$imageName);
            createPost($_POST, $imageName);
        }
    }else {
        echo "Fail";
    }