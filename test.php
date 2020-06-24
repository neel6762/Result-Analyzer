<?php
    session_start();
    $_SESSION["user"] = array();
    $_SESSION["user"]["name"] = "Neel Patel";
    $_SESSION["user"]["id"] = "26";
    echo $_SESSION["user"]["name"];
    echo $_SESSION["user"]["id"];
    // $_SESSION["user"]["class"] ="IT";
    // $_SESSION["user"]["place"] ="Godhra";


foreach ($_SESSION['user'] as $result){
  echo $result['name'];
}


 ?>
