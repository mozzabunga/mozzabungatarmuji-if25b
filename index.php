<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

$produk = new Produk('P001', 'Laptop', '10000000', '5');

//$produk->kode = 'P0001';
//$produk->nama = 'Laptop';
//$produk->harga = 10000000;
//$produk->stok = 5;

// Output
echo "Produk : " . $produk->nama;
echo "</br>";

echo "Harga : Rp." . $produk->harga;
echo "</br>";

echo "Stok : " . $produk->stok;
echo "</br>";

echo "Pajak : " . $produk->pajak() . "%";
echo "</br>";

echo "Harga setelah Pajak: Rp. " . $produk->total();
echo "</br>";
?>

