<?php
require 'function.php';
$blog = query("SELECT * FROM blog");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="styleblog.css">
</head>
<body>
    <header>
        <nav>
            <h1 class="moving-text">
                 Portofolio
            </h1>
            <ul>
                <li><a href="Gallery.html">Gallery</a></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="Contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <h2 class="blog">ARTIKEL</h2>

<div>
<table>
    <?php foreach ( $blog as $y ): ?>
    <tr>
        <td>
            <hr>
            <h1 class="judul"><?= $y["judul"]; ?></h1>
            <hr>
            <p class="paragraph">
            <?= $y["paragraf"]; ?>
            </p>
            <h1 class="Kesimpulan">Kesimpulan</h1>
            <p>
            <?= $y["kesimpulan"]; ?> <br><br>
            <a class="hyperlink" href=<?= $y["hyperlink"]; ?>>silakan baca di sini</a>
            </p>

        </td>
    </tr>
    <?php endforeach; ?>
    
 <table>
    <tr>
        <td>
            <hr>
            <h1 class="judul">Kecanduan Menonton Drama Korea: Fenomena Budaya Global</h1>
            <hr>
            Drama Korea telah menjadi bagian tak terpisahkan dari kehidupan sehari-hari bagi jutaan orang di seluruh dunia. Fenomena ini tidak hanya terjadi di Korea Selatan, negara asalnya, tetapi juga telah menjadi bagian penting dari budaya populer global. 
            Alasannya, 50% responden suka nonton drakor karena inspirasi busana yang menarik dan drama korea diniliai berhubungan dengan kehidupan sehari-hari. Ada juga 48% responden yang suka menonton drama korea karena budaya Korea yang dinilai menarik. 
            Daya tarik utama dari drama Korea adalah produksi berkualitas tinggi dan keindahan visual yang disajikan dalam setiap episode. Drama Korea sering kali menawarkan pengalaman visual yang memukau bagi penontonnya.
            <br><br>
            Drama Korea dikenal karena memiliki cerita yang kuat dan emosional yang dapat merengkuh hati penonton. Dari drama romantis yang mengharukan hingga cerita yang penuh intrik dan ketegangan, setiap drama Korea memiliki daya tariknya sendiri yang dapat memikat pemirsa dan membuat mereka terhubung secara emosional dengan karakter dan ceritanya. 
            Fenomena kecanduan menonton drama Korea juga menciptakan komunitas yang kuat di antara para penggemar. Melalui media sosial, forum diskusi, dan acara penggemar, para penggemar drama Korea dapat berinteraksi, berbagi pengalaman, dan mengekspresikan cinta mereka terhadap drama dan para pemainnya.
            <br><br>
            Meskipun menonton drama Korea dapat menjadi hiburan yang menyenangkan, ada juga risiko kecanduan yang perlu dipertimbangkan. Beberapa orang mungkin merasa sulit untuk membatasi waktu mereka dalam menonton drama Korea, yang dapat memengaruhi keseimbangan hidup mereka dan kesehatan mental mereka.
            </p>
            <h1>Kesimpulan</h1>
            <p>
            Dapat disimpulkan bahwa kecanduan menonton drama Korea telah menjadi fenomena budaya yang signifikan di era modern. Drama Korea menawarkan kombinasi yang menarik dari keindahan visual, cerita yang menghibur, dan keterlibatan dengan budaya Korea yang dapat merengkuh hati penonton di seluruh dunia. 
            Namun, perlu diingat bahwa kecanduan menonton drama Korea juga memiliki dampak negatif, termasuk peningkatan risiko kesehatan mental dan penurunan interaksi sosial yang langsung. Oleh karena itu, penting bagi kita untuk mengelola konsumsi media dengan bijak, menemukan keseimbangan antara kehidupan online dan offline, dan selalu memprioritaskan kesehatan mental dan kesejahteraan kita secara keseluruhan.
            Untuk informasi lebih lanjut. <br><br>
            <a class="hyperlink" href=https://databoks.katadata.co.id/datapublish/2022/08/30/mengapa-orang-indonesia-suka-nonton-drakor-ini-alasannya>silakan baca di sini</a>     
          </div>
        
        </td>
    </tr>

    <tr>
        <td>
            <hr>
            <h1 class="judul">Dampak Kecanduan Game online pada Anak Remaja</h1>
            <hr>
            Dalam era digital yang semakin maju, game online telah menjadi salah satu hiburan utama bagi anak remaja di seluruh dunia. 
            Meskipun game online dapat menjadi sarana rekreasi yang menyenangkan dan bahkan dapat meningkatkan keterampilan kognitif dan sosial, kecanduan game online telah menjadi masalah serius yang mempengaruhi kesejahteraan mental dan fisik anak remaja. 
            Penyebab kecanduan game adalah seseorang merasa senang kemudian otak mengailkan dopamine, hormon yang membuat bahagia. Dalam kondisi normal hal tersebut akan membuat kecanduan.
            <br><br>
            Kecanduan game online dapat merusak hubungan interpersonal anak remaja dengan keluarga dan teman-teman. 
            Mereka mungkin menjadi tidak responsif terhadap interaksi sosial di dunia nyata, lebih memilih berinteraksi dengan pemain game online daripada dengan orang-orang di sekitar mereka.Anak remaja yang kecanduan game online cenderung mengalami penurunan kinerja akademik karena menghabiskan waktu yang berlebihan untuk bermain game daripada belajar. 
            Ini dapat menghambat perkembangan mereka dan menghambat kemungkinan kesuksesan di masa depan.
            Kecanduan game online sering kali menyebabkan rasa ketergantungan yang kuat pada permainan tersebut. 
            Anak remaja mungkin merasa sulit untuk mengontrol diri dan berhenti bermain meskipun menyadari bahwa itu tidak sehat bagi mereka.
            </P>
            <h1>Kesimpulan</h1>
            <p>
            Kecanduan game online merupakan masalah serius yang mempengaruhi kesejahteraan anak remaja secara keseluruhan. 
            Penting bagi orang tua dan pengasuh untuk memantau dan mengatur penggunaan game online anak-anak mereka, serta memberikan dukungan dan bantuan jika diperlukan untuk mengatasi kecanduan tersebut. 
            Selain itu, penting bagi anak remaja untuk menyadari risiko kecanduan game online dan belajar mengelola waktu mereka dengan bijak agar dapat tetap sehat secara fisik dan mental.
            </p>
            Untuk informasi lebih lanjut. <br><br>
           <a class="hyperlink" href=https://yankes.kemkes.go.id/view_artikel/1359/dampak-buruk-kecanduan-game-pada-anak-usia-remaja>silakan baca di sini</a>     
        </td>
    </tr>
</table>
</div>
<footer>
    <p>Hak Cipta &copy; 2024 Yuliet Sompotan</p>
   </footer>
   <script src="scriptblog.js"></script>
</body>
</html>
