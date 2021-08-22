<div class="container mt-4">
    <div class="mt-4 m-4 d-flex justify-content-between">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="display-3"><strong>Home</strong></h1>
        </div>
        <?php 
            require_once('database/database.php');
            $products = getLatestOne();
            foreach($products as $product):     
        ?>
        <a href="model/details.php?postId=<?= $product['postID'] ?>&place=home" class="card bg-dark text-white border-0 w-75 h-75">
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
                $products = getAllPostLimit();
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
            <a href="model/details.php?postId=<?= $product['postID'] ?>&place=home" class="card text-dark" style="width: 42rem;">
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
            <img src="https://s11.favim.com/orig/7/761/7614/76147/twice-minatozaki-sana-twice-sana-Favim.com-7614703.jpg" alt="..." class="rounded-circle w-50">
            <h4>Sophanna CHHORN</h4>
            <p class="text-center w-75 mt-4">Sophanna is a long time coffee enthusiast and blogger, so the project started naturally five years ago. You can find useful information about coffee types, plantations, equipment and even tips and tricks or fun facts.</p>
            <div class="d-flex">
                <a class="btn btn-outline-light m-1 text-dark" id="follow" href="https://www.facebook.com/profile.php?id=100016537449757">
                    <i class="fa fa-facebook-square" style="font-size: 25px;"></i>
                    <p>1,200 <br>Followers</p>
                </a>
                <!-- Instagram -->
                <a class="btn btn-outline-light m-1 text-dark" id="follow" href="https://www.instagram.com/so__sana/?fbclid=IwAR3Vct-175-P8ICPz1R6FI05_b0hNO7RtwEBMjKo4JZrew0EJO03fGsCpP0">
                    <i class="fa fa-instagram" style="font-size: 25px;"></i>
                    <p>501 <br>Followers</p>
                </a>

                <!-- github -->
                <a class="btn btn-outline-light m-1 text-dark" id="follow" href="https://github.com/sophannachhorn">
                    <i class="fa fa-github" style="font-size: 25px;"></i>
                    <p>1,980 <br> Followers</p>
                </a>
            </div>
            <div class="bg-light w-100 ml-4 h-50 border">
                <h2 class="text-center mt-4">Latest Posts</h2>
                <?php 
                    require_once('database/database.php');
                    $products = getAllPost();
                    foreach($products as $product):  
                ?>
                <div class="card mb-3 mt-4 border-0" style="max-width: 550px;">
                    <a href="model/details.php?postId=<?= $product['postID'] ?>&place=home" class="d-flex no-gutters text-dark">
                        <div class=" rounded bg-dark" style="height: 130px;">
                            <img src="images/<?= $product['image'] ?>" class="card-img" style="opacity: .80; height: 130px; width: 200px; border-radius: 15px;" alt="...">
                        </div>
                        <div class="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product['title'] ?></h5>
                                <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                <p class="card-text"><small class="text-muted">Last updated: <?= $product['date'] ?></small></p>
                            </div>
                        </div>    
                    </a>
                    <?php if($_SESSION['admin'] !== ""): ?>
                    <div class="d-flex align-items-end justify-content-end w-100" style="margin-top: -20px;">
                        <a href="model/edit_post.php?id=<?= $product['postID'] ?>" class="text-dark border border-dark p-1 mr-1"><i class="fa fa-pencil-square-o"></i></a>
                        <a href="model/remove.php?id=<?= $product['postID'] ?>" class="text-dark border border-dark p-1 ml-1"><i class="fa fa-trash"></i></a>
                    </div>
                    <?php endif; ?>
                    <hr>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

