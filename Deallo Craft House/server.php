    
<?php
session_start ();
$username = "";
$email = "";
$errors = array();



//connect to the database
$db = mysqli_connect("localhost","root",'',"deallo_db");

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


//product upload sesseion!!!!!


//if upload button is pressed
if (isset($_POST['upload'])) {

    $msg = "";

    $target = "images/".basename($_FILES['image']['name']);


    $image = $_FILES['image']['name'];
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    $price = mysqli_real_escape_string($db, $_POST['price']);
    $category = mysqli_real_escape_string($db, $_POST['category']);
    
   

    $sql = "INSERT INTO products (image, image_text, price, category) VALUES ('$image', '$image_text', '$price', '$category')";
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
        if ($category == "SPORTSWEAR")
        {
             header("Location: sportswear.php");
        }
        elseif ($category == "MENS")
        {
            header("Location: mens.php");
        }
        
        
    }else{
        $msg = "Failed to upload image";
    }
    
}


$result = mysqli_query($db, "SELECT * FROM products");

//product delete
if(isset($_POST['delete'])){


   $id =  $_SESSION['Fid'];
    
    
    $select = mysqli_fetch_assoc(mysqli_query($db,"SELECT image_text FROM products WHERE product_id='$id'")); //Fetch the file which is associated with this account



    unlink("images/".$select['image_text']); //Deleting the file

    $query=mysqli_query($db,"DELETE FROM products WHERE product_id='$id'");
    if($query){
        header("Location: account.php");

    }else{
        echo "Unable to proccess your request";
    }
  
}


//product edit
 if(isset($_POST['insert'])){
    
   $id =  $_SESSION['Fid'];
    
    
    $select = mysqli_fetch_assoc(mysqli_query($db,"SELECT image_text FROM products WHERE product_id='$id'")); //Fetch the file which is associated with this account
    $temp = mysqli_fetch_assoc(mysqli_query($db,"SELECT image_text FROM products WHERE product_id='$id'"));


    unlink("images/".$select['image_text']); //Deleting the file

    $query=mysqli_query($db,"DELETE FROM products WHERE product_id='$id'");
    
    
    
    $target = "images/".basename($_FILES['image']['name']);


    $image = $_FILES['image']['name'];
   

    $sql = "INSERT INTO products (image) VALUES ('$image')";
    mysqli_query($db, $sql);
    
    
    
    if($query){
        header("Location: account.php");

    }else{
       echo "Unable to proccess your request";
    }
 
}

// add to cart
if(isset($_POST['addcart']))
{
    header("Location: shopping-cart.php");
}








?>
