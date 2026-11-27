<?php

require('./jasa.php');

use Pbo\Marketplace\Jasa;

// Input ke Property
$produk = new Jasa();

$produk ->setKode('P0001')
        ->setNama('Laptop')
        ->setHarga(10000000)
        ->setStok(5);

// Output
echo "Produk : " . $produk->getNama();
echo "</br>";

echo "Harga : " . $produk->getHarga();
echo "</br>";

echo "Stok : " . $produk->getStok();
echo "</br>";

echo "Pajak : " . $produk->pajak() . "%";
echo "</br>";

echo "Harga setelah Pajak: Rp. " . $produk->total();
echo "</br>";

echo "Metode pembayaran: " . $produk->payment('tf');
?>