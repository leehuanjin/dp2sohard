<?php

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
            
        }
        
        
        
    }
?>
