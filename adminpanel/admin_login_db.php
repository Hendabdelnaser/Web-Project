<?php
session_start();
include "admin_login_db_conn.php" ;

if (isset($_POST["username"]) && isset($_POST["password"])) {
    function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
    $username = validate($_POST["username"]); 
    $password = validate( $_POST["password"]); 

    if (empty($username)) {
		header("Location: admin-login.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: admin-login.php?error=Password is required");
	    exit();
	}else {
        $sql = "SELECT * FROM vistor WHERE username='$username' AND password ='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: admin_addpackage.php");
		        exit();
            }else{
				header("Location: admin-login.php?error=Incorect User name or password");
		        exit();
			}
		}
        else{
			header("Location: admin-login.php?error=Incorect User name or password");
	        exit();
		}
    }

}
else 
{
    header("Location:admin-login.php");
     exit();
}


?>