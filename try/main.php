
<a href="logout.php">LOGOUT </a>
<?php


session_start();
if(isset(  $_SESSION['username']) ){

  echo "some page will apper";
}

else 
header ('Location :loginveiw.html');












?>