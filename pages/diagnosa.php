<?php
include('koneksi.php');
 
if(isset($_SESSION['login_user'])){
header("location: about.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/diagnosa.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Sistem Pakar</title>
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
  <!-- =============================== END OF HEADER =============================== -->


  <!-- =============================== MAIN BODY =============================== -->
  <div class="container-fluid text-center">    
    <div class="row content">
      <!-- ==== SIDEBAR ==== -->
      <div class="col-sm-2 sidenav">
        <p><a href="index.php"><button type="button" class="btn btn-primary btn-block">BERANDA</button></a></p>
        <p><a href="diagnosa.php"><button type="button" class="btn btn-primary btn-block active">DIAGNOSA PENYAKIT</button></a></p>
        <p><a href="daftarpenyakit.php"><button type="button" class="btn btn-primary btn-block">DAFTAR PENYAKIT</button></a></p>
        <p><a href="about.php"><button type="button" class="btn btn-primary btn-block">ABOUT</button></a></p>
          <br><br><br><br><br><br><br><br><br><br>
        <p><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGIN</button></p>
      </div>
      <!-- ==== END OF SIDEBAR ==== -->

      <!-- ==== BODY ==== -->
      <div class="col-sm-8 text-left"> 
        <center><h2>DIAGNOSA PENYAKIT</h2></center>
          <form id="form1" name="form1" method="post" action="diagnosa.php">
            <label for="sel1">Jenis Tanaman</label>            
            <select class="form-control" name="tanaman" onChange='this.form.submit();'>
              <option>Tanaman</option>
              <option>Bawang</option>
              <option>Cabai</option>
            </select>
          </form>
          <br>     
          <form id="form2" name="form2" method="post" action="diagnosa.php">
        <?php 
          if(isset($_POST['tanaman']))
            if($_POST['tanaman']!="jenistanaman"){
              echo  "<br><label>AKAR</label><br>";
              $tampil="select * from gejala where daerah='akar' and jenistanaman= \"".$_POST['tanaman']."\"";
              $query= mysqli_query($konek_db,$tampil);
              while($hasil=mysqli_fetch_array($query)){  
              echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
            }
          }
        ?> 

        <?php 
              if(isset($_POST['tanaman']))
                    if($_POST['tanaman']!="jenistanaman"){
                        echo  "<br><label>BATANG</label><br>";
        $tampil="select * from gejala where daerah='batang' and jenistanaman= \"".$_POST['tanaman']."\"";
        $query= mysqli_query($konek_db,$tampil);
                  while($hasil=mysqli_fetch_array($query)){  
            echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
        }
                    }
            ?>
                    
        <?php 
              if(isset($_POST['tanaman']))
                    if($_POST['tanaman']!="jenistanaman"){
                      echo  "<br><label>DAUN</label><br>";
        $tampil="select * from gejala where daerah='daun' and jenistanaman= \"".$_POST['tanaman']."\"";
        $query= mysqli_query($konek_db,$tampil);
                  while($hasil=mysqli_fetch_array($query)){  
            echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
        }
                    }
            ?>           
        <?php 
              if(isset($_POST['tanaman']))
                    if($_POST['tanaman']!="jenistanaman"){
                        echo  "<br><label>BUAH/UMBI</label><br>";
        $tampil="select * from gejala where daerah='Buah/Umbi' and jenistanaman= \"".$_POST['tanaman']."\"";
        $query= mysqli_query($konek_db,$tampil);
                  while($hasil=mysqli_fetch_array($query)){  
            echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
        }
                    }
            ?>           
        <?php 
              if(isset($_POST['tanaman']))
                    if($_POST['tanaman']!="jenistanaman"){
                        echo  "<br><label>BUNGA</label><br>";
        $tampil="select * from gejala where daerah='bunga' and jenistanaman= \"".$_POST['tanaman']."\"";
        $query= mysqli_query($konek_db,$tampil);
                  while($hasil=mysqli_fetch_array($query)){  
            echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
        }
                    }
            ?>            
        <?php 
              if(isset($_POST['tanaman']))
                    if($_POST['tanaman']!="jenistanaman"){
                        echo  "<br><label>BIJI</label><br>";
        $tampil="select * from gejala where daerah='biji' and jenistanaman= \"".$_POST['tanaman']."\"";
        $query= mysqli_query($konek_db,$tampil);
                  while($hasil=mysqli_fetch_array($query)){  
            echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
        }
                    }
            ?>
          
          <br>
          <button type="submit" name ="submit" onclick="return checkDiagnosa()" class="btn btn-primary">CEK PENYAKIT</button><br><br>
              <div class="panel panel-info">
                  <div class="panel-heading">HASIL DIAGNOSA</div>
                  <div class="panel-body">
              <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>NO</th>
                              <th>ID PENYAKIT</th>
                <th>Nama Penyakit</th>
                              <th>Jenis Tanaman</th>
                              <th>Detail</th>
                          </tr>
                      </thead>
          <?php			
          if(isset($_POST['submit'])){
              $gejala = $_POST['gejala'];
              $jumlah_dipilih = count($gejala);
            for($x=0;$x<$jumlah_dipilih;$x++){
                        $tampil ="select DISTINCT p.idpenyakit, p.namapenyakit, p.jenistanaman from basispengetahuan b, penyakit p where b.gejala='$gejala[$x]' and p.namapenyakit=b.namapenyakit group by namapenyakit";
                        $result = mysqli_query($konek_db, $tampil);
                        $hasil  = mysqli_fetch_array($result);   
                      
                      }
                echo "
                            <tr>  
                            <td>".$x."</td>
                                  <td>".$hasil['idpenyakit']."</td>
                        <td>".$hasil['namapenyakit']."</td>  
                                  <td>".$hasil['jenistanaman']."</td> 
                                  <td><a href=\"hasildiagnosa.php?id=".$hasil['idpenyakit']."\"><i class='glyphicon glyphicon-search'></i></a></td>
                        </tr>   
                                
                                ";
          }
      
                  ?>
                      </table>
              </div>
                      </div>
                  </div>
          </form>
              
      </div>
      <!-- ==== END OF BODY ==== -->
    </div>
  </div>
  <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="padding:35px 50px;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
          </div>
          <div class="modal-body" style="padding:40px 50px;">
            <form role="form" method="post" action="ceklogin.php">
              <div class="form-group" method="post">
                <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
              </div>
              <div class="form-group" method="post">
                <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
              </div>
                <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" method="post"><span class="glyphicon glyphicon-off"></span> Login</button>
            </form>
          </div>
        </div>
      </div>
    </div> 
  <!-- =============================== END OF MAIN BODY =============================== -->


  <!-- =============================== FOOTER =============================== -->
  <footer class="container-fluid text-center">
    <p>S1-Sistem Informasi 2013</p>
  </footer>
  <!-- =============================== END OF FOOTER =============================== -->


  <!-- =============================== JAVASCRIPT =============================== -->
  <script language="JavaScript" type="text/javascript">
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
    function checkDiagnosa(){
        return confirm('Apakah sudah benar gejalanya?');
    }
  </script>
  <!-- =============================== END OF JAVASCRIPT =============================== -->

</body>
</html>
