<!DOCTYPE html>
<html>
<body>

    <table border="1">
        <tr>
            <th>Kecamatan</th>
            <th>Luas</th>
            <th>Jumlah Penduduk</th>
        </tr>

        <?php
        // Data diambil persis seperti di gambar Anda
        $kecamatan = array("Moyudan", "Minggir", "Sayegan", "Godean", "Gamping");
        $luas = array(27.62, 27.27, 26.63, 26.84, 29.25);
        $jumlah_penduduk = array(31497, 29886, 47129, 72028, 108675);

        // Menghitung jumlah data (ada 5 data)
        $jumlah_data = count($kecamatan);

        // Melakukan perulangan untuk mencetak baris tabel
        for ($i = 0; $i < $jumlah_data; $i++) {
            echo "<tr>";
            echo "<td>" . $kecamatan[$i] . "</td>";
            echo "<td>" . $luas[$i] . "</td>";
            echo "<td>" . $jumlah_penduduk[$i] . "</td>";
            echo "</tr>";
        }
        ?>

    </table>

</body>
</html>