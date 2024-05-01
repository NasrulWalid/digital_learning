<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sistem Data Akademik</title>
  </head>
  <body>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <div class="card text-center">
  <div class="card-header">
  <nav class="navbar">
		<div class="brand">
			<a href="#">SMK EVOS E-SPORT</a>
		</div>
		<ul class="sisikanan">
			<li><a href="<?php echo base_url('home'); ?>"  class="aktif">HOME</a></li>
			<li><a href="#" class="aktif">PENDAFTARAN</a></li>
			<li><a href="#" class="aktif">JADWAL PELAJARAN</a></li>
			<li><a href="<?php echo base_url('login/index'); ?>" class="aktif">LOGIN</a></li>
			<li><span>0748-324284</span></li>
		</ul>
	</nav>
  </div>
  <div class="card-body">
    
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/gambar8.jpeg" class="d-block w-100 h-50 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Fasilitas Lapangan Olahraga yang Lengkap</h5>
        <p>Siswa dapat melakukan upacara dan berolahraga dengan nyaman </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/gambar7.jpeg" class="d-block w-100 h-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Fasilitas Laboratorium Komputer</h5>
        <p>Siswa dapat menyalurkan minat dan bakat pada bidang IT</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/gambar9.jpg" class="d-block w-100 h-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Fasilitas Ruang Kelas yang Nyaman</h5>
        <p>Ruang Kelas dilengkapi dengan Adanya Proyektor dan Pendingin Ruangan Agar Kegiatan Pembelajaran Menjadi Lebih Nyaman </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>

  </body>
</html>

<style>
@media (min-width: 768px) {
  .carousel {
    height: 400px;
  }
}

@media (max-width: 767px) {
  .carousel {
    height: 400px;
  }
}

.carousel-item img {
  max-height: 80vh;
  object-fit: cover;
}


body{
	font-family: "Roboto" sans-serif;
}
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background-color: yellow;
  height: 70px;
  box-shadow: 0 7px 15px 0 rgba(red, green, blue, 0.5);
}

.brand a {
  font-family: "Roboto" sans-serif;
  font-size: 20px;
  font-weight: bold;
  color: black;
  text-decoration: none;
  align-items: center;
}

.sisikanan {
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
}

.sisikanan a {
  margin-left: 20px;
  text-decoration: none;
  color: black;
}

.sisikanan > li {
	text-decoration: none;
	list-style-type: none;
	padding: 15px;
}

.sisikanan > li > span {
  font-weight: bold;
}

.sisikanan>li>a:hover {
	color: crimson;
	transition: all .3s ease-in-out ;
}

.aktif {
	color: white;
	padding: 15px;
}

.aktif:hover {
	color: white !important;
	background-color: #46de4b;
	transition: all .6s ease-in-out ;
}
</style>