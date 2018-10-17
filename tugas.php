<?php
$fikri1 =$_POST["nama"];
$fikri2 =$_POST["namaa"];
$fikri3 =$_POST["namaaa"];
$fikry1 =$_POST["jenis"];
$fikry2 =$_POST["jeniss"];
$fikry3 =$_POST["jenisss"];
	if ($fikri1 && $fikry1 == "Pria") {
		echo $fikri1 , " ADALAH Pria <br>";
	}
	else
	{
		echo $fikri1 , " ADALAH wanita <br>";
	}
	if ($fikri2 && $fikry2 == "Pria") {
		echo $fikri2 , " ADALAH Pria <br>";
	}
	else
	{
		echo $fikri2 , " ADALAH wanita <br>";
	}
	if ($fikri3 && $fikry3 == "Pria") {
		echo $fikri3 , " ADALAH Pria <br>";
	}
	else
	{
		echo $fikri3 , " ADALAH wanita <br>";
	}
?>