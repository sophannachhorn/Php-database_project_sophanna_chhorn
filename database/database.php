<?php 
    function db(){
        return new mysqli('localhost', 'root', '', 'coffee_shop');
    }
    // ............................................CREATE POST .................................................................................................................................. 
    function createPost($value, $image){
        $title = $value['title'];
        $content = $value['content'];
        $category = $value['category'];
        $location = date_default_timezone_set('Asia/Phnom_Penh');
        $date = date('Y-m-d');
        db()->query("INSERT INTO posts(title,description,image,date,userID,categoryID) VALUES('$title','$content','$image','$date',1,'$category')");
        header("Location: ../index.php?page=home");
    }


    function getAllPost(){
        return db()->query("SELECT * FROM posts INNER JOIN categories ON posts.categoryID = categories.categoryID ORDER BY postID ");
    }
    function getAllPostLimit(){
        return db()->query("SELECT * FROM posts INNER JOIN categories ON posts.categoryID = categories.categoryID ORDER BY postID DESC LIMIT 10");
    }
    function getLatestOne(){
        return db()->query("SELECT * FROM posts INNER JOIN categories ORDER BY postID DESC LIMIT 1");
    }


    function getCoffeeOne(){
        return db()->query("SELECT * FROM posts INNER JOIN categories ON posts.categoryID=categories.categoryID WHERE categories.name='Coffee' ORDER BY posts.postID DESC LIMIT 1");
    }
    function getFarmingOne(){
        return db()->query("SELECT * FROM posts INNER JOIN categories ON posts.categoryID=categories.categoryID WHERE categories.name='Farming' ORDER BY posts.postID DESC LIMIT 1");
    }
    function getGearOne(){
        return db()->query("SELECT * FROM posts INNER JOIN categories ON posts.categoryID=categories.categoryID WHERE categories.name='Gear' ORDER BY posts.postID DESC LIMIT 1");
    }

    function getCoffee(){
        return db()->query("SELECT * FROM posts INNER JOIN categories ON posts.categoryID=categories.categoryID WHERE categories.name='Coffee' ORDER BY posts.postID DESC LIMIT 10");
    }
    function getFarming(){
        return db()->query("SELECT * FROM posts INNER JOIN categories ON posts.categoryID=categories.categoryID WHERE categories.name='Farming' ORDER BY posts.postID DESC LIMIT 10");
    }
    function getGear(){
        return db()->query("SELECT * FROM posts INNER JOIN categories ON posts.categoryID=categories.categoryID WHERE categories.name='Gear' ORDER BY posts.postID DESC LIMIT 10");
    }

    function getCoffeeSort(){
        return db()->query("SELECT * FROM posts INNER JOIN categories ON posts.categoryID=categories.categoryID WHERE categories.name='Coffee' ORDER BY posts.title LIMIT 10");
    }
    function getFarmingSort(){
        return db()->query("SELECT * FROM posts INNER JOIN categories ON posts.categoryID=categories.categoryID WHERE categories.name='Farming' ORDER BY posts.title LIMIT 10");
    }
    function getGearSort(){
        return db()->query("SELECT * FROM posts INNER JOIN categories ON posts.categoryID=categories.categoryID WHERE categories.name='Gear' ORDER BY posts.title LIMIT 10");
    }


    //...........................................DELETE POST .................................................................................................................................... 
    function deleteOnePost($id){
        db()->query("DELETE FROM posts WHERE postid = $id");
        header("Location: ../index.php");
    }

    
    function getOnePost($id){
        return db()->query("SELECT * FROM posts INNER JOIN categories ON posts.categoryID=categories.categoryID WHERE posts.postID=$id");
    }
    // ...........................................EDIT POST..................................................................................................
    function editPost($value, $image){
        $id = $value['Id'];
        $title = $value['title'];
        $content = $value['content'];
        $category = $value['category'];
        $location = date_default_timezone_set('Asia/Phnom_Penh');
        $date = date('Y-m-d');

        db()->query("UPDATE posts SET title='$title',description='$content',image='$image',date='$date',categoryID='$category' WHERE posts.postID=$id");
        header("Location: ../index.php?page=home");

    }
    // .....................................SEARCH POST BY TITLE.......................................................................................................
    function searchByTitle($title){
        $name = $title['search'];
        return db()->QUERY("SELECT * FROM posts WHERE title LIKE '%$name%' ORDER BY title");
    }
    function seeMore($description, $number){
        return substr($description, 0, $number);
    }
    // ........................................FOR ADMIN LOGIN.........................................................................................................
    function adminLogin($value){
        $user = $value['user'];
        $password = $value['password'];
        $userAdmin = db()->query("SELECT * FROM users WHERE username='$user'");

        foreach($userAdmin as $admin){
            if (password_verify($password, $admin['password'])){
                SESSION_START();
                $_SESSION['admin'] = $admin['username'];
                $_SESSION['image'] = $admin['profile'];
                $_SESSION['userID'] = $admin['userID'];
                header("Location: ../index.php?page=home");
            }else{
                echo "NOT COMPLETE";
            }
            

        }
    }