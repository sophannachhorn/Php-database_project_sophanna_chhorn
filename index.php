<?php
    include_once('partial/header.php'); 
    include_once('partial/navbar.php'); 
    if (isset($_GET['page'])){
        if ($_GET['page'] == 'coffee'){
            include_once('pages/coffee.php');
        }elseif ($_GET['page'] == 'farming'){
            include_once('pages/farming.php');
        }elseif ($_GET['page'] == 'gear'){
            include_once('pages/gear.php');
        }elseif ($_GET['page'] == 'about'){
            include_once('pages/about.php');
        }elseif ($_GET['page'] == 'home'){
            include_once('pages/home.php');
        }elseif ($_GET['page'] == 'search'){
            include_once('pages/search_post.php');
        }elseif ($_GET['page'] == 'create'){
            include_once('model/create_post.php');
        }elseif ($_GET['page'] == 'admin_logout'){
            include_once('model/admin_logout.php');
        }
    }else {
        
        header('Location: index.php?page=home');
    }

    include_once('partial/footer.php');
    include_once('partial/link.php');
