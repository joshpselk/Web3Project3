<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blue Pinapple Music</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <script>
            function validateForm() {
                var x = document.forms["Sbox"]["search"].value;
                var y = document.forms["Sbox"]["option"].value;
                if (x=="" && y=="Select Option"){
                    alert("Both fields must be filled out");
                    return false;
                }else if (x==null || x=="") {
                    alert("Search text area must be filled out");
                    return false;
                } else if(y=="Select Option") {
                    alert("An option must be chosen");
                    return false;
                }
            }
</script>
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
            <h5><a href="cart.php">Cart</a></h5>
        </div>
        <h1>Blue Pinapple Music</h1>
        <div id="mainContent">
            <div id="search">
                <form id="Sform" name="Sbox" action="index.php" onsubmit="return validateForm()" method="get">
                    <input type="text" name="search">
                    <select name="option">
                        <option>Select Option</option>
                        <option>Title</option>
                        <option>Artist</option>
                        <option>Album</option>
                    </select>
                    <input type="submit" name="submit">
                </form>
                <form id="show" name="show" action="index.php">
                    <input type="submit" name="showAll" value="Show All">
                </form>
            </div>
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
                            <th>Quantity Aval.</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                <?php

                    if(isset($_GET['submit']))
                    {
                        $search=$_GET['search'];
                        $option=$_GET['option'];
                    
                        $sql_select = "SELECT * FROM `music` WHERE $option = '$search' ORDER BY $option ASC";
                    
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
                            $quantity = $row['quantity'];

                            echo "<tr>";
                            echo "<td>" . $title . "</td>";
                            echo "<td>" .  $artist . "</td>";
                            echo "<td>" . $album . "</td>";
                            echo "<td>" . $format . "</td>";
                            echo "<td>" . $description . "</td>";
                            echo "<td>" . $price . "</td>";
                            echo "<td>" . $quantity . "</td>";
                            ?>
                            <td>
                                <form method="get" action="toCart.php" style="display=none">
                                    <input type='hidden' name='id' value="<?php echo $theid;?>">
                                    <input type='hidden' name='title' value="<?php echo $title;?>">
                                    <input type='hidden' name='artist' value="<?php echo $artist;?>">
                                    <input type='hidden' name='album' value="<?php echo $album;?>">
                                    <input type='hidden' name='format' value="<?php echo $format;?>">
                                    <input type='hidden' name='description' value="<?php echo $description;?>">
                                    <input type='hidden' name='price' value="<?php echo $price;?>">
                                    <input type='hidden' name='quantity' value="<?php echo $quantity;?>">
                                    <input type='submit' name='add' value='Add to Cart'>
                                </form>
                            </td>
                        <?php
                            echo "</tr>";
                        }
                    } else {
                        $sql_select = "SELECT * FROM `music` ORDER BY `artist` ASC";
                    
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
                            $quantity = $row['quantity'];

                            echo "<tr>";
                            echo "<td>" . $title . "</td>";
                            echo "<td>" .  $artist . "</td>";
                            echo "<td>" . $album . "</td>";
                            echo "<td>" . $format . "</td>";
                            echo "<td>" . $description . "</td>";
                            echo "<td>" . $price . "</td>";
                            echo "<td>" . $quantity . "</td>";
    
                            ?>
                             <td>
                                <form method="get" action="toCart.php" style="display=none">
                                    <input type='hidden' name='id' value="<?php echo $theid;?>">
                                    <input type='hidden' name='title' value="<?php echo $title;?>">
                                    <input type='hidden' name='artist' value="<?php echo $artist;?>">
                                    <input type='hidden' name='album' value="<?php echo $album;?>">
                                    <input type='hidden' name='format' value="<?php echo $format;?>">
                                    <input type='hidden' name='description' value="<?php echo $description;?>">
                                    <input type='hidden' name='price' value="<?php echo $price;?>">
                                    <input type='hidden' name='quantity' value="<?php echo $quantity;?>">
                                    <input type='submit' name='submit' value='Add to Cart'>
                                </form>
                            </td>
                        <?php
                            echo "</tr>";
                        
                        }
                    }
                ?>
                    </tbody>
                </table>

            </div>
        </div>
    </body>