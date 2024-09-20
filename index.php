<html>
  <head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Main Page - HMSE</title>

    <!-- Always fit the page horizontally so that the horizontal scrollbar won't show anymore -->
    <!-- The fade transition effect is exclusive on Desktop only -->

    <!-- New features:
        - Events Schedule
        - Announcements
        - Documentary photos gallery

      -->

    <link rel="icon" type="image/x-icon" href="./img/favicon.png">

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#0a314b">

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

<link
    rel="stylesheet"
    type="text/css"
    href="https://hmse-unipi.or.id/style-ex.css"
  />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />

    <!-- HackTimer -->
    <script
      type="text/javascript"
      src="./HackTimer.js"
    ></script>

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
    <link rel="stylesheet" type="text/css" href="./style.css" />
  </head>
  <body id="home">
    <div id="fade-overlay"  style="display: block;"></div>
    <div class="hmse-home simplebar-scrollable-y" data-simplebar="init">
      <div class="simplebar-wrapper" style="margin: 0px">
        <div class="simplebar-height-auto-observer-wrapper">
          <div class="simplebar-height-auto-observer"></div>
        </div>
        <div class="simplebar-mask">
          <div class="simplebar-offset" style="right: 0px !important; bottom: 0px">
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
                  id="inav2"
                  style="background-color: #0A314B;"
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
                        <li class="nav-item dropdown">
                          <a class="nav-link" id="AboutDD" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                          <ul class="dropdown-menu" aria-labelledby="AboutDD">
                            <li><a class="dropdown-item" href="#aim">Tujuan</a></li>
                            <li><a class="dropdown-item" href="#visionmission">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="#briefhistory">Sejarah Singkat</a></li>
                            <li><a class="dropdown-item" href="#logophilosophy">Filosofi Logo</a></li>
                            <li><a class="dropdown-item" href="./w_programme/">Program Kerja</a></li>
                            <li><a class="dropdown-item" href="./org_struct/">Struktur Organisasi</a></li>
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./schedule/">Events Schedule</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./announcements/">Announcements</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./news/">News</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./reports/">Reports</a>
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

<!-- render the button and direct it to wa.me -->
<div id="firefox_safari_filter"></div>
<i class="floating" id="wfloating">
<i class="fab fa-whatsapp fab-icon"></i>
</i>
<a onclick="window.open('https://wa.me/6285819608700/', '_blank');" class="floatingb" id="wfloatingb" target="_blank">
</a>
<style>

.iframer {
    width: 100%;
    border-radius: 8px;
    box-shadow: 0 0 0 transparent;
     transition: box-shadow 0.6s ease, opacity 0.6s ease;
     opacity: .6;
     mix-blend-mode: luminosity;
}

.iframer:hover {
    box-shadow: 0px 3px 1.5rem #1C8AD4;
     transition: box-shadow 0.6s ease, opacity 0.6s ease;
     opacity: 1;
     mix-blend-mode: normal;
}

