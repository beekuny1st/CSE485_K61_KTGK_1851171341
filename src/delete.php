<?php 

include('config/connect.php');

$ma = $_GET['patientid'];

$sql = "DELETE From PATIENT WHERE patientid = '$ma' ";

echo $sql;

$res = mysqli_query($conn, $sql);

if($res==true){
    header("Location:index.php");
}
?>