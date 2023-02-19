<?php
  include './dbConnect.php';
  if(isset($_POST["fid"])){
    $sql="SELECT * FROM faculty_ INNER JOIN facultyDetails_ ON faculty_.fid=facultyDetails_.Fid WHERE faculty_.fid = ".$_POST["fid"];
    $result = $conn->query($sql);
   
    if($row=$result->fetch_assoc()){
      
      $faculty->id=$row["fid"];
      $faculty->name=$row["name"];
      $faculty->designation=$row["designation"];
      $faculty->image=$row["image"];
      $faculty->emailID=$row["emailID"];
      $faculty->phoneNumber=$row["phoneNumber"];
      $faculty->AOS=$row["areaOfSpec"];
      $faculty->acoeSiteLink=$row["acoeSite"];
      $faculty->personalSiteLink=$row["personalSite"];
      $faculty->details=$row["details"];
      echo json_encode($faculty);
    }
  }

?>