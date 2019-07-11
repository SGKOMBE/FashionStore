

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

