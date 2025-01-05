<?php 
    include('sidebar.php');
    include 'function.php';
?>
<div class="col-10">
    <div class="content-right">
        <div class="top">
            <h3>All Sport News</h3>
        </div>
        <div class="bottom view-post">
            <figure>
                <form method="post" enctype="multipart/form-data">
                    <table class="table" border="1px">
                        <tr>
                            <th>Title</th>
                            <th>Post Type</th>
                            <th>Categories</th>
                            <th>Thumbnail</th>
                            <th>Publish Date</th>
                            <th>Actions</th>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM tbNews";
                            $result = $connection->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                echo "
                                    <tr>
                                        <td>{$row['newsTitle']}</td>
                                        <td>{$row['subCategory']}</td>
                                        <td>{$row['newsCategory']}</td>
                                        <td><img src='assets/image/{$row['newsThumbnails']}' width='80'/></td>
                                        <td>{$row['created_at']}</td>
                                        <td width='150px'>
                                            <a href='update-post.php?id={$row['newsID']}' class='btn btn-primary'>Update</a>
                                            <button type='button' remove-id='{$row['newsID']}' class='btn btn-danger btn-remove' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                                                Remove
                                            </button>
                                        </td>
                                    </tr>
                                ";
                            }
                        ?>
                    </table>
                    <ul class="pagination">
                        <li>
                            <a href="">1</a>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a href="">4</a>
                        </li>
                    </ul>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to remove this post?</h5>
                                </div>
                                <div class="modal-footer">
                                    <form action="delete-post.php" method="post">
                                        <input type="hidden" class="value_remove" name="remove_id">
                                        <button type="submit" class="btn btn-danger">Yes</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>  
                                    </form>
                                </div>
                            </div>
                        </div>
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