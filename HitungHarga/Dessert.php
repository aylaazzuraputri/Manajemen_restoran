<?php
require_once 'MenuItem.php';

class Dessert extends MenuItem {
    private $jumlahLayer;
    private $rasaUtama;

    // ... (constructor tetap sama)

    // Override: Menambah pajak 10%
    public function hitungHargaTotal($jumlah) {
        $total = $this->harga_dasar * $jumlah;
        return $total * 1.10;
    }

    public function tampilkanDeskripsi() {
        return "Dessert: {$this->nama_item} ({$this->rasaUtama}) - Rp" . number_format($this->hitungHargaTotal(1));
    }
}