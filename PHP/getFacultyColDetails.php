<?php
  include './dbConnect.php';
  if(isset($_POST["tableN"]) && isset($_POST["fid"])){
    $sql="SELECT * FROM `".$_POST["tableN"]."` WHERE fid= ".$_POST["fid"];
    $result = $conn->query($sql);   
    if($row=$result->fetch_assoc()){
      echo $row["details"];
    }
  }

?>