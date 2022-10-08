<?php
$koneksi = mysqli_connect('localhost','root','','perpus_uniga');
/* check connection */
if (mysqli_connect_error()) {
    printf("connect failed:",mysqli_connect_error());
    exit();
} 
?>