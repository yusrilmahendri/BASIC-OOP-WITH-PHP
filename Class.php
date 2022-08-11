<?php

  // class adalah blueprint
  class Cat{

    // ATRIBUT  && akses modifier adalah public, private dll
    public $warnaKucing = "Hitam";
    public $jenisKucing = "Persia";

    //METHODS
    function mengeong(){
      echo "meonggg";
    }

  }

  // OBJEK
  $cat = new Cat();

  // akses atribut dari suatu class
  echo $cat->warnaKucing;
  echo 'saya memiliki kucing jenis'.$cat->jenisKucing.'dengan warna:'.$cat->warnaKucing;
  $cat->mengeong();


 ?>
