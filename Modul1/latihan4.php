<?php
  $nama = "Firdausa";
  $kelas = "xirpl2";
  $alamat = "sawojajar";
  function tampil_nama(){
    global $nama;
    echo "Nama Saya : ".$nama."<br>";
  }
  function tampil_kelas(){
    global $kelas;
    echo "Kelas : ".$kelas."<br>";
  }
  function tampil_alamat(){
    global $alamat;
    echo "Alamat : ".$alamat;
  }
  tampil_nama();
  tampil_kelas();
  tampil_alamat();
?>
