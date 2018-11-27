<?php
include('../db.php');
$connection = new connection();

if (isset($_POST['submit'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        //Insert into DB
        $query = $connection->connect()->prepare('INSERT INTO users (email, password, first_name, surname) 
                                                      VALUES (:email, :password, :first_name, :surname)');
        $exec = $query->execute(array(
            ':email' => $_POST['email'],
            ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ':first_name' => $_POST['first_name'],
            ':surname' => $_POST['surname']
        ));

        if ($exec) {
            echo 'Inserted';
        }

    } else {
        header('location: ../index.php');
    }
} else {
    echo 'Nothing was inserted';
}