@media screen and (min-width: 768px) {
    
    .titleStyle {
	    backdrop-filter: blur(12px);
	    -webkit-backdrop-filter: blur(12px);
	    mix-blend-mode: overlay;
        -webkit-mask: linear-gradient(#000 0 0) text;
        mask: linear-gradient(#000 0 0) text;
        pointer-events: none;
    }
    
    .titleBack {
        color: rgba(84, 84, 96, 1);
	    mix-blend-mode: screen;
        -webkit-filter: drop-shadow(0px 0px 9px rgba(0, 64, 255, 0.9));
        filter: drop-shadow(0px 0px 9px rgba(0, 64, 255, 0.9));
    }
    
    .logoEdge {
	    backdrop-filter: blur(30px);
	    -webkit-backdrop-filter: blur(30px);
	    mix-blend-mode: lighten;
        filter: drop-shadow(0px 0px 9px rgba(0, 64, 255, 0.9));
    }
    
    
}

@media screen and (max-width: 767px) {
    
    .titleStyle {
        display: none;
    }
    
    .titleBack {
        color: #94CDFF;
        -webkit-filter: drop-shadow(0px 0px 9px rgba(0, 0, 0, 0.9));
        filter: drop-shadow(0px 0px 9px rgba(0, 0, 0, 0.9));
    }
    
    .logoEdge {
        -webkit-filter: drop-shadow(0px 0px 3px rgba(0, 0, 0, 0.9));
        filter: drop-shadow(0px 0px 3px rgba(0, 0, 0, 0.9));
    }
    
    .display-4 {
        transform: translateY(7%);
        font-size:36pt;
    }
    
    .lead {
        font-size:10pt;
    }
    
}


</style>
<script>
$(function() {
  $('#wfloatingb').hover(function() {
    $('#wfloating').css('mix-blend-mode', 'normal');
    if (!isMobile) { $('#wfloating').css('box-shadow', '0px 0px 11px #25d366'); }
  }, function() {
    // on mouseout, reset the background colour
    if (!isMobile) {
        $('#wfloating').css('mix-blend-mode', 'multiply');
    } else {
        $('#wfloating').css('opacity', '75%');
    }
    $('#wfloating').css('box-shadow', '2px 2px 3px rgba(0, 0, 0, .4)');
  });
});
  </script>
<!-- WA BUTTON END -->

                <!-- JUMBOTRON START -->
                <section id="homew" class="jumbotron text-center" style="background: url('http://hmse-unipi.or.id/img/main-slide/phist1.jpg'), rgba(10, 49, 75, 1); background-repeat: no-repeat; background-attachment: fixed;  background-position: center; background-blend-mode: overlay; background-size: cover;">
                  <img
                    src="img/logo2.png"
                    alt="logo HMSE"
                    width="200"
                    class="rounded-circle img-thumbnail logoEdge"
                  />
                      <!-- div style="background-color: rgba(255, 255, 255, 0.6);  mix-blend-mode: screen;" -->
                  <h1 class="display-4 titleBack"
                    style="padding-top: 11px; font-weight: bold !important;"><b>HMSE</b>
                    <h1 class="display-4 titleStyle"
                    style="transform: translateY(-113%); margin-bottom: -66px; font-weight: bold !important;"><b>HMSE</b></h1>
                    </h1>
                  <p class="lead titleBack" style=" font-weight: bold !important;"><b>HIMPUNAN MAHASISWA SOFTWARE ENGINEERING</b><br>UNIVERSITAS INSAN PEMBANGUNAN INDONESIA
                   <p class="lead titleStyle" style="transform: translateY(-127%); margin-bottom: -96px; font-weight: bold !important;"><b>HIMPUNAN MAHASISWA SOFTWARE ENGINEERING</b><br>UNIVERSITAS INSAN PEMBANGUNAN INDONESIA</p>
                  </p>
                    <!-- /div -->
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
                <section id="about" style="margin:0; padding:0;"></section>
                  <div class="container">
                    <div class="row text-center mb-3">
                      <div class="col">
                        <h2><b>About</b></h2>
                      </div>
                    </div>
                  </div>

                  <!-- ABOUT VISI MISI -->

                  <div>

				<section id="aim" style="margin:0; padding:0;"></section>
                  <div class="col-sm-6" id="bdiv1" style="margin-left:auto;margin-right:auto;min-width:75%;">
                    <div class="card border border-4">
                      <div class="card-body">
                        <h5 class="card-title text-center"><b>TUJUAN HMSE</b></h5><br>
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
<section id="visionmission" style="margin:32px; padding:0;"></section>
                    <div class="col-sm-6" id="bdiv2" style="margin-left:auto;margin-right:auto;min-width:75%;">
                    <div class="card border border-4">
                      <div class="card-body">
                        <h5 class="card-title text-center"><b>VISI</b></h5>
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
                            <h5 class="card-title text-center"><b>MISI</b></h5>
                        <!-- <p class="card-text"></p> -->
                            <div class="flex-container">
                            <ol class="card-title">
                              <li>Mewujudkan tali silaturahmi Mahasiswa/i jurusan
                              Software Engineering</li>
                              <li>Mengembang program software engineering yang
                              inovatif dan bermutu</li>
                              <li>Mendorong anggota lebih kreatif di bidang
                              Teknologi dan Perangkat Lunak</li>
                              <li>Menjalankan kegiatan kemasyarakatan yang
                              bermanfaat</li>
                              <li>Menjalin hubungan yang baik dengan seluruh
                              Organisasi Kemahasiswaan di Indonesia</li>
                          </ol>
                            <br />
                            </div>
                            <br>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                      </div>
                    </div>
                  </div>

                  <div>

<section id="briefhistory" style="margin:18px; padding:0;"></section>
                  <div class="col-sm-6" id="bdiv3" style="margin-left:auto;margin-right:auto;min-width:75%;">
                    <div class="card border border-4">
                      <div class="card-body">
                        <h5 class="card-title text-center"><b>SEJARAH SINGKAT HMSE</b></h5><br>
                        <!-- <p class="card-text"></p> -->
                            <div class="flex-container">
                            <p style="text-align: justify; text-justify: inter-word;">
                            HMSE untuk pertama kalinya disahkan dan dilantik sebagai Himpunan Mahasiswa Software Engineering pertama 
                            di Universitas Insan Pembangunan Indonesia pada tanggal <b>07 Januari 2024</b> di <b>Auditorium Saba Karya.</b><br><br>
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
                 
                  <div>

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

				<section id="logophilosophy" style="margin:18px; padding:0;"></section>
                  <div class="col-sm-6" style="margin-left:auto;margin-right:auto;min-width:75%;" id="desktop-mode-switch">
                    <div class="card border border-4">
                      <div class="card-body">
                        <h5 class="card-title text-center"><b>FILOSOFI LOGO HMSE</b></h5><br>
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
                        <h5 class="card-title text-center"><b>FILOSOFI LOGO HMSE</b></h5><br>
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

                  <!--div style="margin-left:2%; margin-right:2%;"><h5 class="card-title text-center"><b><a href="https://hmse-unipi.or.id/org_struct/" style="text-decoration:none;">KLIK DISINI UNTUK MELIHAT STRUKTUR ORGANISASI HMSE</a></b></h5></div><br-->

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

                
              
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -50 1440 162">
        <path fill="#0a314b" fill-opacity="10" d="M -0.848 50.584 L 47.152 44.263 C 95.152 37.942 191.152 25.3 287.152 16.886 C 383.152 8.313 479.152 4.362 575.152 18.979 C 671.152 33.596 767.152 67.571 863.152 77.961 C 959.152 88.509 1055.152 75.867 1151.152 77.961 C 1247.152 80.213 1343.152 96.805 1391.152 105.377 L 1439.152 113.792 L 1391.152 113.792 C 1343.152 113.792 1247.152 113.792 1151.152 113.792 C 1055.152 113.792 959.152 113.792 863.152 113.792 C 767.152 113.792 671.152 113.792 575.152 113.792 C 479.152 113.792 383.152 113.792 287.152 113.792 C 191.152 113.792 95.152 113.792 47.152 113.792 L -0.848 113.792 L -0.848 50.584 Z"></path>
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
        <h4 style="margin-top: 4rem; margin-bottom: 2rem;"><b>Lokasi Sekret Kami</b></h4>
        <div id="sekret-desktop" align="center">
        <iframe class="iframer" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3966.298160985168!2d106.5684167!3d-6.224361099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTMnMjcuNyJTIDEwNsKwMzQnMDYuMyJF!5e0!3m2!1sen!2sid!4v1726817622425!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div id="sekret-mobile" align="center">
            <a
                      onclick="window.open('mailto:hmseunipi@gmail.com', '_blank');"
                      style="cursor: pointer; text-decoration: none;"
                      class="text-white fw-bold" target="_blank"
                      >Buka di Google Maps <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#ffffff" fill="none" style="width:16px;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M55.4,32V53.58a1.81,1.81,0,0,1-1.82,1.82H10.42A1.81,1.81,0,0,1,8.6,53.58V10.42A1.81,1.81,0,0,1,10.42,8.6H32"></path><polyline points="40.32 8.6 55.4 8.6 55.4 24.18"></polyline><line x1="19.32" y1="45.72" x2="54.61" y2="8.91"></line></g></svg></a
                    >
        </div
      </div>
    </div>
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 157">
    <path fill="#0a314b" fill-opacity="1" d="M0,96L48,80C96,64,192,32,288,48C384,64,480,128,576,154.7C672,181,768,171,864,144C960,117,1056,75,1152,58.7C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"/>
  </svg>


                  <p>
                    Copyright © 2023 - 2024<br>Himpunan Mahasiswa Software Engineering<br><b><a href="https://unipem.ac.id/" style="text-decoration:none; color:inherit">Universitas Insan Pembangunan Indonesia</a></b><br>
                    <br>
                    <span style="margin:4px;"><a
                      onclick="window.open('https://www.instagram.com/hmse_unipi/', '_blank');"
                      style="cursor: pointer; text-decoration: none;"
                      class="text-white fw-bold" target="_blank"
                      >Instagram</a
                    ></span>
                    <span style="margin:4px;">
                    <a
                      onclick="window.open('mailto:hmseunipi@gmail.com', '_blank');"
                      style="cursor: pointer; text-decoration: none;"
                      class="text-white fw-bold" target="_blank"
                      >Email</a
                    >
                    </span>
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

<script>

  //PER-PAGE SCRIPT
  var BrowserDetect = {
        init: function() {
            this.browser = this.searchString(this.dataBrowser) || "Other";
            this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
        },
        searchString: function(data) {
            for (var i = 0; i < data.length; i++) {
                var dataString = data[i].string;
                this.versionSearchString = data[i].subString;

                if (dataString.indexOf(data[i].subString) !== -1) {
                    return data[i].identity;
                }
            }
        },
        searchVersion: function(dataString) {
            var index = dataString.indexOf(this.versionSearchString);
            if (index === -1) {
                return;
            }

            var rv = dataString.indexOf("rv:");
            if (this.versionSearchString === "Trident" && rv !== -1) {
                return parseFloat(dataString.substring(rv + 3));
            } else {
                return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
            }
        },

        dataBrowser: [{
            string: navigator.userAgent,
            subString: "Chrome",
            identity: "Chrome"
        }, {
            string: navigator.userAgent,
            subString: "MSIE",
            identity: "Explorer"
        }, {
            string: navigator.userAgent,
            subString: "Trident",
            identity: "Explorer"
        }, {
            string: navigator.userAgent,
            subString: "Firefox",
            identity: "Firefox"
        }, {
            string: navigator.userAgent,
            subString: "Safari",
            identity: "Safari"
        }, {
            string: navigator.userAgent,
            subString: "Opera",
            identity: "Opera"
        }]

    };

    BrowserDetect.init();

        $(document).ready(function() {
            alreadydisplayed = true;
            if (window.location.hash) { //fast fade in
              fadein(6, 0.01);
            } else { //slow fade in
                //fadein(9, 0.003);
              document.getElementById("fade-overlay").style.transition = "opacity 3s linear";
              document.getElementById("fade-overlay").style.opacity = "0";
            }
            if (isMobile) {
                var newParent = document.getElementsByClassName('hmse-home')[0];
                    var oldParent = document.getElementsByClassName('simplebar-content-wrapper')[0];
                    
                    while (oldParent.childNodes.length > 0) {
                        newParent.appendChild(oldParent.childNodes[0]);
                    }
                    
                    document.getElementsByClassName('simplebar-wrapper')[0].remove();
                    document.getElementById("horizontal_scrollbar").remove();
                    document.getElementById("vertical_scrollbar").remove();
              document.getElementById("fade-overlay").remove();
              document.getElementById("desktop-mode-switch").remove();
            document.getElementById("firefox_safari_filter").remove();
            document.getElementById("sekret-desktop").remove();
            } else {
              if ((BrowserDetect.browser === "Safari") || (BrowserDetect.browser === "Firefox")) {
                  document.getElementById("firefox_safari_filter").classList.add("floating-firefox-safari-filter");
              } else {
                  document.getElementById("firefox_safari_filter").remove();
              }
              document.getElementById("mobile-mode-switch").remove();
            document.getElementById("sekret-mobile").remove();
            }
        });
        
        const slideimages = [];
        
        function addToSlideShowImage(imagepath){
            slideimages.push(imagepath);
        }

function isScrolledIntoViewHalf(elem){
    var $elem = $(elem);
    var $window = $(window);

    var docViewTop = $window.scrollTop();
    var docViewBottom = docViewTop + $window.height();

    var elemTop = $elem.offset().top;
    var elemBottom = elemTop + $elem.height();
    
    var docViewMid = (docViewTop + docViewBottom) / 2;
    var elemMid = (elemTop + elemBottom) / 2;

    return (elemMid <= docViewBottom);
}

let userAgent = navigator.userAgent;
if(userAgent.match(/firefox|fxios/i))
{
    
    document.addEventListener("scroll", (event) => {
   if(isScrolledIntoViewHalf(document.getElementById("bdiv1"))){
                              $('#bdiv1').addClass('show');
                            }
   if(isScrolledIntoViewHalf(document.getElementById("bdiv2"))){
                              $('#bdiv2').addClass('show');
                            }
   if(isScrolledIntoViewHalf(document.getElementById("bdiv3"))){
                              $('#bdiv3').addClass('show');
                            }
            if (isMobile) {
   if(isScrolledIntoViewHalf(document.getElementById("mobile-mode-switch"))){
                              $('#mobile-mode-switch').addClass('show');
                            }
                
            } else {
   if(isScrolledIntoViewHalf(document.getElementById("desktop-mode-switch"))){
                              $('#desktop-mode-switch').addClass('show');
                            }
            }
});
    
} else {

            if (isMobile) {
        
        document.addEventListener("scroll", (event) => {
   if(isScrolledIntoViewHalf(document.getElementById("bdiv1"))){
                              $('#bdiv1').addClass('show');
                            }
   if(isScrolledIntoViewHalf(document.getElementById("bdiv2"))){
                              $('#bdiv2').addClass('show');
                            }
   if(isScrolledIntoViewHalf(document.getElementById("bdiv3"))){
                              $('#bdiv3').addClass('show');
                            }
   if(isScrolledIntoViewHalf(document.getElementById("mobile-mode-switch"))){
                              $('#mobile-mode-switch').addClass('show');
                            }
        });
                
            } else {
        const scrollnav = document.querySelector("#scrollnav");
        
        scrollnav.addEventListener("scroll", (event) => {
   if(isScrolledIntoViewHalf(document.getElementById("bdiv1"))){
                              $('#bdiv1').addClass('show');
                            }
   if(isScrolledIntoViewHalf(document.getElementById("bdiv2"))){
                              $('#bdiv2').addClass('show');
                            }
   if(isScrolledIntoViewHalf(document.getElementById("bdiv3"))){
                              $('#bdiv3').addClass('show');
                            }
   if(isScrolledIntoViewHalf(document.getElementById("desktop-mode-switch"))){
                              $('#desktop-mode-switch').addClass('show');
                            }
        });
}

}

        $(window).focus(function() {
            if (!alreadydisplayed) {
            fadein(6, 0.01);
            }
        });

var cntrlIsPressed = false;
        
        $(document).keydown(function(event) {
    if (event.which == "17") {
        cntrlIsPressed = true;
    }
});

$(document).keyup(function() {
    cntrlIsPressed = false;
});
        

        $(document).on("click", "a", function(e) {
            if ((!cntrlIsPressed) && ($(this).attr('target') != "_blank")) {
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
              document.getElementById("fade-overlay").style.removeProperty("transition");
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
            }
        });
        
      //fade multiplication level
      let multp = 1;
      let imagefading = false;
  
  async function changeSlideImage(nextimage, fadeduration) {
      
      const redp = 10;
      const greenp = 49;
      const bluep = 75;
      
      //get current image
            var vartoreplace = document.getElementById("homew").style.background;
            var varSubStringImg = vartoreplace.split("\"")[1];
      
      //fade out from current image
       var timery = setInterval(function () {
        if (multp <= 0){
            clearInterval(timery);
            imagefading = true;
        }
            document.getElementById("homew").style.background = "url('"+varSubStringImg+"'), rgba(" + Math.floor(redp*multp) + ", "+ Math.floor(greenp*multp) +", "+ Math.floor(bluep*multp) +", 1)";
document.getElementById("homew").style.backgroundRepeat = "no-repeat"; 
document.getElementById("homew").style.backgroundAttachment = "fixed";  
document.getElementById("homew").style.backgroundPosition = "center"; 
document.getElementById("homew").style.backgroundBlendMode = "overlay";
document.getElementById("homew").style.backgroundSize = "cover";
        multp -= 0.01;
    }, (fadeduration/2));
    
    await new Promise(resolve => setTimeout(resolve, 2000)); // 3 sec
    
    //fade in to next image
    var timerq = setInterval(function () {
        if (multp >= 1){
            clearInterval(timerq);
            imagefading = false;
        }
            document.getElementById("homew").style.background = "url('https://hmse-unipi.or.id/img/main-slide/"+nextimage+"'), rgba(" + (redp*multp) + ", "+ (greenp*multp) +", "+ (bluep*multp) +", 1)";
document.getElementById("homew").style.backgroundRepeat = "no-repeat"; 
document.getElementById("homew").style.backgroundAttachment = "fixed";  
document.getElementById("homew").style.backgroundPosition = "center"; 
document.getElementById("homew").style.backgroundBlendMode = "overlay";
document.getElementById("homew").style.backgroundSize = "cover";
        multp += 0.01;
    }, (fadeduration/2));
  }
        
  let slideIndex = 0;
        
async function startSlides() {
  
  
  await new Promise(resolve => setTimeout(resolve, 9000)); // 3 sec
    changeSlideImage(slideimages[slideIndex], 25);

  slideIndex += 1;
  
  if (slideIndex > slideimages.length - 1) {slideIndex = 0}
  
  setTimeout(startSlides, 100); // Change image every 2 seconds
}

</script>

</html>

<?php
// Check if there is a string added after the last slash
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hmseunip_main";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function getAddress() {
  $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
  return $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

if (str_contains(getAddress(), "index.php")) {
  $noindex = str_replace('/index.php', '', getAddress());
  echo "<script>window.location.href='$noindex';</script>";
}

$path  = '/home/root/public_html/img/main-slide';
$files = scandir($path);
for ($i = 2; $i < count($files); $i++) {
    echo "<script>addToSlideShowImage('".$files[$i]."');</script>";
}
    echo "<script>startSlides();</script>";


?>
