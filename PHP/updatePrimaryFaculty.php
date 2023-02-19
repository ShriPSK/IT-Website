<?php
include './dbConnect.php';
 if($_FILES['image']['type']!=""){
    $imgLocation=$_FILES['image']['tmp_name'];
    $a=$_FILES['image']['type'];
    $extention =explode('/',$a);
    $imgTo="./Images/faculty/".$_POST["fid"].".".$extention[1];
    move_uploaded_file($imgLocation,'.'.$imgTo);
  }
  $sql="UPDATE `faculty_` SET `name` = '".$_POST["name"]."', `designation` = '".$_POST["designation"]."', `emailID` = '".$_POST["email"]."', `phoneNumber` = '".$_POST["phoneNumber"]."' WHERE `faculty_`.`fid` = ".$_POST["fid"];
  $result = $conn->query($sql);
  $sql="UPDATE `facultyDetails_` SET `areaOfSpec` = '".$_POST["areaOfSpec"]."', `acoeSite` = '".$_POST["acoeSite"]."', `personalSite` = '".$_POST["personalSite"]."' WHERE `facultyDetails_`.`Fid` = ".$_POST["fid"];
  $result = $conn->query($sql);
  echo "true";
?>