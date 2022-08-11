<?php


  // INHERITANCE ADALAH PENURUN SIFAT class paretn ke child class or sub class
  class Handphone {
    public $warna;
    public $bahan;

    public function __construct($warna, $bahan){
      $this->warna = $warna;
      $this->bahan = $bahan;
    }

    function phoneCall(){
      echo "dringggg..........";
    }
  }

  class SmartPhone extends Handphone{
     public $os;

     public function __construct($warna, $bahan, $os){
        Parent::__construct($warna, $bahan);
        $this->os = $os;
     }

     function PlayGame(){
       echo 'Main........';
     }
  }

  $handphone = new Handphone("Kuning", "Plastik");
  $smartPhone = new SmartPhone("Hijau", "Besi", "Android");
  echo $handphone->bahan;
  echo " ";
  echo $smartPhone->warna;
  echo "sistem". $smartPhone->os;


 ?>
