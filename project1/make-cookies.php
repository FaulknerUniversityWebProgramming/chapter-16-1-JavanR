<?php
  
  if (isset($_POST['theme']))
  {
    setcookie('theme', $_POST['theme'], time() + 86400);
  }

  if (isset($_POST['philosopher']))
  {
    setcookie('philosopher', $_POST['philosopher'], 0);
  }

  header("Location: chapter16-project1.php");

?>