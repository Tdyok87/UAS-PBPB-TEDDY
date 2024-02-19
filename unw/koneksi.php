<?php
$connect = new mysqli("localhost","root","","toko"); 

if ($connect){
}else{
    echo "Koneksi Gagal";
    exit();
}
?>
