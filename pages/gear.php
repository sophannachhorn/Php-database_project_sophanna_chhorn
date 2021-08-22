<div class="container mt-4">
    <div class="mt-4 m-4 d-flex justify-content-between">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="display-3"><strong>Gear</strong></h1>
        </div>
        <?php 
            require_once('database/database.php');
            $products = getGearOne();
            foreach($products as $product):     
        ?>
        <a href="model/details.php?postId=<?= $product['postID'] ?>&place=gear" class="card bg-dark text-white border-0 w-75 h-75">
            <img class="card-img w-100" style="opacity: .50" src="images/<?= $product['image'] ?>" alt="Card image">
            <div class="card-img-overlay d-flex flex-column align-items-start justify-content-end">
                <h4 class="card-title"><?= $product['title'] ?></h4>
                <p class="card-text">Last updated <?= $product['date'] ?>"</p>
            </div>
        </a>
        <?php endforeach; ?>
    </div> 
    <div class="d-flex">
        <div class="mt-4 d-flex flex-column" style='width: 65%;'>
            <?php 
                require_once('database/database.php');
                $products = getGear();
                foreach($products as $product):  
                    $descrip = seeMore($product['description'], 100);
            ?>
            <div class="d-flex align-items-center mt-4">
                <button class="btn border border-secondary text-left p-2 fw-bold"><?= $product['name'] ?></button>
                <?php if($_SESSION['admin'] !== ""): ?>
                <a href="model/edit_post.php?id=<?= $product['postID'] ?>" class="text-dark mr-1 ml-2 display-4 btn btn-outline-dark"><i class="fa fa-pencil-square-o"></i></a>
                <a href="model/remove.php?id=<?= $product['postID'] ?>" class="text-dark ml-1 display-4 btn btn-outline-dark"><i class="fa fa-trash"></i></a>
                <?php endif; ?>
            </div>
            <a href="model/details.php?postId=<?= $product['postID'] ?>&place=gear" class="card text-dark" style="width: 42rem;">
                <div class="card-body">
                    <h4 class="card-text"><?= $product['title'] ?></h4>
                    <p class="card-text"><small class="text-muted">Last updated <?= $product['date'] ?></small></p>
                    
                </div>
                
                <img src="images/<?= $product['image'] ?>" class="card-img-top" style="height: 23rem;" alt="...">
                <div class="card-body">
                    <p class="card-text"><?= $descrip ?> ... <span>See More</span></p>
                    <p></p>
                </div>
            </a> 
            <?php endforeach; ?>
        </div>
        <div class="d-flex flex-column align-items-center mt-4" style='width: 35%;'>
            <div class="bg-light w-100 ml-4 h-50 border">
                <h2 class="text-center mt-4">Sort By Title</h2>
                <?php 
                    require_once('database/database.php');
                    $products = getGearSort();
                    foreach($products as $product):  
                ?>
                <div class="card mb-3 mt-4 border-0" style="max-width: 550px;">
                    <a href="model/details.php?postId=<?= $product['postID'] ?>&place=gear" class="d-flex no-gutters text-dark">
                        <div class=" rounded bg-dark" style="height: 130px;">
                            <img src="images/<?= $product['image'] ?>" class="card-img" style="opacity: .80; height: 130px; width: 200px; border-radius: 15px;" alt="...">
                        </div>
                        <div class="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product['title'] ?></h5>
                                <p class="card-text"><small class="text-muted">Last updated: <?= $product['date'] ?></small></p>
                            </div>
                        </div>    
                    </a>
                    <?php if($_SESSION['admin'] !== ""): ?>
                    <div class="d-flex align-items-end justify-content-end w-100" style="margin-top: -20px;">
                        <a href="model/edit_post.php?id=<?= $product['postID'] ?>" class="text-success mr-1"><i class="fa fa-pencil-square-o"></i></a>
                        <a href="model/remove.php?id=<?= $product['postID'] ?>" class="text-danger ml-1"><i class="fa fa-trash"></i></a>
                    </div>
                    <?php endif; ?>
                    <hr>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

