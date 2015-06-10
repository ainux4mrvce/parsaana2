<?php 
 if (!empty($_POST)) {
  // set the cookie with the submitted user data
  setcookie('orange',$_POST['color']);
  setcookie('name', $_POST['name']);
  // redirect the user to final landing page so cookie info is available
  header("Location:form_data.php");
 } else {
  echo $_COOKIE['color'];
  echo $_COOKIE['name'];
 }
?>