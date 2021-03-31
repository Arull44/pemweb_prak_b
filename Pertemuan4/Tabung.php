<?php 
    class Tabung {

        private $diameter;
        private $tinggi;
        private $r;
        // private $luas_selimut = 0;
        private $luas_selimut;
        private $volume;
        private $phi = 3.14;

        // bisa menggunakan constructor, tapi dibeberapa kasus tetap membutuhkan set
        // public function __construct($d, $t) {
        //     $this -> diameter = $d;
        //     $this -> tinggi = $t
        // }

        public function setDiameter($d) {
            $this -> diameter = $d;
            $this -> r = $d / 2;
            // atau
            // $this -> r = $this -> diameter / 2;
        }

        public function setTinggi($t) {
            $this -> tinggi = $t;
        }

        public function setLuas() {
            $this -> luas_selimut = pi() * $this -> diameter * $this -> tinggi;
        }

        public function setVolume() {
            $this -> volume = $this -> phi * ($this -> r **2) * $this -> tinggi;
        }

        public function getLuas() {
            return $this -> luas_selimut;
        }
        public function getVolume() {
            return $this -> volume;
        }

        // bisa juga langsung hitung di dalam getter nya, jadi nanti di gak usah pake setter
        // public function getVolume() {
        //     return $this -> volume = pi() * ($this -> r **2) * $this -> tinggi;
        // }
        // public function getLuas() {
        //     return $this -> luas_selimut = pi() * $this -> diameter * $this -> tinggi;
        // }
    }

?>