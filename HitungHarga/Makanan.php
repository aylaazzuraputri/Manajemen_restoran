<?php
require_once 'MenuItem.php';

class Makanan extends MenuItem {
    private $tingkatPedas;
    private $kalori;

    // ... (constructor tetap sama)

    // Override: Logika standar
    public function hitungHargaTotal($jumlah) {
        return $this->harga_dasar * $jumlah;
    }

    public function tampilkanDeskripsi() {
        return "Makanan: {$this->nama_item} (Pedas Lv.{$this->tingkatPedas}) - Rp" . number_format($this->hitungHargaTotal(1));
    }
}