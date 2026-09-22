<?php
// Data cerita rakyat - PHP Native
$stories = [
    [
        'id' => 'roro-jonggrang',
        'title' => 'Roro Jonggrang',
        'origin' => 'Jawa Tengah / Yogyakarta',
        'category' => 'Legenda',
        'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=1200&q=80',
        'id_text' => 'Roro Jonggrang adalah kisah legenda Jawa tentang seorang putri yang dikenal cerdas dan berani. Setelah kerajaannya ditaklukkan oleh Bandung Bondowoso, sang putri diminta menjadi permaisuri. Ia kemudian mengajukan syarat yang sangat sulit: membangun seribu candi dalam satu malam. Dengan kecerdikan dan bantuan masyarakat, Roro Jonggrang berusaha menggagalkan pembangunan tersebut sebelum fajar tiba.',
        'jv_text' => 'Roro Jonggrang menika cariyos legenda saking tanah Jawi babagan putri ingkang misuwur pinter saha kendel. Sasampunipun kratonipun kasil dikuwasani dening Bandung Bondowoso, sang putri dipun suwuni dados permaisuri. Roro Jonggrang lajeng maringi syarat ingkang awrat, yaiku yasa sewu candi sajroning satunggal dalu. Kanthi kapinteranipun, piyambakipun ngupadi supados yasa candi punika boten rampung sadèrèngipun enjing.'
    ],
    [
        'id' => 'timun-mas',
        'title' => 'Timun Mas',
        'origin' => 'Jawa Tengah',
        'category' => 'Dongeng',
        'image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=1200&q=80',
        'id_text' => 'Timun Mas adalah cerita tentang seorang gadis pemberani yang harus menghadapi raksasa bernama Buto Ijo. Dengan bekal benda-benda pemberian seorang pertapa, Timun Mas berusaha menyelamatkan diri. Kisah ini menggambarkan keberanian, kecerdikan, dan kasih sayang seorang ibu kepada anaknya.',
        'jv_text' => 'Timun Mas menika cariyos babagan satunggaling prawan ingkang kendel nalika kedah ngadhepi buta ingkang asma Buto Ijo. Kanthi sangu barang-barang saking pertapa, Timun Mas ngupadi nylametaken piyambakipun. Cariyos punika nggambaraken kawani, kapinteran, saha katresnanipun tiyang sepuh dhumateng putranipun.'
    ],
    [
        'id' => 'sangkuriang',
        'title' => 'Sangkuriang',
        'origin' => 'Jawa Barat',
        'category' => 'Legenda',
        'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=80',
        'id_text' => 'Sangkuriang merupakan legenda yang berkaitan dengan asal-usul Gunung Tangkuban Perahu. Ceritanya mengisahkan perjalanan seorang pemuda yang bertemu kembali dengan Dayang Sumbi tanpa menyadari hubungan mereka. Permintaan Dayang Sumbi untuk membuat perahu dalam waktu singkat menjadi bagian penting dari kisah tersebut.',
        'jv_text' => 'Sangkuriang minangka legenda ingkang gegayutan kaliyan asal-usul Gunung Tangkuban Perahu. Cariyosipun nyariosaken lelampahan satunggaling nom-noman ingkang kepanggih malih kaliyan Dayang Sumbi tanpa mangertos sesambetanipun. Panyuwunan Dayang Sumbi supados damel prau ing wekdal cekak dados pérangan wigatos ing cariyos punika.'
    ]
];

$active = $_GET['cerita'] ?? 'roro-jonggrang';
$current = $stories[0];

