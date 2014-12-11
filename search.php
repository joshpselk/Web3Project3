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
                <form>
                    <input type="text" name="search"><a href="search.php"><button><img src="img/Magnifier-icon.png" alt="Search" width="16" height="16"></a></button>
                </form>
            </div>
        </div>
        this is the search
    </body>