<?php
  //connexion à la base de données
  $con =new  mysqli('localhost','root','','mycoding');
  if(!$con){
    die(mysqli_error($con));
  }
?>