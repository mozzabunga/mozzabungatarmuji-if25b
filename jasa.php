<?php

namespace Pbo\Marketplace;

require_once('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

class Jasa { //karena make trait jadi kita ubah dari class jasa extends Produk menjadi class jasa { dan kita panggil traitnya dengan use Produk; di dalam class Jasa

    use Produk;

    public function payment($tipe) {

        return match($tipe) {
            "virtual" => 'Virtual Account',
            "qris" => 'QRIS',
            default => 'hanya bisa pembayaran va dan qris'
        };
    } 
}