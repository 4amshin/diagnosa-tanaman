<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/landing_style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Landing Website</title>
</head>

<body>
    <!-- ============================= HEADER ============================= -->
    <header id="header" class="header">
        <a href="landing_page.php" class="brand">
            <img src="assets/img/logow.png">
        </a>
        <div class="menu">
            <a href="landing_page.php">Beranda</a>
            <a href="list_penyakit.php">Diagnosa</a>
            <a href="#">Info</a>
            <a href="#">Layanan</a>
            <a href="#">Kontak</a>
        </div>
    </header>

    <!-- ============================= MAIN BODY ============================= -->
    <section style="background-image: url('assets/img/bg_new.jpg')">
        <input type="checkbox" id="check">

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