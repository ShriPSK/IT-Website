<?php 
 if(isset($_POST["Degree"]) && isset($_POST["Year"])){
  $fileName="../JSON/students/".strtoupper($_POST["Degree"])."-".$_POST["Year"].".json";
  if(file_exists($fileName)){
    echo file_get_contents($fileName);
  }
 }

?>