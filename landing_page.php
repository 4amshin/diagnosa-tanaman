<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Website</title>
    <link href="assets/css/landing_style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>

    <section style="background-image: url('assets/img/bg.jpg');">
        <input type="checkbox" id="check">
        <header>
            <a href="#" class="logo">
                <img src="assets/img/logo3.png" alt="">
            </a>
            <div class="navigation">
                <a href="#">Beranda</a>
                <a href="#">About</a>
                <a href="#">Info</a>
                <a href="#">Layanan</a>
                <a href="#">Kontak</a>
            </div>
            <label for="check">
        <i class="fas fa-bars menu-btn"></i>
        <i class="fas fa-times close-btn"></i>
        </label>
        </header>
        <div class="content">
            <div class="info">
                <h2>Diagnosa <br><span>Penyakit Tanaman</span></h2>
                <p>
                    Website Sistem Pakar diagnosa penyakit pada Tanaman Bawang Merah & Cabai dengan menggunakan metode Forward Chaining.
                </p>
                <a href="list_penyakit.php" class="info-btn">Mulai Diagnosa</a>
            </div>
        </div>
        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </section>

</body>

</html>