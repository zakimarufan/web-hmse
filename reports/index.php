<html>

<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Reports - HMSE</title>


  <!-- Always fit the page horizontally so that the horizontal scrollbar won't show anymore -->
  <!-- The fade transition effect is exclusive on Desktop only -->

  <!-- Reports elements:
      - Title
      - Category
      - Date and time
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
                class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top"
                id="inav2"
style="background-color: #0A314B;"
              >
                <div class="container">
                  <a class="navbar-brand" href="https://hmse-unipi.or.id/">HMSE</a>
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
                            <li><a class="dropdown-item" href="https://hmse-unipi.or.id/#aim">Tujuan</a></li>
                            <li><a class="dropdown-item" href="https://hmse-unipi.or.id/#visionmission">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="https://hmse-unipi.or.id/#briefhistory">Sejarah Singkat</a></li>
                            <li><a class="dropdown-item" href="https://hmse-unipi.or.id/#logophilosophy">Filosofi Logo</a></li>
                            <li><a class="dropdown-item" href="https://hmse-unipi.or.id/w_programme/">Program Kerja</a></li>
                            <li><a class="dropdown-item" href="https://hmse-unipi.or.id/org_struct/">Struktur Organisasi</a></li>
                          </ul>
                        </li>
                      <li class="nav-item">
                        <a class="nav-link" id="gallerynav" href="https://hmse-unipi.or.id/gallery/">Gallery</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="https://hmse-unipi.or.id/schedule/">Events Schedule</a>
                      </li>
                        <li class="nav-item">
                          <a class="nav-link" href="https://hmse-unipi.or.id/announcements/">Announcements</a>
                        </li>
                      <li class="nav-item">
                        <a class="nav-link" href="https://hmse-unipi.or.id/news/">News</a>
                      </li>
                        <li class="nav-item">
                          <a class="nav-link" id="reportsnav"
                        aria-current="page" href="#">Reports</a>
                        </li>
                      <li class="nav-item">
                        <a class="nav-link" href="https://hmse-unipi.or.id/#contact">Contact</a>
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

.view-reports {
    min-height: 50vh;
    display: flex;
    flex-grow: 1;
    flex-direction: column;
}



.anchor-title {
	font-size: 29px;
  color: black;
	font-weight: bold;
  margin-right: 1%;
}

.anchor-title-mobile {
	font-size: 18px;
  color: black;
	font-weight: bold;
  margin-right: 1%;
}

.content-title {
	font-size: 36px;
  color: black;
	font-weight: bold;
  margin-right: 1%;
}

.preview-body-content {
  display: inline;
  -webkit-line-clamp: 2;
  text-overflow: ellipsis;
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  word-wrap: break-word;/* Important for long words! */
  text-align: left;
}

.body-content{
  text-align: justify;
}

.nav-flex-container {
  display: flex;
  align-items: center;
  margin-left: 8%;
  justify-content: center;
}

.nav-flex-item {
  text-align: center;
}

.subnav {
  position: relative;
  text-transform: uppercase;
  margin-left: 6%;
  text-decoration: none;
  background-color: #0A314B;
  padding: 10px 26px;
  color: white;
  border-radius: 500px;
}

.subnav-input {
    position:relative !important;
  left:0;
  right:0;
  padding: 6px 22px;
      display: inline-block;
  box-shadow: 0px 0px 2px #000;
  border-radius: 500px;
  transition: 0.3s;
  width:100% !important;
}

.subnav-input:focus-within {
  box-shadow: 0px 0px 5px #135D8F;
}

.subnav-input input {
  text-transform: uppercase;
  text-decoration: none;
  border-width: 0;
  padding-right: 30px;
  width: 100%;
}

.subnav-input input {
  outline: none;
}

.subnav-input svg {
  position: absolute;
      top: 50%;
      transform: translateY(-50%);
      right: 16px; /* Adjust the right distance as needed */
      width: 16px; /* Adjust width */
      height: 16px;
  transition: 0.3s;
}

.subnav-input svg:hover {
  cursor: pointer;
  fill: #135D8F;
}

</style>

