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
                    games.TITLE, 
                    tags.name AS TAG
                FROM 
                    games
                LEFT JOIN tags ON tags.ID = games.tag
                WHERE 
                    tags.ID = '$id' ;";
                    $result = mysqli_query($conn, $sql);
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo $row['TITLE'] .' | '. $row['TAG'];
                            echo '</br>';
                        }
                    };

    ?>
    </body>
</html>