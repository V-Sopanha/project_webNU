<?php
    session_start(); // Start the session at the beginning

    $connection = new mysqli('localhost', 'root', '', 'db_assignment');

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    function register_user() {
        global $connection;

        if (isset($_POST['btn_register'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $profile = $_FILES['profile']['name'];

            if (!empty($username) && !empty($email) && !empty($password) && !empty($profile)) {
                $thumbnail = date('YmdHis') . '-' . $profile;
                $path = 'assets/image/' . $thumbnail;
                if (move_uploaded_file($_FILES['profile']['tmp_name'], $path)) {
                    $password = md5($password);

                    $sql = "
                        INSERT INTO users (username, email, password, profile) 
                        VALUES ('$username', '$email', '$password', '$thumbnail')
                    ";
                    $result = $connection->query($sql);
                    if ($result) {
                        header('Location: login.php');
                    } else {
                        echo "Error: " . $connection->error;
                    }
                } else {
                    echo "Failed to upload profile image. Error: " . $_FILES['profile']['error'];
                }
            } else {
                echo "All fields are required.";
            }
        }
    }

    function login_user() {
        global $connection;

        if (isset($_POST['btn_login'])) {
            $name_email = $_POST['name_email'];
            $password = md5($_POST['password']);

            $sql = "SELECT * FROM users WHERE (username='$name_email' OR email='$name_email') AND password='$password'";
            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                $_SESSION['user'] = $result->fetch_assoc();
                header('Location: index.php');
            } else {
                echo "Invalid credentials";
            }
        }
    }

    function add_post() {
        global $connection;

        if (isset($_POST['btn_add_post'])) {
            echo "Form submitted.<br>";

            $title = $_POST['title'];
            $type = $_POST['type'];
            $category = $_POST['category'];
            $description = $_POST['description'];
            $thumbnail = $_FILES['thumbnail']['name'];
            $banner = $_FILES['banner']['name']; // Assuming you have a banner image field in the form

            if (!empty($title) && !empty($type) && !empty($category) && !empty($description) && !empty($thumbnail) && !empty($banner)) {
                echo "All fields are filled.<br>";

                $thumbnail_name = date('YmdHis') . '-' . $thumbnail;
                $banner_name = date('YmdHis') . '-' . $banner;
                $thumbnail_path = 'assets/image/' . $thumbnail_name;
                $banner_path = 'assets/image/' . $banner_name;
                if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $thumbnail_path) && move_uploaded_file($_FILES['banner']['tmp_name'], $banner_path)) {
                    echo "Thumbnail and banner images uploaded.<br>";

                    $publish_date = date('Y-m-d');
                    $post_by = isset($_SESSION['user']['username']) ? $_SESSION['user']['username'] : 'Unknown'; // Ensure the username is set

                    $sql = "
                        INSERT INTO tbNews (newsThumbnails, newsBanner, newsTitle, created_at, description, newsCategory, subCategory, post_by, viewer) 
                        VALUES ('$thumbnail_name', '$banner_name', '$title', '$publish_date', '$description', '$category', '$type', '$post_by', 0)
                    ";
                    echo "SQL Query: $sql<br>";
                    $result = $connection->query($sql);
                    if ($result) {
                        echo "Post added successfully.<br>";
                        header('Location: view-post.php');
                    } else {
                        echo "Error executing query: " . $connection->error . "<br>";
                    }
                } else {
                    echo "Failed to upload thumbnail or banner image.<br>";
                }
            } else {
                echo "All fields are required.<br>";
            }
        }
    }

    add_post();
?>