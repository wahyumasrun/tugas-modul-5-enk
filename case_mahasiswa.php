<?php

// Mendefinisikan class  bernama Mahasiswa
class Mahasiswa
{
    // Properti private
    // Dari luar, data hanya bisa diakses lewat method getter dan setter.
    private $nim, $nama, $semester, $prodi, $nilai;

    // Constructor
    public function __construct($nim, $nama, $prodi, $semester)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    // ===== SETTER: untuk MENGUBAH nilai properti =====
    // ===== GETTER: untuk MENGAMBIL nilai properti =====

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setProdi($prodi)
    {
        $this->prodi = $prodi;
    }

    public function getProdi()
    {
        return $this->prodi;
    }

    public function setSemester($semester)
    {
        $this->semester = $semester;
    }

    public function getSemester()
    {
        return $this->semester;
    }

    public function setNilai($nilai)
    {
        $this->nilai = $nilai;
    }

    public function getNilai()
    {
        return $this->nilai;
    }

    // Method untuk menentukan grade berdasarkan nilai
    public function tentukanGrade()
    {
        // Cek nilai valid terlebih dahulu (nilai harus di antara 0 sampai 100)
        if ($this->nilai > 100 || $this->nilai < 0) {
            echo "Grade : Nilai tidak valid <br>";
        } elseif ($this->nilai >= 80) {
            echo "Grade : A <br>";
        } elseif ($this->nilai >= 70) {
            echo "Grade : B <br>";
        } elseif ($this->nilai >= 60) {
            echo "Grade : C <br>";
        } elseif ($this->nilai >= 50) {
            echo "Grade : D <br>";
        } else {
            echo "Grade : E <br>";
        }
    }
}

// == MEMBUAT DAN MENGGUNAKAN OBJEK ==

// Membuat objek $mhs1 dari class Mahasiswa
$mhs1 = new Mahasiswa("202457201068", "Wahyu Masrun", "Sistem Informasi", 5);

// Mengisi nilai lewat setter
$mhs1->setNilai(90);

// Menampilkan data lewat getter
echo "NIM : " . $mhs1->getNim() . "<br>";
echo "Nama : " . $mhs1->getNama() . "<br>";
echo "Prodi : " . $mhs1->getProdi() . "<br>";
echo "Semester : " . $mhs1->getSemester() . "<br>";
echo "Nilai : " . $mhs1->getNilai() . "<br>";

// Memanggil method untuk menampilkan grade
$mhs1->tentukanGrade();