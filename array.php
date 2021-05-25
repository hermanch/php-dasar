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


//array map
$name = [
	"id" => "IDXuy56",
	"name" => "Hanasa",
	"address" => [
		"city" => "Ciamis",
		 "country" => "Indonesia"
	]
];
var_dump($name[id]); //"IDXuy56"
var_dump($name[address][country]); //"Indonesia" => nested array
 ?>