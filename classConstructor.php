<?php

  // class adalah blueprint
  class Cat{

    // ATRIBUT  && akses modifier adalah public, private dll
    public $warnaKucing;
    public $jenisKucing;

    // CONSTRUCTOR adalah sebuah fungsi diamana akan dipanggil pertama setelah inisiasi objek / pembuatan objek
    // this untuk menidentifikasi kepemilikan suatu class
    function __construct($warnaKucing, $jenisKucing){
         $this->warnaKucing = $warnaKucing;
         $this->jenisKucing = $jenisKucing;
    }

    //METHODS
    function mengeong(){
      echo "meonggg";
    }

  }

  // OBJEK
  $cat = new Cat("Hitam", "Kucing biasa");
  $catAnggora = new Cat("Putih", "Anggora");
  $catKampung = new Cat("Kuning", "Kampung");

  // akses atribut dari suatu class
  echo "<p>Saya Punya Kucing : ". $cat->warnaKucing." dan jenisnya :". $cat->jenisKucing."</p>";
  echo "<p>Saya Punya Kucing : ". $catAnggora->warnaKucing." dan jenisnya :". $catAnggora->jenisKucing."</p>";
  echo "<p>Saya Punya Kucing : ". $catKampung->warnaKucing." dan jenisnya :". $catKampung->jenisKucing."</p>";

 ?>
