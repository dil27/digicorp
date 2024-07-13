<?php


class Nilai {
    public $mapel;
    public $nilai;

    public function __construct($mapel, $nilai) {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}

class Siswa {
    public $nrp;
    public $nama;
    public $daftarNilai;

    public function __construct($nrp, $nama) {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->daftarNilai = [
            new Nilai("B. Inggris", 100)
        ];
    }
}

$daftarSiswa = [];

for ($i = 0; $i < 10; $i++) {
    $nrp = sprintf("NRP %03d", $i+1);
    $nama = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
    $mapel = ["B. Inggris", "B. Indonesia", "B. Jepang"][array_rand(["B. Inggris", "B. Indonesia", "B. Jepang"])];
    $nilai = rand(0, 100);
    $siswa = new Siswa($nrp, $nama);
    $siswa->daftarNilai[] = new Nilai($mapel, $nilai);
    $daftarSiswa[] = $siswa;
}

foreach ($daftarSiswa as $siswa) {
    echo $siswa->nrp . ", Nama: " . $siswa->nama . "\n";
    foreach ($siswa->daftarNilai as $nilai) {
        echo $nilai->mapel . ": " . $nilai->nilai . "\n";
    }
    echo "\n";
}