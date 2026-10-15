<?php
// JANGAN DIUBAH IF INI
if (!isset($_SESSION["nama"])) {
    echo "<p>Belum ada pesanan.</p>";
} else {
    // Kerjakan ELSE ini
    echo "<h1> Struk Pesanan Ransum</h1>";
    echo "Nama     : " . $_SESSION["nama"];
    echo "<br>";
    echo "Ransum   : " . $_SESSION["menu"];
    echo "<br>";
    echo "Jumlah   : " . $_SESSION["jumlah"];
    echo "<br>";
    echo "Kategori : " . $_SESSION["kategori"];
    echo "<br>";
    echo "Diskon   : " . $_SESSION["diskon"];
    echo "<br>";
    echo "Total    :" . $_SESSION["total"];
    echo "<br>";

}
