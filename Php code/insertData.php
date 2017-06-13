<?php
    include "conect.php";

    //in url dan achter insert.php invoegen '  ?nickname=NICKNAME&mail=EMAIL  '
    $ding = $_GET ["ding"];
    $uv = $_GET ["uv"];

    $query = "INSERT INTO `hedwig`.`dingData` (`id`, `ding`, `tijd`, `UVstraling`) VALUES (NULL, '$ding', CURRENT_TIMESTAMP(), '$uv');";

    if (!($result = $mysqli->query($query))) 
        showerror($mysqli->errno,$mysqli->error); 

?>