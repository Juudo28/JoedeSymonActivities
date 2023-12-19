<?php
require  ('db.php');
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $confirmpassword= $_POST['confirm password'];

    $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script> alert('Email is Alaready used'); </script>";

    }else{

        if($password==$confirmpassword) {
            $query = ("INSERT INTO user VALUES('',$user_fullname','$password','email_add)");

            mysqli_query($conn, $query);
            echo "<script> alert ('Registration Successful'); </script>";
            header("location: login.php");
        }else{
            echo "<script> alert ('Password Does Not Match'); </script>";
        }
    }
}

?>
