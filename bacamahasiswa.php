<?php
$url="http://localhost/12211871/mahasiswa.xml";
$mahasiswa = new SimpleXMLElement(file_get_contents($url));
echo "<h2>Data Mahasiswa</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nama</th><th>NIM</th><th>Desa</th><th>Kecamatan</th></tr>";
foreach($mahasiswa->mahasiswa as $mhs){
    $id = $mhs['id'];
    $nama = $mhs->nama;
    $nim = $mhs->nim;
    $desa = $mhs->alamat->desa;
    $kecamatan = $mhs->alamat->kecamatan;

    echo "<tr>";
    echo "<td>$id</td><td>$nama</td><td>$nim</td><td>$desa</td><td>$kecamatan</td>";
    echo "</tr>";
}

echo "</table>";
?>