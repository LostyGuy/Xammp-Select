<?php
require "./conn.php";

$conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);

if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}
?>
<!DOCKTYPE HTML>
<head>
<title>BrainShower</title>
</head>
<body>
<table border="1">
    <tr>
        <td>users</td>
        <td>products</td>
        <td>orders</td>
        <td>categories</td>
    </tr>
</table>
    <?php
    echo '<table>';
    echo '<tr>';
     $tables = 'SHOW TABLES';
     $result = $conn->query($tables);
     while ($row = $result->fetch_assoc()) {
     echo '<td>';
     echo '';
     echo '</td>';
    };
    echo '</tr';
    echo '</table>';
    ?>
</body>
