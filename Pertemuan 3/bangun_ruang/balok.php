<?php 

    class balok {
        private $panjang;
        private $lebar;
        private $tinggi;

        public function setPanjang($num_panjang) {
            $this -> panjang = $num_panjang;
            
        }

        public function setLebar($num_lebar) {
            $this -> lebar = $num_lebar;

        }

        public function setTinggi($num_tinggi) {
            $this -> tinggi = $num_tinggi;

        }

        public function getPanjang() {
            return $this -> panjang;

        }

        public function getLebar() {
            return $this -> lebar;
            
        }

        public function getTinggi() {
            return $this -> tinggi;
            
        }

        public function getLuas() {
            $luas = 0;
            $luas = 2 * (($this -> panjang * $this ->lebar) + ($this -> panjang * $this -> tinggi) + ($this -> tinggi * $this ->lebar) );
            return $luas;

        }

        public function getVolume() {
            $volume = 0;
            $volume = ($this -> panjang * $this -> lebar * $this -> tinggi);
            return $volume;

        }
    }

?>