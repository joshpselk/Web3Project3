<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blue Pinapple Music</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
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
            <h5><a href="createSign.php">Create Account</a></h5>
            <h5><a href="createSign.php">Sign-in</a></h5>
        </div>
        <h1>Blue Pinapple Music</h1>
        <div id="mainContent">
            <div id="search">
                <form method="get" action="search.php">
                    <input type="text" name="search"><button><input type="image" name="submit" src="img/Magnifier-icon.png" alt="Search" width="16" height="16"></button>
                </form>
            </div>
            <div id="records">
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Artist</th>
                            <th>Album</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                    $sql_select = "SELECT * FROM music";
                    
                    $result = mysqli_query($connect, $sql_select);

                    while($row = mysqli_fetch_array($result))
                    {
                        $theid = $row['id'];
                        $title = $row['title'];
                        $artist = $row['artist'];
                        $album = $row['album'];
                        $price = $row['price'];

                            echo "<tr>";
                            echo "<td>" . $title . "</td>";
                            echo "<td>" .  $artist . "</td>";
                            echo "<td>" . $album . "</td>";
                            echo "<td>" . $price . "</td>";
                            echo "</tr>";
                    }
                ?>
                    </tbody>
                </table>

            </div>
        </div>
    </body>