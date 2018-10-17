<?php
$nama1 =$_POST["nama"];
$nama2 =$_POST["namaa"];
$nama3 =$_POST["namaaa"];
$jenis1 =$_POST["jenis"];
$jenis2 =$_POST["jeniss"];
$jenis3 =$_POST["jenisss"];
	if ($nama1 && $jenis1 == "Pria") {
		echo $nama1 , " ADALAH Pria <br>";
	}
	else
	{
		echo $nama1 , " ADALAH wanita <br>";
	}
	if ($nama2 && $jenis2 == "Pria") {
		echo $nama2 , " ADALAH Pria <br>";
	}
	else
	{
		echo $nama2 , " ADALAH wanita <br>";
	}
	if ($nama3 && $jenis3 == "Pria") {
		echo $nama3 , " ADALAH Pria <br>";
	}
	else
	{
		echo $nama3 , " ADALAH wanita <br>";
	}
?>