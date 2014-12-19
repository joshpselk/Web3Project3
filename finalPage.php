<html>
	<head>
		<meta charset="UTF-8">
		<title>Blue Pinapple Music</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <meta name="robots" content="noindex,nofollow">
	</head>
<?php
    $connect = Mysqli_connect('localhost','root','','web3pro3');

    //Check connection to server
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

        $totalAmount = $_GET['total'];
        $shipping = $_GET['ship'];
        

        $total = $totalAmount + $shipping;
        
       $sql_delete = "DELETE FROM cart";
        
      mysqli_query($connect, $sql_delete);
    
?>
    <body>
        <div id="finalTotal">
            <h2>Total Amount</h2>
            <p>Products Purchased: <span id="cost"><?php echo $totalAmount?></span></p>
            <p>Shipping Costs: <span id="cost"><?php echo $shipping?></span></p>
            <p>Total: <span id="cost"><?php echo $total?></span></p>
        </div>
        <div id="message">
            <p>Your Products Are On The Way</p>
            <a href="index.php"><button>Awesome</button></a>
        </div>
    </body>
</html>