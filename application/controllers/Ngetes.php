<?php

// method index() adalah method default yang akan dipanggil ketika mengakses controller ini
// jika tidak ada method yang ditentukan dalam URL
// Sedangkan method __costruct() adalah method yang akan selalu dieksekusi setiap kita mengakses Controller, entah kita mau akses method apapun.

class Ngetes extends CI_Controller {
    // ini adalah method index yang akan dipanggil ketika mengakses controller ini
    public function index()
    {
        echo 'Ini adalah halaman Ngetes';
    }

    // ini private function yang tidak akan bisa diakses dari luar
    // hanya bisa diakses dari dalam class ini saja
    private function _utility()
    {
        echo 'Aku benci tinted glass!';
    }
}