
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


//product upload sesseion!!!!!


//if upload button is pressed
if (isset($_POST['upload'])) {

    $msg = "";

    $target = "images/".basename($_FILES['image']['name']);


    $image = $_FILES['image']['name'];
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);


    $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
}

$result = mysqli_query($db, "SELECT * FROM images");

//delete
if(isset($_POST['delete'])){


   $id =  $_SESSION['Fid'];
    
    
    $select = mysqli_fetch_assoc(mysqli_query($db,"SELECT image FROM images WHERE id='$id'")); //Fetch the file which is associated with this account



    unlink("images/".$select['image']); //Deleting the file

    $query=mysqli_query($db,"DELETE FROM images WHERE id='$id'");
    if($query){
        header("Location: shop.php");

    }else{
        echo "Unable to proccess your request";
    }
    $_SESSION['msg']="Your Account Has  Been Deleted";
    unset($_SESSION['usersession']);

    echo "Unable to proccess your request";
}



?>
