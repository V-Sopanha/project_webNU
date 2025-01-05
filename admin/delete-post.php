<?php
    include('connection.php');

    if (isset($_POST['remove_id'])) {
        $id = $_POST['remove_id'];

        $sql = "DELETE FROM posts WHERE id='$id'";
        $result = $connection->query($sql);

        if ($result) {
            header('Location: view-post.php');
        } else {
            echo "Error: " . $connection->error;
        }
    }
?>