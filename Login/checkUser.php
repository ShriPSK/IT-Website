<?php
    require("../connection.php");
    if(isset($_POST['Submit']))
    {
        $user=$_POST['username'];
        $pwd=$_POST['password'];
        $sql="select * from admin where username='$user' and password='$pwd'";
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count==1)
        {
            // session_start();
            $_SESSION['username']=$user;
            header("Location: circularUpload.php");
            // echo"<script>alert('Login Successful');</script>";
        }
        else
        {
            echo"<script>alert('Login Failed');</script>";
        }
          
    }
?>