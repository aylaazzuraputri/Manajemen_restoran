<?php
require_once 'MenuItem.php';

class Dessert extends MenuItem {
    private $jumlahLayer;
    private $rasaUtama;

    public function __construct($id_menu, $nama_item, $kategori_menu, $harga_dasar, $jumlahLayer, $rasaUtama) {
        parent::__construct($id_menu, $nama_item, $kategori_menu, $harga_dasar);
        $this->jumlahLayer = $jumlahLayer;
        $this->rasaUtama = $rasaUtama;
    }

    public function hitungHargaTotal($jumlah) {
        return $this->harga_dasar * $jumlah;
    }

    public function tampilkanDeskripsi() {
        return "Dessert: {$this->nama_item} | Layer: {$this->jumlahLayer} | Rasa: {$this->rasaUtama} | Harga: Rp" . number_format($this->harga_dasar);
    }
}