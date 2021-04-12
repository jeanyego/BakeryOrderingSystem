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
<form action="cart.php">
        <label for="action">Product Type:</label><br>
      <div class="form-group">
        <div class="input-group">
          
          <select class="form-control" id="role" name="role">
            <option>Cake</option>
            <option>Cupcake</option>
            <option>Pastry</option>
          </select>
        </div>
      </div>
       <label for="action">Product Name:</label><br>
         <div class="form-group">
          <div class="input-group">
              <input type="text" id="colortext" onkeyup="check();" name="colortext" class="form-control" placeholder="" required="required">
          </div>
        </div>
        <label for="action">Price:</label><br>
         <div class="form-group">
          <div class="input-group">
              <input type="text" id="colortext" onkeyup="check();" name="colortext" class="form-control" placeholder="" required="required">
          </div>
        </div>
        <label for="action">Upload Image:</label><br>
         <div class="form-group">
          <div class="input-group">
              <input type="file" id="colortext" onkeyup="check();" name="colortext" class="form-control" placeholder="" required="required">
          </div>
        </div>  
          <button type="submit" id="orderbtn" name="orderbtn" class="btn btn-danger btn-block">ADD PRODUCT</button>
        </div>
      
      </form>
    </div>
</body>
</html>