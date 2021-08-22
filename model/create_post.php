<div class="container p-4 d-flex justify-content-center">
    <div class="w-75 shadow create" >
        <h1 class="text-center m-4 text-white">Ctreate Your New Post</h1>
        <form action="model/create_model.php" method="post" class="m-4" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Title post" name="title">
            </div>
            <div class="form-group">
                <select class="custom-select form-control" id="inputGroupSelect01" name="category">
                    <option selected>Choose...</option>
                    <option value="1">Coffee</option>
                    <option value="2">Farming</option>
                    <option value="3">Gear</option>
                </select>
            </div>
            <div class="form-group">
                <textarea name="content" class="form-control" placeholder="Description for post ..." cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <input type="file" name="file" id="file">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info btn-block" name="submit" value="Submit">
            </div>
        </form>
    </div>
</div>