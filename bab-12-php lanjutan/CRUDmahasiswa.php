<?php
include 'koneksi.php';

$query = $pdo->query("SELECT * FROM mahasiswa ORDER BY id DESC");
$data = $query->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Data Mahasiswa</h2>

    <a href="tambah.php" class="btn btn-primary mb-3">
        Tambah Data
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php $no = 1; ?>
        <?php foreach($data as $mhs): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($mhs['nama']) ?></td>
                <td><?= htmlspecialchars($mhs['nim']) ?></td>
                <td><?= htmlspecialchars($mhs['prodi']) ?></td>
                <td>
                    <a href="edit.php?id=<?= $mhs['id'] ?>" 
                       class="btn btn-warning btn-sm">
                       Edit
                    </a>

                    <a href="hapus.php?id=<?= $mhs['id'] ?>" 
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin hapus data?')">
                       Hapus
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>