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
        <div class="row product-list">
            <div class="col-md-4" style="margin-bottom: 5px">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="../images/redvelvetcakeproduct.jpg" alt="" /><br>
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Red Velvet Cake
                            </a>
                        </h4>
                        <p class="price">Ksh. 1800</p>
                        <div class="row">
                          <div class="col">
                        <a class="btn btn-primary" href="addproducts.php" role="button" style="width: 100%;" >UPDATE</a>   
                          </div>
                          <div class="col">
                        <a class="btn btn-danger" href="#" role="button" style="width: 100%;" >REMOVE</a>   
                          </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4" style="margin-bottom:5px">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="../images/cupcakes.jpg"" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                               Vanilla Cupcake
                            </a>
                        </h4>
                        <p class="price">Ksh 400.00</p>
                          <div class="row">
                          <div class="col">
                        <a class="btn btn-primary" href="addproducts.php" role="button" style="width: 100%;" >UPDATE</a>   
                          </div>
                          <div class="col">
                        <a class="btn btn-danger" href="#" role="button" style="width: 100%;" >REMOVE</a>   
                          </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4" style="margin-bottom: 5px;">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="../images/cinnamonrollsproduct.jpg" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Cinnamon Rolls
                            </a>
                        </h4>
                        <p class="price">Ksh. 800.00</p>
                          <div class="row">
                          <div class="col">
                        <a class="btn btn-primary" href="addproducts.php" role="button" style="width: 100%;" >UPDATE</a>   
                          </div>
                          <div class="col">
                        <a class="btn btn-danger" href="#" role="button" style="width: 100%;" >REMOVE</a>   
                          </div>
                        </div>
                        </div>
                </section>
            </div>
             <div class="col-md-4" style="margin-bottom: 5px">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="../images/pinkcakeproduct.jpg" alt="" /><br>
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Pink Champagne Cake
                            </a>
                        </h4>
                        <p class="price">Ksh. 1800</p>
                        <div class="row">
                          <div class="col">
                        <a class="btn btn-primary" href="addproducts.php" role="button" style="width: 100%;" >UPDATE</a>   
                          </div>
                          <div class="col">
                        <a class="btn btn-danger" href="#" role="button" style="width: 100%;" >REMOVE</a>   
                          </div>
                        </div>
                        
                    </div>
                </section>
            </div>
            <div class="col-md-4" style="margin-bottom:5px">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="../images/strawberryrollproduct.jpg"" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                               Strawberry Rolll Cake
                            </a>
                        </h4>
                        <p class="price">Ksh 400.00</p>
                         <div class="row">
                          <div class="col">
                        <a class="btn btn-primary" href="addproducts.php" role="button" style="width: 100%;" >UPDATE</a>   
                          </div>
                          <div class="col">
                        <a class="btn btn-danger" href="#" role="button" style="width: 100%;" >REMOVE</a>   
                          </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4" style="margin-bottom: : 5px">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="../images/strawberryshortcakeproduct.jpg" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Strawberry Shortcake
                            </a>
                        </h4>
                        <p class="price">Ksh. 800.00</p>
                         <div class="row">
                          <div class="col">
                        <a class="btn btn-primary" href="addproducts.php" role="button" style="width: 100%;" >UPDATE</a>   
                          </div>
                          <div class="col">
                        <a class="btn btn-danger" href="#" role="button" style="width: 100%;" >REMOVE</a>   
                          </div>
                        </div>
                         </div>
                </section>
            </div>
            <div class="col-md-4" style="margin-bottom: 5px">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="../images/breadproduct.jpg" alt=""><br>
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Bread
                            </a>
                        </h4>
                        <p class="price">Ksh. 1800</p>
                        <div class="row">
                          <div class="col">
                        <a class="btn btn-primary" href="addproducts.php" role="button" style="width: 100%;" >UPDATE</a>   
                          </div>
                          <div class="col">
                        <a class="btn btn-danger" href="#" role="button" style="width: 100%;" >REMOVE</a>   
                          </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4" style="margin-bottom:5px">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="../images/donutproduct.jpg"">
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                               Donuts
                            </a>
                        </h4>
                        <p class="price">Ksh 400.00</p>
                         <div class="row">
                          <div class="col">
                        <a class="btn btn-primary" href="addproducts.php" role="button" style="width: 100%;" >UPDATE</a>   
                          </div>
                          <div class="col">
                        <a class="btn btn-danger" href="#" role="button" style="width: 100%;" >REMOVE</a>   
                          </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4" style="margin-bottom: : 5px">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="../images/pieproduct.jpg" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                              Pie
                            </a>
                        </h4>
                        <p class="price">Ksh. 800.00</p>
                         <div class="row">
                          <div class="col">
                        <a class="btn btn-primary" href="addproducts.php" role="button" style="width: 100%;" >UPDATE</a>   
                          </div>
                          <div class="col">
                        <a class="btn btn-danger" href="#" role="button" style="width: 100%;" >REMOVE</a>   
                          </div>
                        </div>
                                            </div>
                </section>
            </div>
           
  </div>
  </div>

</body>
</html>