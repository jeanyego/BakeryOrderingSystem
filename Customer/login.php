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
            <script type="text/javascript" src="../Bootstrap/js/bootstrap.js"></script>
            <script type="text/javascript" src="../Bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-fixed" style="text-decoration: none; margin: 20px;">
  <a class="navbar-brand" href="">SUGARHIGH DELIGHTS</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navb">
      <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php">ABOUT</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../index.php">CONTACT</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="products.php">PRODUCTS</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="order.php">ORDER</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">CART</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="checkout.php">CHECKOUT</a>
    </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="login.php">Customer</a>
          <a class="dropdown-item" href="../Admin/login.php">Admin</a>
        </div>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="signup.php">SIGNUP</a>
    </li> 
    </ul>
  </div>
</nav>
<div class="container" style="width: 55%; align-items: center; justify-content: center;">
<div class="row">
  <div class="col">
              <h3 style="text-align: center;">Login</h3>
    <form id="myform" class="login-form" method ="post" action="Authentication/login.php" >
      
         <!--username-->
         <label for="action">Enter Username:</label><br>
      <div class="form-group">
          <div class="input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text">
                      <span class="fa fa-user"></span>
                  </span>                    
              </div>
           
              <input type="text" name="username" id="username" class="form-control" placeholder="" required="required">
          </div>
      </div>
       <!--Email Address-->
       <label for="action">Enter Email Address:</label><br>
      <div class="form-group">
          <div class="input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text">
                      <span class="fa fa-envelope"></span>
                  </span>                    
              </div>
              <input type="email" name="email" class="form-control" placeholder=""  required="required">
          </div>
      </div>
               <!--Password-->
               <label for="action">Enter Password:</label><br>
      <div class="form-group">
          <div class="input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="fa fa-lock"></i>
                  </span>                    
              </div>
              <input type="password" id="password" name="password" class="form-control" placeholder="" required="required">
          </div>
      </div>   
        <div class="bottom-action clearfix">
          <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>   
        </div> 
           <!--Login btn-->
            <div class="form-group">
                  <input type="submit" name="login" id="loginbtn" class="btn btn-danger btn-block" value="Login">
                </div>
    
          <div class="bottom-action clearfix">
              <a class="link" href="Authentication/reset.php">Forgot password? click here</a>
          </div>        
    </form>   
 </div>
</div>
</div>
</div>
</body>
</html>