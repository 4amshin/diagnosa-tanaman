<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/list_penyakit.css" rel="stylesheet">
    <title>Jenis Tanaman</title>
</head>

<body>
    <!-- ============================= HEADER ============================= -->
    <header id="header" class="header">
        <a href="landing_page.php" class="brand">
            <img src="assets/img/logow.png">
        </a>
        <div class="menu">
            <a href="landing_page.php">Beranda</a>
            <a href="#main">Diagnosa</a>
            <a href="#">Info</a>
            <a href="#">Layanan</a>
            <a href="#">Kontak</a>
        </div>
    </header>

    <!-- ============================= MAIN BODY ============================= -->
    <section id="main" class="main">
        <div class="card">
            <div class="title">
                <h1>Pilih Jenis Tanaman</h1>
            </div>
            <div class="line"></div>
            <div class="card__container">
                <a href="pages/diagnosa.php">
                    <article class="card_article card__first">
                        <div class="card__data">
                            <img src="assets/img/onion.png" alt="card image" class="card__img">
                            <h1 class="card__title">Bawang</h1>
                            <p class="card__description">
                                Jenis Tanaman Bawang
                            </p>
                        </div>

                        <div class="card__shapes">
                            <span class="card__shape"></span>
                            <span class="card__shape"></span>
                            <span class="card__shape"></span>
                            <span class="card__shape"></span>
                            <span class="card__shape"></span>
                            <span class="card__shape"></span>
                            <span class="card__shape"></span>
                            <span class="card__shape"></span>
                        </div>
                    </article>
                </a>

                <a href="pages/diagnosa.php">
                    <article class="card_article card__second">
                        <div class="card__data">
                            <img src="assets/img/cili.png" alt="card image" class="card__img">
                            <h1 class="card__title">Cabai</h1>
                            <p class="card__description">
                                Jenis Tanaman Cabai
                            </p>
                        </div>

                        <div class="card__shapes">
                            <span class="card__shape"></span>
                            <span class="card__shape"></span>
                            <span class="card__shape"></span>
                            <span class="card__shape"></span>
                            <span class="card__shape"></span>
                            <span class="card__shape"></span>
                            <span class="card__shape"></span>
                            <span class="card__shape"></span>
                        </div>
                    </article>
                </a>

            </div>
        </div>
    </section>

</body>

</html>