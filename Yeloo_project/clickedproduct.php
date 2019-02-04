<?php
require_once ("database_class.php");

$db = new Database();
$db->ConnectDB();

if ($db->ErrorDB()) {
    $msg = "Connecting to database failed!";
    $error = true;
}

if (isset($_GET["category"])) {
    $selectedCategory = $_GET["category"];
}
/*
$query = $db->selectDB("SELECT name FROM products where name = 'proizvod'");
$productName = $query->fetch_array();
echo $productName[0];*/

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yeloo | Products</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/png" href="img/logo_punjenje_unutra.png" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- MOJE DODANO -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/clickedproduct.js"></script>
    <!--<script src="js/products.js"></script> -->
    <!-- Ono sa W3 schools-a
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    -->
</head>
<img class="" id="backgroundPic" src="img/background7.jpg" alt="">
<body>
<header class="container">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container" id="headerNav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="headerLogo" href="homepage.php"><img src="img/logo_yeloo.png" alt="logo3" width="170" height="65"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="margin-top: 0.7%;">
                    <!--<li>
                        <a href="#">About</a>
                    </li>-->
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="products.php?category=all">All products</a>
                    </li>
                    <!--<li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</header>

<!-- Page Content -->
<div class="container" id="mainContainer" style="z-index: 2;">

    <div class="row" style="margin-top: 50px;">

        <div class="col-md-9" id="contentWrapper">
            <!--<div class="row" id="displayProduct">  AKO ŽELIM IME GORE
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <h2 id="productName">
                        Product name
                    </h2>
                </div>
            </div> -->
            <div class="row" id="displayProductDiv" style="margin-top: 15px">

            </div>
        </div>



    </div>

</div>
<!-- /.container -->

<div class="container" id="footerContainer">

    <!-- <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" id="copyrightsDiv">
                <!--<p>Copyright &copy; K. Bruno 2016</p>-->
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
