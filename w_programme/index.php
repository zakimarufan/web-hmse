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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Work Programme - HMSE</title>

    <!-- Always fit the page horizontally so that the horizontal scrollbar won't show anymore -->
    <!-- The fade transition effect is exclusive on Desktop only -->

    <!-- Events Schedule elements:
        - Title
        - Location
        - Date and Time
        - Body contents

      -->

    <link rel="icon" type="image/x-icon" href="https://hmse-unipi.or.id/img/favicon.png">

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

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />

    <!-- IMPORT CUSTOM SCROLLBAR CSS & JS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://hmse-unipi.or.id/scrollbar.css"
    />

    <!-- FADE IN/OUT TRANSITION CSS & JS -->
    <link
    rel="stylesheet"
    type="text/css"
    href="https://hmse-unipi.or.id/fade-transition.css"
  />
    <script
      type="text/javascript"
      src="https://hmse-unipi.or.id/fade-transition.js"
    ></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="https://hmse-unipi.or.id/style.css" />
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
                class="navbar navbar-expand-lg navbar-dark shadow-sm"
                id="inav2"
              >
                <div class="container nav-isolator">
                    <a class="navbar-brand brand-hmse" href="https://hmse-unipi.or.id">
                        <svg xmlns="http://www.w3.org/2000/svg" width="78" height="17">
	<defs>
		<clipPath id="svgBrand">
  <text fill="#fff" y="19" x="5">HMSE</text>
  </clipPath>
	</defs>
</svg></a>
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
                          <ul class="dropdown-menu-s" aria-labelledby="AboutDD">
                              <div class="dropdown-background dropdown-opacity-controller" style="backdrop-filter: brightness(0.5); -webkit-backdrop-filter: brightness(0.5);"></div>
                              <div class="dropdown-background dropdown-opacity-controller dropdown-background-colour"></div>
                              <div class="dropdown-background" style="backdrop-filter: invert(); -webkit-backdrop-filter: invert();"></div>
                              <div class="dropdown-background dropdown-opacity-controller" style="backdrop-filter: brightness(2); -webkit-backdrop-filter: brightness(2);"></div>
                              <div class="dropdown-background" style="backdrop-filter: invert(); -webkit-backdrop-filter: invert();"></div>
                            <li><a class="dropdown-item" href="https://hmse-unipi.or.id/#aim">Tujuan</a></li>
                            <li><a class="dropdown-item" href="https://hmse-unipi.or.id/#visionmission">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="https://hmse-unipi.or.id/#briefhistory">Sejarah Singkat</a></li>
                            <li><a class="dropdown-item" href="https://hmse-unipi.or.id/#logophilosophy">Filosofi Logo</a></li>
                            <li><a class="dropdown-item" href=".">Program Kerja</a></li>
                            <li><a class="dropdown-item" href="https://hmse-unipi.or.id/org_struct/">Struktur Organisasi</a></li>
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="https://hmse-unipi.or.id/gallery/">Gallery</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link"
                          aria-current="page" href="https://hmse-unipi.or.id/schedule/">Events Schedule</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="https://hmse-unipi.or.id/announcements/">Announcements</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="https://hmse-unipi.or.id/news/">News</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="https://hmse-unipi.or.id/reports/">Reports</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="https://hmse-unipi.or.id/#contact">Contact</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
                <!-- NAVBAR END -->
                
    <div class="solid-bg"></div>


                <!-- WA BUTTON START -->
                <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

