<?php

abstract class MenuItem {
    protected $id_menu;
    protected $nama_item;
    protected $kategori_menu;
    protected $harga_dasar;

    public function __construct($id_menu, $nama_item, $kategori_menu, $harga_dasar) {
        $this->id_menu = $id_menu;
        $this->nama_item = $nama_item;
        $this->kategori_menu = $kategori_menu;
        $this->harga_dasar = $harga_dasar;
    }

    // 1. Abstract method untuk menghitung total harga berdasarkan jumlah pesanan
    abstract public function hitungHargaTotal($jumlah);

    // 2. Abstract method untuk menampilkan deskripsi lengkap item
    abstract public function tampilkanDeskripsi();

    // Getter untuk harga dasar (opsional)
    public function getHargaDasar() {
        return $this->harga_dasar;
    }
}

// --- Contoh Implementasi Kelas Turunan ---

class MakananBerat extends MenuItem {
    private $tingkat_pedas;

    public function __construct($id_menu, $nama_item, $kategori_menu, $harga_dasar, $tingkat_pedas) {
        parent::__construct($id_menu, $nama_item, $kategori_menu, $harga_dasar);
        $this->tingkat_pedas = $tingkat_pedas;
    }

    public function hitungHargaTotal($jumlah) {
        return $this->harga_dasar * $jumlah;
    }

    public function tampilkanDeskripsi() {
        return "Menu: {$this->nama_item} | Kategori: {$this->kategori_menu} | Level Pedas: {$this->tingkat_pedas} | Harga: Rp" . number_format($this->harga_dasar);
    }
}
?>