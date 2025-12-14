<?php
$wali = [
    "nama" => "Ibrahim Ibnu S.",
    "foto" => "assets/images/anggota/tyo.jpeg", // Ganti dengan nama file foto
    "jabatan" => "OTW S.Sos"
];
// ============================
// DATA STRUKTUR KELAS (6 ORANG)
// ============================
$struktur = [
    [
        "nama" => "Gerik Junia Wardanu",
        "foto" => "assets/images/anggota/danu.jpeg",
        "jabatan" => "Ketua Kelas"
    ],
    [
        "nama" => "Muhammad Sulthoni",
        "foto" => "assets/images/anggota/raja.jpeg",
        "jabatan" => "Wakil Ketua"
    ],
    [
        "nama" => "Shofa Tazkiya A. R.",
        "foto" => "assets/images/anggota/ahya.jpeg",
        "jabatan" => "Sekretaris"
    ],
    [
        "nama" => "Early Salsabila",
        "foto" => "assets/images/anggota/early.jpeg",
        "jabatan" => "Sekretaris"
    ],
    [
        "nama" => "Kartini",
        "foto" => "assets/images/anggota/tini.jpeg",
        "jabatan" => "Bendahara"
    ],
    [
        "nama" => "Aqilla Nindita N. M.",
        "foto" => "assets/images/anggota/qila.jpeg",
        "jabatan" => "Bendahara"
    ],
];

// ============================
// DATA ANGGOTA BIASA
// ============================
$anggota = [
    ["nama" => "Arul", "foto" => "assets/images/anggota/arul.jpeg"],
    ["nama" => "Anza", "foto" => "assets/images/anggota/anza.jpeg"],
    ["nama" => "Fira", "foto" => "assets/images/anggota/fira.jpeg"],
    ["nama" => "Ryan", "foto" => "assets/images/anggota/rian.jpeg"],
    ["nama" => "Zayyan", "foto" => "assets/images/anggota/zayyan.jpeg"], // Perhatikan struktur array harus konsisten
    ["nama" => "Sulistya", "foto" => "assets/images/anggota/tya.jpeg"],
    ["nama" => "Shoffa", "foto" => "assets/images/anggota/safa.jpeg"],
    ["nama" => "Mila", "foto" => "assets/images/anggota/mila.jpeg"],
    ["nama" => "Yaya", "foto" => "assets/images/anggota/yaya.jpeg"],
    ["nama" => "Zulfa", "foto" => "assets/images/anggota/zulfa.jpeg"],
    ["nama" => "Zildan", "foto" => "assets/images/anggota/jumiran.jpeg"],
    ["nama" => "Adjie", "foto" => "assets/images/anggota/aji.jpeg"],
    ["nama" => "Tyo", "foto" => "assets/images/anggota/tyo.jpeg"],
    ["nama" => "Agifa", "foto" => "assets/images/anggota/gipa.jpeg"],
    ["nama" => "Irsyad", "foto" => "assets/images/anggota/image.png"],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Anggota Kelas</title>

    <link rel="stylesheet" href="assets/css/styles.css">

    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
</head>
<body>

<section class="anggota-polaroid">
    
    <div id="particles-js"></div>

    <div class="polaroid-board relative-z" style="margin-bottom: 50px;">

        <div class="anggota-title">
            <h2>STRUKTUR KELAS</h2>
            <p>Kepengurusan Inti</p>
        </div>

        <div class="struktur-row">
            <?php foreach (array_slice($struktur, 0, 2) as $s): ?>
                <div class="polaroid-item struktur">
                    <div class="tape"></div>
                    <div class="polaroid-photo">
                        <img src="<?= $s['foto']; ?>" alt="<?= $s['nama']; ?>">
                    </div>
                    <div class="polaroid-name"><?= $s['nama']; ?></div>
                    <div class="polaroid-role"><?= $s['jabatan']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="struktur-row struktur-empat">
            <?php foreach (array_slice($struktur, 2, 4) as $s): ?>
                <div class="polaroid-item struktur">
                    <div class="tape"></div>
                    <div class="polaroid-photo">
                        <img src="<?= $s['foto']; ?>" alt="<?= $s['nama']; ?>">
                    </div>
                    <div class="polaroid-name"><?= $s['nama']; ?></div>
                    <div class="polaroid-role"><?= $s['jabatan']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

   <div class="polaroid-board relative-z" style="margin-bottom: 50px;">

        <div class="anggota-title">
            <h2>ANGGOTA</h2>
            <p>Seluruh Anggota Kelas</p>
        </div>

        <div class="polaroid-grid">
            <?php foreach ($anggota as $a): ?>
                <div class="polaroid-item">
                    <div class="tape"></div>
                    <div class="polaroid-photo">
                        <img src="<?= isset($a['foto']) ? $a['foto'] : ''; ?>" alt="<?= $a['nama']; ?>">
                    </div>
                    <div class="polaroid-name"><?= $a['nama']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
        
    </div>

    <div class="polaroid-board relative-z" style="margin-bottom: 50px; max-width: 500px; margin-left: auto; margin-right: auto;">
        <div class="anggota-title">
            <h2>ORANG KEREN</h2> 
            <p>Pengembang Web</p>
        </div>

        <div class="struktur-row">
            <div class="polaroid-item struktur"> 
                <div class="tape"></div>
                <div class="polaroid-photo">
                    <img src="<?= $wali['foto']; ?>" alt="<?= $wali['nama']; ?>">
                </div>
                <div class="polaroid-name"><?= $wali['nama']; ?></div>
                <div class="polaroid-role"><?= $wali['jabatan']; ?></div>
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