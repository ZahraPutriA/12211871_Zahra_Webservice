<?php
 $url = "https://doa-doa-api-ahmadramadhan.fly.dev/api";
 $data = file_get_contents($url);
 $result = json_decode($data);

echo "<h2>Kumpulan Doa Harian Muslim</h2>";

echo "<table border='1'>";
echo "<tr><th>No.</th><th>Judul</th><th>Link</th></tr>";

foreach($result as $index => $doa){
    $judul = $doa->judul;
    $link = $doa->link;
	
    echo "<tr>;
	echo "<td>" . ($index + 1) . "</td>";
	echo "<td>" . $judul . "</td>";
	echo "<td><a href='" . $link . "'>" . $link . "</a></td>";
	echo "</tr>";
}

echo "</table>";
?>