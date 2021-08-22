<?php SESSION_START(); ?>
<?php include_once('../partial/header.php'); ?>
    <div class="container d-flex flex-column mt-4 mb-4 justify-content-center">
        <?php
            include_once('../database/database.php');
            $id = $_GET['postId'];
            $place = $_GET['place'];
            $products = getOnePost($id);
            foreach($products as $product):
        ?>
        <div class="m-4">
            <a href="../index.php?page=<?= $place ?>" class="btn btn-info" >back</a><br>
        </div>
        <?php if($_SESSION['admin'] !== ""): ?>
        <div class="d-flex">
            <a href="../model/edit_post.php?id=<?= $product['postID'] ?>" class="text-dark mr-1 border border-dark p-2"><i class="fa fa-pencil-square-o"></i></a>
            <a href="../model/remove.php?id=<?= $product['postID'] ?>" class="text-dark ml-1 border border-dark p-2"><i class="fa fa-trash"></i></a>
        </div>
        <?php endif; ?>
        <div class="d-flex flex-column">
            <img src="../images/<?= $product['image'] ?>" class="rounded w-100" alt="">
            <h2 class="text-left"><?= $product['title'] ?></h2>
            <p class="card-text mb-4 text-left"><small class="text-muted">Last updated <?= $product['date'] ?></small></p>
            <p class="w-100" style="font-size: 20px;"><?= $product['description'] ?></p>
        </div>
        <?php endforeach; ?>
    </div>
<?php include_once('../partial/footer.php'); ?>
