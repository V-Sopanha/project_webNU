<?php
    $connection = new mysqli('localhost','root','','db_project');

    function register_user(){
        global $connection;

        if(isset($_POST['btn_register'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $profile = $_FILES['profile']['name'];

            if(!empty($username) && !empty($email) && !empty($password) && !empty($profile)){
                $thumbnail = date('YmdHis') .'-'. $profile;
                $path = 'assets/image/'.$thumbnail;
                move_uploaded_file($_FILES['profile']['tmp_name'],$path);

                $password = md5($password);

                $sql = "
                        INSERT INTO `tbuser`(`id`, `name`, `email`, `password`, `profile`) 
                        VALUES (null, '$username','$email','$password','$thumbnail')
                    ";
                $result = $connection -> query($sql);
                if($result){
                    header('location : login.php');
                }
            }
        }
    }
    register_user();