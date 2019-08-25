<!-- 
    MIT License

Copyright (c) 2019 Sumit Kombe

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
-->

<?php 
  //For github understanding that it is a php file.   
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Products Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="products.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="products.php" class="navbar-brand">Lifestyle Store</a>
                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="collapse-navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right" id="myNavbar">
                        <li>
                            <a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
                        </li>
                        
                        <li>
                            <a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a>
                        </li>
                        
                        <li>
                            <a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container-fluid space">
            <div class="jumbotron text-center">
                <h1>Welcome to our Lifestyle Store!</h1>
                <h3>We have the best cameras,watches and shirts for you.No need to hunt around,we have all in one place.</h3>
            </div>
        </div>
        
        <div class="container">
            <div class="row text-center spacing">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/camera1.jpg" alt="Camera 1">
                    
                    
                        <div class="caption">
                            <h2>Cannon                  EOS</h2>
                            <p>Price:Rs.36000.00</p>
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </div>    
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/camera2.jpg" alt="Camera 2">
                    
                        <div class="caption">
                            <h2>Sony DSLR</h2>
                            <p>Price:Rs.40000.00</p>
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/camera3.jpg" alt="Camera 3">
                    
                        <div class="caption">
                            <h2>Sony DSLR</h2>
                            <p>Price:Rs.50000.00</p>
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/camera4.jpg" alt="Camera 4">
                    
                        <div class="caption">
                            <h2>Olympus DSLR</h2>
                            <p>Price:Rs.80000.00</p>
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </div>    
                </div>
            </div>
            
            <div class="row text-center spacing">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch1.jpg" alt="Watch 1">
                    
                        <div class="caption">
                            <h2>Titan Model #301</h2>
                            <p>Price:Rs.13000.00</p>
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </div>    
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch2.jpg" alt="Watch 2">
                    
                        <div class="caption">
                            <h2>Titan Model #201</h2>
                            <p>Price:Rs.3000.00</p>
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </div>    
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch3.jpg" alt="Watch 3">
                    
                        <div class="caption">
                            <h2>HMT Milan</h2>
                            <p>Price:Rs.8000.00</p>
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch4.jpg" alt="Watch 4">
                    
                        <div class="caption">
                            <h2>Faber Luba #111</h2>
                            <p>Price:Rs.18000.00</p>
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row text-center spacing">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt1.jpg" alt="Shirt 1">
                    
                        <div class="caption">
                            <h2>H&W</h2>
                            <p>Price:Rs.800.00</p>
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt2.jpg" alt="Shirt 2">
                    
                        <div class="caption">
                            <h2>Luis Phil</h2>
                            <p>Price:Rs.1000.00</p>
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt3.jpg" alt="Shirt 3">
                    
                        <div class="caption">
                            <h2>John Zok</h2>
                            <p>Price:Rs.1500.00</p>
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt4.jpg" alt="Shirt 4">
                    
                        <div class="caption">
                            <h2>Jhalsani</h2>
                            <p>Price:Rs.1300.00</p>
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="footer">
            <div class="container">
            <center>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center>
            </div>
        </div>
    </body>
</html>
