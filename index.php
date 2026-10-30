<?php

//panggil file PropertyConstant.php
require('PropertyConstant.php');

use pbo\marketplace\Produk;

//object
$produk = new Produk('P0001', 'Leptop', 10000000, 5);


//hasil 
echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: Rp.". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak". $produk->pajak() . "%";
echo "<br/>";

echo "Total Harga Setelah Pajak: Rp.". $produk->total();
