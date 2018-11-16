<?php
  unset($_COOKIE['theme']);
  unset($_COOKIE['theme']);

  setcookie('theme', "", -1);
  setcookie('philosopher', "", -1);
    
  header("Location: chapter16-project1.php");
?>