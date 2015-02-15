<?php

	/*
	workshop 3 Februari 2015
	UIKA
	*/

	//variable
	$nama = '"<b>Rizki\'s</b>"';
	$kelas = "Karyawan B Semester 4 \"teknik informatika\"";
	$keyword = "Semester";

	//defined('CONSTANT_NAME', 123);


	//biodata
	echo "Selamat datang : ".$nama."<br />";
	echo "Kelas : ".$kelas."<br />";

	//menghitung jumlah karakter
	echo "Jumlah karakter :".strlen($keyword)."<br />";

	//search character
	echo "Cari kata : <i>".$keyword."</i> berada pada posisi ke ".strpos($kelas, "Semester");


?>
