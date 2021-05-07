<?php
$con = mysqli_connect("localhost","root","","tbl_mhs");
if (!$con)
{
die('Could not connect: ' . mysqli_connect_error());
}
else
{
  echo 'Berhasil';
}
mysqli_query($con,"DELETE FROM tbl_mhs WHERE LastName='Prabowo'");
?>
