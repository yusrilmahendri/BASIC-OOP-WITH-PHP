<?php

    class car{

      public $warnaMobil;
      public $jenisMobil;

      function __construct($warnaMobil, $jenisMobil){
         $this->warnaMobil = $warnaMobil;
         $this->jenisMobil = $jenisMobil;
      }

      function startEngine(){
        echo "bremmm....";
       }
    }
    $carSedan = new Car("silver", "Sedan");
    echo "<p>". "saya punya mobil ". $carSedan->jenisMobil. "  dengan warna". $carSedan->warnaMobil. "</p>" ;


    class hp{
      public $kualitasKamera;
      public $namaHp;

      function __construct($kualitasKamera, $namaHp){
          $this->kualitasKamera = $kualitasKamera;
          $this->namaHp = $namaHp;
      }

      function ambilPhoto(){
        echo "jepreet..";
      }
    }

    $hp = new Hp("108mp", "Anderoid x");
    echo "<p>". "saya punya handphoen yang kameranya". $hp->kualitasKamera. " dengan merek". $hp->namaHp. "</p>";

 ?>
