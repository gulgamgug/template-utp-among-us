<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini

// Hitung harga
if ($menu=="pizza") {
    $harga = 25000;
} else if ($menu=="susu") {
    $harga=18000;
} else if ($menu=="donut") {
    $harga=15000;
} else if ($menu=="jus") {
    $harga=20000;
} else if ($menu=="steak") {
    $harga=45000;
}

$subtotal = $harga * $jumlah;
$diskon = 0;

// Hitung Diskon
if ($kategori=="crewmate"){
    if ($jumlah>=3){
        $diskon=(int) $subtotal*0.15;
    }
}

// total harga
$total = $subtotal - $diskon;

// cek valid
$valid=false;
if ($jumlah>=1){
    $valid=true;
    if ($valid==true){
        $pesan=$total;
    }
}
if ($valid==false) {
    $pesan = "Pesanan ditolak. Jumlah pesanan minimal satu.";
}
