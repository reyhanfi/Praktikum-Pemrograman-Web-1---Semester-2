<?php

$namaBulan = [
    1 => "Januari",
    2 => "Februari",
    3 => "Maret",
    4 => "April",
    5 => "Mei",
    6 => "Juni",
    7 => "Juli",
    8 => "Agustus",
    9 => "September",
    10 => "Oktober",
    11 => "November",
    12 => "Desember"
];

$bulan = date("n");
$hariIni = date("j");
$totalHari = date("t");
$tahun = date("Y");

$bulanSekarang = $namaBulan[$bulan];

$sisaHari = $totalHari - $hariIni;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Informasi Bulan</title>
</head>
<body>

<h2>Informasi Bulan Saat Ini</h2>

<table border="1" cellpadding="8">

<tr>
    <th>Keterangan</th>
    <th>Nilai</th>
</tr>

<tr>
    <td>Bulan</td>
    <td><?php echo $bulanSekarang . " " . $tahun; ?></td>
</tr>

<tr>
    <td>Tanggal Hari Ini</td>
    <td><?php echo $hariIni; ?></td>
</tr>

<tr>
    <td>Total Hari</td>
    <td><?php echo $totalHari; ?> hari</td>
</tr>

<tr>
    <td>Sisa Hari</td>
    <td><?php echo $sisaHari; ?> hari</td>
</tr>

</table>

</body>
</html>