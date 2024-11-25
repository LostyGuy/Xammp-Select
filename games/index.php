<?php
    require ('../conn.php')
?>
<!DOCKTYPE HTML>
<html>
    <head>

    </head>
    <body>

    <?php
        echo '<table style="border: solid 1px black">';
        $select_game = "select * from games";
        $game_res = $conn->query($select_game);
        
        if ($game_res -> num_rows > 0) {
            while ($row = $game_res -> fetch_assoc()) {
                $index = $row['ID'];
                echo '<td>';
                echo "<a href='./show.php?id=" . $index . "'>" . $row['TITLE'] . "</a>";
                echo '</td>';
            };
        };
        echo '</table>';
    ?>
    </body>
</html>