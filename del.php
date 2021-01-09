<?php 

$server="localhost";
  $user="root";
  $pass="";
  $dbname="webproject";

  $dbcon = mysqli_connect($server,$user,$pass,$dbname);

$delname = $_GET['dname'];
  // $updaterow =$_GET['uname'];

  $query3 = "delete from tblproducts where productname ='$delname'";
  $delrow = mysqli_query($dbcon,$query3);
  if ($delrow) 
  {
    header('location: adminviewproduct.php');
  }
  else
  {
    echo "reord not deleted";
  }


 ?>