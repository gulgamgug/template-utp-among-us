<h2>Daftar Ransum</h2>
<table>
    <tr>
        <th>Ransum</th>
        <th>Harga</th>
    </tr>
    <tr>
        <td>Pizza Segitiga Polus</td>
        <td>Rp25.000</td>
    </tr>
    <tr>
        <td>Susu Elektrik Electrical</td>
        <td>Rp18.000</td>
    </tr>
    <tr>
        <td>Space Donut Oxygen</td>
        <td>Rp15.000</td>
    </tr>
    <tr>
        <td>Jus Berry MedBay</td>
        <td>Rp20.000</td>
    </tr>
    <tr>
        <td>Emergency Steak Navigation</td>
        <td>Rp45.000</td>
    </tr>
</table>

<h2>Form Pemesanan</h2>
<form action="proses.php" method="post" name="order">
    <br>
    Nama: <input type="text" name="nama" required><!-- Input Text Nama --><br>Ransum: <br>
    <input type="radio" name="menu" value="pizza" required>Pizza Segitiga Polus<br> <!-- Input Pilihan Ransum -->
    <input type="radio" name="menu" value="susu" required>Susu Elektrik Electrical<br>
    <input type="radio" name="menu" value="donut" required>Space Donut Oxygen<br>
    <input type="radio" name="menu" value="jus" required>Jus Berry MedBay<br>
    <input type="radio" name="menu" value="steak" required>Emergency Steak Navigation<br>
    Jumlah: <input type="number" name="jumlah" required> <!-- Input Jumlah -->
    <br> Kategori Pelanggan: <br> 
    <input type=radio name="kategori" value="crewmate" required>Crewmate
    <br> <input type=radio name="kategori" value="impostor" required>Impostor
    <br> <input type="submit" value="Simpan">
    <br> <input type="reset" value="Reset"> <!-- Input Pilihan Jenis Pelanggan -->
    
    <!-- Submit -->
</form>
