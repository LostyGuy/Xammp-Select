<?php
    require ('../conn.php')
?>
<!DOCKTYPE HTML>
<html>
    <head>

    </head>
    <body>

    <?php
        switch ($_GET['id']) {

            case '1':  
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
                games.id = 1;
                        ";
                $result = mysqli_query($conn, $sql);
                if ($result -> num_rows > 0) {
                    while ($row = $result -> fetch_assoc()) {
                        echo $row['TITLE'] .' '. $row['TAG'] .' '. $row['DEVELOPER'] .' '. $row['PUBLISHER'] .' '. $row['PLATFORM'];
                        echo '</br>';
                    };
                };
                break;
            case '2':
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
                    games.id = 2;
                            ";
                    $result = mysqli_query($conn, $sql);
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo $row['TITLE'] .' '. $row['TAG'] .' '. $row['DEVELOPER'] .' '. $row['PUBLISHER'] .' '. $row['PLATFORM'];
                            echo '</br>';
                        };
                    };
                    break;
            case '3':
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
                    games.id = 3;
                            ";
                    $result = mysqli_query($conn, $sql);
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo $row['TITLE'] .' '. $row['TAG'] .' '. $row['DEVELOPER'] .' '. $row['PUBLISHER'] .'  '. $row['PLATFORM'];
                            echo '</br>';
                        };
                    };
                    break;
            case '4':
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
                    games.id = 4;
                            ";
                    $result = mysqli_query($conn, $sql);
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo $row['TITLE'] .' '. $row['TAG'] .' '. $row['DEVELOPER'] .' '. $row['PUBLISHER'] .' '. $row['PLATFORM'];
                            echo '</br>';
                        };
                    };
                    break;
            case '5':
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
                    games.id = 5;
                            ";
                    $result = mysqli_query($conn, $sql);
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo $row['TITLE'] .' '. $row['TAG'] .' '. $row['DEVELOPER'] .' '. $row['PUBLISHER'] .' '. $row['PLATFORM'];
                            echo '</br>';
                        };
                    };
                    break;
            case '6':
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
                    games.id = 6;
                            ";
                    $result = mysqli_query($conn, $sql);
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo $row['TITLE'] .' '. $row['TAG'] .' '. $row['DEVELOPER'] .' '. $row['PUBLISHER'] .' '. $row['PLATFORM'];
                            echo '</br>';
                        };
                    };
                    break;
            case '7':
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
                    games.id = 7;
                            ";
                    $result = mysqli_query($conn, $sql);
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo $row['TITLE'] .' '. $row['TAG'] .' '. $row['DEVELOPER'] .' '. $row['PUBLISHER'] .' '. $row['PLATFORM'];
                            echo '</br>';
                        };
                    };
                    break;
        }
    ?>
    </body>
</html>