<?php
$judul_berita = "Comeback Rio Rinaldi dengan Single 'sorry if i hate you' Tuai Pujian!";
$url_gambar = "images/inisatu.png"; 

$alt_gambar = "Ilustrasi";
$paragraf_1 = "Setelah debutnya pada bulan Mei lalu, Rio Rinaldi musisi dari RR STUDIO resmi melakukan Comeback pertamanya
			dengan single pertama 'sory if i hate you' yang menjadi penanda berakhirnya era album debut sebelumnya
			dengan album debut'THE CHAPTER : CHASE' atau 4 Bulan 15 Hari setelah debut, Lagu barunya bergenre Rock Alternative
			yang emosional, sukses menghanyutkan hati para penggemar, bahkan masa pre-order single ini mampu menjual 144rb Copy 
			yang jauh lebih meningkat daripada masa pre-order album debutnya, Beragam reaksi komentar positif berdatangan utamanya
			pada kolom komentar Official Music Video yang dirilis pada 10 Oktober 2025 Lalu.";
$paragraf_2 = "pertumbuhan jumlah penggemar dan daya tarik yang signifikan, 2 hari setelah perilisanya agensi RR STUDIO Entertaintment
			mengalami kenaikan harga pasar saham yang sangat signifikan yaitu sekitar 15% dan masih diperkirakan akan terus
			tumbuh di hari hari berikutnya, muncul rumor bahwa RR STUDIO Entertaintment sempat dilirik oleh HYBE Labels beberapa waktu
			lalu, yaitu perusahaan label hiburan besar asal Korea Selatan yang berstatus global yang dikenal sebagai pelopor industri kpop yang menaungi BTS, NewJeans
			LE SSERAFIM, Seventeen, Katseye, TWS, BOYNEXTDOOR, TXT, CORTIS, ENHYPEN, ILLIT dan lain lain.";
$paragraf_3 = "Kabar ini dinyatakan cukup akurat karena adanya kontak masuk dari haid yang diduga masuk ke dalam file putusisasi di kantor agensi RR studio Entertainment, 
			ini bocor akibat staf yang sengaja membocorkannya, kita tunggu saja gimana akhirnya.";
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