<?php
    include_once('../database/database.php');
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        adminLogin($_POST);
    }