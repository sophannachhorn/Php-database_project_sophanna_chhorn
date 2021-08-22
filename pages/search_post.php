<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <h2>Search All Post</h2>
        <form action="" method="POST" class="form-inline my-2​ w-50 my-lg-0">
            <input class="form-control mr-sm-2 w-75" type="search" placeholder="Search" name="search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="bg-light w-100 h-50 border mt-4">
        <?php 
            require_once('database/database.php');
            $products = '';
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $products = searchByTitle($_POST);
            }else{
                $products = getAllPost();
            }
            foreach($products as $product):  
            $descrip = seeMore($product['description'], 100);
            
        ?>
        <div class="card mb-3 mt-4 border-0 w-100" style="">
            <a href="model/details.php?postId=<?= $product['postID'] ?>&place=search" class="d-flex no-gutters text-dark">
                <div class=" rounded bg-dark w-50" style="height: 310px;">
                    <img src="images/<?= $product['image'] ?>" class="card-img w-100" style="opacity: .80; height: 310px;" alt="...">
                </div>
                <div class="w-50">
                    <div class="card-body">
                        <h2 class="card-title"><?= $product['title'] ?></h2>
                        <p class="card-text" style="font-size: 18px;"><?= $descrip ?> ... <span>See More</span></p>
                        <p class="card-text"><small class="text-muted">Last updated: <?= $product['date'] ?></small></p>
                    </div>
                </div>    
            </a>
            <div class="d-flex align-items-end justify-content-end w-100" style="margin-top: -20px;">
                <a href="model/edit_post.php?id=<?= $product['postID'] ?>" class="text-dark border border-dark p-1 mr-1"><i class="fa fa-pencil-square-o"></i></a>
                <a href="model/remove.php?id=<?= $product['postID'] ?>" class="text-dark border border-dark p-1 ml-1"><i class="fa fa-trash"></i></a>
            </div>
            <hr>
        </div>
        <?php endforeach; ?>
    </div>
    </div>
</div>

