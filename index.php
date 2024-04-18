<?php 
$tanggal=date("Y");
include "koneksi.php";
?>
<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo"$k_k[nama]";?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="tema/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="tema/assets/css/noscript.css" /></noscript>
		<style type="text/css">
				#bg:after {
			-moz-transform: scale(1.125);
			-webkit-transform: scale(1.125);
			-ms-transform: scale(1.125);
			transform: scale(1.125);
			-moz-transition: -moz-transform 0.325s ease-in-out, -moz-filter 0.325s ease-in-out;
			-webkit-transition: -webkit-transform 0.325s ease-in-out, -webkit-filter 0.325s ease-in-out;
			-ms-transition: -ms-transform 0.325s ease-in-out, -ms-filter 0.325s ease-in-out;
			transition: transform 0.325s ease-in-out, filter 0.325s ease-in-out;
			background-image: url("foto/<?php echo"$k_k[gambar]";?>");
			background-position: center;
			background-size: cover;
			background-repeat: no-repeat;
			z-index: 1;
		}

       </style>	
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>SELAMAT DATANG</h1>
								<h3>SI <?php echo"$k_k[nama_app]";?> </h3><p>Satu Aplikasi Untuk Kemudahan Implementasi Data <?php echo"$k_k[alias]";?>  <?php echo"$k_k[nama]";?></p>
												<?php 
        if(isset($_GET['alert'])){
          if($_GET['alert'] == "gagal"){
            echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
          }else if($_GET['alert'] == "logout"){
            echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
          }else if($_GET['alert'] == "belum_login"){
            echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
          }
        }
        ?>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">LOGIN</a></li>
								<li><a href="#contact">Hubungi</a></li>
								<li><a href="#work">INVENTORI</a></li>
								<!--
								<li><a href="#pegawai">PEGAWAI</a></li>
								<li><a href="#about">Tentang</a></li>
								
								<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
			
								<h2 class="major">LOGIN ADMIN</h2>
						<form method="post" action="periksa_login.php">
									<div class="fields">
										<div class="field half">
											<label for="name">User Name</label>
											<input type="text" placeholder="Username" name="username" required="required" autocomplete="off" id="name" />
										</div>
										<div class="field half">
											<label for="email">Password</label>
											<input  type="password"  placeholder="Password" name="password" required="required" autocomplete="off" id="email" />
											<input  type="hidden"   name="sebagai" value="administrator"/>
										</div>
											
									</div>
									<ul class="actions">
										<li><input type="submit" value="login" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								</article>

						<!-- Work -->
							<article id="work">
							<h3 class="major">DATA <?php echo"$k_k[alias]";?>  <?php echo"$k_k[nama]";?> </h3>
									<div class="table-wrapper">
									<table id='example1' class='table table-bordered table-striped'>
                                    <thead>
                                        <tr> <th>No</th>
                                            <th>Kategori</th>
                                            <th>nama</th>
                                            <th>jumlah</th>	 
                                            <th>kondisi</th>	 
          
                                             
                                        </tr>
                                    </thead><tbody>
				   <?php
			
$no=0;
$sql=mysqli_query($koneksi," SELECT * FROM aset,kategori,ruang WHERE aset.id_kategori=kategori.id_kategori AND aset.id_ruang=ruang.id_ruang  ORDER BY aset.id_aset ASC");
while ($t=mysqli_fetch_array($sql)){	
$no++;
                                    echo"
                                        <tr><td>$no</td>
                                            <td>$t[kategori]</td>
                                            <td>$t[nama_aset]</td> 
                                            <td>$t[jumlah]</td> 
                                            <td>$t[kondisi]</td>
						
                                        </tr>";
}?>
                                    </tbody></table>
									</div>
								</article>
							<article id="pegawai">
								<h2 class="major">LOGIN PEGAWAI</h2>
								<p> <?php echo"$k_k[nama]";?></p>
						<form method="post" action="periksa_login.php">
									<div class="fields">
										<div class="field half">
										<input type="hidden" name="sebagai" value="pegawai"/>
											<label for="name">User Name</label>
											<input type="text" placeholder="Username" name="username" required="required" autocomplete="off" id="name" />
										</div>
										<div class="field half">
											<label for="email">Password</label>
											<input  type="password"  placeholder="Password" name="password" required="required" autocomplete="off" id="email" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="login" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								</article>
						<!-- About -->
							<article id="about">
								<h2 class="major">About</h2>
								<span class="image main"><img src="images/pic03.jpg" alt="" /></span>
								<p>Lorem ipsum dolor sit amet, consectetur et adipiscing elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices. Aliquam libero et malesuada fames ac ante ipsum primis in faucibus. Cras viverra ligula sit amet ex mollis mattis lorem ipsum dolor sit amet.</p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>
					</div>
				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; <?php echo"$k_k[nama]";?> <?php echo"$tanggal";?></p>
					</footer>
			</div>
		<!-- BG -->
			<div id="bg"></div>
		<!-- Scripts -->
			<script src="tema/assets/js/jquery.min.js"></script>
			<script src="tema/assets/js/browser.min.js"></script>
			<script src="tema/assets/js/breakpoints.min.js"></script>
			<script src="tema/assets/js/util.js"></script>
			<script src="tema/assets/js/main.js"></script>

	</body>
</html>
