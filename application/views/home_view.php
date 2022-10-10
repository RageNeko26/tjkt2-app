<?php 
require_once 'components/header.php';
?>

<nav class="navbar navbar-expand-lg bg-primary ">
  <div class="container">
    <a class="navbar-brand text-white" href="#"><img src="<?php echo base_url("assets/logo.png") ?>" width="80" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house me-1"></i>Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link " href="#"><i class="fa-solid fa-user me-1"></i>Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#"><i class="fa-solid fa-table-list me-1"></i>Tugas</a>
        </li> 
      </ul>
    </div>
    </div>
  </div>
</nav>

<section id="home">
    <div class="container mt-3">
       <div class="row">
          <div class="col-md-8 ">
              <h2 style="color:#E6C86F;" class="inter-font">Aplikasi TJKT 2</h2>
              <p class="fs-2">Sebuah Platform Untuk Kepentingan Pembelajaran dan Sebagai Project Sampingan</p>
          </div>
          <div class="col-md-4">
            <img src="<?php echo base_url("assets/logo.png") ?>" width="300" alt="logo_kelas">
          </div>
       </div>
    </div>
</section>

<section id="info">
  <div class="container" style="margin-top:180px">
    <div class="row">
      <div class="col mb-3">
        <h2 class="text-center">Fitur</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 mb-5 ">
            <div class="card p-4 shadow " style="width: 18rem;">
              <span>
              <img src="<?php echo base_url("assets/fitur1.svg") ?>" width="200" alt="fitur">
              </span>
              <div class="card-body">
                <h5 class="card-title">Submission Tugas</h5>
                <p class="card-text gray">Sebuah fitur yang dikhususkan untuk mengumpulkan tugas berbasis online</p>
              </div>
      </div>
      </div>
      <div class="col-md-4 mb-5 ">
            <div class="card p-4 shadow " style="width: 18rem;">
              <span>
              <img src="<?php echo base_url("assets/fitur2.svg") ?>" width="150" alt="fitur">
              </span>
              <div class="card-body">
                <h5 class="card-title">Integrasi API</h5>
                <p class="card-text gray">Ingin terhubung ke platform kami? Anda bisa dengan mudah mengintegrasikan aplikasi anda ke platform kami</p>
              </div>
      </div>
      </div>
      <div class="col-md-4 mb-5 ">
            <div class="card p-4  shadow " style="width: 18rem;">
              <span>
              <img src="<?php echo base_url("assets/fitur3.svg") ?>" width="250" height="200" alt="fitur">
              </span>
              <div class="card-body">
                <h5 class="card-title">CMS</h5>
                <p class="card-text gray">Fitur di mana pengguna bisa mengelola konten yang ada di dalam website</p>
              </div>
      </div>
      </div>
    </div>
  </div>
</section>

<section id="tugas">
  <div class="container my-4">
    <div class="row">
      <div class="col">
        <h2 class="text-center">Tugas Terbaru</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <a href="#" style="text-decoration:none">
          <div class="card p-4 shadow" style="width: 18rem;">
              <span>
              <img src="<?php echo base_url("assets/php.png")?>" width="220" alt="tugas">
              </span>
              <div class="card-body">
                <h5 class="card-title text-dark">Modul Praktikum PHP dan HTML</h5>
                <p class="card-text gray ">Muh. Shaim, S.T</p>
              </div>
          </div>
          </a>
      </div>
    </div>
  </div>
</section>


<?php
require_once 'components/footer.php'
?>