<link
    rel="stylesheet"
    type="text/css"
    href="https://hmse-unipi.or.id/style-ex.css"
  />
                          <style>
                            .orgstr {
    text-align: left !important;
    padding-top: 0;
    min-height: 50vh;
                            }
                            
                            .lspace li {
                                list-style-type: none;
                                margin-bottom: 2rem;
                            }
                            
                            .descrip li {
                                margin-bottom: 0;
                            }
                            
                            ol {
                                list-style-position: inside;
                                padding-left: 0;
                            }
                            
                            .collapsible {
                                  font-family: Friz-Quadrata !important;
                                  font-weight: Normal !important;
                                  text-transform: uppercase;
                                  width: 180pt;
                                  padding: 4px;
                                  color: white;
                                  margin-top: 14pt;
                                  background-color: #0a314b;
                                border: none;
                                border-radius: 100px;
                                box-shadow: 0px 3px 9px rgba(0, 0, 0, .4);
                              }
                              
                              .collapsible:active {
                                background-color: #125A8A;
                              }
                              
                              .item-content {
                                  padding-left: 0 !important;
                                  padding-right: 0 !important;
                                  margin-left: 0 !important;
                                  margin-right: 0 !important;
                                max-height: 0;
                                overflow: hidden;
                                transition: max-height 0.2s ease-out;
                              }
                              
                              .item-explain {
                                  position:relative;
                                  display: block;
                                  text-align: justify;
                                  font-family: Futura;
                                  font-style: normal;
                                  font-weight: normal;
                                  font-size: 12pt;
                                  margin-top: 14pt;
                                width: 100%;
                              }
                            
                            @media screen and (min-width: 768px) {
                            
                            .wtitle {
                                    font-size: 32px;
                                    font-family: Futura !important;
    color: #0a314b;
    font-weight: bold;
    margin-right: 1%;
                            }
                            
                                .descrip {
                                    font-family: Myriad-Pro;
                                    font-style: Italic;
                                    font-weight: bold !important;
                                    font-size: 16pt !important;
                                }
                              
                              .subhead {
                                  margin-bottom: 3rem;
                                  margin-left: 0;
                                  padding-left: 0;
                                  padding-top:5pt; 
                                  max-width: 100%; 
                                  border-bottom: 3px solid;
                                  border-image:linear-gradient(to right, #0a314b, rgba(0,0,0,0)) 1;
                              }
                            
                            }
                            
                            @media screen and (max-width: 767px) {
                            
                            .wtitle {
                                    font-size: 24px;
                                    font-family: Futura !important;
    color: #0a314b;
    font-weight: bold;
    margin-right: 1%;
                            }
                            
                                .descrip {
                                    font-family: Myriad-Pro;
                                    font-style: Italic;
                                    font-weight: bold;
                                    font-size: 14pt;
                                }
                              
                              .subhead {
                                  margin-bottom: 3rem;
                                  margin-right: 8pt;
                                  padding-left: 0;
                                  padding-top:5pt; 
                                  max-width: 100%; 
                                  border-bottom: 3px solid;
                                  border-image:linear-gradient(to right, #0a314b, rgba(0,0,0,0)) 1;
                              }
                              
                              .row {
                                  --bs-gutter-x: 0 !important;
                              }
                            
                            }
                            
                          </style>

<!-- render the button and direct it to wa.me -->
<div id="firefox_safari_filter"></div>
<i class="floating" id="wfloating">
<i class="fab fa-whatsapp fab-icon"></i>
</i>
<a onclick="window.open('https://wa.me/6285819608700/', '_blank');" class="floatingb" id="wfloatingb" target="_blank">
</a>
<script>
$(function() {
  $('#wfloatingb').hover(function() {
    $('#wfloating').css('mix-blend-mode', 'normal');
    if (!isMobile) { 
    $('#wfloating').css('transform', 'scale(1.07)');
    $('#wfloatingb').css('transform', 'scale(1.07)');
    $('#wfloating').css('box-shadow', '0px 0px 11px #25d366');
    }
  }, function() {
    // on mouseout, reset the background colour
    if (!isMobile) {
        $('#wfloating').css('mix-blend-mode', 'multiply');
    $('#wfloating').css('transform', 'scale(1)');
    $('#wfloatingb').css('transform', 'scale(1)');
    } else {
        $('#wfloating').css('opacity', '75%');
    }
    $('#wfloating').css('box-shadow', '2px 2px 3px rgba(0, 0, 0, .4)');
  });
});
  </script>
<!-- WA BUTTON END -->

                <!-- JUMBOTRON START -->
                <section id="toppage" class="jumbotron text-center">

                  <h1>Program Kerja</h1>
                  <!-- <p class="lead">Fakultas Ilmu Komputer Universitas Indonesia</p> -->
                  <div style="transform: scaleY(1.02);">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: auto;">
                    <path fill="#ffffff" fill-opacity="10" d="M 0 63.652 L 48 63.652 C 96 63.652 192 63.652 288 76.329 C 384 89.141 480 114.291 576 121.666 C 672 128.905 768 118.029 864 103.518 C 960 89.141 1056 70.789 1152 65.453 C 1248 59.913 1344 67.39 1392 70.891 L 1440 74.527 L 1440 150.656 L 1392 150.656 C 1344 150.656 1248 150.656 1152 150.656 C 1056 150.656 960 150.656 864 150.656 C 768 150.656 672 150.656 576 150.656 C 480 150.656 384 150.656 288 150.656 C 192 150.656 96 150.656 48 150.656 L 0 150.656 L 0 63.652 Z"></path>
                  </svg>
                  </div>
                </section>
                <!-- JUMBOTRON END -->

                <!-- WORK PROGRAM START-->
                <div style="background-color: white; width: 100%;">
                  <section class="container orgstr">
                    <div class="row">
                        
                        <ul class="lspace">
                        <li><h2 class="wtitle">LDKO (Latihan Dasar Kepemimpinan Organisasi)</h2>
                        <p class="descrip">Membentuk Jiwa Kepemimpinan yang Disiplin dan Berintegritas</p>
                        Tanggal Pelaksanaan: <b>26 - 27 Oktober 2024</b><br>
                        </li>
                        <li><h2 class="wtitle">Workshop dan Pelatihan</h2>
                        <p class="descrip">Meningkatkan keterampilan teknis terkait dengan pengembangan perangkat lunak</p>
                        Tanggal Pelaksanaan: <b>9 & 16 Februari 2025</b><br>
                        Acara: <b><a href="https://hmse-unipi.or.id/schedule/bootcamp-javascript-event-ticketing-2380591349">Bootcamp Javascript System Event Ticketing</a></b>
                        </li>
                        <li><h2 class="wtitle">Seminar dan Diskusi</h2>
                        <p class="descrip">Mengundang pembicara ahli dan mengadakan diskusi topik terkini dalam dunia ilmu komputer khususnya software engineering</p>
                        Tanggal Pelaksanaan: <b>-</b><br>
                        Keterangan: <b>-</b>
                        </li>
                        <li><h2 class="wtitle">Bootcamp</h2>
                        <p class="descrip">Materi Pembelajaran dan pembekalan yang diadakan lebih dari 1 pertemuan, seputar rekayasa perangkat lunak/ pemrograman</p>
                        Tanggal Pelaksanaan: <b>-</b><br>
                        Keterangan: <b>-</b>
                        </li>
                        <li><h2 class="wtitle">Makrab (Malam Keakraban)</h2>
                        <p class="descrip">Refereshing/jalan-jalan bersama Kaprodi SE dalam rangka belajar & mengajak kepada mahasiswa/i yang ada di prodi SE untuk ikut serta berkontribusi dalam acara makrab tersebut</p>
                        Tanggal Pelaksanaan: <b>-</b><br>
                        Keterangan: <b>-</b>
                        </li>
                        </ul>
                      
                      <div class="subhead">
                          <h2>ROADMAP KURIKULUM LITBANG HMSE</h2></div>
                        <ul class="lspace">
                            <li><h2 class="wtitle">Pemrograman Web Frontend</h2>
                                <ol class="descrip">
                                    
                                    <button type="button" class="collapsible"><li>HTML</li></button>
                              <div class="item-content">
                                  <div class="item-explain">
                                      
                                      <img src="https://hmse-unipi.or.id/img/w_programme/logo html.png" alt="Logo HTML" style="max-width: 100%; margin-bottom:1.25rem;">
                              
                              <p><b>Hypertext Markup Language</b> atau <b>HTML</b> adalah bahasa markup standar yang digunakan untuk membuat halaman website dan aplikasi web. Sejarah HTML diciptakan oleh Tim Berners-Lee, seorang ahli fisika di lembaga penelitian CERN yang berlokasi di Swiss.</p>
                            <p>Versi pertama HTML dirilis oleh Tim Berners Lee pada tahun 1991, yang memiliki 18 tag. Sejak saat itu, setiap kali ada versi barunya, pasti akan selalu ada tag dan attribute (tag modifier) yang juga baru.</p>

                              
                                    </div>
                            </div>
                                    
                                    <button type="button" class="collapsible"><li>CSS</li></button>
                              <div class="item-content">
                                  <div class="item-explain">
                                      
                                      <img src="https://hmse-unipi.or.id/img/w_programme/logo css.png" alt="Logo CSS" style="max-width: 100%; width: 215px; margin-bottom:1.25rem;">
                              
                              <p><b>CSS</b> adalah singkatan dari <b>Cascading Style Sheets</b>, artinya sebuah bahasa sederhana yang digunakan untuk menambahkan gaya/styling (misalnya, font, warna, spasi) ke sebuah halaman website. Jika diibaratkan, HTML merupakan sebuah kerangka, CSS ini bertindak sebagai kulit/penutup dari kerangka tersebut.</p>
                              <figure><img src="https://hmse-unipi.or.id/img/w_programme/Untitled.png" alt="Penjelasan" style="width:fit-content; max-width:100%; position:relative; display:block; margin-left: auto; margin-right: auto;"><figcaption>Penjelasan peranan HTML, CSS, dan JavaScript pada website.</figcaption></figure>
                              
                                    </div>
                            </div>
                                    
                                    <button type="button" class="collapsible"><li>JavaScript</li></button>
                              <div class="item-content">
                                  <div class="item-explain">
                                      
                                      <img src="https://hmse-unipi.or.id/img/w_programme/Logo-Javascript.png" alt="Logo JavaScript" style="max-width: 100%; width: 450px; margin-bottom:1.25rem;">
                              
                              <p><b>JavaScript</b>  (disingkat <b>JS</b>) adalah suatu bahasa pemrograman tingkat tinggi dan dinamis. JavaScript populer di internet dan dapat bekerja di sebagian besar penjelajah web populer seperti Google Chrome, Internet Explorer (IE), Mozilla Firefox, Netscape dan Opera. Kode JavaScript dapat disisipkan dalam halaman web menggunakan tag script. JavaScript merupakan salah satu teknologi inti World Wide Web selain HTML dan CSS. JavaScript membantu membuat halaman web interaktif dan merupakan bagian aplikasi web yang esensial.</p>
                              <p>Pada tahun 1994 JavaScript mulai dikenal, pada saat itu web dan internet sudah mulai berkembang. JavaScript didesain oleh Brendan Eich yang merupakan karyawan Netscape. Transformasi nama JavaScript, dimulai dari Mocha, Mona, LiveScript, hingga akhirnya resmi bernama JavaScript. </p>
                              <p>Saat ini javascript tidak hanya digunakan di sisi client (browser) saja. Javascript juga digunakan pada server, console, program desktop, mobile, IoT, game, dan lain-lain.</p>
                              
                                    </div>
                            </div>
                                </ol>
                            <li><h2 class="wtitle">Pemrograman Web Backend</h2>
                                <ol class="descrip">
                                    
                                    <button type="button" class="collapsible"><li>PHP</li></button>
                              <div class="item-content">
                                  <div class="item-explain">
                                      
                                      <img src="https://hmse-unipi.or.id/img/w_programme/2000px-PHP-logo.svg.png" alt="Logo PHP" style="max-width: 100%; width: 235px; margin-bottom:1.25rem;">
                              
                              <p><b>PHP</b> adalah bahasa scripting server-side, Bahasa pemrograman yang digunakan untuk mengembangkan situs web statis atau situs web dinamis atau aplikasi Web. PHP singkatan dari <b>Hypertext Pre-processor</b>, yang sebelumnya disebut <b>Personal Home Pages</b>.</p>
                              <p>PHP digunakan karena untuk membuat website dinamis bisa digunakan untuk menyimpan data ke dalam database, membuat halaman yang dapat berubah-ubah sesuai dengan input  user, memproses form, dll.</p>
                              <p>Bahasa Pemograman PHP ditemukan pada tahun 1994 oleh Rasmus Lerdorf versi pertama PHP tidak dirilis ke publik, melainkan digunakan oleh Rasmus Lerdorf untuk melacak siapa saja yang melihat resume onlinenya pada homepage websitenya. Versi pertama yang digunakan oleh kebanyakan orang tersedia sekitar awal tahun 1995 dan dikenal sebagai Personal Home Page Tools.</p>
                              
                                    </div>
                            </div>
                            
                            <button type="button" class="collapsible" style="text-transform:inherit !important;"><li>MySQL</li></button>
                              <div class="item-content">
                                  <div class="item-explain">
                                      
                                      <img src="https://hmse-unipi.or.id/img/w_programme/kisspng-mysql-database-server-table-extract-transform-lo-mysql-5b2a642a61e0b7.7271112015295048104009-.png" alt="Logo MySQL" style="max-width: 100%; width: 315px; margin-bottom:1.25rem;">
                              
                              <p><b>MySQL</b> merupakan salah satu Database Management System yang menggunakan bahasa <b>SQL</b> <i>(Structured Query Language)</i>. MySQL terbagi menjadi dua jenis lisensi, yaitu Free Software (bersifat gratis) dan Shareware (software berpemilik dengan penggunaan yang terbatas. Meskipun telah ada sejak tahun 1995, MySQL masih layak dipertimbangkan untuk menjadi pilihan karena penggunaannya yang cukup mudah.</p>
                              <p>Awalnya, MySQL merupakan proyek UNIREG lanjutan yang dikembangkan oleh seorang ahli, Michael Monty dan perusahaan software asal Swedia, TcX. Namun, sangat disayangkan UNIREG belum dapat dipakai di website karena belum kompatibel dengan database dinamis website. Perusahaan TcX mencari alternatif lain dan menemukan MySQL yang dikembangkan oleh David Hughes.</p>
                            <p>Sehingga pada akhirnya TcX, Michael Monty, dan David Hughes bekerja sama untuk mengembangkan sistem database yang baru. Pada tahun 1995, MySQL pun diluncurkan seperti yang dikenal seperti saat ini dan perkembangan MySQL sekarang diawasi atau berada di bawah pihak Oracle.</p>
                            <p>MySQL sebagai salah satu bentuk Database Management System (DBMS), menggunakan perintah SQL. Saat ini, MySQL menjadi salah satu banyak digunakan dalam pembuatan aplikasi berbasis website. Termasuk ke dalam Relational Database Management System (RDBMS) membuat MySQL menggunakan tabel, kolom serta baris di dalam struktur database-nya.</p>
                              
                                    </div>
                            </div>
                                    
                                </ol>
                            </li>
                            <li><h2 class="wtitle">Framework PHP</h2>
                                <ol class="descrip">
                                    
                                    <button type="button" class="collapsible"><li>CodeIgniter</li></button>
                              <div class="item-content">
                                  <div class="item-explain">
                                      
                             
                              
                                    </div>
                            </div>
                            
                            <button type="button" class="collapsible"><li>Laravel</li></button>
                              <div class="item-content">
                                  <div class="item-explain">
                                      
                                     
                                       
                                    </div>
                            </div>
                                    
                                </ol>
                            </li>
                            <li><h2 class="wtitle">Framework JavaScript</h2>
                                <ol class="descrip">
                                    
                                    <button type="button" class="collapsible"><li>Node.js</li></button>
                              <div class="item-content">
                                  <div class="item-explain">
                                      
                             
                              
                                    </div>
                            </div>
                            
                            <button type="button" class="collapsible"><li>React</li></button>
                              <div class="item-content">
                                  <div class="item-explain">
                                      
                                     
                                       
                                    </div>
                            </div>
                            
                            <button type="button" class="collapsible"><li>JQuery</li></button>
                              <div class="item-content">
                                  <div class="item-explain">
                                      
                                     
                                       
                                    </div>
                            </div>
                                    
                                </ol>
                            </li>
                            <!--li><h2 class="wtitle">UI/UX Design</h2>
                                
                            </li>
                            <li><h2 class="wtitle">Framework PHP</h2>
                                <ol class="descrip">
                                    <li>Laravel</li>
                                    <li>CodeIgniter</li>
                                </ol>
                            </li>
                            <li><h2 class="wtitle">Turunan JavaScript</h2>
                                <ol class="descrip">
                                    <li>Node.js</li>
                                    <li>ReactJS</li>
                                    <li>JQuery</li>
                                </ol>
                            </li>
                            <li><h2 class="wtitle">IoT (Internet of Things)</h2>
                                
                            </li>
                            <li><h2 class="wtitle">SDLC (Software Development Lifecycle)</h2>
                                
                            </li>
                            <li><h2 class="wtitle">AI (Artificial Intelligence)</h2>
                                
                            </li-->
                            
                        </ul>
                      
                    </div>
                  </section>
                  </div>
                <!-- WORK PROGRAM END -->

<div style="transform: scaleY(1.02); background-color: white;">
       <svg id="footersvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 -47 1440 162">
        <path fill="#0a314b" fill-opacity="10" d="M -0.848 50.584 L 47.152 44.263 C 95.152 37.942 191.152 25.3 287.152 16.886 C 383.152 8.313 479.152 4.362 575.152 18.979 C 671.152 33.596 767.152 67.571 863.152 77.961 C 959.152 88.509 1055.152 75.867 1151.152 77.961 C 1247.152 80.213 1343.152 96.805 1391.152 105.377 L 1439.152 113.792 L 1391.152 113.792 C 1343.152 113.792 1247.152 113.792 1151.152 113.792 C 1055.152 113.792 959.152 113.792 863.152 113.792 C 767.152 113.792 671.152 113.792 575.152 113.792 C 479.152 113.792 383.152 113.792 287.152 113.792 C 191.152 113.792 95.152 113.792 47.152 113.792 L -0.848 113.792 L -0.848 50.584 Z"></path>
      </svg>
</div>
              <!-- FOOTER START -->
              <footer
                class="text-white text-center pb-5"
                style="background-color: #0a314b"
              >
                
<div style="transform: scaleY(1.02);">
  <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 157">
    <path fill="#0a314b" fill-opacity="1" d="M0,96L48,80C96,64,192,32,288,48C384,64,480,128,576,154.7C672,181,768,171,864,144C960,117,1056,75,1152,58.7C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"/>
  </svg>
</div>

                  <p>
                    <b>Copyright © 2024<br>Himpunan Mahasiswa Software Engineering<br><a href="https://unipem.ac.id/" style="text-decoration:none; color:inherit">Universitas Insan Pembangunan Indonesia</a></b><br>
                    <br>
                    <span style="margin:4px;"><a
                      href="https://www.instagram.com/hmse_unipi/" target="_blank"
                      style="cursor: pointer; text-decoration: none; font-family: Myriad-Pro; font-style: italic;"
                      class="text-white fw-bold" target="_blank"
                      >Instagram</a
                    ></span>
                    <span style="margin:4px;">
                    <a
                      href="mailto:hmseunipi@gmail.com" target="_blank"
                      style="cursor: pointer; text-decoration: none; font-family: Myriad-Pro; font-style: italic;"
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
  src="https://hmse-unipi.or.id/simplebar.min.js"
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
            fadein(6, 0.01); //homepage fade in, for other pages use fadein(6, 0.01)
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
            document.getElementById("firefox_safari_filter").remove();
            } else {
                if ((BrowserDetect.browser === "Safari") || (BrowserDetect.browser === "Firefox")) {
                  document.getElementById("firefox_safari_filter").classList.add("floating-firefox-safari-filter");
              } else {
                  document.getElementById("firefox_safari_filter").remove();
              }
            }
        });

        

        const scrollnav = document.querySelector("#scrollnav");

        $(window).focus(function() {
            if (!alreadydisplayed) {
            fadein(6, 0.01);
            }
        });
        
        var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}

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
        

</script>

</html>