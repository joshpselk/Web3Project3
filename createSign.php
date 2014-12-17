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
            <h3></h3>
        </div>
        <h1>Create Login</h1>
        <div id="mainContent">
            <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                <tr>
                    <form name="login" method="get" action="checklogin.php">
                    <td>
                        <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                            <tr>
                                <td colspan="3"><strong>Member Login</strong></td>
                            </tr>
                            <tr>
                                <td width="78">Username</td>
                                <td width="6">:</td>
                                <td width="294"><input name="myusername" type="text" id="myusername"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td><td>
                                <input name="mypassword" type="text" id="mypassword"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input type="submit" name="Submit" value="Login"></td>
                            </tr>
                        </table>
                    </td>
                    </form>
                </tr>
            </table>
        </div>
    </body>