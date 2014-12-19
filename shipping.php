<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blue Pinapple Music</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <meta name="robots" content="noindex,nofollow">
	</head>
    <body>
        <?php
            //Variable to connect to MySQL server(hostname, username, password, database name)
            $connect = Mysqli_connect('localhost','root','','web3pro3');
    
            //Check connection to server
            if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
        
            if(isset($_GET['submit']))
            {
                $totalAmount = $_GET['total'];
        ?>
        <div id="topRight">
            <h5><a href="index.php">Home</a></h5>
        </div>
        
        <h1>Shipping Method</h1>
         <div id="mainStuff">
             <form method="get" action="finalPage.php">
            <div id="shippingMethod">
                <h2>Drone</h2>
                <h4>Less then<br>24 hours<br>$25.00</h4>
                <input type='hidden' name='ship' value="20.00">
                <input type='hidden' name='total' value='<?php echo $totalAmount?>'>
                <input type="submit" name="drone" value="Drone">
            </div>
            </form>
             <form method="get" action="finalPage.php">
            <div id="shippingMethod">
                <h2>Express</h2>
                <h4>About 1-2 Business Days<br>$15.00</h4>
                <input type='hidden' name='ship' value="15.00">
                <input type='hidden' name='total' value='<?php echo $totalAmount?>'>
                <input type="submit" name="express" value="Express">
            </div>
            </form>
             <form method="get" action="finalPage.php">
            <div id="shippingMethod" action="finalPage.php">
                <h2>Stantard</h2>
                <h4>About 3-5 Business Days<br>$10.00</h4>
                <input type='hidden' name='ship' value="10.00">
                <input type='hidden' name='total' value='<?php echo $totalAmount?>'>
                <input type="submit" name="express" value="Standard">
            </div>
            </form>
             <form method="get" action="finalPage.php">
             <div id="shippingMethod">
                <h2>Patience</h2>
                <h4>Who Knows... Eventually<br>$5.00</h4>
                 <input type='hidden' name='ship' value="5.00">
                 <input type='hidden' name='total' value='<?php echo $totalAmount?>'>
                <input type="submit" name="express" value="Patience">
            </div>
            </form>
        </div>
        <?php
            }
        ?>
    </body>
</html>