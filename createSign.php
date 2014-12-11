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
            <h3><a</h3>
        </div>
        <h1>Blue Pinapple Music</h1>
    </body>