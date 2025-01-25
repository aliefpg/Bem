<?php
include '../src/config.php';

$query = $pdo->query("SELECT * FROM kementerian");
$kementerian = $query->fetchAll(PDO::FETCH_ASSOC);

$title = "Daftar Kementerian";
include "../includes/navbar.php";
include '../meta.php';
?>
<body>
    <h1>Daftar Kementerian</h1>
    <?php foreach ($kementerian as $data): ?>
        <div class="kementerian">
            <h2><?= $data['nama_kementerian']; ?></h2>
            <p><?= $data['deskripsi']; ?></p>
            <h3>Visi</h3>
            <p><?= $data['visi']; ?></p>
            <h3>Misi</h3>
            <ul>
                <?php foreach (json_decode($data['misi'], true) as $misi): ?>
                    <li><?= $misi; ?></li>
                <?php endforeach; ?>
            </ul>
            <h3>Tugas</h3>
            <ul>
                <?php foreach (json_decode($data['tugas'], true) as $tugas): ?>
                    <li><?= $tugas; ?></li>
                <?php endforeach; ?>
            </ul>
            <h3>Proker</h3>
            <ul>
                <?php foreach (json_decode($data['proker'], true) as $proker => $deskripsi): ?>
                    <li><strong><?= $proker; ?>:</strong> <?= $deskripsi; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</body>
</html>
