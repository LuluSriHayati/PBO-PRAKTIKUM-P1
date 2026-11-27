<?php

//panggil file PropertyConstant
require('./Jasa.php');

use pbo\marketplace\Jasa;


//object
$produk = new Jasa();

$produk->setKode("P0001")->setNama("Leptop")->setHarga(10000000)->setStok(5);
//hitung pajak
//$pajak = Produk::PAJAK * 100;
//$jumlahPajak = $produk->harga * Produk::PAJAK; //1.100.00


//hasil
echo "produk: ". $produk->getNama();
echo "<br/>";

echo "harga: Rp. ". $produk->getHarga();
echo "<br/>";

echo "stok: ". $produk->getStok();
echo "<br/>";

echo "Pajak: ". $produk->pajak()."%";
echo "<br/>";

echo "Total Harga Setelah Pajak: ". $produk->total() ;
echo "<br/>";

echo "Metode Pembayaran: ". $produk->payment("default");
echo "<br/>";
