<?php 

include 'connect.php';


if(isset($_POST['signUp'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conp = $_POST['confirmPassword'];
    $password=md5($password);
    $conp=md5($conp);


    
    if ($password !== $conp) {
        die("Passwords do not match!");
    }

   
    $checkEmail = "SELECT * FROM user_register WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if($result->num_rows > 0){
       // echo "Email Address Already Exists!";
        header("Location: registration.php?error=Email Address Already Exists");
	    exit();
    } else {
        
        $insertQuery = "INSERT INTO `user_register`(`name`, `email`, `password`, `confirmP`) VALUES  ('$name', '$email', '$password','$conp')";
        if($conn->query($insertQuery) === TRUE){
            header("Location: login.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

// تسجيل الدخول
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password) ;
    
    $sql="SELECT * FROM user_register WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
     session_start();
     $row=$result->fetch_assoc();
     $_SESSION['email']=$row['email'];
     header("Location: home.php");
     exit();
    }
    else{
   
     header("Location: login.php?error=Not Found, Incorrect Email or Password");
	    exit();
     
    }
 
 }
 
?>
