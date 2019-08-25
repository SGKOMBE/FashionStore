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
        <title>Shopping Cart</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="cart.css">
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
        
        <div class="container space">
            <table class="table table-bordered table-striped table-hover">
                <tbody>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td>Rs 0/-</td>
                        <td>
                            <a href="success.php">
                                <button type="button" class="btn btn-primary">Confirm Order</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div id="footer">
            <div class="container text-center">
                Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000
            </div>
        </div>
    </body>
</html>

