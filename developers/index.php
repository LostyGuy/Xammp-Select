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
        $select_dev = "select * from developers";
        $dev_res = $conn->query($select_dev);
        $index = 1;
        if ($dev_res -> num_rows > 0) {
            while ($row = $dev_res -> fetch_assoc()) {
                echo '<td>';
                echo "<a href = './show.php?'.'id=111'.'>'".$row['NAME']."</a>";
                echo '</td>';
            };
        };
        echo '</table>';
    ?>
    </body>
</html>