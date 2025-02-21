<?php 
include '../meta.php';
include "../includes/navbar.php";
?>

<body>
    <div class="breadcrumbs">
        <!-- <p><a href="<?= $basePath; ?>index.php">Home</a></p> -->
        <p class="breadcrumbs-active">Home</a></p>
        <span>|</span>
        <p class="breadcrumbs-active">Tentang</p>
        <span>|</span>
        <p class="breadcrumbs-active">Program Kerja</p>
    </div>

<main class="organisasi-main">
        <div class="left">
            <!-- STRUKTUR ORGANISASI -->
            <div class="content">
                <h2>Struktur Organisasi</h2>
                <p>Pengurus Badan Eksekutif Mahasiswa Sekolah Tinggi Ilmu Komputer Cipta Karya Informatika Periode 2024/2025</p>
                <a href="<?= $basePath; ?>assets/images/kementerian/stuktur-organisasi.png" target="_blank"><img src="<?= $basePath; ?>assets/images/kementerian/stuktur-organisasi.png" alt="Struktur Organisasi" title="Struktur Organisasi Badan Ekstekutif Mahasiswa Kabinet Dharma Satvavira Dialektika"></a>
            </div>
        </div>
        <div class="right">
            <div class="sticky">
                <div class="content">
                    <p>
                        Ada undangan, kolaborasi, atau urusan penting sama BEM?
                        <br>
                        Langsung aja hubungi Humas!
                    </p>
                    <a href="https://wa.me/6282247963895" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                </div>
            </div>
        </div>
    </main>

    <?php include "../includes/footer.php"; ?>
</body>
</html>