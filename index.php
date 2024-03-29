<?php

function getAddress() {
  $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
  return $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

if (str_contains(getAddress(), "index.php")) {
  $noindex = str_replace('/index.php', '', getAddress());
  echo "<script>window.location.href='$noindex';</script>";
}

?>

<html>
  <head>
    <title>Main Page - HMSE</title>

    <!-- Always fit the page horizontally so that the horizontal scrollbar won't show anymore -->
    <!-- The fade transition effect is exclusive on Desktop only -->

    <!-- New features:
        - Events
        - Announcements
        - Documentary photos gallery

      -->

    <link rel="icon" type="image/x-icon" href="./img/favicon.png">

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />

    <!-- IMPORT CUSTOM SCROLLBAR CSS & JS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="./scrollbar.css"
    />

    <!-- FADE IN/OUT TRANSITION CSS & JS -->
    <link
    rel="stylesheet"
    type="text/css"
    href="./fade-transition.css"
  />
    <script
      type="text/javascript"
      src="./fade-transition.js"
    ></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body id="home">
    <div id="fade-overlay"  style="display: block;"></div>
    <div class="hmse-home simplebar-scrollable-y" data-simplebar="init">
      <div class="simplebar-wrapper" style="margin: 0px">
        <div class="simplebar-height-auto-observer-wrapper">
          <div class="simplebar-height-auto-observer"></div>
        </div>
        <div class="simplebar-mask">
          <div class="simplebar-offset" style="right: 0px; bottom: 0px">
            <div
              id="scrollnav"
              class="simplebar-content-wrapper"
              tabindex="0"
              role="region"
              aria-label="scrollable content"
              style="height: 100vh; overflow: scroll"
            >
              <div class="simplebar-content" style="padding: 0px">
                <!-- Start of body -->

                <!-- NAVBAR START -->
                <nav
                  class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top"
                  style="background-color: #0a314b"
                >
                  <div class="container">
                    <a class="navbar-brand" href="#">HMSE</a>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#navbarNav"
                      aria-controls="navbarNav"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                          <a
                            class="nav-link active"
                            aria-current="page"
                            href="#"
                            >Home</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./schedule/">Schedule</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./announcements/">Announcements</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./news/">News</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#contact">Contact</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
                <!-- NAVBAR END -->

<!-- WA BUTTON START -->
                <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

<style>

/* Add WA floating button CSS */
.floating {
 position: fixed;
 width: 60px;
 height: 60px;
 bottom: 40px;
 right: 40px;
 background-color: #25d366;
 color: #fff;
 border-radius: 50px;
 text-align: center;
 font-size: 30px;
 box-shadow: 2px 2px 3px #999;
 z-index: 99;
 opacity: 100%;
 mix-blend-mode: multiply;
}

.floatingb {
 position: fixed;
 width: 60px;
 height: 60px;
 bottom: 40px;
 right: 40px;
 background-color: #25d366;
 color: #fff;
 border-radius: 50px;
 text-align: center;
 font-size: 30px;
 z-index: 100;
 opacity: 35%;
 mix-blend-mode: screen;
}

.fab-icon {
 margin-top: 16px;
}
</style>

<!-- render the button and direct it to wa.me -->
<i class="floating">
<i class="fab fa-whatsapp fab-icon"></i>
</i>
<a href="https://wa.me/6285819608700" class="floatingb" target="_blank">
</a>
<!-- WA BUTTON END -->

                <!-- JUMBOTRON START -->
                <section id="home" class="jumbotron text-center">
                  <img
                    src="img/logo2.png"
                    alt="logo HMSE"
                    width="200"
                    class="rounded-circle img-thumbnail"
                  />
                  <h1 class="display-4">HMSE</h1>
                  <p class="lead">Himpunan Mahasiswa Software Engineering</p>
                  <!-- <p class="lead">Fakultas Ilmu Komputer Universitas Indonesia</p> -->
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1440 316"
                  >
                    <path
                      fill="#ffffff"
                      fill-opacity="10"
                      d="M0,64L48,64C96,64,192,64,288,101.3C384,139,480,213,576,234.7C672,256,768,224,864,181.3C960,139,1056,85,1152,69.3C1248,53,1344,75,1392,85.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
                    ></path>
                  </svg>
                </section>
                <!-- JUMBOTRON END -->

                <!-- ABOUT START-->
                <section id="about">
                  <div class="container">
                    <div class="row text-center mb-3">
                      <div class="col">
                        <h2>About</h2>
                      </div>
                    </div>
                  </div>

                  <!-- ABOUT VISI MISI -->

                  <div class="row">

                  <div class="col-sm-6" style="margin-left:auto;margin-right:auto;min-width:75%;">
                    <div class="card border border-4">
                      <div class="card-body">
                        <h5 class="card-title text-center">TUJUAN HMSE</h5><br>
                        <!-- <p class="card-text"></p> -->
                            <div class="flex-container">
                            <p style="text-align: justify; text-justify: inter-word;">Tujuan terbentuknya himpunan mahasiswa software engineering ini untuk membangun sebuah wadah dan untuk mengasah / mengekspos softskill anak anak khususnya untuk ranah software engineering dan umumnya untuk fakultas komputer lainnya, dengan prospek yang membahas tentang perkembangan perangkat lunak, analisisa algoritma dan struktur data serta mengoperasikan pemrograman.
Diera sekarang dan masa kedepannya sumber daya manusia yang memahami bidang teknologi rekayasa perangkat lunak dan informasi sangat di butuhkan, himpunan ini menjadikan sebuah ruang untuk meningkatkan keterampilan di dalam bidang komputer.
                            </p>
                            </div>
                            <br>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                      </div>
                    </div>
                  </div>

                </div>

<br>

                    <div class="col-sm-6" style="margin-left:auto;margin-right:auto;min-width:75%;">
                    <div class="card border border-4">
                      <div class="card-body">
                        <h5 class="card-title text-center">VISI</h5>
                        <!-- <p class="card-text"></p> -->
                            <div class="flex-container">
                            <p class="card-text mb-2">
                            Mengembangkan kepemimpinan dan kerjasama dalam
                            rangka menciptakan perubahan positif dalam dunia
                            Tekhnologi dan Perangkat Lunak
                            <br />
                          </p>
                            </div>
                            <br>
                            <h5 class="card-title text-center">MISI</h5>
                        <!-- <p class="card-text"></p> -->
                            <div class="flex-container">
                            <ul class="card-title">
                              1. Mewujudkan tali silaturahmi Mahasiswa/i jurusan
                              Software Engineering <br />
                              2. Mengembang program software engineering yang
                              inovatif dan bermutu <br />
                              3. Mendorong anggota lebih kreatif di bidang
                              Teknologi dan Perangkat Lunak <br />
                              4. Menjalankan kegiatan kemasyarakatan yang
                              bermanfaat <br />
                              5. Menjalin hubungan yang baik dengan seluruh
                              Organisasi Kemahasiswaan di Indonesia
                          </ul>
                            <br />
                            </div>
                            <br>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                      </div>
                    </div>
                  </div>


                  <br>

                  <div class="row">

                  <div class="col-sm-6" style="margin-left:auto;margin-right:auto;min-width:75%;">
                    <div class="card border border-4">
                      <div class="card-body">
                        <h5 class="card-title text-center">SEJARAH SINGKAT HMSE</h5><br>
                        <!-- <p class="card-text"></p> -->
                            <div class="flex-container">
                            <p style="text-align: justify; text-justify: inter-word;">
                            HMSE untuk pertama kalinya disahkan dan dilantik sebagai Himpunan Mahasiswa Software Engineering pertama 
                            di Universitas Insan Pembangunan Indonesia pada tanggal 07 Januari 2024 di Auditorium Saba Karya.<br><br>
                            Himpunan Mahasiswa Software Engineering (HMSE) adalah suatu organisasi di tingkat mahasiswa yang terfokus 
                            pada bidang keilmuan teknologi informasi dan rekayasa perangkat lunak. Organisasi ini bertujuan untuk 
                            meningkatkan pemahaman dan keterampilan mahasiswa dalam dunia software engineering melalui kegiatan pendidikan, 
                            pelatihan, serta kegiatan sosial dan kolaboratif.
                            </p>
                            </div>
                            <br>
                            <div class="flex-container">
                            <img src="img/phist1.jpg" style="max-width: 48%; border-radius: 5px"></img><img src="img/phist2.jpg" style="max-width: 48%; border-radius: 5px"></img>
                            </div>
                            <br>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                      </div>
                    </div>
                  </div>

                </div>

<br>
                 
                  <div class="row">

                    <style>
                      .flex-container {
                        height: 100%;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                      }
                      .flex-item {
                        text-align: center;
                        flex-basis: 100%;
                      }

                      .container2 {
        display: flex;
        align-items: center
      }

                    </style>

                  <div class="col-sm-6" style="margin-left:auto;margin-right:auto;min-width:75%;" id="desktop-mode-switch">
                    <div class="card border border-4">
                      <div class="card-body">
                        <h5 class="card-title text-center">FILOSOFI LOGO HMSE</h5><br>
                        <!-- <p class="card-text"></p> -->
                            <div class="flex-container">
                            <div class="flex-item"><img style="max-width: 128px; max-height: 128px" src="img/gear.png" /><br><b>Gear (Semangat Kerja)</b><br>Teknologi yang berkesinambungan, garis bergerak
                            melambangkan keberlanjutan.</div>
                            <div class="flex-item"><img style="max-width: 128px; max-height: 128px" src="img/lamp.png" /><br><b>Lampu (Cahaya)</b><br>Menjadikan sumber efisiensi terhadap perkembangan di zaman
                            era teknologi sekarang.</div>
                            <div class="flex-item"><img style="max-width: 128px; max-height: 128px" src="img/code.png" /><br><b>Kode Script (Menandakan suatu progres)</b><br>Setiap awalan pasti ada akhiran.</div>
                            </div>
                            <br>
                            <div class="flex-container">
                            <div class="flex-item"><img style="max-width: 128px; max-height: 128px" src="img/book.png" /><br><b>Buku (Sumber pengetahuan)</b><br>Melambangkan pustaka ilmu, merupakan sumber dari
                            segala ilmu pengetahuan.</div>
                            <div class="flex-item"><img style="max-width: 128px; max-height: 128px" src="img/computer.png" /><br><b>Komputer</b> (Sebagai makna media pembelajaran)<br><b>Tampilan Coding </b>(Melambangkan
                            teknologi/komunikasi dengan bahasa mesin dengan segala tabiatnya)</div>
                            <div class="flex-item"><img style="max-width: 128px; max-height: 128px" src="img/grey.png" /><br><b>Filosofi warna: Abu-abu</b><br>Menyimpan makna positif yaitu melambangkan kemandirian,
                             kestabilan, keseriusan, serta tanggung jawab.</div>
                            </div>
                            <br>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                      </div>
                    </div>
                  </div>
                    </div>

                    <div class="col-sm-6" style="margin-left:auto;margin-right:auto;min-width:75%;" id="mobile-mode-switch">
                    <div class="card border border-4">
                      <div class="card-body">
                        <h5 class="card-title text-center">FILOSOFI LOGO HMSE</h5><br>
                        <!-- <p class="card-text"></p> -->
                            

                        <table>
                        <tr>
                        <td style="text-align: center; vertical-align: middle;"><img style="max-width: 128px; max-height: 128px; margin-right:9px" src="img/gear.png" /></td>
                        <td><p><b>Gear (Semangat Kerja): </b><br>Teknologi yang berkesinambungan, garis bergerak
                            melambangkan keberlanjutan.</p></td>
    </tr>
    <tr>
    <td style="text-align: center; vertical-align: middle;"><img style="max-width: 128px; max-height: 128px; margin-right:9px" src="img/lamp.png" /></td> <td><p><b>Lampu (Cahaya): </b><br>Menjadikan sumber efisiensi terhadap perkembangan di zaman
                            era teknologi sekarang.</p></td>
    </tr>
    <tr>
    <td style="text-align: center; vertical-align: middle;"><img style="max-width: 128px; max-height: 128px; margin-right:9px" src="img/code.png" /></td><td><p><b>Kode Script (Menandakan suatu progres): </b><br>Setiap awalan pasti ada akhiran.</p></td>
    </tr>
    <tr>
    <td style="text-align: center; vertical-align: middle;"><img style="max-width: 128px; max-height: 128px; margin-right:9px" src="img/book.png" /></td> <td><p><b>Buku (Sumber pengetahuan): </b><br>Melambangkan pustaka ilmu, merupakan sumber dari
                            segala ilmu pengetahuan.</p></td>
    </tr>
    <tr>
    <td style="text-align: center; vertical-align: middle;"><img style="max-width: 128px; max-height: 128px; margin-right:9px" src="img/computer.png" /></td> <td><p><b>Komputer </b> (Sebagai makna media pembelajaran) <b><br>Tampilan Coding </b> (Melambangkan
                            teknologi/komunikasi dengan bahasa mesin dengan segala tabiatnya)</p></td>
    </tr>
    <tr>
    <td style="text-align: center; vertical-align: middle;"><img style="max-width: 128px; max-height: 128px; margin-right:9px" src="img/grey.png" /></td><td><p><b>Filosofi warna: Abu-abu </b><br>(Menyimpan makna positif yaitu melambangkan kemandirian,
                             kestabilan, keseriusan, serta tanggung jawab.)</p></td>
    </tr>
                    
    </table>

                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                      </div>
                    </div>
                  </div>

                  <br>

                  <h5 class="card-title text-center"><a href="./org_struct/">KLIK DISINI UNTUK MELIHAT STRUKTUR ORGANISASI HMSE</a></h5><br>

                  <!-- <div class="row justify-content-center fs-5 text-center">
                    
        <div class="col-md-4">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur,
            dolore repudiandae. Voluptatem sunt sed, quisquam adipisci in
            excepturi laboriosam mollitia possimus rerum dicta architecto omnis!
          </p>
        </div>
      </div> -->
                </section>
                <!-- ABOUT END -->

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 157">
                  <path fill="#ffffff" fill-opacity="10" d="M0,160L48,144C96,128,192,96,288,74.7C384,53,480,43,576,80C672,117,768,203,864,229.3C960,256,1056,224,1152,229.3C1248,235,1344,277,1392,298.7L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>

                <!-- ACTIVITIES -->
                <section id="gallery">
                  <div class="container">
                    <div class="row text-center mb-3">
                      <div class="col">
                        <h2>Our Activities</h2>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img
                            src="img/projects/IMG_7738.JPG"
                            class="card-img-top"
                            alt="project"
                          />
                          <div class="card-body">
                            <p class="card-text" style="text-align:center;">
                              (3 Maret 2024)<br><b><a href="./news/kegiatan-bootcamp-hmse-2024-sdmkmq22eaifj" style="text-decoration:none; color:inherit;">Kegiatan Bootcamp HMSE 2024</a></b>
                            </p>
                          </div>
                        </div>
                      </div>
                      <!-- div class="col-md-4 mb-3">
                        <div class="card">
                          <img
                            src="img/projects/p2.jpg"
                            class="card-img-top"
                            alt="project"
                          />
                          <div class="card-body">
                            <p class="card-text">
                              Some quick example text to build on the card title
                              and make up the bulk of the card's content.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img
                            src="img/projects/p3.jpg"
                            class="card-img-top"
                            alt="project"
                          />
                          <div class="card-body">
                            <p class="card-text">
                              Some quick example text to build on the card title
                              and make up the bulk of the card's content.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img
                            src="img/projects/p4.jpg"
                            class="card-img-top"
                            alt="project"
                          />
                          <div class="card-body">
                            <p class="card-text">
                              Some quick example text to build on the card title
                              and make up the bulk of the card's content.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img
                            src="img/projects/p5.jpg"
                            class="card-img-top"
                            alt="project"
                          />
                          <div class="card-body">
                            <p class="card-text">
                              Some quick example text to build on the card title
                              and make up the bulk of the card's content.
                            </p>
                          </div>
                        </div>
                      </div -->
                    </div>
                  </div>
                </section>
                <!-- ACTIVITIES END -->
              
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 316">
        <path fill="#0a314b" fill-opacity="10" d="M0,160L48,144C96,128,192,96,288,74.7C384,53,480,43,576,80C672,117,768,203,864,229.3C960,256,1056,224,1152,229.3C1248,235,1344,277,1392,298.7L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
                </section>
                <!-- CONTACT END -->

                <!-- FOOTER START -->
                <footer
                  class="text-white text-center pb-5"
                  style="background-color: #0a314b"
                >

<!-- CONTACT START-->
<section id="contact">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>Contact</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="./ipost.php" method="post">
          <div class="mb-3">
            <input
              type="text"
              placeholder="Nama Lengkap"
              class="form-control"
              name="pname"
              id="name"
              aria-describedby="name"
            />
          </div>
          <div class="mb-3">
            <input
              type="email"
              placeholder="Email"
              class="form-control"
              name="pemail"
              id="email"
              aria-describedby="email"
            />
          </div>
          <div class="mb-3">
            <textarea
              placeholder="Tulis pesan disini..."
              class="form-control"
              name="pcontent"
              id="exampleFormControlTextarea1"
              rows="3"
            ></textarea>
          </div>
          <br />
          <button type="submit" class="btn btn-primary">
            Kirim
          </button>
        </form>
      </div>
    </div>
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 157">
    <path fill="#0a314b" fill-opacity="1" d="M0,96L48,80C96,64,192,32,288,48C384,64,480,128,576,154.7C672,181,768,171,864,144C960,117,1056,75,1152,58.7C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"/>
  </svg>


                  <p>
                    Created with <i class="bi bi-heart-fill text-danger"></i> by
                    Team HMSE<br>Follow our Instagram: 
                    <a
                      href="https://www.instagram.com/hmse_unipi/"
                      class="text-white fw-bold"
                      >Mahasiswa Software Engineering</a
                    >
                  </p>
                </footer>
                <!-- FOOTER END -->
                <!-- End of body -->
              </div>
            </div>
          </div>
        </div>
        <div
          class="simplebar-placeholder"
          style="width: 250px; height: 922px"
        ></div>
      </div>
      <div
        id="horizontal_scrollbar"
        class="simplebar-track simplebar-horizontal"
        style="visibility: hidden"
      >
        <div
          class="simplebar-scrollbar"
          style="width: 0px; display: none"
        ></div>
      </div>
      <div
        id="vertical_scrollbar"
        class="simplebar-track simplebar-vertical"
        style="visibility: visible"
      >
        <div
          class="simplebar-scrollbar"
          style="
            height: 173px;
            transform: translate3d(0px, 152px, 0px);
            display: block;
          "
        ></div>
      </div>
    </div>
  </body>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>

  <script
  type="text/javascript"
  src="./simplebar.min.js"
  ></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

  //PER-PAGE SCRIPT
        const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

        $(document).ready(function() {
            alreadydisplayed = true;
            if (window.location.hash) { //fast fade in
              fadein(6, 0.01);
            } else { //slow fade in
                fadein(9, 0.003);
            }
            if (isMobile) {
              document.getElementById("fade-overlay").remove();
              document.getElementById("desktop-mode-switch").remove();
              //document.getElementById("horizontal_scrollbar").remove();
              //document.getElementById("vertical_scrollbar").remove();
            } else {
              document.getElementById("mobile-mode-switch").remove();
            }
        });

        

        const scrollnav = document.querySelector("#scrollnav");

        $(window).focus(function() {
            if (!alreadydisplayed) {
            fadein(6, 0.01);
            }
        });
        

        $(document).on("click", "a", function(e) {
            e.preventDefault();
            //this == the link that was clicked
            var href = $(this).attr("href");
            if ((href.startsWith('#')) || (href.startsWith('?'))) {
              var vstr = this.href.substring(this.href.lastIndexOf('/') + 2);
              if (vstr.length > 0){
                $("html, body, #scrollnav").animate({ scrollTop: document.getElementById(vstr).offsetTop }, 500);
              } else {
                $("html, body, #scrollnav").animate({ scrollTop: "0" }, 1000);
              }
            } else{
              if (!isMobile) {
              fadeout(6);
                var timer = setInterval(function () {
                    if (!isfadingout) {
                        window.location.href = href;
                        clearInterval(timer);
                        alreadydisplayed = false;
                }}, 10);
              } else {
                window.location.href = href;
              }
            }
        });

</script>

</html>