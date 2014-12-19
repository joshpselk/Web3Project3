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
        ?>
        <div id="topRight">
            <h5><a href="index.php">Home</a></h5>
        </div>
        <h1>Your Shopping Cart</h1>
         <div id="mainContent">
            <div id="records">
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Artist</th>
                            <th>Album</th>
                            <th>Format</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                
                    
                    $sql_select = "SELECT * FROM `cart`";
                    
                    $result = mysqli_query($connect, $sql_select);

                    while($row = mysqli_fetch_array($result))
                    {
                        $theid = $row['id'];
                        $title = $row['title'];
                        $artist = $row['artist'];
                        $album = $row['album'];
                        $format = $row['format'];
                        $description = $row['description'];
                        $price = $row['price'];
                        $quantity = $row['qutyPurchase'];
                        

                        echo "<tr>";
                        echo "<td>" . $title . "</td>";
                        echo "<td>" .  $artist . "</td>";
                        echo "<td>" . $album . "</td>";
                        echo "<td>" . $format . "</td>";
                        echo "<td>" . $description . "</td>";
                        echo "<td>" . $price . "</td>";
                        echo "<td>"
                            
                    ?>
                        <form method="get" action="update.php">
                            <select name="option">
                                <?php
                                    //Loops to 100 for options so I won't have to type out each <option></option>
                                    $y = 1;
                                    $x = $quality;
                                    while($y <'101')
                                    {
                                                                        //Shortened 'if' statement called "Ternary Operator" to work in echo
                                        echo '<option value="'.$y.'" '.(($y==$quantity)?'selected="selected"':"").'>'.$y.'</option>';
                                        $y++;
                                    }
                                ?>
                            </select>
                            <!--Hidden fields of info to pas variables along-->
                            <input type='hidden' name='id' value="<?php echo $theid;?>">
                            <input type='hidden' name='title' value="<?php echo $title;?>">
                            <input type='hidden' name='artist' value="<?php echo $artist;?>">
                            <input type='hidden' name='album' value="<?php echo $album;?>">
                            <input type='hidden' name='format' value="<?php echo $format;?>">
                            <input type='hidden' name='description' value="<?php echo $description;?>">
                            <input type='hidden' name='price' value="<?php echo $price;?>">
                            <input type='hidden' name='qutyPurchase' value="<?php echo $quantity;?>">
                            <input type='hidden' name='itemTotal' value="<?php $iTotal=$price*$quantity; echo $iTotal;?>">
                            <!--Totals up every loop to continue to update the price-->
                            <input type='hidden' name='total' value="<?php $totalAmount = $totalAmount + $iTotal; echo $totalAmount?>">
                            <div>
                                <input id="update" type="submit" name="submit" value="Update">
                                <button type="submit" formaction="delete.php">Delete</button>
                            </div>
                        </form>
                    <?php
                        echo "</td>";
                     echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
                <?php
                    
                    
                ?>
                        <div id="totalAmount">
                        <p>Total Cost of Items:<?php echo " " . $totalAmount; ?></p>
                        <form action="shipping.php">
                            <input type='hidden' name='total' value="<?php echo $totalAmount;?>">
                            <input style="float:right;" type="submit" name="submit" value="Continue">
                        </form>
                <?php
                    
                ?>
                </div>
            </div>
        </div>
    </body>
</html>