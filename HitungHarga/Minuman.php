<?php
require_once 'MenuItem.php';

class Minuman extends MenuItem {
    private $ukuranCup;
    private $jenisTopping;

    public function __construct($id_menu, $nama_item, $kategori_menu, $harga_dasar, $ukuranCup, $jenisTopping) {
        parent::__construct($id_menu, $nama_item, $kategori_menu, $harga_dasar);
        $this->ukuranCup = $ukuranCup;
        $this->jenisTopping = $jenisTopping;
    }

    // Override: Menambah biaya topping 2000 per cup
    public function hitungHargaTotal($jumlah) {
        return ($this->harga_dasar * $jumlah) + ($jumlah * 2000);
    }

    public function tampilkanDeskripsi() {
        return "Minuman: {$this->nama_item} ({$this->ukuranCup}) - Rp" . number_format($this->hitungHargaTotal(1));
    }
}