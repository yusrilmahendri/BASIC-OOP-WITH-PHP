<?php

  // ACCESS MODIFER ADALAH SEBUAH ACCESS CONTROL YANG DIMILIKI OLEH SEBUAH CLASS, ATRIBUT ATAU METHOD

  // TIPE ACCES MODIFER = public, protected, private, no acces modifer
  class car{

    public $warnaMobil; // BISA DIAKSES SEMUA
    private $jenisMobil; // ONLY AKSES CLASS
    protected $jenis; // only akses class or sub class 

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



 ?>
