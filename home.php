<?php
$a=$_GET['a'];


			 
//$uri= "http://localhost:3000/employees/?first_name=" . $a;
//$uri= "https://anonymousliembase.herokuapp.com/db.json?first_name=" . $a;
$uri= "https://newapibase.herokuapp.com/posts?panggilan=" . $a;
//$uri= "http://localhost/newapibase/posts?panggilan=" . $a;

$konten = file_get_contents($uri);
$json = json_decode($konten, true);
//echo "namanya dia adalah" .$a;
//echo "<br>";
//echo "nim dia adalah";
$response['nim'] = $json['0']['nama'];
$anjay =  json_encode($response);

echo "nama panggilan : ";
echo $response['nama'] = $json['0']['panggilan'];
echo "<br / >nim : ";
echo $response['nim'] = $json['0']['nim'];
echo "<br / >Tanggal lahir : ";
echo $response['tanggal lahir'] = $json['0']['tanggal_lahir'];
echo "<br / >Asal : ";
echo $response['asal'] = $json['0']['asal'];
echo "<br / >No telepon : ";
echo $response['no telepon'] = $json['0']['no_hp'];
echo "<br / >id line : ";
echo $response['id_line'] = $json['0']['id_line'];
echo "<br / >Alamat :  ";
echo $response['alamat'] = $json['0']['alamat'];


//echo "<br />";
//echo "dan nim dia adalah";
 //echo $response['nim'] = $json['nim'];

//$response['nim']= $json['nim'];
//$anjay =  json_encode($json);
//echo $anjay; 



?>
