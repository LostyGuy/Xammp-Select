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
                    g.TITLE TITLE,
                    g.ID ID,
                    developers.id DID,
                    developers.NAME DEVELOPER
                FROM
                    games g 
                LEFT JOIN 
                    developers ON g.DEVELOPER = developers.id
                WHERE 
                    developers.id =  '$id' ;";
                    $result = mysqli_query($conn, $sql);
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo $row['DEVELOPER'] .' | '. $row['TITLE'];
                            echo '</br>';
                        }
                    };
    ?>
    </body>
</html>