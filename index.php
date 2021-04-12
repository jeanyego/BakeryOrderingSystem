<!DOCTYPE html>
<html>
<head>
	<title>BakeryOrderingSystem</title>
	 <meta charset="UTF-8">
            <meta name="keywords" content="HTML, CSS, Bootstrap, JavaScript">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
            <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
            <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/script.js"></script>
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
        <a class="nav-link" href="">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#contact">CONTACT</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Customer/products.php">PRODUCTS</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Customer/order.php">ORDER</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Customer/cart.php">CART</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="Customer/checkout.php">CHECKOUT</a>
    </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Customer/login.php">Customer</a>
          <a class="dropdown-item" href="Admin/login.php">Admin</a>
        </div>
      </li>
    <li class="nav-item">
    	<a class="nav-link" href="Customer/signup.php">SIGNUP</a>
    </li> 
    </ul>
  </div>
</nav>
<div class="container">
<img class="img-fluid" src="images/valentinehome.jpg" style="  width:100%; height: 550px;
  object-fit: cover;">
</div>
<br>
<div class="container" id="about">
<div>
	<h3 style="text-align: center;">Welcome to SugarHigh Delights</h3>
</div>
<p style="margin:30px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet pulvinar mi, auctor mollis ante posuere ut. Praesent mattis libero risus, at congue ante gravida ut. Nam ut lectus efficitur, vehicula nulla non, varius ex. Nunc sed tellus ac justo placerat ultricies vitae ut felis. Duis mattis arcu id dignissim aliquet. Fusce sodales risus ut magna convallis, eu pretium arcu accumsan. Quisque placerat commodo lacus, sit amet sagittis tortor bibendum vel.</p>
<p style="margin:30px">
 Morbi lorem ex, molestie accumsan molestie nec, ultrices vel ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla fermentum consequat metus nec sagittis. Quisque sed ligula ut nibh venenatis feugiat et at justo. Donec sagittis eget arcu viverra tristique. Donec a eleifend ligula. Phasellus aliquet felis et risus suscipit ullamcorper. Aenean mollis lacus ac mauris ornare pulvinar.</p>
</div>
<div class="container">
 <div class="card-deck" style="margin:20px">
  <div class="card">
    <img src="images/homepage.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Cakes</h5>
     <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
       <button type="submit" id="" name="" class="btn btn-danger btn-block">ORDER CAKES</button>
    </div>
  </div>
  <div class="card">
    <img src="images/cupcakes.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Cupcakes</h5>
      <!--<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>-->
     <button type="submit" id="" name="" class="btn btn-danger btn-block">ORDER CUPCAKES</button>
    </div>
  </div>
  <div class="card">
    <img src="images/pastry.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pastry</h5>
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>-->
      <button type="submit" id="" name="" class="btn btn-danger btn-block">ORDER PASTRY</button>
    </div>
  </div>
</div>
</div>
<div class="container" id="contact" style="align-content: center;">
<div class="row">
   <div class="col-md-6">          
    <form id="myform" class="registration-form" method=post action="Authentication/register.php">
      <h3 style="text-align: center;">Contact Us</h3>
         <!--username-->
         <label for="action">Enter Name:</label><br>
      <div class="form-group">
          <div class="input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text">
                      <span class="fa fa-user"></span>
                  </span>                    
              </div>
           
              <input type="text" name="username" class="form-control" placeholder="" required="required">
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
              <input type="email" name="email" class="form-control" placeholder=""  required="required" >
          </div>
      </div>
               <!--Subject-->
      <label for="action">Enter Subject:</label><br>
      <div class="form-group">
          <div class="input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text">
                      <span class="fa fa-envelope"></span>
                  </span>                    
              </div>
              <input type="text" id="subject" name="subject" class="form-control">
          </div>
      </div>
      <!--Message-->
      <label for="action">Enter Message:</label><br>
      <div class="form-group">
          <div class="input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text">
                      <span class="fa fa-envelope"></span>
                  </span>                    
              </div>
               <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
          </div>
      </div>

           <button type="submit" id="submitbtn" name="submitbtn" class="btn btn-danger btn-block">Submit</button>
            </form>
          </div>    
   
  <div class="col-md-6" style="align-content: center;">
  	 
  	 <br>
     <h5 style="text-align: center;">Opening hours</h5><br>
     <p style="text-align: center;">Daily: 9.30 AM–6.00 PM
      <br>
Sunday & Holidays: Closed</p>
     <h5 style="text-align: center;">Address</h3>
       <ul class="list-unstyled mb-0" style="text-align: center;">
                <li><i class="fa fa-map-marker-alt fa-2x"></i>
                    <p>Nairobi, 00100, Kenya</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+254712345678</p>
                </li>
                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>contact@pastrydelights.com</p>
                </li>
            </ul>
             <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center"  style="color: black;">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fa fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fa fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fa fa-google"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fa fa-linkedin"> </i>
        </a>
      </li>
    </ul>
       
</div>
</div>
</body>
<!-- Footer -->
<footer style="margin: 20px ">

  <!-- Footer Elements -->
  <div class="container">
  <p class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://pastrydelights.com/"> pastrydelights.com</a>
  </p>
</div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</html>