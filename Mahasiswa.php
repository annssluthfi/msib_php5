<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $kuliah;
    public $matkul;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    public function __construct($nim, $nama, $kuliah, $matkul, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    public function grade(){
        if ($this->nilai <= 100 && $this->nilai >= 85) {
            $this->grade = 'A';
        }
        else if ($this->nilai < 85 && $this->nilai>= 70) {
            $this->grade = 'B';
        } 
        else if ($this->nilai < 70 && $this->nilai >= 69) {
            $this->grade = 'C';
        } 
        else if ($this->nilai < 69 && $this->nilai >= 60) {
            $this->grade = 'D';
        }
        else {
            $this->grade = 'E';
        }
        return $this->grade;
    }

    public function predikat(){
        switch($this->grade){
            case 'A' :
                $this->predikat = "Sangat Memuaskan";
                break;
            case 'B':
                $this->predikat = "Memuaskan";
                break;
            case 'C':
                $this->predikat = "Cukup";
                break;
            case 'D':
                $this->predikat = "Kurang";
                break;
            default :
                $this->predikat = "Sangat Kurang";
                break;
        }
        return $this->predikat;
    }

    public function status(){
        if ($this->nilai >=65) {
            $this->status = "Lulus";
            return $this->status;
        }
        else {
            $this->status = "Tidak Lulus";
            return $this->status;
        }
    }
}

?>