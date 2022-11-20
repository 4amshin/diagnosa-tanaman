<?php
    include('pages/koneksi.php');
    
    if(isset($_SESSION['login_user'])){
    header("location: about.php");
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bawang</title>
        <link rel="stylesheet" href="assets/css/bawang.css?v=<?php echo time(); ?>">
    </head>

    <body>

        <!-- ============================= HEADER ============================= -->
        <header id="header" class="header">
            <a href="landing_page.php" class="logo">
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

        <div class="main">
            <div class="title">
                <h1>
                    Bawang
                </h1>
                <hr class="line">
            </div>

            <div class="kumpulan_gejala">

                <div class="gejala">
                    <div class="gejala__title">
                        <h3>Akar</h3>
                        <hr class="sub__line">
                    </div>

                    <div class="gejala__list">
                        <?php
                            $tampil="select * from gejala where daerah='akar' and jenistanaman= 'bawang'";
                            $query=mysqli_query($konek_db,$tampil);
                            while($hasil=mysqli_fetch_array($query)){
                                echo "
                                <div class='checkbox-circle2'>
                                    <input type='checkbox' id='".$hasil['idgejala']."' name='gejala[]'>
                                    <label for='".$hasil['idgejala']."'>".$hasil['gejala']."</label>
                                </div>";
                            }
                        ?>
                    </div>
                </div>

                <div class="gejala">
                    <div class="gejala__title1">
                        <h3>Batang</h3>
                        <hr class="sub__line1">
                    </div>

                    <div class="gejala__list1">
                        <?php
                            $tampil="select * from gejala where daerah='batang' and jenistanaman= 'bawang'";
                            $query=mysqli_query($konek_db,$tampil);
                            while($hasil=mysqli_fetch_array($query)){
                                echo "
                                <div class='checkbox-circle2'>
                                    <input type='checkbox' id='".$hasil['idgejala']."' name='gejala[]'>
                                    <label for='".$hasil['idgejala']."'>".$hasil['gejala']."</label>
                                </div>";
                            }
                        ?>
                    </div>
                </div>

                <div class="gejala">
                    <div class="gejala__title2">
                        <h3>Daun</h3>
                        <hr class="sub__line2">
                    </div>

                    <div class="gejala__list2">
                        <?php
                            $tampil="select * from gejala where daerah='daun' and jenistanaman= 'bawang'";
                            $query=mysqli_query($konek_db,$tampil);
                            while($hasil=mysqli_fetch_array($query)){
                                echo "
                                <div class='checkbox-circle2'>
                                    <input type='checkbox' id='".$hasil['idgejala']."' name='gejala[]'>
                                    <label for='".$hasil['idgejala']."'>".$hasil['gejala']."</label>
                                </div>";
                            }
                        ?>
                    </div>
                </div>

                <div class="gejala">
                    <div class="gejala__title3">
                        <h3>Buah/Umbi</h3>
                        <hr class="sub__line3">
                    </div>

                    <div class="gejala__list3">
                        <?php
                            $tampil="select * from gejala where daerah='Buah/Umbi' and jenistanaman= 'bawang'";
                            $query=mysqli_query($konek_db,$tampil);
                            while($hasil=mysqli_fetch_array($query)){
                                echo "
                                <div class='checkbox-circle2'>
                                    <input type='checkbox' id='".$hasil['idgejala']."' name='gejala[]'>
                                    <label for='".$hasil['idgejala']."'>".$hasil['gejala']."</label>
                                </div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>