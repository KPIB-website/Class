<?php include 'includes/header.php'; ?>

<?php
// DATA FOTO GALERI (Contoh)
// Silakan ganti nama file dan caption sesuai kebutuhan
$galeri = [
    ["file" => "kegiatan1.jpg", "caption" => "Kunjungan Industri 2023"],
    ["file" => "kegiatan2.jpg", "caption" => "Bukber Kelas di Resto A"],
    ["file" => "kegiatan3.jpg", "caption" => "Classmeeting Futsal Juara 1"],
    ["file" => "kegiatan4.jpg", "caption" => "Belajar Kelompok di Perpus"],
    ["file" => "kegiatan5.jpg", "caption" => "Ulang Tahun Wali Kelas"],
    ["file" => "kegiatan6.jpg", "caption" => "Wisata Alam Akhir Semester"],
    // Tambahkan foto lainnya di sini...
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Galeri Kelas</title>
    
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
</head>
<body>

<section class="anggota-polaroid">
    
    <div id="particles-js"></div>

    <div class="container">
        <div class="polaroid-board relative-z">
            
            <div class="anggota-title">
                <h2>GALERI KELAS</h2>
                <p>Momen Kebersamaan Kami</p>
            </div>

            <div class="gallery-grid">
                <?php foreach ($galeri as $foto): ?>
                    <div class="gallery-item">
                        <div class="tape"></div> 
                        
                        <div class="gallery-photo">
                            <img src="assets/images/galeri/<?= $foto['file']; ?>" 
                                 alt="<?= $foto['caption']; ?>"
                                 loading="lazy"> </div>
                        
                        <div class="gallery-caption">
                            <?= $foto['caption']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

    <div class="hero-text-area relative-z" style="text-align: center; margin-top: 40px;">
        <ul class="hero-nav-buttons-anggota">
            <li><a href="index.php">HOME</a></li>
            <li><a href="anggota.php">ANGGOTA</a></li>
            <li><a href="jadwal.php">JADWAL</a></li>
            <li><a href="galeri.php">GALERI</a></li>
        </ul>
    </div>

</section>

<script src="assets/js/particles.min.js"></script>
<script src="assets/js/particles-config.js"></script>

</body>
</html>
<?php include 'includes/footer.php'; ?>