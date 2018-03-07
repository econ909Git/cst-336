<?php
    // Start session
    session_start();

    // $_XXXXXX are objects provided by PHP
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // $_POST will contain all values provided by 
        // inputs with name attributes
        $username = $_POST["username"];
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>iLearn Layout</title>
        <!--section define sytle of layout and sections-->
        <!-- Image Header -->
        <div class="w3-display-container w3-animate-opacity">
          <img src="/w3images/sailboat.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
          <!--<div class="w3-container w3-display-bottomleft w3-margin-bottom">  -->
          <div>
           <label>First Name</label>
                <!--If there is no name attribute, the input does not go to the server-->
                <input type="text" name="firstName" value="<?php echo $firstName ?>"/>
          </div>
        </div>
    </head>
    <!--outer "div"-->
    <body> 
        <!--for padding-->
        <div> 
            <!--header section-->
            <div>
                <!--menu-->
                <div class="row">
                Input Information and Display it together   
                </div>
                <!--title and breadcrumbs-->
                <div class="row">
                    CST 336 Internet
                </div>
            </div>
            <!--body section-->
            <div>
                <!--left nav-->
                <div class="col">
                    Admin nav
                </div>
                <!--main content-->
                <div class="col">
                    Welcome, Weekly
                </div>
            </div>
        </div>
    </body>
</html>
