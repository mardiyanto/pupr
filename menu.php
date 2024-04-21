
<!-- Topbar Start -->
<div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    <span>Ikuti Kami:</span>
                    <a class="btn btn-link text-light" href="https://www.facebook.com/profile.php?id=100064785712792"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="https://www.instagram.com/puprtanggamus/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Kontak Kami:</span>
                    <span class="fs-5 fw-bold">+62 81373052805</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="index.php" class="navbar-brand ps-5 me-0">
            <h1 class="text-white m-0"> <?php echo"$k_k[nama_app]";?></h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil Kami</a>
                    <div class="dropdown-menu bg-light m-0">
                    <?php $sql=mysqli_query($koneksi," SELECT * FROM berita WHERE jenis='halaman' ORDER BY id_berita DESC ");
while ($r=mysqli_fetch_array($sql)){ 
                       echo" <a href='utama.php?aksi=home&id_berita=$r[id_berita]' class='dropdown-item'>$r[judul]</a>";
 } ?>
                    </div>
                </div>
                <a href="utama.php?aksi=informasi" class="nav-item nav-link">informasi</a>
                <a href="utama.php?aksi=galeri" class="nav-item nav-link">Galeri</a>
                
                <a href="utama.php?aksi=hubungi" class="nav-item nav-link">Hubungi Kami</a>
            </div>
            <a href="https://sippn.menpan.go.id/instansi/174327/pemerintah-kab-tanggamus/dinas-pekerjaan-umum-dan-perumahan-rakyat"  target='blank' class="btn btn-primary px-3 d-none d-lg-block">Layanan</a>
        </div>
    </nav>
    <!-- Navbar End -->