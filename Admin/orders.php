<!DOCTYPE html>
<html>
<head>
  <title>BakeryOrderingSystem</title>
   <meta charset="UTF-8">
            <meta name="keywords" content="HTML, CSS, Bootstrap, JavaScript">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
            <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="../js/countrypicker.js"></script>
            <script type="text/javascript" src="../Bootstrap/js/bootstrap.js"></script>
            <script type="text/javascript" src="../Bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="text-decoration: none; margin: 20px;">
  <a class="navbar-brand" href="">SUGARHIGH DELIGHTS</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navb">
      <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">DASHBOARD</a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="orders.php">ORDERS</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PRODUCTS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="products.php">View Products</a>
          <a class="dropdown-item" href="addproducts.php">Add Products</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
   <div class="container">
<div class="row">
   <br>
                <div class="col-md-8 ">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-default">
                        <div class="panel-heading text-center"><h4>Current Orders</h4></div>
                        <div class="panel-body">
                           <table class="table borderless">
                <thead>
                                <tr>
                      <td><strong>Orders: # item</strong></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                                </tr>
                </thead>
                <tbody>
                  <!-- foreach ($order->lineItems as $line) or some such thing here -->
                  <tr>
                    <td class="col-md-3">
                        <div class="media">
                             <a class="thumbnail pull-left" href="#"> <img src="../images/pastry.jpg" style="width: 72px; height: 72px;"> </a>
                             <div class="media-body">
                                 <h5 class="media-heading"> Pastry</h5>
                                 <h5 class="media-heading"> P001</h5>
                             </div>
                        </div>
                    </td>
                    <td class="text-center">Ksh.1000</td>
                    <td class="text-center">1</td>
                    <td class="text-right">Ksh.1000</td>
                    <td class="text-right"><button type="button" class="btn btn-danger">Fulfil</button></td>
                  </tr>
                                <tr>
                    <td class="col-md-3">
                        <div class="media">
                             <a class="thumbnail pull-left" href="#"> <img src="../images/cupcakes.jpg" style="width: 72px; height: 72px;"> </a>
                             <div class="media-body">
                                 <h5 class="media-heading"> Cupcakes</h5>
                                 <h5 class="media-heading"> CP002</h5>
                             </div>
                        </div>
                    </td>
                    <td class="text-center">Ksh.400</td>
                    <td class="text-center">2</td>
                    <td class="text-right">Ksh.800</td>
                    <td class="text-right"><button type="button" class="btn btn-danger">Fulfil</button></td>
                  </tr>
                </tbody>
              </table> 
  </div>
</body>
</html>