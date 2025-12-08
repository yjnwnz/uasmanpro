<?php 
include 'header.php'; 
$id = isset($_GET['id']) ? $_GET['id'] : 'si';

// Data Dummy Prodi
if($id == 'si'){
    $judul = "Sistem Informasi";
    $img = "prodi_si.jpg";
    $desc = "Fokus pada pengembangan sistem enterprise, manajemen proyek IT, dan analisis data bisnis. Lulusan dipersiapkan menjadi System Analyst, IT Manager, dan Database Administrator.";
} elseif($id == 'ec'){
    $judul = "E-Commerce";
    $img = "prodi_ec.jpg";
    $desc = "Mempelajari strategi bisnis digital, digital marketing, dan pengembangan platform toko online. Lulusan siap menjadi Digital Strategist dan Technopreneur.";
} elseif($id == 'gt'){
    $judul = "Game Technology";
    $img = "prodi_gt.jpg";
    $desc = "Mendalami pemrograman game engine (Unity/Unreal), desain aset 3D, dan logika AI game. Lulusan menjadi Game Developer dan Technical Artist.";
} else {
    $judul = "Akuntansi Sistem Informasi";
    $img = "prodi_aksi.jpg";
    $desc = "Kombinasi ilmu akuntansi keuangan dengan audit sistem informasi. Sangat dibutuhkan di perusahaan Big 4 Auditor.";
}
?>

<div class="container" style="margin-top: 40px;">
    <h2 class="section-title">Program Studi: <?php echo $judul; ?></h2>
    
    <div style="display: flex; gap: 30px; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 300px;">
            <img src="<?php echo $img; ?>" alt="<?php echo $judul; ?>" style="width: 100%; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
        </div>
        <div style="flex: 1.5;">
            <h3 style="color: #333; margin-bottom: 15px;">Deskripsi Program</h3>
            <p style="font-size: 16px; margin-bottom: 20px;"><?php echo $desc; ?></p>
            
            <h3 style="color: #333; margin-bottom: 10px;">Prospek Karir</h3>
            <ul style="margin-left: 20px;">
                <li>Senior Developer</li>
                <li>IT Consultant</li>
                <li>Project Manager</li>
                <li>Researcher</li>
            </ul>
            <br>
            <a href="info_pendaftaran.php" class="btn">Daftar Prodi Ini</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>