<?php

  // OVERLOADING adalah menganti statement dan prameter function
  // OVERRIDING adalah menganti statement dari function

  class Handphone {
    public $warna;
    public $bahan;

    public function __construct($warna, $bahan){
      $this->warna = $warna;
      $this->bahan = $bahan;
    }

    // overrride
    function phoneCall(){
      echo "dringggg..........";
    }

    //OVERLOADING
    function kirimPesan(){
      echo "kirim pesan...";
    }

  }

  class SmartPhone extends Handphone{
     public $os;

     public function __construct($warna, $bahan, $os){
        Parent::__construct($warna, $bahan);
        $this->os = $os;
     }

     // overiding
     function phoneCall(){
       echo 'Main........';
     }

     //OVERLOADING
     function kirimPesan($namaOrang){
       echo "Sms ke".$namaOrang;
     }

  }

  $handphone = new Handphone("Kuning", "Plastik");
  $smartPhone = new SmartPhone("Hijau", "Besi", "Android");

  echo $smartPhone->phoneCall();
  echo $handphone->phoneCall();

    echo $handphone->kirimPesan();
    echo $smartPhone->kirimPesan("Yusril");


 ?>
