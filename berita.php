<?php include 'header.php'; ?>

<style>
    /* Container Utama */
    .container {
        margin-top: 40px;
        max-width: 1200px; /* Batas lebar agar tidak terlalu melebar di layar besar */
        margin-left: auto;
        margin-right: auto;
        padding: 0 20px;
    }

    .section-title {
        font-size: 2rem;
        color: #333;
        margin-bottom: 30px;
        border-left: 5px solid #ffde21;
        padding-left: 15px;
    }

    /* Style Kartu Berita */
    .news-card {
        display: flex;              /* Membuat layout menyamping */
        align-items: stretch;       /* KUNCI: Memaksa tinggi gambar & teks sama rata */
        background: white;
        margin-bottom: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        overflow: hidden;           /* Agar gambar tidak keluar dari radius */
        transition: transform 0.3s ease;
    }

    .news-card:hover {
        transform: translateY(-5px); /* Efek naik sedikit saat di-hover */
    }

    /* Pengaturan Gambar */
    .news-img-wrapper {
        flex: 0 0 35%;              /* Lebar gambar fix 35% dari kartu */
        min-width: 250px;           /* Batas minimal lebar gambar */
        position: relative;
    }

    .news-img {
        width: 100%;
        height: 100%;               /* Tinggi mengikuti container (sama dengan teks) */
        object-fit: cover;          /* Gambar dipotong rapi agar tidak gepeng */
        display: block;
    }

    /* Pengaturan Konten Teks */
    .news-content {
        padding: 25px;
        flex: 1;                    /* Mengambil sisa ruang */
        display: flex;
        flex-direction: column;
        justify-content: center;    /* Teks berada di tengah secara vertikal */
    }

    /* Label Kategori */
    .badge {
        display: inline-block;
        padding: 4px 12px;
        font-size: 12px;
        border-radius: 20px;
        font-weight: bold;
        margin-bottom: 10px;
        width: fit-content;
    }

    .badge-yellow {
        background: #ffde21;
        color: #333;
    }

    .badge-blue {
        background: #90d6ff;
        color: white;
    }

    .news-title {
        margin: 0 0 10px 0;
        font-size: 1.5rem;
        color: #333;
        line-height: 1.3;
    }

    .news-desc {
        color: #666;
        margin-bottom: 15px;
        line-height: 1.6;
        display: -webkit-box;
        -webkit-line-clamp: 3;      /* Membatasi teks maksimal 3 baris */
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .news-date {
        color: #2D9CDB;
        font-weight: bold;
        text-decoration: none;
        font-size: 0.9rem;
        margin-top: auto;           /* Memaksa tanggal ke bagian paling bawah */
    }
</style>

<div class="container">
    <h2 class="section-title">Berita Terkini</h2>

    <div class="news-card">
        <div class="news-img-wrapper">
            <img src="IAS.png" alt="Lomba UI/UX" class="news-img">
        </div>
        <div class="news-content">
            <span class="badge badge-yellow">Informasi</span>
            <h3 class="news-title">Program Dual Degree SCU: Intelligent Accounting System</h3>
            <p class="news-desc">
                Mau jago akuntansi bisnis, software accounting, dan AI biar dilirik banyak perusahaan? Gabung Intelligent Accounting System sekarang!</p>
            <a href="#" class="news-date">2 Desember 2025</a>
        </div>
    </div>

    <div class="news-card">
        <div class="news-img-wrapper">
            <img src="komdigi1.png" alt="Juara 1 Sales Performa" class="news-img">
        </div>
        <div class="news-content">
            <span class="badge badge-yellow">Akademik</span>
            <h3 class="news-title">Tim SIEGA SCU Meraih Juara 1 Best Sales Performa</h3>
            <p class="news-desc">
                Tim SIEGA meraih prestasi Juara 1 Best Sales Performa di Kompetisi Digital Talent War 2025 yang diselenggarakan BPSDMP Komdigi Yogyakarta.</p>
            <a href="#" class="news-date">21 November 2025</a>
        </div>
    </div>

    <div class="news-card">
        <div class="news-img-wrapper">
            <img src="jcc.png" alt="Kuliah Umum AI" class="news-img">
        </div>
        <div class="news-content">
            <span class="badge badge-blue">Event</span>
            <h3 class="news-title">Peresmian JCC SCU</h3>
            <p class="news-desc">
                Junior Chamber International (JCI) Junior Chapter SCU telah diresmikan! Organisasi ini menjadi wadah pengembangan diri, kepemimpinan dan wirausaha.
            </p>
            <a href="#" class="news-date">25 Oktober 2025</a>
        </div>
    </div>

    <div class="news-card">
        <div class="news-img-wrapper">
            <img src="bbcc.png" alt="Kuliah Umum AI" class="news-img">
        </div>
        <div class="news-content">
            <span class="badge badge-blue">Event</span>
            <h3 class="news-title">BBCC 2025</h3>
            <p class="news-desc">
                BBCC menjadi awal cerita baru bagi Mahasiswa Baru SIEGA 2025, tempat tawa, pertemanan, dan kenangan terbentuk. Selamat datang di keluarga besar SIEGA!
            </p>
            <a href="#" class="news-date">11 Oktober 2025</a>
        </div>
    </div>

    <div class="news-card">
        <div class="news-img-wrapper">
            <img src="yudisium.png" alt="Kuliah Umum AI" class="news-img">
        </div>
        <div class="news-content">
            <span class="badge badge-blue">Event</span>
            <h3 class="news-title">Yudisium Fakultas Ilmu Komputer Periode III 2025</h3>
            <p class="news-desc">
                Hari ini bukanlah akhir, melainkan awal dari perjalanan baru. Selamat kepada para wisudawan/wisudawati SIEGA. Teruslah berkarya dan menginspirasi!
                </p>
            <a href="#" class="news-date">17 September 2025</a>
        </div>
    </div>

    <div class="news-card">
        <div class="news-img-wrapper">
            <img src="kkl.png" alt="Juara 1 Sales Performa" class="news-img">
        </div>
        <div class="news-content">
            <span class="badge badge-yellow">Event</span>
            <h3 class="news-title">SIEGA Industry Visit To Vietnam</h3>
            <p class="news-desc">
                Recap KKL SIEGA UNIKA Soegijapranata di Vietnam! Dari eksplorasi inovasi di FPT Software, kolaborasi bareng di HCMC UTE, sampai lihat kecanggihan teknologi di BOSCH</p>
            <a href="#" class="news-date">18 Agustus 2025</a>
        </div>
    </div>

    <div class="news-card">
        <div class="news-img-wrapper">
            <img src="yoga.png" alt="Juara 1 Sales Performa" class="news-img">
        </div>
        <div class="news-content">
            <span class="badge badge-yellow">Akademik</span>
            <h3 class="news-title">Selamat & sukses untuk Dr. Albertus Dwi Yoga Widiantoro atas gelar Doktor Sistem Informasi – Universitas Diponegoro</h3>
            <p class="news-desc">
                Pencapaian ini membuktikan ketekunan dan semangat belajar tanpa henti. Semoga terus menginspirasi dan membawa dampak positif bagi dunia keilmuan.</p>
            <a href="#" class="news-date">31 Juli 2025</a>
        </div>
    </div>

    <div class="news-card">
        <div class="news-img-wrapper">
            <img src="elpens.png" alt="Juara 1 Sales Performa" class="news-img">
        </div>
        <div class="news-content">
            <span class="badge badge-yellow">Akademik</span>
            <h3 class="news-title">1st Winner Student of The Year 2025</h3>
            <p class="news-desc">
                SIEGA Kembali Menang di SOTY 2025! Selamat kepada Elvens Micquel Christanto dari Sistem Informasi 2023 yang berhasil meraih Juara 1 Student of The Year 2025. </p>
            <a href="#" class="news-date">25 Juni 2025</a>
        </div>
    </div>

    <div class="news-card">
        <div class="news-img-wrapper">
            <img src="fic.png" alt="Kuliah Umum AI" class="news-img">
        </div>
        <div class="news-content">
            <span class="badge badge-blue">Event</span>
            <h3 class="news-title">SIEGA in Ficpact 2025</h3>
            <p class="news-desc">
                Ficpact sukses menghadirkan CEO Indodax dan CEO KLA Computer dalam talkshow eksklusif bertajuk "Literasi Digital: Investasi dan Bisnis Gen-Z".
                </p>
            <a href="#" class="news-date">29 May 2025</a>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>