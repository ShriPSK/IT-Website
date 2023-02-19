<?php 
require("templates/header.html");
require("connection.php");
?><br><br><br><br>
<head>
    <style>
        .login_form
        {
            border: 2px solid #808080;
            border-radius: 30px;
            width: 50%;
            height: 50%;
        }
        ::placeholder
        {
            font-size: 18px;
            font-color: red;
            padding-left: 10px;
        }
    </style>
</head>
<div class="login">
    <center>
    <form method="post" class="login_form" name="Administrator Login"><br>
    <h3>Administrator Login</h3><br><br>
        <div class="form-group form-control-lg">
        <span class="placeholder col-12 placeholder-lg">
            <input type="text" placeholder="Enter username" name="username"></span>
        </div>
        <div class="form-group form-control-lg">
            <input type="text" placeholder="Enter password" name="password">
        </div>
        <div class="form-group form-control-lg">
            <input type="submit" style="padding: 10px;width: 20%;border-radius: 30px;" name="Submit">
        </div>
    </form>
</center>
</div>
<?php
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
            echo"<script>alert('Login Successful');</script>";
        }
        else
        {
            echo"<script>alert('Login Failed');</script>";
        }
          
    }
?>
