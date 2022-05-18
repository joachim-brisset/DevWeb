<?php
  $arrayPages = array(
 
    'puma' => '../views/puma.php',
    'nike' => '../views/nike.php',
    'adidas' => '../views/adidas.php'
  );
 

  if(!empty($_GET['brand']))
  {
    if(array_key_exists(strtolower($_GET['brand']), $arrayPages))
    {
      include($arrayPages[ strtolower($_GET['brand']) ] );
      die();
    }
      else
    {
      include('views/brand_not_found.php');
      die();
    }
  }
    else
  {
    header('Location: index.html');
    die();
  }
?>