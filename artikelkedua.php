<?php
$judul_berita = "3 Diduga Calon Trinee Baru RR STUDIO Entertaintment, Apakah Calon Group?";
$url_gambar = "images/inidua.png"; 

$alt_gambar = "Ilustrasi";
$paragraf_1 = "Bocor, diduga tiga anak muda yang terlihat keluar masuk dalam gedung agensi RR STUDIO Entertainment, dan fans tak sengaja menemukan 
			foto mereka bertiga dalam sebuah social media yang kosong, beragam spekulasi para fans utamanya fans Rio Rinaldi yang telah debut lebih awal, 
			mereka menganggap bahwa Tiga pemuda ini diduga adalah trainee untuk debut grup di RR STUDIO Entertainment.";
$paragraf_2 = "Spekulasi ini langsung memicu 'pekerjaan detektif' di kalangan penggemar. Akun media sosial misterius itu, meski awalnya kosong, 
			kini menjadi pusat perhatian. Setiap detail kecil dari foto yang bocor—mulai dari gaya pakaian, siluet wajah yang samar, hingga item 
			yang mereka kenakan—dianalisis secara mendalam. Forum diskusi online dipenuhi teori tentang kemungkinan posisi mereka, apakah itu vokalis, 
			rapper, atau dancer, serta membandingkan aura mereka dengan standar tinggi yang telah ditetapkan oleh senior mereka, Rio Rinaldi.";
$paragraf_3 = "Hingga saat ini, pihak RR STUDIO Entertainment sendiri masih memilih bungkam, tidak memberikan konfirmasi ataupun bantahan. Sikap diam agensi 
			ini justru semakin memperkuat dugaan para penggemar, yang menganggap ini adalah taktik 'pra-debut' yang umum dilakukan. Kehadiran grup baru ini, 
			jika terkonfirmasi, akan menandakan langkah ekspansi besar bagi agensi setelah kesuksesan debut solo Rio Rinaldi, dan kini semua mata tertuju 
			pada pengumuman resmi yang dinilai hanya tinggal menunggu waktu.";
$link_lapor = "https://lnkfi.re/RioRinaldi Kesalahan Informasi: " . urlencode($judul_berita);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($judul_berita); ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <div class="article-wrapper">
        
        <img src="<?php echo htmlspecialchars($url_gambar); ?>" 
             alt="<?php echo htmlspecialchars($alt_gambar); ?>" 
             class="main-image">
        
        <div class="article-content">
            
            <h1 class="article-title"><?php echo htmlspecialchars($judul_berita); ?></h1>
            
            <div class="article-body">
                <p><?php echo htmlspecialchars($paragraf_1); ?></p>
                <p><?php echo htmlspecialchars($paragraf_2); ?></p>
				<p><?php echo htmlspecialchars($paragraf_3); ?></p>
            </div>
            
            <hr class="separator">
            
            <a href="<?php echo htmlspecialchars($link_lapor); ?>" class="report-button">
                Laporkan Kesalahan Informasi
            </a>
            
        </div>
        
    </div>

</body>
</html>