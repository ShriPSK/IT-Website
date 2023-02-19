<?php
  include './dbConnect.php';
  if(isset($_POST["tableN"]) && isset($_POST["fid"])){
    $sql="INSERT INTO `".$_POST["tableN"]."` (`fid`, `details`) VALUES (".$_POST["fid"].", '')";
    $result = $conn->query($sql);
  }
  if(isset($_POST["details"])){
    $sql="UPDATE `facultyDetails_` SET `details` = '".$_POST["details"]."' WHERE `facultyDetails_`.`Fid` = ".$_POST["fid"];
    $result = $conn->query($sql);
  }

?>