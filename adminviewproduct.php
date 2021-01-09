<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="UTF-8">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style> 
    .ic{
    color:#ff8a07;
    margin-right:15px;
    font-size: 25px !important;
}
.ic:hover{
    color:black;
    
}
.card:hover{
    box-shadow: -1px 9px 40px -12px;
}

</style>
</head>
<body>

<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href="home.html"><img src="img/logo.png" height="150px" width="150px"></a>
  <ul >
      <li style="display:inline" >
          <a href="#"><i class="fa fa-instagram ic" ></i></a>
      </li>
      <li style="display:inline">
          <a href="#"><i class="fa fa-facebook ic"></i></a>

      </li>
      <li style="display:inline">
          <a href="#"><i class="fa fa-twitter ic"></i></a>

      </li>
      <li style="display:inline">
          <a href="#"><i class="fa fa-whatsapp ic"></i></a>

      </li>
  </ul>
</nav>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="home.html">Home </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="adminhome.php""> Add Product <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="adminviewproduct.php">View Product</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="login.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>



<?php
  $server="localhost";
  $user="root";
  $pass="";
  $dbname="webproject";

  $dbcon = mysqli_connect($server,$user,$pass,$dbname);
  $query2="select * from tblproducts";
  $res=mysqli_query($dbcon,$query2);
  $rows=mysqli_num_rows($res);
  echo "<br>"."  "."<b>$rows</b>"." <b>Products are added</b>";


  

  

 ?>

<div class="container-fluid">
<label><b><h1>My Products</h1></b></label><br>
 <table border="2" class="table">
  
  <thead class="thead-dark"> <th> Product Name </th> <th> Product Price </th> <th> Product Discount </th> <th> Product Size </th> <th> Product Details </th> <th> Product Images </th> <th> Update </th> <th> Delete </th>  </tr>
  <?php while($newres = mysqli_fetch_assoc($res)) {?>
  <thead> 
    <td> <?php echo $newres['productname'];      ?>     </td>
    <td> <?php echo $newres['productprice'];     ?>     </td>  
    <td> <?php echo $newres['productdiscount'];      ?>     </td>
    <td> <?php echo $newres['productsize'];      ?>     </td>
    <td class="text-break"> <?php echo $newres['productdetails'];      ?>     </td>
    <td> <img src="uploads/<?php echo $newres['image'] ?>" class="card-img-top" alt="product1.html" width="100px" height="150px">     </td>
    <th> <a href="update.php?uname=<?php echo $newres['productname'];?>" class="btn btn-primary">Update </a></th> 
    <th> <a href="del.php?dname=<?php echo $newres['productname'];?>" class="btn btn-primary">Delete </a></th>
  </tr>

  <?php } ?>
  
 </table>
</div>





<div class="container mt-5">
      <div class="row text-center">
          <div class="col-12">
              <ul>
        <li style="display:inline">
            <a href="#"><i class="fa fa-instagram ic"></i></a>
        </li>
        <li style="display:inline">
            <a href="#"><i class="fa fa-facebook ic"></i></a>

        </li>
        <li style="display:inline">
            <a href="#"><i class="fa fa-twitter ic"></i></a>

        </li>
        <li style="display:inline">
            <a href="#"><i class="fa fa-whatsapp ic"></i></a>

        </li>
    </ul>
    <hr>
        <p>@copyright2020 chinese cusine</p>
    </hr>
          </div>
      </div>

</body>
</html>