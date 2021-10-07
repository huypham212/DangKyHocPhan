<?php
    $conn = mysqli_connect("localhost", "root", "", "dangkyhocphan") or die(mysqli_error($conn));
    $lang = mysqli_query($conn, "SET NAME 'utf8'");
?>