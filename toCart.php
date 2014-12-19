<?php
    $connect = Mysqli_connect('localhost','root','','web3pro3');

    //Check connection to server
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if(isset($_GET['submit']))
    {
        $title = $_GET['title'];
        $artist = $_GET['artist'];
        $album = $_GET['album'];
        $format = $_GET['format'];
        $description = $_GET['description'];
        $price = $_GET['price'];
        $quantity = $_GET['quantity'];
        
        $sql_insert = "INSERT INTO `cart`(`id`, `title`, `artist`, `album`, `format`, `description`, `price`, `quantity`, `qutyPurchase`) VALUES ('','$title','$artist','$album','$format','$description','$price','$quantity','1')";
        mysqli_query($connect, $sql_insert);
    }
    header("Location:index.php");
?>