<?php
require "./conn.php";

$conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);

if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}
?>
<!DOCKTYPE HTML>
<html>
<head>
<title>BrainShower</title>
</head>
<body>
<table style="border: solid 1px black">
    <tr>
        <td><a href="developers/index.php">Developers</a></td>
        <td><a href="games/index.php">Games</a></td>
        <td><a href="platform/index.php">Platform</a></td>
        <td><a href="publishers/index.php">Publishers</a></td>
        <td><a href="tags/index.php">Tags</a></td>
        <td><a href="users/index.php">Users</a></td>
        
    </tr>
</table>
</body>
</html>