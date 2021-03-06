<?php

if(!isset($_SESSION)) {
     session_start();
}
if(isset($_SESSION['username'])){
	
	include "../include/konek.php";
	$hasil = mysql_query("SELECT * FROM tb_kgb WHERE");
	 $user= mysql_fetch_array(mysql_query("SELECT * FROM user WHERE kode_user=$_SESSION[username]")); $nama =($user['nama']); $gambar = $user['gambar'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | Menu Utama</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-user"></i> <span>SIPANJI</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
              <?php
              if(empty($gambar)){
				  ?>
                  
			  		<img src="images/user.png" alt="..." class="img-circle profile_img">
			  <?php }
			  else{ ?>
                <img src="images/<?php echo "$gambar";?>.jpg" alt="..." class="img-circle profile_img">
                <?php } ?>
              </div>
              <div class="profile_info">
                <span>Welcome</span><br>
                <span><?php echo "$nama"; ?></span>
                
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li><a><i class="fa fa-users"></i> Data Pegawai <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="inputpegawai.php">Input Data Pegawai</a></li>
                      <li><a href="tabelpegawai.php">Tabel Data Pegawai</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-star"></i> Usulan Kenaikan Pangkat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tabelukptahunan.php">Konfirmasi Kenaikan Pangkat </a></li>
                      <li><a href="tabelukp.php">Data UKP Lengkap</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i> Kenaikan Gaji Berkala <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tabeltahunankgb.php">Tabel Konfirmasi Kenaikan Gaji Berkala </a></li>
                      <li><a href="tabelkgb.php">Data KGB Lengkap</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-heart-o"></i> Usulan Pensiun <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tabeltahunanpensiun.php">Data Tahunan Pegawai Pensiun</a></li>
                      <li><a href="tabelpensiun.php">Tabel Data Pensiun</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-file-text"></i>Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tabellaporanpegawai.php">Laporan Pegawai</a></li>
                      <li><a href="tabellaporankgb.php">Laporan KGB</a></li>
                      <li><a href="tabellaporanukp.php">Laporan UKP</a></li>
                      <li><a href="tabellaporanpensiun.php">Laporan Pensiun</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php
              if(empty($gambar)){
				  ?>
                  
			  		<img src="images/user.png" alt="">
			  <?php }
			  else{ ?>
                <img src="images/<?php echo "$gambar";?>.jpg" alt="">
                <?php } ?><?php echo "$nama"; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profil.php"> Profile</a></li>
                    <li>
                      <a href="editprofil.php">
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="aboutus.php">Help</a></li>
                    <li><a href="../login/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Tabel KGB</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 
                    
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pencarian Data Gaji </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form class="form-inline" method="post" action="tabeltahunankgb.php">
				<div class="form-group">
					<select name="katsearch" class="form-control">
                    <option value="TMT_KGB">TMT KGB</option>
                    <option value="NAIK_KGB">Naik KGB</option>
                    </select>
                    <input class="form-control" type=date name=key placeholder = keyword>
                    <button class="btn btn-info">search</button>
				
				</div>
			</form>
            <table class="table table-bordered">
	<tr>
    	<th>NO</th>
		<th>NAMA PEGAWAI</th>
		<th>NIP</th>
        <th>PANGKAT GOLONGAN</th>
        <th>JABATAN</th> 
        <th>TMT CPNS</th>
        <th>TMT JABATAN</th>
        <th>TMT KGB</th>
        <th>NAIK KGB</th>
        <th>TEMPAT TUGAS</th>
        <th>ACTION</th>
	</tr>
	
	<?php
	error_reporting(0);
	//terima data keyword dari form search jika ada
	$key = $_POST['key'];
	$katsearch=$_POST['katsearch'];
	//definisikan perintah pemanggilan data
	$sql = "select NAMA_PEGAWAI,NIP,PANGKAT_GOLONGAN,JABATAN,TMT_CPNS,TMT_JABATAN,TMT_KGB,NAIK_KGB,TUGAS from tb_kgb";
	
	if($key!=""):
		$sql .= " where $katsearch like '%$key%'";
	endif;
	
	//jalankan atau aktifkan perintah pemanggilan
	$query = mysql_query($sql);
	
	//echo mysqli_error($con);
	
	$no = 0;
	//pecah data yang telah di panggil menjadi array dapat ditampilkan/digunakan.
	while(list($NAMA_PEGAWAI,$NIP,$PANGKAT_GOLONGAN,$JABATAN,$TMT_CPNS,$TMT_JABATAN,$TMT_KGB,$NAIK_KGB,$TUGAS)=mysql_fetch_array($query)):
	$no++;
	?>
	
	<tr>
    	<td><?php echo $no; ?></td>
		<td><?php echo $NAMA_PEGAWAI; ?></td>
		<td><?php echo $NIP; ?></td>
		<td><?php echo $PANGKAT_GOLONGAN; ?></td>
        <td><?php echo $JABATAN; ?></td>
        <td><?php echo $TMT_CPNS; ?></td>
        <td><?php echo $TMT_JABATAN; ?></td>
        <td><?php echo $TMT_KGB; ?></td>
        <td><?php echo $NAIK_KGB; ?></td>
        <td><?php echo $TUGAS; ?></td>
		<td><a href=konfirmasi_kgb.php?NIP=<?php echo $NIP?>            
                <li>
                  <span class="glyphicon glyphicon-list"></span>
                  <span class="glyphicon-class">Data Terpenuhi</span>
                </li>
                            		</a>
                            </td>
	</tr>
	<?php endwhile; ?>
</table>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Powered by Gantella Created By Muhammad Daniel Apriansyah Desain By Colorlib
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    
	<script src="vendors/echarts/dist/echarts.min.js"></script>
    <script src="vendors/echarts/map/js/world.js"></script>
    
  </body>
</html>
<?php 
}else{
?>
<script>document.location.href="../login/"</script>
<?php 
}
?>
