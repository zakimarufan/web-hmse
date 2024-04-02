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
    <title>Organization Structure - HMSE</title>

    <!-- Always fit the page horizontally so that the horizontal scrollbar won't show anymore -->
    <!-- The fade transition effect is exclusive on Desktop only -->

    <!-- Events elements:
        - Title
        - Location
        - Date and Time
        - Body contents

      -->

    <link rel="icon" type="image/x-icon" href="http://localhost/web-hmse/img/favicon.png">

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
      href="http://localhost/web-hmse/scrollbar.css"
    />

    <!-- FADE IN/OUT TRANSITION CSS & JS -->
    <link
    rel="stylesheet"
    type="text/css"
    href="http://localhost/web-hmse/fade-transition.css"
  />
    <script
      type="text/javascript"
      src="http://localhost/web-hmse/fade-transition.js"
    ></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="http://localhost/web-hmse/style.css" />
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
                    <a class="navbar-brand" href="http://localhost/web-hmse/">HMSE</a>
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
                            class="nav-link"
                            href="http://localhost/web-hmse/"
                            >Home</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="http://localhost/web-hmse/#about">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="http://localhost/web-hmse/#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link"
                          aria-current="page" href="http://localhost/web-hmse/schedule/">Schedule</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="http://localhost/web-hmse/announcements/">Announcements</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="http://localhost/web-hmse/news/">News</a>
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
                <section id="toppage" class="jumbotron text-center">

                  <h1>Struktur Organisasi</h1>
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

                <!-- ORGANIZATION STRUCTURE START-->
                  <div class="container">
                    <div class="row text-center mb-3">
                      <div class="col">
                        
                        
                        <img src="http://localhost/web-hmse/img/sk_hmse.png" style="max-width: 100%"></img>


                      </div>
                    </div>
                  </div>
                <!-- ORGANIZATION STRUCTURE END -->


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
  src="http://localhost/web-hmse/simplebar.min.js"
  ></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

  //PER-PAGE SCRIPT
        const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

        $(document).ready(function() {
            alreadydisplayed = true;
            fadein(6, 0.01); //homepage fade in, for other pages use fadein(6, 0.01)
            if (isMobile) {
              document.getElementById("fade-overlay").remove();
              //document.getElementById("horizontal_scrollbar").remove();
              //document.getElementById("vertical_scrollbar").remove();
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