<?php
$url="https://api-berita-indonesia.vercel.app/antara/terbaru";
$data = file_get_contents($url);
$result = json_decode($data);

echo "<h2>".$result->data->title."</h2>";

for($i = 0; $i < count($result->data->posts); $i++) {
    echo "<small>".$result->data->posts[$i]->pubDate."</small><br>";
    echo $result->data->posts[$i]->title."<br>";
    echo $result->data->posts[$i]->link."<br>";
    echo"<br>";
    echo "<img src=".$result->data->posts[$i]->thumbnail.">Thumbnail</img>";
}
?>