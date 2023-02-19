<?php 
 if(isset($_POST["Degree"]) && isset($_POST["Year"])){
  $fileName="./PDF/curriculum/".strtoupper($_POST["Degree"])."-".$_POST["Year"].".pdf";
  echo $fileName;
 }

?>