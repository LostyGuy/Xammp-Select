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
                    games.TITLE TITLE, 
                    publishers.name PUBLISHER
                FROM 
                    games
                LEFT JOIN publishers ON games.publisher = publishers.ID
                WHERE 
                    publishers.id = '$id' ;";
                    $result = mysqli_query($conn, $sql);
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo $row['TITLE'] .' | '. $row['PUBLISHER'];
                            echo '</br>';
                        }
                    };

    ?>
    </body>
</html>