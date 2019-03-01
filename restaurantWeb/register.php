<?php 

$conn = mysqli_connect('localhost','root','','roshan_db');
   // mysqli_select_db($conn,'roshan_db');

    $email=$_POST['email'];
    $fname=$_POST['fname'];
    $mobile=$_POST['mobile'];
    $usernm = $_POST['username'];
    $pass =$_POST['password'];

      $sql = "INSERT INTO users (fname,email,mobile,username,password) VALUES('$fname', '$email', '$mobile', '$usernm', '$pass')";
      echo "$sql";
      mysqli_query($conn,$sql);
      header('location:foodhaulers.php');
 
   // $query = mysqli_query($conn,$sql);
   // mysqli_execute($query);

    //header("location: login.php"); 

?>

    

  

	
    	
        

