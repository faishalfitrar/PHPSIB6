<?php
    class Mahasiswa{
        public $nim;
        public $nama;
        public $kuliah;
        public $matkul;
        public $nilai;
        public $lulus;
        public $grade;
        public $predikat;

        public function __construct($nim, $nama, $kuliah, $matkul, $nilai){
            $this -> nim = $nim;
            $this -> nama = $nama;
            $this -> kuliah = $kuliah;
            $this -> matkul = $matkul;
            $this -> nilai = $nilai;
        }
        
        public function getStatus(){
            $this -> lulus = ($this -> nilai >= 65 ) ? 'Lulus' : 'Tidak Lulus';
            return $this -> lulus;
        }
        public function getGrade(){
            if ($this -> nilai >= 85 && $this -> nilai <= 100) $this -> grade = 'A';
            else if ($this -> nilai >= 75 && $this -> nilai < 85) $this -> grade = 'B';
            else if ($this -> nilai >= 60 && $this -> nilai < 75) $this -> grade = 'C';
            else if ($this -> nilai >= 40 && $this -> nilai < 60) $this -> grade = 'D';
            else if ($this -> nilai >= 0 && $this -> nilai < 40) $this -> grade = 'E';
            else $this -> grade = '';
            return $this -> grade;
        }
        public function getPredikat(){
            switch($this -> grade){
                case 'A':
                    $this -> predikat = 'Sangat Memuaskan';
                    break;
                case 'B':
                    $this -> predikat = 'Memuaskan';
                    break;
                case 'C':
                    $this -> predikat = 'Cukup';
                    break;
                case 'D':
                    $this -> predikat = 'Kurang';
                    break;
                case 'E':
                    $this -> predikat = 'Sangat Kurang';
                    break;
                default:
                    $this -> predikat = '';
            }
            return $this -> predikat;
        }
    }
?>