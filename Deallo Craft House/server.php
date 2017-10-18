<?php
session_start ();
$username = "";
$email = "";
$errors = array();


//connect to the database
$db = mysqli_connect("localhost","root",'',"registration");

//if the register button is clicked
if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    //ensure that the form fields are filled properly
    if(empty($username)){
        array_push($errors, "username is required");

    } 
    if(empty($email)){
        array_push($errors, "Email is required");

    } 
    if(empty($password)){
        array_push($errors, "Password is required");

    } 

    //if there are no errors, save user to database
    if (count($errors) == 0){
        $password = md5($password); //encrypt password
        $sql = "INSERT INTO users (username, email, password) 
                        VALUES ('$username', '$email', '$password')";

        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php'); //redirect to home page

    }
}


    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($db, $_POST['username1']);
        $password = mysqli_real_escape_string($db, $_POST['password2']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $results = mysqli_query($db, $query);

            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }else {
                array_push($errors, "Wrong username/password combination");
                
            }
        }
    }


    //logout
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: index.php");
    }


?>
