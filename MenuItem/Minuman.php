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

    public function hitungHargaTotal($jumlah) {
        return $this->harga_dasar * $jumlah;
    }

    public function tampilkanDeskripsi() {
        return "Minuman: {$this->nama_item} | Ukuran: {$this->ukuranCup} | Topping: {$this->jenisTopping} | Harga: Rp" . number_format($this->harga_dasar);
    }
}