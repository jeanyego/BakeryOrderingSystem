<!--<?php 
//session_start();

//if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>-->
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
      <li class="nav-item">
        <a href="#" class="nav-link active">MESSAGES <span class="badge badge-light">24</span></a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">NOTIFICATION<span class="badge badge-primary">5</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
       <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Stats -->
<div class="row">
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-primary bg-darken-2">
                        <i class="icon-camera font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-primary white media-body">
                        <h5>Products</h5>
                        <h5 class="text-bold-400 mb-0"><i class="feather icon-plus"></i> 28</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-danger bg-darken-2">
                        <i class="icon-user font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-danger white media-body">
                        <h5>New Users</h5>
                        <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i>238</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-warning bg-darken-2">
                        <i class="icon-basket-loaded font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-warning white media-body">
                        <h5>New Orders</h5>
                        <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-down"></i>8</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-success bg-darken-2">
                        <i class="icon-wallet font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-success white media-body">
                        <h5>Total Profit</h5>
                        <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> 50,000</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!--/ Stats -->
<!--Product sale & buyers -->
<div class="row match-height">
        <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Orders</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <p>Total paid invoices 40, unpaid 10. <span class="float-right"><a href="project-summary.html" target="_blank">Invoice Summary <i class="feather icon-arrow-right"></i></a></span></p>
                </div>
                <div class="table-responsive">
                    <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                        <thead>
                            <tr>
                                <th>SKU</th>
                                <th>Invoice#</th>
                                <th>Customer Name</th>
                                <th>Status</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-truncate">PO-10521</td>
                                <td class="text-truncate"><a href="#">INV-001001</a></td>
                                <td class="text-truncate">Elizabeth W.</td>
                                <td class="text-truncate"><span class="badge badge-success">Paid</span></td>
                                <td class="text-truncate">Ksh 1200.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-532521</td>
                                <td class="text-truncate"><a href="#">INV-01112</a></td>
                                <td class="text-truncate">Doris R.</td>
                                <td class="text-truncate"><span class="badge badge-warning">Overdue</span></td>
                                <td class="text-truncate">Ksh 5685.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-05521</td>
                                <td class="text-truncate"><a href="#">INV-001012</a></td>
                                <td class="text-truncate">Andrew D.</td>
                                <td class="text-truncate"><span class="badge badge-success">Paid</span></td>
                                <td class="text-truncate">Ksh 152.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-15521</td>
                                <td class="text-truncate"><a href="#">INV-001401</a></td>
                                <td class="text-truncate">Megan S.</td>
                                <td class="text-truncate"><span class="badge badge-success">Paid</span></td>
                                <td class="text-truncate">Ksh 1450.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-32521</td>
                                <td class="text-truncate"><a href="#">INV-008101</a></td>
                                <td class="text-truncate">Walter R.</td>
                                <td class="text-truncate"><span class="badge badge-warning">Overdue</span></td>
                                <td class="text-truncate">Ksh 685.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Buyers</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content px-1">
                <div id="recent-buyers" class="media-list height-300 position-relative">
                    <a href="#" class="media border-0">
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Kristopher Candy <span class="font-medium-4 float-right pt-1">Ksh1,021</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-primary">Cake</span><span class="badge badge-warning ml-1">Chocolate</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Lawrence Fowler <span class="font-medium-4 float-right pt-1">Ksh 2,021</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-danger">Bread</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Linda Olson <span class="font-medium-4 float-right pt-1">Ksh 1,112</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-primary">Pastry</span> <span class="badge badge-success ml-1">Pie</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Roy Clark <span class="font-medium-4 float-right pt-1">Ksh 2,815</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-warning">Cake</span> <span class="badge badge-danger ml-1">Red velvet</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Kristopher Candy <span class="font-medium-4 float-right pt-1">Ksh 821</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-primary">Pastry</span><span class="badge badge-warning ml-1">Cinnamon Rolls</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Lawrence Fowler <span class="font-medium-4 float-right pt-1">Ksh 1,321</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-danger">Cupcakes</span></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row match-height">
   <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body sales-growth-chart">
                    <div id="monthly-sales" class="height-250"></div>
                </div>
            </div>
            <div class="card-footer">
                <div class="chart-title mb-1 text-center">
                    <h6>Product Sales.</h6>
                </div>
                <div class="chart-stats text-center">
                    <a href="#" class="btn btn-sm btn-primary mr-1">Statistics <i class="feather icon-bar-chart"></i></a> <span class="text-muted">for the last year.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body sales-growth-chart">
                    <div id="monthly-sales" class="height-250"></div>
                </div>
            </div>
            <div class="card-footer">
                <div class="chart-title mb-1 text-center">
                    <h6>Total monthly Sales.</h6>
                </div>
                <div class="chart-stats text-center">
                    <a href="#" class="btn btn-sm btn-primary mr-1">Statistics <i class="feather icon-bar-chart"></i></a> <span class="text-muted">for the last year.</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--/Rec-->
              </body>
</html>
<!--<?php 
//}//else{
     //header("Location: login.php");
     //exit();
//}
 ?>