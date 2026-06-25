<?php
require_once 'MenuItem.php';

class Makanan extends MenuItem {
    private $tingkatPedas;
    private $kalori;

    public function __construct($id_menu, $nama_item, $kategori_menu, $harga_dasar, $tingkatPedas, $kalori) {
        parent::__construct($id_menu, $nama_item, $kategori_menu, $harga_dasar);
        $this->tingkatPedas = $tingkatPedas;
        $this->kalori = $kalori;
    }

    public function hitungHargaTotal($jumlah) {
        return $this->harga_dasar * $jumlah;
    }

    public function tampilkanDeskripsi() {
        return "Makanan: {$this->nama_item} | Pedas: Lv. {$this->tingkatPedas} | Kalori: {$this->kalori} kkal | Harga: Rp" . number_format($this->harga_dasar);
    }
}
