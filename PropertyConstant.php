<?php

class Produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //contant
    public const PAJAK = 0.11;

}

//OBJECT
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = '10000000';
$produk->stok = '5';

//hitung pajak
$pajak = Produk::PAJAK * 100; //11
$jumlahPajak = $produk->harga * Produk::PAJAK;//1,1 Juta

//total
$total = $produk->harga + $jumlahPajak;

//hasil
echo "Produk: ". $produk->nama;
echo "<br>";
echo "Harga: ". $produk->harga;
echo "<br>";
echo "Stok: ". $produk->stok;
echo "<br>";
echo "Pajak: ". $pajak. "%";
echo "<br>";
echo "Toal Harga Setelah Pajak: Rp". $total;