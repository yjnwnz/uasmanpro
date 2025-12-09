<?php include 'header.php'; ?>

<style>
    /* ===== VARIABLES (Sama persis dengan sebelumnya) ===== */
    :root {
        --primary-blue: #2D9CDB;
        --secondary-yellow: #FFC107;
        --dark-text: #333333;
        --light-gray: #f8f9fa;
        --white: #ffffff;
        --shadow-light: 0 5px 15px rgba(0, 0, 0, 0.05);
        --shadow-medium: 0 10px 30px rgba(0, 0, 0, 0.1);
        --transition: all 0.3s ease;
    }

    /* Layout Dasar */
    body {
        background-color: var(--light-gray);
        font-family: sans-serif;
        color: var(--dark-text);
    }

    .main-section {
        padding: 80px 0;
        max-width: 1200px;
        margin: 0 auto;
        padding-left: 20px;
        padding-right: 20px;
    }

    /* Headings */
    .section-header {
        text-align: left;
        margin-bottom: 40px;
    }

    .section-title {
        font-size: 2.5rem;
        color: var(--primary-blue);
        margin-bottom: 15px;
        font-weight: 700;
        position: relative;
        display: inline-block;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 80px;
        height: 4px;
        background: var(--secondary-yellow);
        border-radius: 2px;
    }

    h3 {
        font-size: 1.5rem;
        color: var(--dark-text);
        margin-bottom: 20px;
        font-weight: 600;
        border-left: 5px solid var(--secondary-yellow);
        padding-left: 15px;
    }

    /* ===== JURNAL STYLE (DIMODIFIKASI UNTUK POSTER) ===== */
    .journal-list {
        display: flex;
        flex-direction: column;
        gap: 30px; /* Jarak antar kartu diperbesar sedikit */
        margin-bottom: 60px;
    }

    .journal-item {
        background: var(--white);
        padding: 25px;
        border-radius: 12px;
        box-shadow: var(--shadow-light);
        transition: var(--transition);
        border-left: 5px solid var(--primary-blue);
        /* MODIFIKASI: Mengubah arah flex menjadi kolom agar gambar ada di bawah */
        display: flex;
        flex-direction: column; 
        align-items: stretch; /* Memastikan anak elemen melebar penuh */
    }

    .journal-item:hover {
        transform: translateY(-5px); /* Efek hover sedikit naik */
        box-shadow: var(--shadow-medium);
    }

    /* BARU: Wrapper untuk bagian atas (Judul & Tombol) agar tetap kiri-kanan */
    .journal-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 20px; /* Jarak antara header dan poster */
        flex-wrap: wrap;
        gap: 15px;
    }

    .journal-info strong {
        font-size: 1.1rem;
        display: block;
        margin-bottom: 5px;
        color: var(--dark-text);
        line-height: 1.4;
    }

    .journal-info small {
        color: #666;
        font-size: 0.9rem;
    }

    /* BARU: Style untuk gambar poster */
    .journal-poster-img {
        width: 100%;
        height: auto;
        max-height: 500px; /* Batasi tinggi maksimal agar tidak terlalu panjang */
        object-fit: contain; /* Agar seluruh poster terlihat jelas */
        border-radius: 8px;
        border: 1px solid #eee; /* Bingkai tipis */
        background-color: #f9f9f9; /* Placeholder background */
    }

    .btn-download {
        background: rgba(45, 156, 219, 0.1);
        color: var(--primary-blue);
        padding: 8px 20px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        transition: var(--transition);
        white-space: nowrap; /* Agar tombol tidak terpotong */
    }

    .btn-download:hover {
        background: var(--primary-blue);
        color: var(--white);
    }

    /* ===== Project Grid Style (Tetap sama) ===== */
    .project-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .project-card {
        background: var(--white);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow-light);
        transition: var(--transition);
    }

    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-medium);
    }

    .project-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .project-body {
        padding: 25px;
    }

    .project-body h4 {
        color: var(--primary-blue);
        font-size: 1.2rem;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .project-body p {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
    }
</style>

<section class="main-section">
    <div class="section-header">
        <h2 class="section-title">Akademik & Karya Mahasiswa</h2>
        <p style="margin-top: 20px; color: #666;">Jejak rekam penelitian dan prestasi civitas akademika SIEGA SCU.</p>
    </div>

    <div>
        <h3>Publikasi & Riset Terkini</h3>
        
        <div class="journal-list">
            <div class="journal-item">
                <div class="journal-header">
                    <div class="journal-info">
                        <strong>Pembuatan Game Buang Sampah Dengan Basis Arduino</strong>
                        <small>Topik: Arduino, IoT</small>
                    </div>
                    <a href="#" class="btn-download">Lihat Poster</a>
                </div>
                <img src="SkripsiSampah.png" alt="Poster Skripsi Pembuatan Game Buang Sampah Dengan Basis Arduino" class="journal-poster-img">
            </div>

            <div class="journal-item">
                <div class="journal-header">
                    <div class="journal-info">
                        <strong>Edukasi Vaksinasi Menggunakan Game</strong>
                        <small>Topik: Gamifikasi, Vaksin</small>
                    </div>
                    <a href="#" class="btn-download">Lihat Poster</a>
                </div>
                <img src="EdukasiVaksin.png" alt="Edukasi Vaksinasi Menggunakan Game" class="journal-poster-img">
            </div>

            <div class="journal-item">
                <div class="journal-header">
                    <div class="journal-info">
                        <strong>Implementasi Transaksi E-Commerce Batik Lasem melalui Metaverse</strong>
                        <small>Topik: IT Audit, Governance, Metaverse</small>
                    </div>
                    <a href="#" class="btn-download">Lihat Poster</a>
                </div>
                <img src="BatikLasem.png" alt="Poster Skripsi Implementasi Transaksi E-Commerce Batik Lasem melalui Metaverse" class="journal-poster-img">
            </div>

            <div class="journal-item">
                <div class="journal-header">
                    <div class="journal-info">TeBoo.png
                        <strong>Efektivitas Digital Marketing Melalui Sosial Media (Instagram, Tiktok, Facebook)Terhadap Te Boo Boo</strong>
                        <small>Topik: Digital Marketing, Social Media, Customer Engagement</small>
                    </div>
                    <a href="#" class="btn-download">Lihat Poster</a>
                </div>
                 <img src="TeBoo.png" alt="Poster Skripsi Efektivitas Digital Marketing Melalui Sosial Media Terhadap Te Boo Boo" class="journal-poster-img">
            </div>

            <div class="journal-item">
                <div class="journal-header">
                    <div class="journal-info">
                        <strong>Game Augmented Reality Virus Shooter Untuk Edukasi Kesehatan Masyarakat Indonesia</strong>
                        <small>Topik: Augmented Reality, AR, Game Edukasi, Health Education</small>
                    </div>
                    <a href="#" class="btn-download">Lihat Poster</a>
                </div>
                 <img src="GameAR.png" alt="Poster Skripsi Game Augmented Reality Virus Shooter Untuk Edukasi Kesehatan Masyarakat Indonesia" class="journal-poster-img">
            </div>

            <div class="journal-item">
                <div class="journal-header">
                    <div class="journal-info">
                        <strong>Pengembangan Web Edukasi dan Jual Beli Merchandise KPOP yang Terintegrasi Dengan Payment Marketplace</strong>
                        <small>Topik: E-Commerce, Payment, Web Marketplace</small>
                    </div>
                    <a href="#" class="btn-download">Lihat Poster</a>
                </div>
                 <img src="WebKPOP.png" alt="Poster Skripsi Pengembangan Web Edukasi dan Jual Beli Merchandise KPOP yang Terintegrasi Dengan Payment Marketplace" class="journal-poster-img">
            </div>

            <div class="journal-item">
                <div class="journal-header">
                    <div class="journal-info">
                        <strong>Perancangan SIA Pada TB. Muara Mas Menggunakan Metode RAD</strong>
                        <small>Topik: SIA, RAD</small>
                    </div>
                    <a href="#" class="btn-download">Lihat Poster</a>
                </div>
                 <img src="SIARAD.png" alt="Poster Skripsi Perancangan SIA Pada TB. Muara Mas Menggunakan Metode RAD" class="journal-poster-img">
            </div>

            <div class="journal-item">
                <div class="journal-header">
                    <div class="journal-info">
                        <strong>Rancang Bangun Sistem Validasi Mahasiswa Calon Penerima Beasiswa Berdasarkan Rekam jejak</strong>
                        <small>Topik: Data Science, Machine Learning</small>
                    </div>
                    <a href="#" class="btn-download">Lihat Poster</a>
                </div>
                 <img src="beasiswa.png" alt="Poster Skripsi Rancang Bangun Sistem Validasi Mahasiswa Calon Penerima Beasiswa Berdasarkan Rekam jejak" class="journal-poster-img">
            </div>

            <div class="journal-item">
                <div class="journal-header">
                    <div class="journal-info">
                        <strong>Rancangan Denah Berbasis Website untuk Gedung Henricus Constant dan Mikael Unika Soegijapranata</strong>
                        <small>Web Development, Arsitektur Informasi</small>
                    </div>
                    <a href="#" class="btn-download">Lihat Poster</a>
                </div>
                 <img src="hcmikael.png" alt="Poster Skripsi Rancangan Denah Berbasis Website untuk Gedung Henricus Constant dan Mikael Unika Soegijapranata" class="journal-poster-img">
            </div>

            <div class="journal-item">
                <div class="journal-header">
                    <div class="journal-info">
                        <strong>Pengembangan AUgmented Reality di Museum Batik Pekalongan</strong>
                        <small>Topik: AUgmented Reality, AR, Digital Museum, Edukasi</small>
                    </div>
                    <a href="#" class="btn-download">Lihat Poster</a>
                </div>
                 <img src="ARbatik.png" alt="Poster Skripsi Pengembangan AUgmented Reality di Museum Batik Pekalongan" class="journal-poster-img">
            </div>
        </div>
    </div>

    <div>
        <h3>Galeri Project dan Prestasi Mahasiswa</h3>
        <p style="margin-bottom: 30px; color: #666;">Inovasi nyata dari tugas akhir, kompetisi, dan pengabdian masyarakat:</p>
        
        <div class="project-grid">
            <div class="project-card">
                <img src="autobox.png" alt="SIEGAAUTOBOX" class="project-img">
                <div class="project-body">
                    <h4>SIEGAAUTOBOX</h4>
                    <p>Loker kantin kejujuran berbasis IoT dengan sistem pembayaran QRIS otomatis.</p>
                </div>
            </div>
            
            <div class="project-card">
                <img src="siegametaverse.png" alt="Game Sahurak" class="project-img">
                <div class="project-body">
                    <h4>SIEGA Metaverse</h4>
                    <p>Tim Kedaireka Unika Soegijapranata luncurkan metaverse ruang pamer Batik Lasem, dengan platform metaversebatik.com</p>
                </div>
            </div>
            
            <div class="project-card">
                <img src="bukusiega.png" alt="7 Buku Digital" class="project-img">
                <div class="project-body">
                    <h4>7 Buku Digital Ber-ISBN</h4>
                    <p>Karya literasi mahasiswa SIEGA 2023 & 2024 yang terbit resmi di Google Play Books.</p>
                </div>
            </div>

            <div class="project-card">
                <img src="codh.png" alt="SAVIRA" class="project-img">
                <div class="project-body">
                    <h4>The Third Conference on Digital Humanities (CoDH, 2024)</h4>
                    <p>Mahasiswa Program Studi Sistem Informasi SCU turut berpartisipasi dalam The Third Conference on Digital Humanities (CoDH, 2024) pada 30 Oktober - 1 November 2024</p>
                </div>
            </div>

            <div class="project-card">
                <img src="soty.png" alt="LUNPIA App" class="project-img">
                <div class="project-body">
                    <h4>1st Winner SOTY 2025</h4>
                    <p>Mahasiswa Sistem Informasi "Elvens Micquel Christanto" Berhasil Menjadi Juara 1 SOTY 2025</p>
                </div>
            </div>

            <div class="project-card">
                <img src="komdigi.png" alt="VR Game" class="project-img">
                <div class="project-body">
                    <h4>Juara 1 Best Sales Performa</h4>
                    <p>Tim SIEGA SCU Meraih Juara 1 Best Sales Performa</p>
                </div>
            </div>

            <div class="project-card">
                <img src="konferensi.png" alt="Hologram Project" class="project-img">
                <div class="project-body">
                    <h4>Konferensi Internasional InCIT</h4>
                    <p>Dosen dan mahasiswi SIEGA mempresentasikan penelitian di konferensi International Centre for Industrial Transformation (InCIT) di Jepang dan Thailand.</p>
                </div>
            </div>

            <div class="project-card">
                <img src="gsa.png" alt="Business Dashboard" class="project-img">
                <div class="project-body">
                    <h4>Google Student Ambassador 2025</h4>
                    <p>Dua mahasiswa SIEGA terpilih sebagai Google Student Ambassador 2025 Dari 12.000+ pendaftar se-Indonesia.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>