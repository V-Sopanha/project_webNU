<?php 
    include('sidebar.php');
    include 'function.php';
?>
<div class="col-10">
    <div class="content-right">
        <div class="top">
            <h3>Add Sport News</h3>
        </div>
        <div class="bottom">
            <figure>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-select" name="type">
                            <option value="Type 1">Type 1</option>
                            <option value="Type 2">Type 2</option>
                            <option value="Type 3">Type 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" class="form-control" name="category">
                    </div>
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" class="form-control" name="thumbnail">
                    </div>
                    <div class="form-group">
                        <label>Banner</label>
                        <input type="file" class="form-control" name="banner">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="btn_add_post">Submit</button>
                    </div>
                </form>
            </figure>
        </div>
    </div>
</div>
</div>
</div>
</main>
</body>
</html>