<?php
include('../db.php');
$connection = new connection();

function login($email,$password){

    $row = $this->get_user_hash($email);

    if($this->password_verify($password,$row['password']) == 1){

        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $row['username'];
        $_SESSION['memberID'] = $row['memberID'];
        return true;
    }
}

//process login form if submitted
if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email->login($email,$password)){

        echo "Wrong username or password";

    } else {
        $error[] = 'Wrong username or password or your account has not been activated.';
    }
}