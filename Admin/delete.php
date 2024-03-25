<?php
    include('../connection/conn.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM reservation WHERE id = $id";
    mysqli_query($connforMyOnlineDb,$sql);

    header('Location: pending.php');


?>