<?php

function hitungIMT($berat, $tinggi){

    $tinggiMeter = $tinggi / 100;

    $imt = $berat / ($tinggiMeter * $tinggiMeter);

    if($imt < 18.5){
        $kategori = "Kurus";
    }
    elseif($imt < 25){
        $kategori = "Normal";
    }
    elseif($imt < 30){
        $kategori = "Gemuk";
    }
    else{
        $kategori = "Obesitas";
    }

    return [
        "imt" => round($imt, 2),
        "kategori" => $kategori
    ];
}

$berat = 70;
$tinggi = 175;

$hasil = hitungIMT($berat, $tinggi);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan IMT</title>
</head>
<body>

<h2>Hasil Perhitungan IMT</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Keterangan</th>
        <th>Hasil</th>
    </tr>

    <tr>
        <td>Berat Badan</td>
        <td><?php echo $berat; ?> kg</td>
    </tr>

    <tr>
        <td>Tinggi Badan</td>
        <td><?php echo $tinggi; ?> cm</td>
    </tr>

    <tr>
        <td>Nilai IMT</td>
        <td><?php echo $hasil["imt"]; ?></td>
    </tr>

    <tr>
        <td>Kategori</td>
        <td><?php echo $hasil["kategori"]; ?></td>
    </tr>

</table>

</body>
</html>