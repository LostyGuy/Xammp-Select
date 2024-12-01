<?php
    require ('../conn.php')
?>
<!DOCKTYPE HTML>
<html>
    <head>

    </head>
    <body>

    <?php
        $id = $_GET['id'];
        $sql = "
                SELECT 
                    games.TITLE AS TITLE, 
                    platform.name AS PLATFORM
                FROM 
                    games
                LEFT JOIN platform ON games.PLATFORM = platform.ID
                WHERE 
                    platform.ID = '$id' ;";
                    $result = mysqli_query($conn, $sql);
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo $row['PLATFORM'] .' '. $row['TITLE'];
                            echo '</br>';
                        }
                    };

    ?>
    </body>
</html>