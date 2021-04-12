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
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h4 style="text-align: center;background-color: pink; height: 50px;padding-top: 10px">Billing Address</h4>
     <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" required="">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">

              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">
          </form>
              </div>
    <div class="col-md-6">
      <h4 style="text-align: center; background-color: pink; height: 50px; padding-top: 10px;">Your Order</h4>
       <div class="panel panel-default">
                        <!--<div class="panel-heading text-center"><h4>Current Cart</h4></div>-->
                        <div class="panel-body">
                           <table class="table borderless">
                <thead>
                                <tr>
                      <td><strong>Your Cart: # item</strong></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                                </tr>
                </thead>
                <tbody>
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
                   <!-- <td class="text-right"><button type="button" class="btn btn-danger">Remove</button></td>-->
                  </tr>
                   <tr>
                    <td class="col-md-3">
                        <div class="media">
                             <a class="thumbnail pull-left" href="#"> <img src="../images/cake.jpg" style="width: 72px; height: 72px;"> </a>
                             <div class="media-body">
                                 <h5 class="media-heading"> Cake</h5>
                                 <h5 class="media-heading"> C001</h5>
                             </div>
                        </div>
                    </td>
                    <td class="text-center">Ksh.1500</td>
                    <td class="text-center">1</td>
                    <td class="text-right">Ksh.1500</td>
                   <!-- <td class="text-right"><button type="button" class="btn btn-danger">Remove</button></td>-->
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
                  <!--  <td class="text-right"><button type="button" class="btn btn-danger">Remove</button></td>-->
                  </tr>
                </tbody>
              </table> 
                        </div>
                    </div>
        <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4 " style="background-color:pink; height: 50px;padding-top: 10px; text-align: center;">Review Order</h4>
                        </div>
                        <div class="panel-body">
                                <div class="col-md-12">
                                    <strong>Subtotal (# item)</strong>
                                    <div class="pull-right"><span>Ksh.</span><span>3300.00</span></div>
                                </div>
                                <div class="col-md-12">
                                    <strong>Tax</strong>
                                    <div class="pull-right"><span>Ksh.</span><span>200.00</span></div>
                                </div>
                                <div class="col-md-12">
                                    <small>Shipping</small>
                                    <div class="pull-right"><span>Ksh.</span><span>100.00</span></div>
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <strong>Order Total</strong>
                                    <div class="pull-right"><span>Ksh.</span><span>3600.00</span></div>
                                    <hr>
                                </div>
        
            <h4 class="mb-3" style="background-color:pink; height: 50px;padding-top: 10px; text-align: center;">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>

                                <button type="button" class="btn btn-danger btn-lg btn-block">PLACE YOUR ORDER</button>
                                
                        </div>
                        
                    </div>
    </div>
  </div>
  </div>
</body>
</html>