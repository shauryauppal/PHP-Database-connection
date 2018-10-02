<?php
// Login to user : needs to have a user table in the database
 session_start();
 include 'db.php';
 //If logged in then redirect
 if(isset($_SESSION['login_user']))
  header('Location: '.LOGIN_SUCCESS);
 //Execute on form submission
 if($_SERVER["REQUEST_METHOD"] == "POST") {
   //SANITIZE input fields here
  $username = mysqli_real_escape_string($db_con,$_POST['email']);
   $password = mysqli_real_escape_string($db_con,$_POST['password']);
   //Query to execute
  $sql = "SELECT id FROM " . DB_USERTABLE . " WHERE username = '$username' and password = '$password'";
  $result = mysqli_query($db_con,$sql);
   //Uncomment code below for debugging
  // if(!$result)
  //   echo("Error description: " . mysqli_error($db_con));
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
   // If result matched $username and $password, table row count must be 1
   if($count == 1) {
      //Login successful
     $_SESSION['login_user'] = $username;
      header("location: ".LOGIN_SUCCESS);
  }else {
     $error = "Your Login email or Password is invalid";
  }
}
 ?>
