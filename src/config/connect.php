<?php

$conn = mysqli_connect('localhost','root','','test');

if (mysqli_connect_error())
{
    echo "Không kết nối được với MySQL: " . mysqli_connect_error();
}

?>