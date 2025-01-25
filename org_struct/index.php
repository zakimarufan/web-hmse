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
    <title>Organization Structure - HMSE</title>

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
                            <li><a class="dropdown-item" href="https://hmse-unipi.or.id/w_programme/">Program Kerja</a></li>
                            <li><a class="dropdown-item" href=".">Struktur Organisasi</a></li>
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
    min-height: 50vh;
    background-color: rgba(255,255,255,1);
                            }
                            
                            .desktopdetails {
                                font-family: Myriad-Pro;
                                font-style: italic;
                                color: white;
                                margin: 0;
                                transform: translateY(16pt);
                            }
                            

@media (hover:hover) {
    .desktopfiller {
        background-color: white; min-width: 1314px;
    }
}
@media (hover:none), (hover:on-demand) {
    .desktopfiller {
        transform: translateY(-32pt);
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

                  <h1>Struktur Organisasi</h1>
                  <p class="desktopdetails" id="desktopdetails">(Arahkan kursor pada kotak hirarki untuk menampilkan tooltip info lengkap mengenai anggota BPH)</p>
                  <!-- <p class="lead">Fakultas Ilmu Komputer Universitas Indonesia</p> -->
                  <div style="transform: scaleY(1.02);">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: auto;">
                    <path fill="#ffffff" fill-opacity="10" d="M 0 63.652 L 48 63.652 C 96 63.652 192 63.652 288 76.329 C 384 89.141 480 114.291 576 121.666 C 672 128.905 768 118.029 864 103.518 C 960 89.141 1056 70.789 1152 65.453 C 1248 59.913 1344 67.39 1392 70.891 L 1440 74.527 L 1440 150.656 L 1392 150.656 C 1344 150.656 1248 150.656 1152 150.656 C 1056 150.656 960 150.656 864 150.656 C 768 150.656 672 150.656 576 150.656 C 480 150.656 384 150.656 288 150.656 C 192 150.656 96 150.656 48 150.656 L 0 150.656 L 0 63.652 Z"></path>
                  </svg>
                  </div>
                </section>
                <!-- JUMBOTRON END -->

                <!-- ORGANIZATION STRUCTURE START-->
                <div class="desktopfiller">
                  <div class="container orgstr">
                    <div class="row text-center">
                        <!-- DESKTOP-->
                      <div class="col" id="desktop-mode-view">
                          
                          <!-- ITEM HOVER BOX STYLE -->
                          <style>
                              
                              /* OTHER BROWSERS */
                              .hoverbox {
                                  position:fixed !important;
                                  display: block;
                                visibility: hidden;
                                opacity: 0;
                                transform: scale(0.4);
                                    background-color: rgba(0, 0, 0, .1);
                                box-shadow: 0px 3px 12px rgba(0, 0, 0, .8);
                                backdrop-filter: blur(24px) contrast(1.3);
                                -webkit-backdrop-filter: blur(24px) contrast(1.3);
                                border-radius: 8px;
                                max-width: 519px;
                                overflow: hidden;
                                z-index: 6;
                                transition: opacity 500ms, transform 500ms ease-in-out, visibility 250ms, left 250ms linear, right 250ms linear, top 250ms linear, bottom 250ms linear;
                              }
                              
                              .hoverbox:hover {
                                opacity: 1;
                                transform: scale(1);
                                visibility: visible;
                              }
                              
                              /* CHROME-BASED ONLY
                              @supports(-webkit-tap-highlight-color: black) {
                              .hoverbox {
                                  position:fixed !important;
                                  display: block;
                                visibility: hidden;
                                opacity: 0;
                                transform: scale(0.4);
                                    background-color: rgba(220, 220, 220, 1);
                                box-shadow: 0px 3px 12px rgba(0, 0, 0, .8);
                                backdrop-filter: blur(24px);
                                -webkit-backdrop-filter: blur(24px);
                                mix-blend-mode: Multiply;
                                border-radius: 8px;
                                max-width: 38%;
                                overflow: hidden;
                                transition: opacity 500ms, backdrop-filter 500ms, visibility 250ms, left 250ms linear, right 250ms linear, top 250ms linear, bottom 250ms linear, transform 500ms ease-in-out;
                              } */
                              
                              .hoverbox:before {
                                backdrop-filter: blur(24px) contrast(1.3);
                                -webkit-backdrop-filter: blur(24px) contrast(1.3);
                              }
                              
                              .hoverbox:after {
                                backdrop-filter: blur(24px) contrast(1.3);
                                -webkit-backdrop-filter: blur(24px) contrast(1.3);
                              }
                              
                              }
                              
                          </style>
                          
                          <!-- ITEM HOVER BOX -->
                          <div class="item hoverbox" id="hoveritembox" onmouseleave="hoverexit();">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 id="hovername" style="font-size: 24pt !important; color: #0a314b; mix-blend-mode:overlay;  text-shadow: 0px 0px 12px white;"></h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 id="hoverdept" style="margin-top:-1.25rem; font-weight: bold !important; mix-blend-mode:overlay; padding-bottom: 8pt; "></h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img id="hoverphoto" style="max-width: 100%; padding-right: 9%; mix-blend-mode:normal;">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div id="hoverinfo" style="filter:brightness(1.4);">
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                        
                        <div style="margin-top: 1.5rem;">
                        
                        <svg id="orggraph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="895px" height="1038px" viewBox="-0.5 -0.5 845 1090" style="zoom: 120%; margin-left: 1%;">
<defs>
<style type="text/css">ul { margin-top: 0px; margin-bottom: 10px; }
ol { margin-top: 0px; margin-bottom: 10px; }
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 { margin-bottom: .5rem; font-weight: 500; line-height: 1.2; }
h1, h2, h3, h4, h5, h6 { margin-top: 0; margin-bottom: .5rem; }
.h1, h1 { font-size: 2.5rem; }
h2 { font-size: 1.5em; font-weight: bold; }
h3 { font-size: 1.17em; font-weight: bold; }
.h4, h4 { font-size: 1.5rem; }
.h5, h5 { font-size: 1.25rem; }
.h6, h6 { font-size: 1rem; }
p { margin-top: 0; margin-bottom: 1rem; }
a { color: #007bff; }
</style>
<style type="text/css">@import url("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap");
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap");
</style>
</defs>
<g>
<g shape-node="" onmouseover="hoveritem('General_vice');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-1" x="328.74" y="211" width="172.28" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-23" x="328.04" y="97" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-24" d="M 414.8 211 L 414.8 182.6 L 414.8 166" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
</g>
<g shape-node="" onmouseover="hoveritem('1st_Secretary');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-27" x="-29" y="292" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-28" d="M 328.74 245.6 L 54 245.6 L 54 292" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
</g>
<g shape-node="" onmouseover="hoveritem('2nd_Secretary');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-30" x="-29" y="361" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="" onmouseover="hoveritem('Exchequer');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-34" x="690.04" y="319" width="172.98" height="82" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-35" d="M 501.02 245.6 L 776 245.6 L 776 319" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
</g>
<g shape-node="" onmouseover="hoveritem('1st_Hum_Res');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-36" x="-29" y="492" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-37" d="M 414.8 280 L 414.8 464 L 55 464 L 55 492" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
</g>
<g shape-node="" onmouseover="hoveritem('2nd_Hum_Res');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-38" x="-29" y="561" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="" onmouseover="hoveritem('Biz_Funder');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-40" x="690.03" y="519" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-41" d="M 414.8 280 L 414.8 464 L 776 464 L 776 519" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
</g>
<g shape-node="" onmouseover="hoveritem('1st_Pub_Rel');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-42" x="-29" y="760" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-43" d="M 414.8 280 L 414.8 661 L 57 661 L 57 760" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
</g>
<g shape-node="" onmouseover="hoveritem('2nd_Pub_Rel');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-44" x="-29" y="829" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="" onmouseover="hoveritem('3rd_Pub_Rel');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-46" x="-29" y="898" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="" onmouseover="hoveritem('RnD_chief');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-48" x="328.74" y="691" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-49" d="M 414.8 280 L 414.8 554 L 414.8 691" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
</g>
<g shape-node=""onmouseover="hoveritem('RnD_vice');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-50" x="328.74" y="760" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="" onmouseover="hoveritem('Rnd_1st');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-52" x="328.74" y="829" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="" onmouseover="hoveritem('Rnd_2nd');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-54" x="328.74" y="898" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="" onmouseover="hoveritem('Rnd_3rd');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-56" x="328.74" y="967" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="" onmouseover="hoveritem('1st_Comm_info');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-58" x="690.04" y="691" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="" text-node="">
<g cell-id="EpU-Q-2c0rqgZvnUK9TC-58" transform="translate(-0.5 -0.5)">
<switch cell-id="EpU-Q-2c0rqgZvnUK9TC-58">
<foreignObject cell-id="EpU-Q-2c0rqgZvnUK9TC-58" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 726px; margin-left: 691px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; ">
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="cQprJomB4hAQBAAn" d="M743.15625,731.4125 h66.671875"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="700">
<textPath xlink:href="#cQprJomB4hAQBAAn" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">KOMINFO 1</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-59" d="M 414.8 280 L 414.8 661 L 776 661 L 776 691" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
</g>
<g shape-node="" onmouseover="hoveritem('2nd_Comm_Info');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-60" x="690.04" y="760" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="" text-node="">
<g cell-id="EpU-Q-2c0rqgZvnUK9TC-60" transform="translate(-0.5 -0.5)">
<switch cell-id="EpU-Q-2c0rqgZvnUK9TC-60">
<foreignObject cell-id="EpU-Q-2c0rqgZvnUK9TC-60" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 795px; margin-left: 691px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; ">
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="CQprJomB4hAQBAAo" d="M743.15625,800.4125 h66.671875"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="700">
<textPath xlink:href="#CQprJomB4hAQBAAo" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">KOMINFO 2</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="" onmouseover="hoveritem('3rd_Comm_Info');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-62" x="690.04" y="829" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="" text-node="">
<g cell-id="EpU-Q-2c0rqgZvnUK9TC-62" transform="translate(-0.5 -0.5)">
<switch cell-id="EpU-Q-2c0rqgZvnUK9TC-62">
<foreignObject cell-id="EpU-Q-2c0rqgZvnUK9TC-62" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 864px; margin-left: 691px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; ">
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="SQprJomB4hAQBAAp" d="M743.15625,869.4125 h66.671875"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="700">
<textPath xlink:href="#SQprJomB4hAQBAAp" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">KOMINFO 3</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="" onmouseover="hoveritem('4th_Comm_Info');">
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-64" x="690.04" y="898" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="" text-node="">
<g cell-id="EpU-Q-2c0rqgZvnUK9TC-64" transform="translate(-0.5 -0.5)">
<switch cell-id="EpU-Q-2c0rqgZvnUK9TC-64">
<foreignObject cell-id="EpU-Q-2c0rqgZvnUK9TC-64" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 933px; margin-left: 691px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; ">
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="yQprJomB4hAQBAAq" d="M743.15625,938.4125 h66.671875"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="700">
<textPath xlink:href="#yQprJomB4hAQBAAq" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">KOMINFO 4</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="" onmouseover="hoveritem('5th_Comm_Info');"> <!-- 5TH COMMUNICATOR INFORMATOR -->
<rect cell-id="EpU-Q-2c0rqgZvnUK9TC-66" x="690.04" y="967" width="172.98" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="" text-node="">
<g cell-id="EpU-Q-2c0rqgZvnUK9TC-66" transform="translate(-0.5 -0.5)">
<switch cell-id="EpU-Q-2c0rqgZvnUK9TC-66">
<foreignObject cell-id="EpU-Q-2c0rqgZvnUK9TC-66" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 1002px; margin-left: 691px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; ">
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="KQprJomB4hAQBAAr" d="M743.15625,1007.4125 h66.671875"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="700">
<textPath xlink:href="#KQprJomB4hAQBAAr" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">KOMINFO 5</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="" onmouseover="hoveritem('General_chief');"> <!-- GENERAL CHIEF -->
<rect cell-id="eG40mamMxs6arq8eiBQ4-1" x="328.04" y="97" width="172.98" height="69" fill="#ffffff" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-2" x="328.04" y="97" width="172.98" height="34" fill="#0a314b" stroke="none" pointer-events="all"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-2" d="M 328.04 97 M 501.02 97 M 501.02 131 M 328.04 131" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-3" x="328.04" y="97" width="173" height="34" fill="none" stroke="none" pointer-events="all"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-3" d="M 328.04 97 M 501.04 97 M 501.04 131 M 328.04 131" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-3" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-3">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-3" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 114px; margin-left: 329px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: all; font-weight: bold; white-space: normal; word-wrap: normal; ">
<b><font color="#ffffff">
KETUA
</font></b>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="6QprJomB4hAQBAAs" d="M393.828125,118.4125 h41.34375"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#6QprJomB4hAQBAAs" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">KETUA</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-4" d="M 328.04 131 M 501.02 131 M 501.02 166 M 328.04 166" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-5" d="M 328.04 131 M 501.04 131 M 501.04 166 M 328.04 166" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-5" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-5">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-5" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 149px; margin-left: 329px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Muhamad Luthfian</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="GQprJomB4hAQBAAt" d="M364.796875,154.4125 h99.40625"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#GQprJomB4hAQBAAt" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Muhamad Luthfian</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-16" x="329.09" y="211" width="171.58" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-17" x="329.09" y="211" width="171.58" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-17" d="M 329.09 211 M 500.67 211 M 500.67 245 M 329.09 245" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-18" d="M 329.09 211 M 501.09 211 M 501.09 245 M 329.09 245" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-18" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-18">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-18" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 170px; height: 1px; padding-top: 228px; margin-left: 330px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<b>
<font color="#ffffff">WAKIL KETUA</font>
</b>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="mQprJomB4hAQBAAu" d="M373.4375,232.4125 h83.125"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#mQprJomB4hAQBAAu" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">WAKIL KETUA</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-19" d="M 329.09 245 M 500.67 245 M 500.67 280 M 329.09 280" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-20" d="M 329.09 245 M 501.09 245 M 501.09 280 M 329.09 280" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-20" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-20">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-20" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 170px; height: 1px; padding-top: 263px; margin-left: 330px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Muhammad Alif Syahputra</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="2QprJomB4hAQBAAv" d="M344.625,268.4125 h140.75"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#2QprJomB4hAQBAAv" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Muhammad Alif Syahputra</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-21" x="-29" y="292" width="172.98" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-22" x="-29" y="292" width="172.98" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-22" d="M 0.04 292 M 173.02 292 M 173.02 326 M 0.04 326" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-23" d="M 0.04 292 M 173.04 292 M 173.04 326 M 0.04 326" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-23" transform="translate(-29.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-23">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-23" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 309px; margin-left: 1px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<b>
<font color="#ffffff">SEKRETARIS 1</font>
</b>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="uQprJomB4hAQBAAw" d="M43.265625,313.4125 h86.46875"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#uQprJomB4hAQBAAw" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">SEKRETARIS 1</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-24" d="M 0.04 326 M 173.02 326 M 173.02 361 M 0.04 361" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-25" d="M 0.04 326 M 173.04 326 M 173.04 361 M 0.04 361" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-25" transform="translate(-29.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-25">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-25" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 344px; margin-left: 1px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Riani Eka Putri</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="eQprJomB4hAQBAAx" d="M46.8125,349.4125 h79.375"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#eQprJomB4hAQBAAx" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Riani Eka Putri</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-26" x="-29" y="361" width="173.02" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-27" x="-29" y="361" width="173.02" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-27" d="M 0.04 361 M 173.06 361 M 173.06 395 M 0.04 395" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-28" d="M 0.04 361 M 173.04 361 M 173.04 395 M 0.04 395" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-28" transform="translate(-29.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-28">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-28" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 378px; margin-left: 1px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<b>
<font color="#ffffff">SEKRETARIS 2</font>
</b>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="BQprJomB4hAQBAAy" d="M43.265625,382.4125 h86.46875"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#BQprJomB4hAQBAAy" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">SEKRETARIS 2</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-29" d="M 0.04 395 M 173.06 395 M 173.06 430 M 0.04 430" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-30" d="M 0.04 395 M 173.04 395 M 173.04 430 M 0.04 430" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-30" transform="translate(-29.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-30">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-30" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 413px; margin-left: 1px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Neysha Aulia Rahmania</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="RQprJomB4hAQBAAz" d="M22.453125,418.4125 h128.09375"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#RQprJomB4hAQBAAz" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Neysha Aulia Rahmania</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-31" x="-29" y="492" width="172.99" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-32" x="-29" y="492" width="172.99" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-32" d="M 0.04 492 M 173.03 492 M 173.03 526 M 0.04 526" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-33" d="M 0.04 492 M 173.04 492 M 173.04 526 M 0.04 526" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-33" transform="translate(-29.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-33">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-33" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 509px; margin-left: 1px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<b>
<font color="#ffffff">SDM 1</font>
</b>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="xQprJomB4hAQBAA0" d="M68.15625,513.4125 h36.6875"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#xQprJomB4hAQBAA0" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">SDM 1</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-34" d="M 0.04 526 M 173.03 526 M 173.03 561 M 0.04 561" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-35" d="M 0.04 526 M 173.04 526 M 173.04 561 M 0.04 561" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-35" transform="translate(-29.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-35">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-35" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 544px; margin-left: 1px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Suci Jannatun Anggraeni</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="pQprJomB4hAQBAA1" d="M19.765625,549.4125 h133.453125"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#pQprJomB4hAQBAA1" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Suci Jannatun Anggraeni</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-36" x="690.05" y="319" width="172.96" height="81.99" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-37" x="690.05" y="319" width="172.96" height="40" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-37" d="M 690.05 319 M 863.01 319 M 863.01 359 M 690.05 359" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-38" d="M 690.05 319 M 863.05 319 M 863.05 359 M 690.05 359" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-38" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-38">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-38" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 339px; margin-left: 691px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 36px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<b>
<font color="#ffffff">BENDAHARA</font>
</b>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="ZQprJomB4hAQBAA2" d="M737.828125,343.4125 h77.34375"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#ZQprJomB4hAQBAA2" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">BENDAHARA</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-39" d="M 690.05 359 M 863.01 359 M 863.01 401 M 690.05 401" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-40" d="M 690.05 359 M 863.05 359 M 863.05 401 M 690.05 401" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-40" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-40">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-40" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 380px; margin-left: 691px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 38px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Raden Ayu Amalia</br>Elwanda</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="5QprJomB4hAQBAA3" d="M702.875,385.4125 h147.234375"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#5QprJomB4hAQBAA3" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Raden Ayu Amalia Elwanda</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-41" x="-29" y="560.99" width="173" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-42" x="-29" y="560.99" width="173" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-42" d="M 0.04 560.99 M 173.04 560.99 M 173.04 594.99 M 0.04 594.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-43" d="M 0.04 560.99 M 173.04 560.99 M 173.04 594.99 M 0.04 594.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-43" transform="translate(-29.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-43">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-43" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 578px; margin-left: 1px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<b>
<font color="#ffffff">SDM 2</font>
</b>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="lQprJomB4hAQBAA4" d="M68.15625,582.4125 h36.6875"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#lQprJomB4hAQBAA4" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">SDM 2</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-44" d="M 0.04 594.99 M 173.04 594.99 M 173.04 629.99 M 0.04 629.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-45" d="M 0.04 594.99 M 173.04 594.99 M 173.04 629.99 M 0.04 629.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-45" transform="translate(-29.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-45">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-45" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 612px; margin-left: 1px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Yesih Sustari</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="1QprJomB4hAQBAA5" d="M51.6875,617.4125 h69.609375"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#1QprJomB4hAQBAA5" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Yesih Sustari</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-46" x="690.05" y="519" width="173" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-47" x="690.05" y="519" width="173" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-47" d="M 690.05 519 M 863.05 519 M 863.05 553 M 690.05 553" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-48" d="M 690.05 519 M 863.05 519 M 863.05 553 M 690.05 553" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-48" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-48">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-48" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 536px; margin-left: 691px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<b>
<font color="#ffffff">DANA USAHA</font>
</b>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="NQprJomB4hAQBAA6" d="M736.375,540.4125 h80.234375"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#NQprJomB4hAQBAA6" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">DANA USAHA</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-49" d="M 690.05 553 M 863.05 553 M 863.05 588 M 690.05 588" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-50" d="M 690.05 553 M 863.05 553 M 863.05 588 M 690.05 588" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-50" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-50">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-50" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 571px; margin-left: 691px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Ahmad Jahroni</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="dQprJomB4hAQBAA7" d="M736.140625,576.4125 h80.71875"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#dQprJomB4hAQBAA7" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Ahmad Jahroni</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-51" x="-29" y="760" width="173.03" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-52" x="-29" y="760" width="173.03" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-52" d="M 0.04 760 M 173.07 760 M 173.07 794 M 0.04 794" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-53" d="M 0.04 760 M 173.04 760 M 173.04 794 M 0.04 794" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-53" transform="translate(-29.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-53">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-53" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 777px; margin-left: 1px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<b>
<font color="#ffffff">HUMAS 1</font>
</b>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="9QprJomB4hAQBAA8" d="M59.484375,781.4125 h54.015625"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#9QprJomB4hAQBAA8" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">HUMAS 1</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-54" d="M 0.04 794 M 173.07 794 M 173.07 829 M 0.04 829" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-55" d="M 0.04 794 M 173.04 794 M 173.04 829 M 0.04 829" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-55" transform="translate(-29.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-55">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-55" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 812px; margin-left: 1px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Muhamad Dwi Ardiansyah</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="jQprJomB4hAQBAA9" d="M16.796875,817.4125 h139.40625"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#jQprJomB4hAQBAA9" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Muhamad Dwi Ardiansyah</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-56" x="-29" y="829" width="173.06" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-57" x="-29" y="829" width="173.06" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-57" d="M 0 829 M 173.06 829 M 173.06 863 M 0 863" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-58" d="M 0 829 M 173 829 M 173 863 M 0 863" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-58" transform="translate(-29.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-58">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-58" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 846px; margin-left: 1px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<b>
<font color="#ffffff">HUMAS 2</font>
</b>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="LQprJomB4hAQBAA." d="M59.484375,850.4125 h54.015625"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#LQprJomB4hAQBAA." startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">HUMAS 2</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-59" d="M 0 863 M 173.06 863 M 173.06 898 M 0 898" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-60" d="M 0 863 M 173 863 M 173 898 M 0 898" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-60" transform="translate(-29.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-60">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-60" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 881px; margin-left: 1px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Michael Boby</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="rQprJomB4hAQBAA_" d="M50.46875,886.4125 h72.046875"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#rQprJomB4hAQBAA_" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Michael Boby</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-61" x="-29" y="898.01" width="172.99" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-62" x="-29" y="898.01" width="172.99" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-62" d="M 0.03 898.01 M 173.02 898.01 M 173.02 932.01 M 0.03 932.01" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-63" d="M 0.03 898.01 M 173.03 898.01 M 173.03 932.01 M 0.03 932.01" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-63" transform="translate(-29.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-63">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-63" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 915px; margin-left: 1px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<b>
<font color="#ffffff">HUMAS 3</font>
</b>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="7QprJomB4hAQBABA" d="M59.484375,919.4125 h54.015625"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#7QprJomB4hAQBABA" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">HUMAS 3</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-64" d="M 0.03 932.01 M 173.02 932.01 M 173.02 967.01 M 0.03 967.01" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-65" d="M 0.03 932.01 M 173.03 932.01 M 173.03 967.01 M 0.03 967.01" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-65" transform="translate(-29.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-65">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-65" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 950px; margin-left: 1px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Marliyani Sutraliyana</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="nQprJomB4hAQBABB" d="M30.796875,955.4125 h111.390625"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#nQprJomB4hAQBABB" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Marliyani Sutraliyana</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-66" x="328.77" y="691" width="172.99" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-67" x="328.77" y="691" width="172.99" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-67" d="M 328.77 691 M 501.76 691 M 501.76 725 M 328.77 725" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-68" d="M 328.77 691 M 501.77 691 M 501.77 725 M 328.77 725" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-68" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-68">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-68" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 708px; margin-left: 330px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<font color="#ffffff">
<b>LITBANG 1</b>
</font>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="XQprJomB4hAQBABC" d="M383.828125,712.4125 h63.34375"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#XQprJomB4hAQBABC" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">LITBANG 1</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-69" d="M 328.77 725 M 501.76 725 M 501.76 760 M 328.77 760" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-70" d="M 328.77 725 M 501.77 725 M 501.77 760 M 328.77 760" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-70" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-70">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-70" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 743px; margin-left: 330px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Zaki Ma'rufan Chandra</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="PQprJomB4hAQBABD" d="M354.65625,748.4125 h121.6875"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#PQprJomB4hAQBABD" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Zaki Ma'rufan Chandra</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-111" x="690.62" y="690.99" width="171.58" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-112" x="690.62" y="690.99" width="171.58" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-112" d="M 690.62 690.99 M 862.2 690.99 M 862.2 724.99 M 690.62 724.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-113" d="M 690.62 690.99 M 862.62 690.99 M 862.62 724.99 M 690.62 724.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-113" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-113">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-113" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 170px; height: 1px; padding-top: 708px; margin-left: 692px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<b>
<font color="#ffffff">KOMINFO 1</font>
</b>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="_QprJomB4hAQBABE" d="M743.65625,712.4125 h66.671875"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#_QprJomB4hAQBABE" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">KOMINFO 1</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-114" d="M 690.62 724.99 M 862.2 724.99 M 862.2 759.99 M 690.62 759.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-115" d="M 690.62 724.99 M 862.62 724.99 M 862.62 759.99 M 690.62 759.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-115" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-115">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-115" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 170px; height: 1px; padding-top: 742px; margin-left: 692px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Nandito Restu Faiza</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="gwprJomB4hAQBABF" d="M722.625,747.4125 h108.734375"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#gwprJomB4hAQBABF" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Nandito Restu Faiza</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-116" x="690.62" y="759.99" width="171.58" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-117" x="690.62" y="759.99" width="171.58" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-117" d="M 690.62 759.99 M 862.2 759.99 M 862.2 793.99 M 690.62 793.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-118" d="M 690.62 759.99 M 862.62 759.99 M 862.62 793.99 M 690.62 793.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-118" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-118">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-118" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 170px; height: 1px; padding-top: 777px; margin-left: 692px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<span style="font-weight: bolder ; color: rgb(255 , 255 , 255)">KOMINFO 2</span>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="wwprJomB4hAQBABG" d="M743.65625,781.4125 h66.671875"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#wwprJomB4hAQBABG" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">KOMINFO 2</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-119" d="M 690.62 793.99 M 862.2 793.99 M 862.2 828.99 M 690.62 828.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-120" d="M 690.62 793.99 M 862.62 793.99 M 862.62 828.99 M 690.62 828.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-120" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-120">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-120" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 170px; height: 1px; padding-top: 811px; margin-left: 692px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Latif Palikal Isbah</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="IwprJomB4hAQBABH" d="M729.96875,816.4125 h94.0625"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#IwprJomB4hAQBABH" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Latif Palikal Isbah</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-121" x="691.05" y="828.99" width="171.58" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-122" x="691.05" y="828.99" width="171.58" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-122" d="M 691.05 828.99 M 862.63 828.99 M 862.63 862.99 M 691.05 862.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-123" d="M 691.05 828.99 M 863.05 828.99 M 863.05 862.99 M 691.05 862.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-123" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-123">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-123" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 170px; height: 1px; padding-top: 846px; margin-left: 692px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<span style="font-weight: bolder ; color: rgb(255 , 255 , 255)">KOMINFO 3</span>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="YwprJomB4hAQBABI" d="M743.65625,850.4125 h66.671875"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#YwprJomB4hAQBABI" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">KOMINFO 3</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-124" d="M 691.05 862.99 M 862.63 862.99 M 862.63 897.99 M 691.05 897.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-125" d="M 691.05 862.99 M 863.05 862.99 M 863.05 897.99 M 691.05 897.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-125" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-125">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-125" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 170px; height: 1px; padding-top: 880px; margin-left: 692px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Mohamad Nurul Hamdi</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="4wprJomB4hAQBABJ" d="M715.296875,885.4125 h123.390625"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#4wprJomB4hAQBABJ" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Mohamad Nurul Hamdi</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-126" x="690.86" y="897.99" width="171.34" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-127" x="690.86" y="897.99" width="171.34" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-127" d="M 690.86 897.99 M 862.2 897.99 M 862.2 931.99 M 690.86 931.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-128" d="M 690.86 897.99 M 861.86 897.99 M 861.86 931.99 M 690.86 931.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-128" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-128">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-128" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 169px; height: 1px; padding-top: 915px; margin-left: 692px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<span style="font-weight: bolder ; color: rgb(255 , 255 , 255)">KOMINFO 4</span>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="kwprJomB4hAQBABK" d="M743.15625,919.4125 h66.671875"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#kwprJomB4hAQBABK" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">KOMINFO 4</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-129" d="M 690.86 931.99 M 862.2 931.99 M 862.2 966.99 M 690.86 966.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-130" d="M 690.86 931.99 M 861.86 931.99 M 861.86 966.99 M 690.86 966.99" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-130" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-130">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-130" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 169px; height: 1px; padding-top: 949px; margin-left: 692px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Rizki Wahyudi</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="UwprJomB4hAQBABL" d="M738.703125,954.4125 h75.59375"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#UwprJomB4hAQBABL" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Rizki Wahyudi</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-131" x="690.01" y="967" width="173.04" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-132" x="690.01" y="967" width="173.04" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-132" d="M 690.01 967 M 863.05 967 M 863.05 1001 M 690.01 1001" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-133" d="M 690.01 967 M 863.01 967 M 863.01 1001 M 690.01 1001" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-133" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-133">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-133" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 984px; margin-left: 691px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<span style="font-weight: bolder ; color: rgb(255 , 255 , 255)">KOMINFO 5</span>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="0wprJomB4hAQBABM" d="M743.15625,988.4125 h66.671875"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#0wprJomB4hAQBABM" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">KOMINFO 5</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-134" d="M 690.01 1001 M 863.05 1001 M 863.05 1036 M 690.01 1036" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-135" d="M 690.01 1001 M 863.01 1001 M 863.01 1036 M 690.01 1036" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-135" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-135">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-135" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 1019px; margin-left: 691px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Mohammad Rizki Dwi Saputra</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="swprJomB4hAQBABN" d="M695.796875,1024.4125 h161.390625"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#swprJomB4hAQBABN" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Mohammad Rizki Dwi Saputra</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-136" x="328.75" y="760" width="172.96" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-137" x="328.75" y="760" width="172.96" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-137" d="M 328.75 760 M 501.71 760 M 501.71 794 M 328.75 794" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-138" d="M 328.75 760 M 501.75 760 M 501.75 794 M 328.75 794" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-138" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-138">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-138" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 777px; margin-left: 330px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<font color="#ffffff">
<b>LITBANG 2</b>
</font>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="8wprJomB4hAQBABO" d="M383.828125,781.4125 h63.34375"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#8wprJomB4hAQBABO" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">LITBANG 2</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-139" d="M 328.75 794 M 501.71 794 M 501.71 829 M 328.75 829" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-140" d="M 328.75 794 M 501.75 794 M 501.75 829 M 328.75 829" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-140" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-140">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-140" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 811px; margin-left: 330px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Rizki Irfan Anshori</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="iwprJomB4hAQBABP" d="M367.140625,816.4125 h96.71875"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#iwprJomB4hAQBABP" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Rizki Irfan Anshori</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-141" x="328.75" y="829" width="172.96" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-142" x="328.75" y="829" width="172.96" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-142" d="M 328.75 829 M 501.71 829 M 501.71 863 M 328.75 863" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-143" d="M 328.75 829 M 501.75 829 M 501.75 863 M 328.75 863" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-143" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-143">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-143" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 846px; margin-left: 330px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<b>
<font color="#ffffff">LITBANG 3</font>
</b>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="ywprJomB4hAQBABQ" d="M383.828125,850.4125 h63.34375"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#ywprJomB4hAQBABQ" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">LITBANG 3</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-144" d="M 328.75 863 M 501.71 863 M 501.71 898 M 328.75 898" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-145" d="M 328.75 863 M 501.75 863 M 501.75 898 M 328.75 898" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-145" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-145">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-145" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 880px; margin-left: 330px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Nursidin</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="KwprJomB4hAQBABR" d="M393.484375,885.4125 h44.015625"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#KwprJomB4hAQBABR" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Nursidin</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-146" x="328.76" y="967" width="172.96" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-147" x="328.76" y="967" width="172.96" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-147" d="M 328.76 967 M 501.72 967 M 501.72 1001 M 328.76 1001" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-148" d="M 328.76 967 M 501.76 967 M 501.76 1001 M 328.76 1001" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-148" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-148">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-148" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 984px; margin-left: 330px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<font color="#ffffff">
<b>LITBANG 5</b>
</font>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="awprJomB4hAQBABS" d="M383.828125,988.4125 h63.34375"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#awprJomB4hAQBABS" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">LITBANG 5</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-149" d="M 328.76 1001 M 501.72 1001 M 501.72 1036 M 328.76 1036" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-150" d="M 328.76 1001 M 501.76 1001 M 501.76 1036 M 328.76 1036" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-150" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-150">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-150" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 1019px; margin-left: 330px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Firmansyah</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="6wprJomB4hAQBABT" d="M384.15625,1024.4125 h62.6875"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#6wprJomB4hAQBABT" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Firmansyah</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-151" x="328.76" y="898" width="172.96" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="eG40mamMxs6arq8eiBQ4-152" x="328.76" y="898" width="172.96" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="eG40mamMxs6arq8eiBQ4-152" d="M 328.76 898 M 501.72 898 M 501.72 932 M 328.76 932" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-153" d="M 328.76 898 M 501.76 898 M 501.76 932 M 328.76 932" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-153" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-153">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-153" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 915px; margin-left: 330px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<b>
<font color="#ffffff">LITBANG 4</font>
</b>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="mwprJomB4hAQBABU" d="M383.828125,919.4125 h63.34375"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#mwprJomB4hAQBABU" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">LITBANG 4</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-154" d="M 328.76 932 M 501.72 932 M 501.72 967 M 328.76 967" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="eG40mamMxs6arq8eiBQ4-155" d="M 328.76 932 M 501.76 932 M 501.76 967 M 328.76 967" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="eG40mamMxs6arq8eiBQ4-155" transform="translate(-0.5 -0.5)">
<switch cell-id="eG40mamMxs6arq8eiBQ4-155">
<foreignObject cell-id="eG40mamMxs6arq8eiBQ4-155" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 949px; margin-left: 330px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Muhammad Arif Rahman</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="WwprJomB4hAQBABV" d="M349.125,954.4125 h132.734375"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#WwprJomB4hAQBABV" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">Muhammad Arif Rahman</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="" onmouseover="hoveritem('Master_chief');">
<rect cell-id="YI05F1bhBr6XaWc8Z622-1" x="329.09" y="0" width="172.28" height="69" fill="none" stroke="#000000" pointer-events="all"/>
</g>
<g shape-node="">
<path cell-id="YI05F1bhBr6XaWc8Z622-2" d="M 414.6 97 L 414.6 83 L 414.6 69" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="YI05F1bhBr6XaWc8Z622-4" x="329.09" y="0" width="172.98" height="69" fill="#ffffff" stroke="#000000" pointer-events="none"/>
</g>
<g shape-node="">
<rect cell-id="YI05F1bhBr6XaWc8Z622-5" x="329.09" y="0" width="172.98" height="34" fill="#0a314b" stroke="none" pointer-events="none"/>
<path cell-id="YI05F1bhBr6XaWc8Z622-5" d="M 329.09 0 M 502.07 0 M 502.07 34 M 329.09 34" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="YI05F1bhBr6XaWc8Z622-6" d="M 329.09 0 M 502.09 0 M 502.09 34 M 329.09 34" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="YI05F1bhBr6XaWc8Z622-6" transform="translate(-0.5 -0.5)">
<switch cell-id="YI05F1bhBr6XaWc8Z622-6">
<foreignObject cell-id="YI05F1bhBr6XaWc8Z622-6" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 17px; margin-left: 330px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 30px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Friz-Quadrata&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2; pointer-events: none; font-weight: bold; white-space: normal; word-wrap: normal; ">
<font color="#ffffff">
<b>KAPRODI</b>
</font>
</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="2wprJomB4hAQBABW" d="M387.828125,21.4125 h55.34375"/>
</defs>
<text fill="rgb(255, 255, 255)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="900">
<textPath xlink:href="#2wprJomB4hAQBABW" startOffset="50%" text-anchor="middle">
<tspan xml:space="preserve">KAPRODI</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="YI05F1bhBr6XaWc8Z622-7" d="M 329.09 34 M 502.07 34 M 502.07 69 M 329.09 69" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="YI05F1bhBr6XaWc8Z622-8" d="M 329.09 34 M 502.09 34 M 502.09 69 M 329.09 69" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="" text-node="">
<g cell-id="YI05F1bhBr6XaWc8Z622-8" transform="translate(-0.5 -0.5)">
<switch cell-id="YI05F1bhBr6XaWc8Z622-8">
<foreignObject cell-id="YI05F1bhBr6XaWc8Z622-8" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
<div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 171px; height: 1px; padding-top: 51px; margin-left: 330px;">
<div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 31px; overflow: hidden; ">
<div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura-Bold&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Gusti Nyoman Budiadnyana, S.Kom., MM.</div>
</div>
</div>
</foreignObject>
<svg width="100%" height="100%">
<defs>
<path id="OwprJomB4hAQBABX" d="M330,49.209375 h171 M330,63.609375 h171"/>
</defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Friz-Quadrata, &quot;VP Default&quot;" font-weight="400">
<textPath xlink:href="#OwprJomB4hAQBABX">
<tspan xml:space="preserve">Gusti Nyoman Budiadnyana, S.Kom., MM.</tspan>
</textPath>
</text>
</svg>
</switch>
</g>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-24" d="M 414.8 211 L 414.8 182.6 L 414.8 166" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-28" d="M 328.74 245.6 L 54 245.6 L 54 292" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-35" d="M 501.02 245.6 L 776 245.6 L 776 319" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-37" d="M 414.8 280 L 414.8 464 L 55 464 L 55 492" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-41" d="M 414.8 280 L 414.8 464 L 776 464 L 776 519" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-43" d="M 414.8 280 L 414.8 661 L 57 661 L 57 760" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-49" d="M 414.8 280 L 414.8 554 L 414.8 691" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="EpU-Q-2c0rqgZvnUK9TC-59" d="M 414.8 280 L 414.8 661 L 776 661 L 776 691" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
<g shape-node="">
<path cell-id="YI05F1bhBr6XaWc8Z622-2" d="M 414.6 97 L 414.6 83 L 414.6 69" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/>
</g>
</g>
<switch>
<g requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"/>
<a transform="translate(0,-5)">
<text text-anchor="middle" font-size="10px" x="50%" y="100%"/>
</a>
</switch>
</svg>

</div>

                      </div>
                      </div>
                        
                        
                         <style>
                              
                              .item-mobile {
                                  position:relative;
                                  display: block;
                                background-color: rgba(255, 255, 255, 1);
                                  margin-top: 14pt;
                                box-shadow: 0px 3px 9px rgba(0, 0, 0, .4);
                                border-radius: 8px;
                                width: 100%;
                              }
                              
                              .collapsible {
                                  font-family: Friz-Quadrata !important;
                                  font-weight: Normal !important;
                                  text-transform: uppercase;
                                  width: 100%;
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
                              
                              
                          </style>
                      
                        <!-- MOBILE-->
                      <div class="col" id="mobile-mode-view" style="margin-top: 6pt;">
                          
                          <!-- ITEM BOX -->
                              
                              <button type="button" class="collapsible">Kaprodi, Ketua, & Wakil Ketua Himpunan</button>
                              <div class="item-content">
                                  <div class="item-mobile">
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Gusti Nyoman Budiadnyana S. Kom., MM.</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Ketua Program Studi Software Engineering</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/6c358d28e71fab8eb4a0798f146460ea.jpg">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NID:</b> 04-2804-7602<br>
                                          <b>Alamat:</b> Telaga Bestari<br>
                                          <b>Instagram:</b> <a href="https://instagram.com/gustibudiadnyana">@gustibudiadnyana</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Muhamad Luthfian</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Ketua Himpunan</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/KETUA/_MG_0846.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807020<br>
                                          <b>Semester:</b> 3 (Shift)<br>
                                          <b>Alamat:</b> Pasir gadung Perum Griyayasa<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/vnnvyn/">@vnnvyn</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Muhammad Alif Syahputra</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Wakil Ketua Himpunan</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/WAKIL/_MG_0859.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b><br>
                                          <b>Semester:</b><br>
                                          <b>Alamat:</b><br>
                                          <b>Instagram:</b><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <br>
                          </div>
                          
                          
                          <button type="button" class="collapsible">Sekretaris</button>
                              <div class="item-content">
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Riani Eka Putri</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Sekretaris 1</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/SEKRETARIS/RIANI/_MG_0886.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807023<br>
                                          <b>Semester:</b> 3 (Pagi)<br>
                                          <b>Alamat:</b> Bitung<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/rputt.3/">@rputt.3</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Neysha Aulia Rahmania</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Sekretaris 2</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/SEKRETARIS/NEYSHA/IMG-20240520-WA0002.jpg">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807041<br>
                                          <b>Semester:</b> 3 (Pagi)<br>
                                          <b>Alamat:</b> Bitung<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/neysharr_18/">@neysharr_18</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <br>
                          </div>
                          
                          <button type="button" class="collapsible">Bendahara</button>
                              <div class="item-content">
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Raden Ayu Amalia Elwanda</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Bendahara</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/BENDAHARA/_MG_0917.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b><br>
                                          <b>Semester:</b><br>
                                          <b>Alamat:</b><br>
                                          <b>Instagram:</b><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <br>
                          </div>
                          
                          <button type="button" class="collapsible">SDM</button>
                              <div class="item-content">
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Suci Jannatun Anggraeni</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">SDM 1</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/SDM/SUCI/_MG_0902.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807038<br>
                                          <b>Semester:</b> 3 (Pagi)<br>
                                          <b>Alamat:</b> Bitung<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/sucijann_/">@sucijann_</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Yesih Sustari</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">SDM 2</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/SDM/YESIH/_MG_0873.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807040<br>
                                          <b>Semester:</b> 3 (Pagi)<br>
                                          <b>Alamat:</b> Curug<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/yesihsst_/">@yesihsst_</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <br>
                          </div>
                          
                          <button type="button" class="collapsible">Dana Usaha</button>
                              <div class="item-content">
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Ahmad Jahroni</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Dana Usaha</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/DANUS/IMG_20240519_125538.jpg">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807042<br>
                                          <b>Semester:</b> 3 (Pagi)<br>
                                          <b>Alamat:</b> Kp. Kalijodo, Ds. Parahu, Kec. Sukamulya<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/jahronii24._/">@jahronii24._</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <br>
                          </div>
                          
                          <button type="button" class="collapsible">Humas</button>
                              <div class="item-content">
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Muhamad Dwi Ardiansyah</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Humas 1</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/HUMAS/ARDI/_MG_0784.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807025<br>
                                          <b>Semester:</b> 3 (Malam)<br>
                                          <b>Alamat:</b> Kp. Sempur , Ds Kadu<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/ardiydwi_/">@ardiydwi_</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Michael Boby</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Humas 2</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/HUMAS/BOBY/_MG_0798.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b><br>
                                          <b>Semester:</b><br>
                                          <b>Alamat:</b><br>
                                          <b>Instagram:</b><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Marliyani Sutraliyana</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Humas 3</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/HUMAS/YAYA/IMG_4107.jpeg">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807034<br>
                                          <b>Semester:</b> 3 (Pagi)<br>
                                          <b>Alamat:</b> Balaraja<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/marliyanistrr_/">@marliyanistrr_</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <br>
                          </div>
                          
                          <button type="button" class="collapsible">Litbang</button>
                              <div class="item-content">
                           <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Zaki Ma'rufan Chandra</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Litbang 1</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/LITBANG/ZAKI/_MG_0755.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807008<br>
                                          <b>Semester:</b> 3 (Pagi)<br>
                                          <b>Alamat:</b> Perum Villa Balaraja<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/zakimarufan/">@zakimarufan</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Rizki Irfan Anshori</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Litbang 2</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/LITBANG/RIZKI/_MG_0769.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b><br>
                                          <b>Semester:</b><br>
                                          <b>Alamat:</b><br>
                                          <b>Instagram:</b><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Nursidin</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Litbang 3</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/LITBANG/UDIN/_MG_0762.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807006<br>
                                          <b>Semester:</b> 4 (Pagi)<br>
                                          <b>Alamat:</b> Kp. Kec. Cikupa<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/guaudin__/">@guaudin__</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Muhammad Arif Rahman</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Litbang 4</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/LITBANG/ARIF/PXL_20240519_153840418.NIGHT.RAW-01.COVER.jpg">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b><br>
                                          <b>Semester:</b><br>
                                          <b>Alamat:</b><br>
                                          <b>Instagram:</b><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Firmansyah</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Litbang 5</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/LITBANG/FIRMAN/1.jpg">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b><br>
                                          <b>Semester:</b><br>
                                          <b>Alamat:</b><br>
                                          <b>Instagram:</b><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <br>
                          </div>
                          
                          <button type="button" class="collapsible">Kominfo</button>
                              <div class="item-content">
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Nandito Restu Faiza</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Kominfo 1</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/KOMINFO/NANDITO/_MG_0808.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b><br>
                                          <b>Semester:</b><br>
                                          <b>Alamat:</b><br>
                                          <b>Instagram:</b><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Latif Palikal Isbah</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Kominfo 2</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/KOMINFO/LATIF/Latif-HMSE-02.png">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807015<br>
                                          <b>Semester:</b> 3 (Pagi)<br>
                                          <b>Alamat:</b> Parung Panjang, Bogor<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/latiffhalik_22/">@latiffhalik_22</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Mohamad Nurul Hamdi</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Kominfo 3</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b><br>
                                          <b>Semester:</b><br>
                                          <b>Alamat:</b><br>
                                          <b>Instagram:</b><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Rizki Wahyudi</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Kominfo 4</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/KOMINFO/WAHYU/_MG_0821.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b><br>
                                          <b>Semester:</b><br>
                                          <b>Alamat:</b><br>
                                          <b>Instagram:</b><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Mohammad Rizki Dwi Saputra</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Kominfo 5</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/KOMINFO/KIKI/_MG_0832.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807033<br>
                                          <b>Semester:</b> 4 (Malam)<br>
                                          <b>Alamat:</b> Kota Bumi<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/mohammad_rizki_ds/">@mohammad_rizki_ds</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <br>
</div>

                      </div>
                    </div>
                  </div>
                <!-- ORGANIZATION STRUCTURE END -->
                
      <div id="footerdiv" style="transform: scaleY(1.02); background-color: white; z-index: 0; position: relative;">
       <svg id="footersvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 -47 1440 162">
        <path fill="#0a314b" fill-opacity="10" d="M -0.848 50.584 L 47.152 44.263 C 95.152 37.942 191.152 25.3 287.152 16.886 C 383.152 8.313 479.152 4.362 575.152 18.979 C 671.152 33.596 767.152 67.571 863.152 77.961 C 959.152 88.509 1055.152 75.867 1151.152 77.961 C 1247.152 80.213 1343.152 96.805 1391.152 105.377 L 1439.152 113.792 L 1391.152 113.792 C 1343.152 113.792 1247.152 113.792 1151.152 113.792 C 1055.152 113.792 959.152 113.792 863.152 113.792 C 767.152 113.792 671.152 113.792 575.152 113.792 C 479.152 113.792 383.152 113.792 287.152 113.792 C 191.152 113.792 95.152 113.792 47.152 113.792 L -0.848 113.792 L -0.848 50.584 Z"></path>
      </svg>
</div>

              <!-- FOOTER START -->
              <footer
                class="text-white text-center pb-5"
                style="background-color: #0a314b"
              >
                

  <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 157">
    <path fill="#0a314b" fill-opacity="1" d="M0,96L48,80C96,64,192,32,288,48C384,64,480,128,576,154.7C672,181,768,171,864,144C960,117,1056,75,1152,58.7C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"/>
  </svg>


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
              document.getElementById("desktop-mode-view").remove();
              document.getElementById("desktopdetails").remove();
            document.getElementById("firefox_safari_filter").remove();
              
            } else {
              document.getElementById("mobile-mode-view").remove();
              if ((BrowserDetect.browser === "Safari") || (BrowserDetect.browser === "Firefox")) {
                  document.getElementById("firefox_safari_filter").classList.add("floating-firefox-safari-filter");
                  if (BrowserDetect.browser === "Firefox") {
                    var newParent = document.getElementsByClassName('hmse-home')[0];
                    var oldParent = document.getElementsByClassName('simplebar-content-wrapper')[0];
                    
                    while (oldParent.childNodes.length > 0) {
                        newParent.appendChild(oldParent.childNodes[0]);
                    }
                    
                    document.getElementsByClassName('simplebar-wrapper')[0].remove();
                    document.getElementById("horizontal_scrollbar").remove();
                    document.getElementById("vertical_scrollbar").remove();
                    
                  }
              } else {
                  document.getElementById("firefox_safari_filter").remove();
              }
                document.getElementsByClassName('jumbotron')[0].style.minWidth = document.getElementById("orggraph").getBoundingClientRect().width + 240;
                document.getElementsByTagName('footer')[0].style.minWidth = document.getElementById("orggraph").getBoundingClientRect().width + 240;
                document.getElementById('footerdiv').style.minWidth = document.getElementById("orggraph").getBoundingClientRect().width + 240;
            }
        });

        

        const scrollnav = document.querySelector("#scrollnav");

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
        
        function reset_animation(elemId) {
  var el = document.getElementById(elemId);
  el.style.animation = 'none';
  el.offsetHeight; /* trigger reflow */
  el.style.animation = null; 
}
        
        
        function hoveritem(elemId) {
            document.getElementById("hoverphoto").src = "";
            document.getElementById("hoveritembox").style.visibility = "visible";
            if (elemId == "Master_chief") {
            document.getElementById("hovername").innerHTML = "Gusti Nyoman Budiadnyana S. Kom., MM.";
            document.getElementById("hoverdept").innerHTML = "Ketua Program Studi Software Engineering";
            document.getElementById("hoverinfo").innerHTML = "<b>NID:</b> 04-2804-7602<br><b>Alamat:</b> Telaga Bestari<br><b>Instagram:</b> <a href=\"https://instagram.com/gustibudiadnyana\">@gustibudiadnyana</a><br><a class=\"a\" onclick=\"window.open('https://wa.me/6281932201727', '_blank');\" style=\"cursor: pointer;\"><b>WhatsApp</b></a> <a class=\"a\" onclick=\"window.open('mailto:vnvlnxn@hmse-unipi.or.id', '_blank');\" style=\"cursor: pointer;\"><b>Email</b></a>";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/6c358d28e71fab8eb4a0798f146460ea.jpg";
            } else if (elemId == "General_chief") {
            document.getElementById("hovername").innerHTML = "Muhamad Luthfian";
            document.getElementById("hoverdept").innerHTML = "Ketua Himpunan";
            document.getElementById("hoverinfo").innerHTML = "<b>NPM:</b> 2023807020<br><b>Semester:</b> 3 (Shift)<br><b>Alamat:</b> Pasir gadung Perum Griyayasa<br><b>Instagram:</b> <a href=\"https://www.instagram.com/vnnvyn/\">@vnnvyn</a><br><a class=\"a\" onclick=\"window.open('https://wa.me/6285771912060', '_blank');\" style=\"cursor: pointer;\"><b>WhatsApp</b></a> <a class=\"a\" onclick=\"window.open('mailto:vnvlnxn@hmse-unipi.or.id', '_blank');\" style=\"cursor: pointer;\"><b>Email</b></a>";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/KETUA/_MG_0846.JPG";
            } else if (elemId == "General_vice") {
            document.getElementById("hovername").innerHTML = "Muhammad Alif Syahputra";
            document.getElementById("hoverdept").innerHTML = "Wakil Ketua Himpunan";
            document.getElementById("hoverinfo").innerHTML = "";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/WAKIL/_MG_0859.JPG";
            } else if (elemId == "1st_Secretary") {
            document.getElementById("hovername").innerHTML = "Riani Eka Putri";
            document.getElementById("hoverdept").innerHTML = "Sekretaris 1";
            document.getElementById("hoverinfo").innerHTML = "<b>NPM:</b> 2023807023<br><b>Semester:</b> 3 (Pagi)<br><b>Alamat:</b> Bitung<br><b>Instagram:</b> <a href=\"https://www.instagram.com/rputt.3/\">@rputt.3</a><br><a class=\"a\" onclick=\"window.open('https://wa.me/6281221924672', '_blank');\" style=\"cursor: pointer;\"><b>WhatsApp</b></a> <a class=\"a\" onclick=\"window.open('mailto:rianiputri381@hmse-unipi.or.id', '_blank');\" style=\"cursor: pointer;\"><b>Email</b></a>";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/SEKRETARIS/RIANI/_MG_0886.JPG";
            } else if (elemId == "2nd_Secretary") {
            document.getElementById("hovername").innerHTML = "Neysha Aulia Rahmania";
            document.getElementById("hoverdept").innerHTML = "Sekretaris 2";
            document.getElementById("hoverinfo").innerHTML = "<b>NPM:</b> 2023807041<br><b>Semester:</b> 3 (Pagi)<br><b>Alamat:</b> Bitung<br><b>Instagram:</b> <a href=\"https://www.instagram.com/neysharr_18/\">@neysharr_18</a><br><a class=\"a\" onclick=\"window.open('https://wa.me/628192461665', '_blank');\" style=\"cursor: pointer;\"><b>WhatsApp</b></a> <a class=\"a\" onclick=\"window.open('mailto:neyshaar18@hmse-unipi.or.id', '_blank');\" style=\"cursor: pointer;\"><b>Email</b></a>";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/SEKRETARIS/NEYSHA/IMG-20240520-WA0002.jpg";
            } else if (elemId == "Exchequer") {
            document.getElementById("hovername").innerHTML = "Raden Ayu Amalia Elwanda";
            document.getElementById("hoverdept").innerHTML = "Bendahara";
            document.getElementById("hoverinfo").innerHTML = "";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/BENDAHARA/_MG_0917.JPG";
            } else if (elemId == "1st_Hum_Res") {
            document.getElementById("hovername").innerHTML = "Suci Jannatun Anggraeni";
            document.getElementById("hoverdept").innerHTML = "SDM 1";
            document.getElementById("hoverinfo").innerHTML = "<b>NPM:</b> 2023807038<br><b>Semester:</b> 3 (Pagi)<br><b>Alamat:</b> Bitung<br><b>Instagram:</b> <a href=\"https://www.instagram.com/sucijann_/\">@sucijann_</a><br><a class=\"a\" onclick=\"window.open('https://wa.me/6288290132287', '_blank');\" style=\"cursor: pointer;\"><b>WhatsApp</b></a> <a class=\"a\" onclick=\"window.open('mailto:suciicuss24@hmse-unipi.or.id', '_blank');\" style=\"cursor: pointer;\"><b>Email</b></a>";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/SDM/SUCI/_MG_0902.JPG";
            } else if (elemId == "2nd_Hum_Res") {
            document.getElementById("hovername").innerHTML = "Yesih Sustari";
            document.getElementById("hoverdept").innerHTML = "SDM 2";
            document.getElementById("hoverinfo").innerHTML = "<b>NPM:</b> 2023807040<br><b>Semester:</b> 3 (Pagi)<br><b>Alamat:</b> Curug<br><br><b>Instagram:</b> <a href=\"https://www.instagram.com/yesihsst_/\">@yesihsst_</a><br><a class=\"a\" onclick=\"window.open('https://wa.me/62895397272873', '_blank');\" style=\"cursor: pointer;\"><b>WhatsApp 1</b></a> <a class=\"a\" onclick=\"window.open('https://wa.me/6285853544454', '_blank');\" style=\"cursor: pointer;\"><b>WhatsApp 2</b></a> <a class=\"a\" onclick=\"window.open('mailto:yesihstr@hmse-unipi.or.id', '_blank');\" style=\"cursor: pointer;\"><b>Email</b></a>";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/SDM/YESIH/_MG_0873.JPG";
            } else if (elemId == "Biz_Funder") {
            document.getElementById("hovername").innerHTML = "Ahmad Jahroni";
            document.getElementById("hoverdept").innerHTML = "Dana Usaha";
            document.getElementById("hoverinfo").innerHTML = "<b>NPM:</b> 2023807042<br><b>Semester:</b> 3 (Pagi)<br><b>Alamat:</b> Kp. Kalijodo, Ds. Parahu, Kec. Sukamulya<br><b>Instagram:</b> <a href=\"https://www.instagram.com/jahronii24._/\">@jahronii24._</a><br><a class=\"a\" onclick=\"window.open('https://wa.me/6289523017160', '_blank');\" style=\"cursor: pointer;\"><b>WhatsApp</b></a> <a class=\"a\" onclick=\"window.open('mailto:ahmadjahroni2410@hmse-unipi.or.id', '_blank');\" style=\"cursor: pointer;\"><b>Email</b></a>";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/DANUS/IMG_20240519_125538.jpg";
            } else if (elemId == "1st_Pub_Rel") {
            document.getElementById("hovername").innerHTML = "Muhamad Dwi Ardiansyah";
            document.getElementById("hoverdept").innerHTML = "Humas 1";
            document.getElementById("hoverinfo").innerHTML = "<b>NPM:</b> 2023807025<br><b>Semester:</b> 3 (Malam)<br><b>Alamat:</b> Kp. Sempur , Ds Kadu<br><b>Instagram:</b> <a href=\"https://www.instagram.com/ardiydwi_/\">@ardiydwi_</a><br><a class=\"a\" onclick=\"window.open('https://wa.me/628551910162', '_blank');\" style=\"cursor: pointer;\"><b>WhatsApp</b></a> <a class=\"a\" onclick=\"window.open('mailto:ardiyantoa870@hmse-unipi.or.id', '_blank');\" style=\"cursor: pointer;\"><b>Email</b></a>";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/HUMAS/ARDI/_MG_0784.JPG";
            } else if (elemId == "2nd_Pub_Rel") {
            document.getElementById("hovername").innerHTML = "Michael Boby";
            document.getElementById("hoverdept").innerHTML = "Humas 2";
            document.getElementById("hoverinfo").innerHTML = "";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/HUMAS/BOBY/_MG_0798.JPG";
            } else if (elemId == "3rd_Pub_Rel") {
            document.getElementById("hovername").innerHTML = "Marliyani Sutraliyana";
            document.getElementById("hoverdept").innerHTML = "Humas 3";
            document.getElementById("hoverinfo").innerHTML = "<b>NPM:</b> 2023807034<br><b>Semester:</b> 3 (Pagi)<br><b>Alamat:</b> Balaraja<br><b>Instagram:</b> <a href=\"https://www.instagram.com/marliyanistrr_/\">@marliyanistrr_</a><br><a class=\"a\" onclick=\"window.open('https://wa.me/6288290132287', '_blank');\" style=\"cursor: pointer;\"><b>WhatsApp</b></a> <a class=\"a\" onclick=\"window.open('mailto:sutraliyanamarliyani@hmse-unipi.or.id', '_blank');\" style=\"cursor: pointer;\"><b>Email</b></a>";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/HUMAS/YAYA/IMG_4107.jpeg";
            } else if (elemId == "RnD_chief") {
            document.getElementById("hovername").innerHTML = "Zaki Ma'rufan Chandra";
            document.getElementById("hoverdept").innerHTML = "Litbang 1";
            document.getElementById("hoverinfo").innerHTML = "<b>NPM:</b> 2023807008<br><b>Semester:</b> 3 (Pagi)<br><b>Alamat:</b> Perum Villa Balaraja<br><b>Instagram:</b> <a href=\"https://www.instagram.com/zakimarufan/\">@zakimarufan</a><br><a class=\"a\" onclick=\"window.open('https://wa.me/6281318254960', '_blank');\" style=\"cursor: pointer;\"><b>WhatsApp</b></a> <a class=\"a\" onclick=\"window.open('mailto:zaki.marufan@hmse-unipi.or.id', '_blank');\" style=\"cursor: pointer;\"><b>Email</b></a>";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/LITBANG/ZAKI/_MG_0755.JPG";
            } else if (elemId == "RnD_vice") {
            document.getElementById("hovername").innerHTML = "Rizki Irfan Anshori";
            document.getElementById("hoverdept").innerHTML = "Litbang 2";
            document.getElementById("hoverinfo").innerHTML = "";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/LITBANG/RIZKI/_MG_0769.JPG";
            } else if (elemId == "Rnd_1st") {
            document.getElementById("hovername").innerHTML = "Nursidin";
            document.getElementById("hoverdept").innerHTML = "Litbang 3";
            document.getElementById("hoverinfo").innerHTML = "<b>NPM:</b> 2023807006<br><b>Semester:</b> 4 (Pagi)<br><b>Alamat:</b> Kec. Cikupa<br><b>Instagram:</b> <a href=\"https://www.instagram.com/guaudin__/\">@guaudin__</a><br><a class=\"a\" onclick=\"window.open('https://wa.me/62895322462718', '_blank');\" style=\"cursor: pointer;\"><b>WhatsApp</b></a> <a class=\"a\" onclick=\"window.open('mailto:nursidin25@hmse-unipi.or.id', '_blank');\" style=\"cursor: pointer;\"><b>Email</b></a>";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/LITBANG/UDIN/_MG_0762.JPG";
            } else if (elemId == "Rnd_2nd") {
            document.getElementById("hovername").innerHTML = "Muhammad Arif Rahman";
            document.getElementById("hoverdept").innerHTML = "Litbang 4";
            document.getElementById("hoverinfo").innerHTML = "";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/LITBANG/ARIF/PXL_20240519_153840418.NIGHT.RAW-01.COVER.jpg";
            } else if (elemId == "Rnd_3rd") {
            document.getElementById("hovername").innerHTML = "Firmansyah";
            document.getElementById("hoverdept").innerHTML = "Litbang 5";
            document.getElementById("hoverinfo").innerHTML = "";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/LITBANG/FIRMAN/1.jpg";
            } else if (elemId == "1st_Comm_info") {
            document.getElementById("hovername").innerHTML = "Nandito Restu Faiza";
            document.getElementById("hoverdept").innerHTML = "Kominfo 1";
            document.getElementById("hoverinfo").innerHTML = "";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/KOMINFO/NANDITO/_MG_0808.JPG";
            } else if (elemId == "2nd_Comm_Info") {
            document.getElementById("hovername").innerHTML = "Latif Palikal Isbah";
            document.getElementById("hoverdept").innerHTML = "Kominfo 2";
            document.getElementById("hoverinfo").innerHTML = "<b>NPM:</b> 2023807015<br><b>Semester:</b> 3 (Pagi)<br><b>Alamat:</b> Parung Panjang, Bogor<br><b>Instagram:</b> <a href=\"https://www.instagram.com/latiffhalik_22/\">@latiffhalik_22</a><br><a class=\"a\" onclick=\"window.open('https://wa.me/628990007825', '_blank');\" style=\"cursor: pointer;\"><b>WhatsApp</b></a> <a class=\"a\" onclick=\"window.open('mailto:latiffalikal@hmse-unipi.or.id', '_blank');\" style=\"cursor: pointer;\"><b>Email</b></a>";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/KOMINFO/LATIF/Latif-HMSE-02.png";
            } else if (elemId == "3rd_Comm_Info") {
            document.getElementById("hovername").innerHTML = "Mohamad Nurul Hamdi";
            document.getElementById("hoverdept").innerHTML = "Kominfo 3";
            document.getElementById("hoverinfo").innerHTML = "";
            document.getElementById("hoverphoto").src = "";
            } else if (elemId == "4th_Comm_Info") {
            document.getElementById("hovername").innerHTML = "Rizki Wahyudi";
            document.getElementById("hoverdept").innerHTML = "Kominfo 4";
            document.getElementById("hoverinfo").innerHTML = "";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/KOMINFO/WAHYU/_MG_0821.JPG";
            } else if (elemId == "5th_Comm_Info") {
            document.getElementById("hovername").innerHTML = "Mohammad Rizki Dwi Saputra";
            document.getElementById("hoverdept").innerHTML = "Kominfo 5";
            document.getElementById("hoverinfo").innerHTML = "<b>NPM:</b> 2023807033<br><b>Semester:</b> 4 (Malam)<br><b>Alamat:</b> Kota Bumi<br><b>Instagram:</b> <a href=\"https://www.instagram.com/mohammad_rizki_ds/\">@mohammad_rizki_ds</a><br><a class=\"a\" onclick=\"window.open('https://wa.me/6281779519586', '_blank');\" style=\"cursor: pointer;\"><b>WhatsApp</b></a> <a class=\"a\" onclick=\"window.open('mailto:mohrizki237@hmse-unipi.or.id', '_blank');\" style=\"cursor: pointer;\"><b>Email</b></a>";
            document.getElementById("hoverphoto").src = "https://hmse-unipi.or.id/img/FOTO_PENGURUS/KOMINFO/KIKI/_MG_0832.JPG";
            }
            document.getElementById("hoveritembox").style.left = Math.max(event.clientX - (document.getElementById("hoveritembox").offsetWidth / 2), 0);
            document.getElementById("hoveritembox").style.top = event.clientY - (document.getElementById("hoveritembox").offsetHeight / 2);
        }
        
        function hoverexit() {
                document.getElementById("hoveritembox").style.visibility = "hidden";
                reset_animation("hoveritembox");
        }
        
        function mobileW(elemId) {
            if (elemId == "General_chief") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "General_vice") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "1st_Secretary") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "2nd_Secretary") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "Exchequer") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "1st_Hum_Res") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "2nd_Hum_Res") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "Biz_Funder") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "1st_Pub_Rel") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "2nd_Pub_Rel") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "3rd_Pub_Rel") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "RnD_chief") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "RnD_vice") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "Rnd_1st") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "Rnd_2nd") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "Rnd_3rd") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "1st_Comm_info") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "2nd_Comm_Info") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "3rd_Comm_Info") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "4th_Comm_Info") {
                window.open('https://wa.me/62', '_blank');
            } else if (elemId == "5th_Comm_Info") {
                window.open('https://wa.me/62', '_blank');
            }
        }
        
        function mobileE(elemId) {
            if (elemId == "General_chief") {
                window.open('mailto:', '_blank');
            } else if (elemId == "General_vice") {
                window.open('mailto:', '_blank');
            } else if (elemId == "1st_Secretary") {
                window.open('mailto:', '_blank');
            } else if (elemId == "2nd_Secretary") {
                window.open('mailto:', '_blank');
            } else if (elemId == "Exchequer") {
                window.open('mailto:', '_blank');
            } else if (elemId == "1st_Hum_Res") {
                window.open('mailto:', '_blank');
            } else if (elemId == "2nd_Hum_Res") {
                window.open('mailto:', '_blank');
            } else if (elemId == "Biz_Funder") {
                window.open('mailto:', '_blank');
            } else if (elemId == "1st_Pub_Rel") {
                window.open('mailto:', '_blank');
            } else if (elemId == "2nd_Pub_Rel") {
                window.open('mailto:', '_blank');
            } else if (elemId == "3rd_Pub_Rel") {
                window.open('mailto:', '_blank');
            } else if (elemId == "RnD_chief") {
                window.open('mailto:', '_blank');
            } else if (elemId == "RnD_vice") {
                window.open('mailto:', '_blank');
            } else if (elemId == "Rnd_1st") {
                window.open('mailto:', '_blank');
            } else if (elemId == "Rnd_2nd") {
                window.open('mailto:', '_blank');
            } else if (elemId == "Rnd_3rd") {
                window.open('mailto:', '_blank');
            } else if (elemId == "1st_Comm_info") {
                window.open('mailto:', '_blank');
            } else if (elemId == "2nd_Comm_Info") {
                window.open('mailto:', '_blank');
            } else if (elemId == "3rd_Comm_Info") {
                window.open('mailto:', '_blank');
            } else if (elemId == "4th_Comm_Info") {
                window.open('mailto:', '_blank');
            } else if (elemId == "5th_Comm_Info") {
                window.open('mailto:', '_blank');
            }
        }
        
        //AVAILABLE ON MOBILE ONLY
            if (isMobile) {
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
                
            }

</script>

</html>