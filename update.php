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
    if(isset($_GET['submit']))
    {
        $theid = $_GET['id'];
        $title = $_GET['title'];
        $artist = $_GET['artist'];
        $album = $_GET['album'];
        $format = $_GET['format'];
        $description = $_GET['description'];
        $price = $_GET['price'];
        $quantity = $_GET['qutyPurchase'];
        $option=$_GET['option'];
        
        echo $theid . $title . $artist . $album . $format . $description . $price . $quantity . $option;
        
        $sql_update = "UPDATE cart SET qutyPurchase='$option' WHERE id='$theid'";
       mysqli_query($connect, $sql_update);
    }
    header("Location:cart.php");
?>
</html>