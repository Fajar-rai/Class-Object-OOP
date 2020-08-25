<?php
class manusia{
    
    var $nama;
    var $warna;
    
    
    function tampilkan_nama(){
        return "Nama saya Dito <br/>";
    }
    
    function warna_kulit(){
        return "Warna kulit saya Putih <br/>";
    }
    
}

$manusia = new manusia();
 

echo $manusia->tampilkan_nama();
 

echo $manusia->warna_kulit();
?>