
<?php
  include './dbConnect.php';
  if(isset($_POST["tableN"]) && isset($_POST["fid"])){
    $sql="UPDATE `".$_POST["tableN"]."` SET `details` = '".$_POST["data"]."' WHERE `fid` = ".$_POST["fid"];
    $result = $conn->query($sql);
  }
?>