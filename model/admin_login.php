    
<?php include_once('../partial/header.php');  ?>
<div class="container p-4 d-flex justify-content-center" style="margin-top: 10vh;">
    <div class="w-50 shadow" >
        <h1 class="text-center m-4 text-dark">For Only Admin Login</h1>
        <form action="login_model.php" method="post" class="m-4" enctype="multipart/form-data"> 
            <div class="form-group">
                <input type="text" class="form-control" placeholder="User Name" name="user">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password">    
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info btn-block" name="submit" value="Login">
            </div>
        </form>
    </div>
</div>
<?php include_once('../partial/link.php');  ?>
