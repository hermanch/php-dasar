<?php 
$barang = array("panci","wajan", "piring");
$nama = ["han han", "hanasa"];

$nama[] = "Sofari"; // menambah data
$barang[1] = "sendok"; //mengganti nilai
unset($barang[0]);
var_dump($barang[2]); //mengakses data
var_dump($nama);
var_dump($barang);
var_dump(count($nama));
 ?>