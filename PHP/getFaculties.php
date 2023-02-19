<?php 
  include './dbConnect.php';
  if(isset($_POST['data'])){
    $sql="SELECT * FROM `faculty_` WHERE fid > 0 ORDER BY sNo ";
    $result = $conn->query($sql);
    $data=array();
    while($row=$result->fetch_assoc()){
      $faculty= null;
      $faculty->id=$row["fid"];
      $faculty->name=$row["name"];
      $faculty->designation=$row["designation"];
      $faculty->image=$row["image"];
      $faculty->emailID=$row["emailID"];
      $faculty->phoneNumber=$row["phoneNumber"];
      array_push($data,$faculty);
    }
    echo json_encode($data);
  }

?>