<link
    rel="stylesheet"
    type="text/css"
    href="https://hmse-unipi.or.id/style-ex.css"
  />

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
              <section id="toppage" class="jumbotron text-center">

                <h1 id="permanent-title">Laporan</h1>
                <!-- <p class="lead">Fakultas Ilmu Komputer Universitas Indonesia</p> -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -20 1440 160">
                    <path fill="#ffffff" fill-opacity="10" d="M 0 63.652 L 48 63.652 C 96 63.652 192 63.652 288 76.329 C 384 89.141 480 114.291 576 121.666 C 672 128.905 768 118.029 864 103.518 C 960 89.141 1056 70.789 1152 65.453 C 1248 59.913 1344 67.39 1392 70.891 L 1440 74.527 L 1440 150.656 L 1392 150.656 C 1344 150.656 1248 150.656 1152 150.656 C 1056 150.656 960 150.656 864 150.656 C 768 150.656 672 150.656 576 150.656 C 480 150.656 384 150.656 288 150.656 C 192 150.656 96 150.656 48 150.656 L 0 150.656 L 0 63.652 Z"></path>
                  </svg>
              </section>
              <!-- JUMBOTRON END -->
                  <a href="https://hmse-unipi.or.id/reports/" class="subnav" id="backp_button" style="display:none; font-family:Friz-Quadrata !important; top: 50px">← Kembali ke Laporan</a>
                 <div class="nav-flex-container" id="vnav" style="position: absolute !important; width: 85% !important;">
                    <div class="nav-flex-container nav-flex-item" id="vnav-mobile" style="margin: 0 !important; flex-basis: 100% !important; flex-direction: row !important;">
                <div class="nav-flex-item">
                <a class="subnav" id="firstpage">&lt;&lt;</a>
                </div><div class="nav-flex-item">
                <a class="subnav" id="prevpage">&lt;</a>
                </div><div class="nav-flex-item" style="word-break:keep-all !important; flex-basis: 40% !important; margin: 5% !important;">
                <div id="pagecount">Halaman 1 - 1 dari 1</div>
                </div><div class="nav-flex-item">
                <a class="subnav" id="nextpage">&gt;</a>
                </div><div class="nav-flex-item">
                <a class="subnav" id="lastpage">&gt;&gt;</a>
                </div>
                </div>
                <div id="vsearch" class="nav-flex-item subnav-input" style="flex-basis: 100% !important;">
                <input type="search" id="vsearch-text" placeholder="Cari..." oninput="changeSearchCase();"></input>
                <svg onClick="searchtext()" width="1200pt" height="1200pt" version="1.1" viewBox="0 0 1200 1200" xmlns="https://www.w3.org/2000/svg">
                 <path d="m1022.5 952.5-260-260c40-52.5 62.5-120 62.5-192.5 0-180-145-325-325-325s-325 145-325 325 145 325 325 325c72.5 0 137.5-22.5 192.5-62.5l260 260c10 10 22.5 15 35 15s25-5 35-15c20-20 20-50 0-70zm-522.5-227.5c-125 0-225-100-225-225s100-225 225-225 225 100 225 225-100 225-225 225z"/>
                </svg>
                </div>
                </div>
              <!-- REPORTS LIST START-->
              <section id="reports" class="view-reports">
                <div class="container">

                  <div class="row text-center mb-3">
                    <div class="col">
                      
                    <div class="flex-container" id="reports_listing">
                    

</div>

                    </div>

                    <div class="flex-container" id="report_content" style="display:none;">

<h2 class="content-title" style="text-align: left;" id="vtitle"></h2>
<p style="color: grey; text-align: left; font-size: 11pt; font-family: Myriad-Pro; font-style: Italic;  margin-bottom: 0;" id="datetime_author_details"></p>
<br>

<p id="vbody" class="body-content"></p>

</div>

                  </div>
                </div>                  
              </section>
              <!-- REPORTS END -->

              
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -50 1440 162">
        <path fill="#0a314b" fill-opacity="10" d="M -0.848 50.584 L 47.152 44.263 C 95.152 37.942 191.152 25.3 287.152 16.886 C 383.152 8.313 479.152 4.362 575.152 18.979 C 671.152 33.596 767.152 67.571 863.152 77.961 C 959.152 88.509 1055.152 75.867 1151.152 77.961 C 1247.152 80.213 1343.152 96.805 1391.152 105.377 L 1439.152 113.792 L 1391.152 113.792 C 1343.152 113.792 1247.152 113.792 1151.152 113.792 C 1055.152 113.792 959.152 113.792 863.152 113.792 C 767.152 113.792 671.152 113.792 575.152 113.792 C 479.152 113.792 383.152 113.792 287.152 113.792 C 191.152 113.792 95.152 113.792 47.152 113.792 L -0.848 113.792 L -0.848 50.584 Z"></path>
      </svg>

              <!-- FOOTER START -->
              <footer
                class="text-white text-center pb-5"
                style="background-color: #0a314b"
              >

<svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 157">
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
          document.getElementById("vnav").style.flexDirection = "column-reverse";
          document.getElementById("vnav-mobile").style.flexBasis = "100%";
          document.getElementById("vnav").style.position = "relative";
          document.getElementById("vnav").style.translate = "-5pt 21pt";
          document.getElementById("pagecount").style.fontFamily = "Friz-Quadrata";
          document.getElementById("pagecount").style.textTransform = "Uppercase";
          } else {
              if ((BrowserDetect.browser === "Safari") || (BrowserDetect.browser === "Firefox")) {
                  document.getElementById("firefox_safari_filter").classList.add("floating-firefox-safari-filter");
              } else {
                  document.getElementById("firefox_safari_filter").remove();
              }
          document.getElementById("vnav").style.translate = "0pt -5pt";
          document.getElementById("pagecount").style.fontFamily = "Myriad-Pro";
          document.getElementById("pagecount").style.fontWeight = "Bold";
          document.getElementById("pagecount").style.fontStyle = "Italic";
          document.getElementById("pagecount").style.fontSize = "13pt";
          }
      });
      
      function changeSearchCase() {
           if (document.getElementById("vsearch-text").value.length > 0) {
               document.getElementById("vsearch-text").style.textTransform = "none";
           } else {
               document.getElementById("vsearch-text").style.textTransform = "uppercase";
           }
        }

      function openRepId(reportTitle, reportCategory, reportDate, reportContent) {
          document.getElementById("backp_button").style.display = "initial";
          document.getElementById("permanent-title").style.display = "none";
          document.getElementById("vnav").style.display = "none";
          document.getElementById("reports_listing").style.display = "none";
          document.getElementById("report_content").style.display = "initial";
          document.getElementById("toppage").style.paddingTop = "0px";
          document.getElementById("vtitle").innerHTML = reportTitle;
          document.title = reportTitle + " - HMSE";
          document.getElementById("datetime_author_details").innerHTML = "Date created: " + reportDate + "<br>Category: " + reportCategory;
          document.getElementById("vbody").innerHTML = reportContent;
      }

      function emptyRepList() {
        document.getElementById("reports_listing").innerHTML = 
        "<p style=\"text-align: center; padding-bottom:10%;\"><span class=\"anchor-title\">Laporan masih kosong.</span></p>";
      }

      function listRepItems(anchorTitle, date, previewContent, hreflink, category) {
        if (isMobile) { //specific listing appearance for mobile
          var subnav = document.getElementsByClassName('subnav');
          document.getElementById("reports").style.paddingTop = "20pt";
            for (var i = 0; i < subnav.length; ++i) {
                var item = subnav[i];  
                item.style.margin = "3pt";
                item.style.zoom = "60%";
            }
          document.getElementById("reports_listing").innerHTML +=
        "<div class=\"flex-item\" style=\"text-align: left;\">"
+ "<p style=\"font-size: 9pt; color: grey;\"><span class=\"anchor-title-mobile\"><a style=\"text-decoration: none; color: inherit;\" href=\"" + hreflink + "\">"
                  +  anchorTitle
               + "</a></span><br>"+date+"</p>"
               +"<table style=\" table-layout:fixed; resize: both; overflow: auto; margin-bottom:35px; \"><tr><th style=\"min-width: 35%; width:35%; white-space: nowrap; vertical-align: top;\"></th>"
+ "<th style=\"font-weight: normal; font-size: 9pt; vertical-align: top; word-break: normal;\"><p class=\"preview-body-content\">" + previewContent + "</div><br></th></tr></table>"
        } else {
        document.getElementById("reports_listing").innerHTML +=
        "<div class=\"flex-item\" style=\"text-align: left;\">"
+ "<p style=\"color: grey;\"><span class=\"anchor-title\"><a style=\"text-decoration: none; color: inherit;\" href=\"" + hreflink + "\">"
                  +  anchorTitle
               + "</a></span>"+date+"</p>"
               +"<table style=\" table-layout:fixed; resize: both; overflow: auto; margin-bottom:35px; \"><tr><th style=\"min-width: 18%; width:18%; white-space: nowrap; vertical-align: top;\"></th>"
+ "<th style=\"font-weight: normal; vertical-align: top; word-break: normal;\"><p class=\"preview-body-content\">" + previewContent + "</div><br></th></tr></table>"
        }      
      }

      const scrollnav = document.querySelector("#scrollnav");

      document.getElementById("vsearch").addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
      searchtext();
    }
});

      function searchtext() {
        let searchvalue = document.getElementById("vsearch-text").value;
        if (searchvalue !== '') {
          window.location.href = 'https://hmse-unipi.or.id/reports/search?q=' + searchvalue.split(' ').join('+');
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

function removeLink($string){

 $pattern = '/https?:\/\/[^\s]+|www\.[^\s]+/i';
    // Replace the matched URLs with an empty string
    $string = preg_replace($pattern, '', $string);
    
    // This pattern matches HTML anchor tags
    $pattern = '/<a\b[^>]*>(.*?)<\/a>/i';
    // Replace the matched anchor tags with their inner text
    $string = preg_replace($pattern, '$1', $string);

    return $string;
    
}

function repRegularList($listquery) {
//list the reports regularly
//Truncate the preview body content text to 255 characters
//Remove the HTML codes from the preview content
//Sort by the newest date using the MySQL query

if ($listquery->num_rows > 0) {
while($row = mysqli_fetch_array($listquery)) {
  $n_prev_title = $row['report_title'];
  $n_url_id_pointer = "https://hmse-unipi.or.id/reports/" . $row['rep_url_id_pointer'];
  $n_p_date = date('D, j M Y H:i', strtotime($row['report_date']));
  $n_cat = $row['report_category'];
  $n_prev_content = removeLink(substr(preg_replace("/\r\n|\r|\n|\n\r/", ' ', strip_tags($row['report_body_content'])), 0, 255));
echo "<script>listRepItems('$n_prev_title', '$n_p_date', '$n_prev_content', '$n_url_id_pointer', '$n_cat');</script>";
}
} else {
  echo "<script>document.getElementById(\"vnav\").style.display = \"none\";</script>";
  echo "<script>emptyRepList();</script>";
}

}

if(isset($_SERVER['PATH_INFO'])) {
    $pathinfo = $_SERVER['PATH_INFO'];
    $idpointerp = str_replace('/', '', substr($pathinfo, 1));
    $idpointer = $idpointerp;
    if (str_contains($idpointerp, '&')) {
        $idpointer = explode('&', $idpointerp)[0];
    }
    if ($idpointer == "") {

      repRegularList($conn->execute_query("SELECT report_title, report_body_content, report_date, rep_url_id_pointer, report_category FROM reports ORDER BY ordered_at DESC"));
      
    } else {

      $result = $conn->execute_query("SELECT report_title, report_body_content, report_date, report_category FROM reports WHERE rep_url_id_pointer = ? LIMIT 1",  [$idpointer]);

      if ($result->num_rows == 1) { //Check if the article exists
        while($row = mysqli_fetch_array($result)) {
          $n_title = $row['report_title'];
          $n_cat = $row['report_category'];
          $n_date = date('D, j M Y H:i', strtotime($row['report_date']));
          $n_content = preg_replace("/\r\n|\r|\n|\n\r/", '<br>', $row['report_body_content']);
            echo "<script>openRepId('$n_title', '$n_cat', '$n_date', '$n_content');</script>";
        }
      } else {
        if (str_starts_with($idpointer, 'search')) { //searching for certain reports
          //clear the current listings first

          //execute the search query

          $uriquery = $_SERVER['REQUEST_URI'];

          foreach (explode('&', $uriquery) as $chunk) {
            $n_search_display = preg_replace('/[\s\+]/', ' ', explode("=", $chunk)[1]);
            $searchlistquery = $conn->execute_query("SELECT * FROM reports WHERE report_title like '%$n_search_display%' OR report_body_content like '%$n_search_display%' OR report_date like '%$n_search_display%' OR report_category like '%$n_search_display%' OR rep_url_id_pointer like '%$n_search_display%'");
            $search_result_count = $searchlistquery->num_rows;
            echo "<script>document.title = \"Search results for '$n_search_display' - HMSE\";</script>";
            echo "<script>document.getElementById(\"permanent-title\").innerHTML = \"Hasil pencarian untuk '$n_search_display'<br>($search_result_count hasil ditemukan)\"</script>";
            //continue the searching function (show the search result)

while($row = mysqli_fetch_array($searchlistquery)) {
  $n_search_prev_title = $row['report_title'];
  $n_search_url_id_pointer = "https://hmse-unipi.or.id/reports/" . $row['rep_url_id_pointer'];
  $n_search_prim_thumb = $row['report_category'];
  $n_search_p_date = date('D, j M Y H:i', strtotime($row['report_date']));
  $n_search_prev_content = removeLink(substr(preg_replace("/\r\n|\r|\n|\n\r/", ' ', strip_tags($row['report_body_content'])), 0, 255));
echo "<script>listRepItems('$n_search_prev_title', '$n_search_p_date', '$n_search_prev_content', '$n_search_url_id_pointer', '$n_search_prim_thumb');</script>";
}
        }

        } else { //Redirect to 404 Not Found
          echo "<script>window.location.replace('https://hmse-unipi.or.id/404/');</script>";
        }
      }
    }
} else {
  function getAddress() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "https://";
    return $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  }
  
  if (str_contains(getAddress(), "index.php")) {
    $noindex = str_replace('/index.php', '', getAddress());
    echo "<script>window.location.href='$noindex';</script>";
  }
  
  repRegularList($conn->execute_query("SELECT report_title, report_body_content, report_date, rep_url_id_pointer, report_category FROM reports ORDER BY report_date DESC"));
}

?>