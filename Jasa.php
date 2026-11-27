<?php

namespace pbo\marketplace;

require_once('./PropertyConstant.php');

use pbo\marketplace\Produk;

class Jasa {

    use Produk;

    public function payment($tipe) {

        return match ($tipe) {
            'virtual' => "Virtual Account",
            'qris' => "QRIS",
            default => "Pembayaran Hanya Bisa VA dan QRIS",
        };

    }
}
