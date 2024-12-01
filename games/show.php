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
                    tags.name AS TAG, 
                    developers.name AS DEVELOPER, 
                    publishers.name AS PUBLISHER, 
                    platform.name AS PLATFORM
                FROM 
                    games
                LEFT JOIN tags ON games.TAG = tags.id
                LEFT JOIN developers ON games.DEVELOPER = developers.id
                LEFT JOIN publishers ON games.PUBLISHER = publishers.id
                LEFT JOIN platform ON games.PLATFORM = platform.id
                WHERE 
                    games.id = '$id' ;";
                    $result = mysqli_query($conn, $sql);
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo $row['TITLE'] .' '. $row['TAG'] .' '. $row['DEVELOPER'] .' '. $row['PUBLISHER'] .' '. $row['PLATFORM'];
                            echo '</br>';
                        }
                    };

    ?>
    </body>
</html>