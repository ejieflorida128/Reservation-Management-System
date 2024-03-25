<?php

include('../connection/conn.php');

    $id = $_GET['id'];

    $sql = "UPDATE reservation SET status = 'accepted' WHERE id = $id";
    mysqli_query($connforMyOnlineDb,$sql);

    header('Location: pending.php');

?>