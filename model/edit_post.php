<?php include_once('../partial/header.php'); ?>
<?php include_once('../partial/navbar.php'); ?>
<div class="container p-4 d-flex justify-content-center">
    <div class="w-75 shadow create" >
        <h1 class="text-center m-4 text-white">Edit Your Post</h1>
        <?php
            include_once('../database/database.php');
            $id = $_GET['id'];
            $products = getOnePost($id);
            foreach($products as $product):
        ?>
        <form action="edit_model.php" method="post" class="m-4" enctype="multipart/form-data">
                <input type="hidden" value="<?= $product['postID'] ?>" name="Id">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Title post" value="<?= $product['title'] ?>" name="title">
            </div>
            <div class="form-group">
                <select class="custom-select form-control" id="inputGroupSelect01" name="category">
                    <option value="<?= $product['categoryID'] ?>"><?= $product['name'] ?></option>
                    <option value="1">Coffee</option>
                    <option value="2">Farning</option>
                    <option value="3">Gear</option>
                </select>
            </div>
            <div class="form-group">
                <textarea name="content" class="form-control" placeholder="Description for post ..." cols="30" rows="10"><?= $product['description'] ?></textarea>
            </div>
            <div class="form-group">
                <input type="file" name="file" id="file">
                <input type="text" name="image" class="d-none" value="<?= $product['image'] ?>">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info btn-block" name="submit" value="Submit">
            </div>
        </form>
        <?php endforeach; ?>
    </div>
</div>
<?php include_once('../partial/footer.php'); ?>