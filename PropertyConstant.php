<?php

class Produk {
    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }


    public function pajak() {
        return self::PAJAK * 100;
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK); 
    }
}

// Input ke Property
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