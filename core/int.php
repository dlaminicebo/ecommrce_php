<?php
#$db = mysqli_connect('127.0.0.1','root','','cebolihle');
$db = mysqli_connect('127.0.0.1', 'root', '', 'cebolihle');

if(mysqli_connect_errno()){
  echo 'Database Connection failed with the following errors: '. mysqli_connect_error();
  die();
}
 ?>
