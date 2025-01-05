<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/style/theme.css">
    <link rel="stylesheet" href="assets/style/bootstrap.css">
</head>
<body>
    <main class="admin">
        <div class="container-fluid">
            <div class="row">
                <?php include('sidebar.php'); ?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3 class="text-center">Admin Dashboard</h3>
                        </div>
                        <div class="bottom view-post">
                            <!-- Add your dashboard content here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>