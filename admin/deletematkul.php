<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from matkul where no='$no'";
mysql_query($query);
header("location: rekapmatkul.php");
?>