foreach ($stories as $story) {
    if ($story['id'] === $active) {
        $current = $story;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($current['title']) ?> | LokaJawa</title>
    <meta name="description" content="Website profil cerita rakyat dan budaya Jawa dalam Bahasa Indonesia dan Bahasa Jawa.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="navbar">
    <a class="brand" href="index.php">
        <span class="brand-mark">LJ</span>
        <span>Loka<span>Jawa</span></span>
    </a>

    <nav class="nav-links" id="navLinks">
        <a href="#beranda">Beranda</a>
        <a href="#cerita">Cerita</a>
        <a href="#tentang">Tentang</a>
    </nav>

    <button class="menu-toggle" onclick="toggleMenu()" aria-label="Buka menu">☰</button>
</header>

<main>
    <section class="hero" id="beranda">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="eyebrow">NARASI BUDAYA JAWA</span>
            <h1>Menjaga cerita,<br><em>merawat budaya.</em></h1>
            <p>Jelajahi cerita rakyat Nusantara melalui narasi Bahasa Indonesia dan Bahasa Jawa dalam satu pengalaman sederhana.</p>
            <a class="btn btn-primary" href="#cerita">Jelajahi Cerita <span>→</span></a>
        </div>
        <div class="hero-badge">
            <strong>03</strong>
            <span>Cerita tersedia</span>
        </div>
    </section>

    <section class="intro section">
        <div>
            <span class="section-label">01 — TENTANG WEBSITE</span>
            <h2>Cerita rakyat dalam<br><em>dua bahasa.</em></h2>
        </div>
        <div class="intro-copy">
            <p>LokaJawa adalah website edukasi sederhana yang memperkenalkan cerita rakyat dengan pendekatan antarmuka modern. Setiap cerita tersedia dalam Bahasa Indonesia dan Bahasa Jawa agar generasi muda dapat mengenal kembali kekayaan budaya daerah.</p>
        </div>
    </section>

    <section class="story-section section" id="cerita">
        <div class="section-heading">
            <div>
                <span class="section-label">02 — PILIH CERITA</span>
                <h2>Legenda Nusantara</h2>
            </div>
            <p>Pilih salah satu cerita untuk melihat narasi dan versi Bahasa Jawa.</p>
        </div>

        <div class="story-grid">
            <?php foreach ($stories as $story): ?>
                <a class="story-card <?= $story['id'] === $current['id'] ? 'active' : '' ?>"
                   href="?cerita=<?= urlencode($story['id']) ?>#cerita">
                    <div class="story-image">
                        <img src="<?= htmlspecialchars($story['image']) ?>" alt="<?= htmlspecialchars($story['title']) ?>">
                        <span><?= htmlspecialchars($story['category']) ?></span>
                    </div>
                    <div class="story-info">
                        <small><?= htmlspecialchars($story['origin']) ?></small>
                        <h3><?= htmlspecialchars($story['title']) ?></h3>
                        <span class="read-more">Baca cerita →</span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="reading section">
        <div class="reading-top">
            <div>
                <span class="section-label">03 — BACA CERITA</span>
                <h2><?= htmlspecialchars($current['title']) ?></h2>
                <p class="origin"><?= htmlspecialchars($current['origin']) ?> · <?= htmlspecialchars($current['category']) ?></p>
            </div>
            <div class="language-switch">
                <button class="lang-btn active" data-lang="id" onclick="switchLanguage('id')">Indonesia</button>
                <button class="lang-btn" data-lang="jv" onclick="switchLanguage('jv')">Basa Jawa</button>
            </div>
        </div>

        <div class="reading-card">
            <div class="reading-image">
                <img src="<?= htmlspecialchars($current['image']) ?>" alt="<?= htmlspecialchars($current['title']) ?>">
                <div class="quote">“Saben cariyos nggawa piwulang.”</div>
            </div>

            <article class="story-text">
                <div id="text-id" class="language-text active-text">
                    <span class="text-label">BAHASA INDONESIA</span>
                    <p><?= htmlspecialchars($current['id_text']) ?></p>
                    <p class="moral"><strong>Nilai yang dapat dipelajari:</strong> keberanian, kecerdikan, dan menjaga warisan budaya.</p>
                </div>

                <div id="text-jv" class="language-text">
                    <span class="text-label">BAHASA JAWA — KRAMA</span>
                    <p><?= htmlspecialchars($current['jv_text']) ?></p>
                    <p class="moral"><strong>Piwulang:</strong> kawani, kapinteran, saha nguri-uri kabudayan Jawi.</p>
                </div>
            </article>
        </div>
    </section>

    <section class="feature section" id="tentang">
        <span class="section-label">04 — FITUR</span>
        <h2>Sederhana untuk digunakan,<br><em>bermakna untuk dipelajari.</em></h2>
        <div class="feature-grid">
            <div class="feature-item">
                <span>01</span>
                <h3>Dwi Bahasa</h3>
                <p>Konten tersedia dalam Bahasa Indonesia dan Bahasa Jawa.</p>
            </div>
            <div class="feature-item">
                <span>02</span>
                <h3>Responsif</h3>
                <p>Tampilan menyesuaikan desktop, tablet, dan smartphone.</p>
            </div>
            <div class="feature-item">
                <span>03</span>
                <h3>PHP Native</h3>
                <p>Dibangun dengan PHP tanpa framework agar mudah dipahami untuk pembelajaran RPL.</p>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="footer-brand">LokaJawa</div>
    <p>Website profil cerita rakyat & budaya Jawa · PHP Native</p>
    <span>© <?= date('Y') ?> LokaJawa</span>
</footer>

<script>
function switchLanguage(lang) {
    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.classList.toggle('active', btn.dataset.lang === lang);
    });

    document.getElementById('text-id').classList.toggle('active-text', lang === 'id');
    document.getElementById('text-jv').classList.toggle('active-text', lang === 'jv');
}

function toggleMenu() {
    document.getElementById('navLinks').classList.toggle('show');
}

document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        document.getElementById('navLinks').classList.remove('show');
    });
});
</script>
</body>
</html>
