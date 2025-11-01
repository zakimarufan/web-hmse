<?php

function getAddress() {
  $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "https://";
  return $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

$pgtitle = "News - HMSE";

include '/home/hmseunip/public_html/templates/header.php';

?>

<style>

.view-news {
    min-height: 50vh;
    display: flex;
    flex-grow: 1;
    padding-top: 0;
    flex-direction: column;
}

a.disabled {
  pointer-events: none;
  cursor: default;
  opacity: .4;
  filter: grayscale(1);
}

.anchor-title {
	font-size: 29px;
  color: #0a314b;
	font-weight: bold;
  margin-right: 1%;
  mix-blend-mode:plus-lighter;
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

.sidehover {
    background-color: #0a314b;
    border-radius: 6px;
    outline: .4rem solid #0a314b;
    transition: background-color 200ms ease-in-out, outline 200ms ease-in-out;
}

.sidetitle {
  color: black;
  transition: color 200ms ease-in-out;
}

.sidetitle:hover {
  color: white;
}

.sidedate {
  color: grey; 
  transition: color 200ms ease-in-out;
}

.sidetitle:hover ~ .sidedate {
  color: white;
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
  justify-content: center;
  z-index: 3;
}

.nav-flex-item {
  text-align: center;
}

.subnav {
  position: relative;
  text-transform: uppercase;
  text-decoration: none;
  background-color: #0A314B;
  padding: 10px 26px;
  color: white;
  border-radius: 500px;
}

.btnb {
    transform: scale(0.9);
    box-shadow: 0px 0px 0px transparent;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.btn:hover {
    box-shadow: 0px 0px 7px #135D8F;
    color: white;
    transition: box-shadow 0.3s ease;
}

.btnb:has(.btn:hover) {
    transform: scale(1);
    transition: transform 0.3s ease;
}

.btnk {
    box-shadow: 0px 0px 0px transparent;
    transform: scale(1);
    z-index: 3;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

.btnk:hover{
    box-shadow: 0px 0px 7px #135D8F;
    transform: scale(1.03);
    color: white;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.subnav-input {
    position:relative !important;
    background-color: white;
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
  outline: none;
}
                              
                              .subhead {
                                  max-width: 100%; 
                                  border-bottom: 3px solid;
                                  border-image:linear-gradient(to right, #0a314b, rgba(0,0,0,0)) 1;
                                  margin-bottom: 1rem;
                              }
                              
                              .subhead h2 {
                                  font-size: 15pt;
                                  margin-bottom: 2;
                              }

.subnav-input .sbutton {
  position: absolute;
      top: 50%;
      transform: translateY(-50%);
      right: 5px; /* Adjust the right distance as needed */
      width: 50px; /* Adjust width */
      height: 30px;
      border-radius: 50px;
  transition: 0.3s;
}

.subnav-input .sbutton svg {
      opacity: .6;
      right: 12px;
  transition: 0.3s;
  pointer-events: none;
}

.subnav-input .sbutton:hover {
  cursor: pointer;
  background-color: #0a314b;
}

.subnav-input .sbutton:hover > svg {
      opacity: 1;
      right: 16px;
  fill: #fff;
}
.newsitem {
    display:block;
                                box-shadow: 0px 3px 9px rgba(0, 0, 0, .4);
                                border-radius: 8px;
                                padding-top: 6px;
                                padding-left: 12px;
                                padding-right: 12px;
                                padding-bottom: 12px;
                                margin-bottom: 28px;
                                background-color: transparent;
                                isolation: isolate;
  transition: 0.3s;
}

.newsitem.newshover{
                                background-color: #0a314b;
                                transform:scale(1.05);
                                box-shadow: 0px 3px 9px #135D8F;
  transition: 0.3s all;
                                
}

.newsitemobile {
    
}

@media screen and (min-width: 768px) {
    
    #vsearch {
        flex-basis: 100% !important;
        margin-left: 2% !important;
        margin-right: 5% !important;
    }
    
    #vnav-mobile {
        margin-left: 3em;
        flex-basis: 100% !important;
    }
    
    #news_listing {
        margin-top: 4.5rem;
    }
    
}

@media screen and (max-width: 767px) {
    
    #vsearch {
        width: 80% !important;
    }
    
    section {
        padding-top: 0;
    }
    
    .btnk, .btnk:hover {
        transform: translateY(-80px);
    }
    
    #vnav {
        position: absolute !important;
    transform: translateY(-125px);
    }
    
}

}

</style>


              <!-- JUMBOTRON START -->
              <section id="toppage" class="jumbotron text-center">

                <h1 id="permanent-title">Berita</h1>
                <!-- <p class="lead">Fakultas Ilmu Komputer Universitas Indonesia</p> -->
                  <div style="transform: scaleY(1.02); overflow-x: hidden;">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 100%; min-width:1440px; height: auto;" viewBox="0 10 1440 120">
                    <path fill="#ffffff" fill-opacity="10" d="M 0 63.652 L 48 63.652 C 96 63.652 192 63.652 288 76.329 C 384 89.141 480 114.291 576 121.666 C 672 128.905 768 118.029 864 103.518 C 960 89.141 1056 70.789 1152 65.453 C 1248 59.913 1344 67.39 1392 70.891 L 1440 74.527 L 1440 150.656 L 1392 150.656 C 1344 150.656 1248 150.656 1152 150.656 C 1056 150.656 960 150.656 864 150.656 C 768 150.656 672 150.656 576 150.656 C 480 150.656 384 150.656 288 150.656 C 192 150.656 96 150.656 48 150.656 L 0 150.656 L 0 63.652 Z"></path>
                  </svg>
                  </div>
              </section>
              <!-- JUMBOTRON END -->
              <div style="
    background-color: white;
    width: 100%;
    height: 100px;
    position: absolute;
    z-index: -1;
"></div>
                <a onclick="gobackwithfade(false);" class="subnav btnk" id="backp_button" style="display:none; width: fit-content; font-family:Friz-Quadrata !important; top: 50px">← Kembali ke Berita</a>
                <div class="nav-flex-container" id="vnav" style="position: absolute !important; width: 100%;">
                    <div class="nav-flex-container nav-flex-item" id="vnav-mobile" style="flex-basis: 100% !important; flex-direction: row !important;">
                <div class="btnb nav-flex-item">
                <a class="subnav btn disabled" id="firstpage" onclick="backtostart();" style="cursor: pointer; font-weight: bold;">&lt;&lt;</a>
                </div><div class="btnb nav-flex-item">
                <a class="subnav btn disabled" id="prevpage" onclick="prevpage();" style="cursor: pointer; font-weight: bold;">&lt;</a>
                </div><div class="nav-flex-item" style="word-break:keep-all !important; flex-basis: 40% !important; margin: 5% !important;">
                <div id="pagecount" title="Setiap halaman menampilkan maksimal 10 butir berita.
Berita diurutkan dari yang terbaru ke terlama.">Halaman 1 - 1 dari 1</div>
                </div><div class="btnb nav-flex-item">
                <a class="subnav btn" id="nextpage" onclick="nextpage();" style="cursor: pointer; font-weight: bold;">&gt;</a>
                </div><div class="btnb nav-flex-item">
                <a class="subnav btn" id="lastpage" onclick="gotolast();" style="cursor: pointer; font-weight: bold;">&gt;&gt;</a>
                </div>
                </div>
                <div id="vsearch" class="nav-flex-item subnav-input" style="flex-basis: 100% !important;">
                <input type="search" id="vsearch-text" placeholder="Search..." oninput="changeSearchCase();"></input>
                <div onClick="searchtext()" class="sbutton">
                <svg width="1200pt" height="1200pt" version="1.1" viewBox="0 0 1200 1200" xmlns="https://www.w3.org/2000/svg">
                 <path d="m1022.5 952.5-260-260c40-52.5 62.5-120 62.5-192.5 0-180-145-325-325-325s-325 145-325 325 145 325 325 325c72.5 0 137.5-22.5 192.5-62.5l260 260c10 10 22.5 15 35 15s25-5 35-15c20-20 20-50 0-70zm-522.5-227.5c-125 0-225-100-225-225s100-225 225-225 225 100 225 225-100 225-225 225z"/>
                </svg>
                </div>
                </div>
                </div>
              <!-- NEWS LIST START-->
              <section id="news" class="view-news">
                <div class="container">

                  <div class="row text-center mb-3" style="position: relative; margin-top:12px;">
                    <div class="col">
                      
                    <div class="flex-container" id="news_listing">
                    

</div>

                    </div>

                    <table id="news_content" style="display:none;">
                        <tr> 
                        <td rowspan="2" style="padding-top: 5rem; vertical-align: top;">
                    <div class="flex-container">
<h2 class="content-title" style="text-align: left;" id="vtitle"></h2>
<div style="display: inline-flex; width: 100%; margin-bottom: 1.8rem; align-items: center;
  justify-content: space-between;">
<p style="color: grey; text-align: left; font-size: 11pt; font-family: Myriad-Pro; font-style: Italic;  margin-bottom: 0;" id="datetime_author_details"></p>
<a style="color: #0A314B; font-weight: bold; text-decoration: none;" href="#" onclick="navigator.share({ url: window.location.href, title: document.title });">Share...</a>
</div>
<p id="vbody" class="body-content"></p>

</div>
                        </td>
                        <td style="width: 363px; vertical-align: top;">
                            
              <!-- SIDEBAR START -->
                            <div id="more_posts" style="position: sticky; top: 4.5rem; margin-left: 1.7rem; background-color: #d9d9d9; padding: 6px; border-radius: 8px; box-shadow: 0px 3px 9px rgba(0,0,0,.4);">
                      <div class="subhead"><h2>MORE POSTS</h2></div>
                            </div>
              <!-- SIDEBAR END -->
                        </td>
                        </tr>
                    </table>
                    <div class="flex-container" id="news_content_mobile" style="display:none;">
<h2 class="content-title" style="text-align: left;" id="vtitle_mobile"></h2>
<div style="display: inline-flex; width: 100%; margin-bottom: 1.8rem; align-items: center;
  justify-content: space-between;">
<p style="color: grey; text-align: left; font-size: 11pt; font-family: Myriad-Pro; font-style: Italic;  margin-bottom: 0;" id="datetime_author_details_mobile"></p>
<a style="color: #0A314B; font-weight: bold; text-decoration: none;" href="#" onclick="navigator.share({ url: window.location.href, title: document.title });">Share...</a>
</div>
<p id="vbody_mobile" class="body-content"></p>

</div>

                  </div>
                </div>                  
              </section>
              <!-- NEWS END -->
              <?php include '/home/hmseunip/public_html/templates/footerp.php'; ?>
let searchedq = "";
let newscount = 0; //displayed = 3
let newslimit = 0; //limit = 7
let totalnews = 0; //total = 11
let lastpage = 0;
              $(document).ready(function() {
          checkPage();
          checkNavButtons();
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

      function openNewsId(newsHeadline, newsAuthor, newsDate, newsContent, isFromGallery) {
          document.getElementById("backp_button").style.display = "block";
          document.getElementById("permanent-title").style.display = "none";
          document.getElementById("vnav").style.display = "none";
          document.getElementById("news_listing").style.display = "none";
          
          document.getElementById("toppage").style.paddingTop = "0px";
          document.title = newsHeadline + " - HMSE";
          
        if (isMobile) {
          document.getElementById("news_content_mobile").style.display = "block";
          document.getElementById("vtitle_mobile").innerHTML = newsHeadline;
          document.getElementById("datetime_author_details_mobile").innerHTML = "Date created: " + newsDate + "<br>Author: " + newsAuthor;
          document.getElementById("vbody_mobile").innerHTML = newsContent;
        } else {
          document.getElementById("news_content").style.display = "block";
          document.getElementById("vtitle").innerHTML = newsHeadline;
          document.getElementById("datetime_author_details").innerHTML = "Date created: " + newsDate + "<br>Author: " + newsAuthor;
          document.getElementById("vbody").innerHTML = newsContent;
        }
          if (isFromGallery == "from-gallery=true") {
            document.getElementById("backp_button").innerHTML =  "← Kembali ke Galeri";
            document.getElementById("backp_button").setAttribute('onclick','gobackwithfade(true);');
            document.getElementById("gallerynav").setAttribute('aria-current', 'page');
            document.getElementById("gallerynav").href = "#";
            document.getElementById("newsnav").classList.remove('active');
            document.getElementById("newsnav").removeAttribute('aria-current');
            document.getElementById("newsnav").href = "https://hmse-unipi.or.id/news/";
          }
      }

      function emptyNewsList() {
          if (window.location.href.includes("?page=")) {
        document.getElementById("news_listing").innerHTML = 
        "<p style=\"text-align: center;\"><span class=\"anchor-title\" style=\"color: black; mix-blend-mode: normal;\">Parameter halaman tidak valid.</span></p><br>";
        document.getElementById("news_listing").innerHTML += 
        "<p style=\"text-align: center; padding-bottom:10%;\"><a href=\"https://hmse-unipi.or.id/news\" style=\"text-decoration: none; mix-blend-mode: normal; font-family: Myriad-Pro; font-style: italic; font-size: 14pt;\">Kembali ke halaman awal</a></p>";
          } else {
        document.getElementById("news_listing").innerHTML = 
        "<p style=\"text-align: center; padding-bottom:10%;\"><span class=\"anchor-title\" style=\"color: black; mix-blend-mode: normal;\">Belum ada berita apa pun tentang HMSE untuk saat ini.</span></p>";
          }
      }

      function listNewsItems(anchorTitle, date, previewContent, hreflink, primaryThumbnail, indexid) {
        if (isMobile) { //specific listing appearance for mobile
          var subnav = document.getElementsByClassName('subnav');
          document.getElementById("news").style.paddingTop = "20pt";
            for (var i = 0; i < subnav.length; ++i) {
                var item = subnav[i];  
                item.style.margin = "3pt";
                item.style.zoom = "60%";
            }
          document.getElementById("news_listing").innerHTML +=
        "<div class=\"flex-item newsitemobile\" style=\"text-align: left;\">"
+ "<p style=\"font-size: 9pt; color: grey;\"><span class=\"anchor-title-mobile\"><a style=\"text-decoration: none; color: inherit;\" href=\"" + hreflink + "\">"
                  +  anchorTitle
               + "</a></span><br>"+date+"</p>"
               +"<table style=\" table-layout:fixed; resize: both; overflow: auto; margin-bottom:35px; \"><tr><th style=\"min-width: 35%; width:35%; white-space: nowrap; vertical-align: top;\"><img style=\"width:97%; border-radius: 5px; margin-right:9px;\" src=\""
               + primaryThumbnail + "\"></img></th>"
+ "<th style=\"font-weight: normal; font-size: 9pt; vertical-align: top; word-break: normal;\"><p class=\"preview-body-content\">" + previewContent + "</div><br></th></tr></table>"
        } else {
        document.getElementById("news_listing").innerHTML +=
        "<div class=\"flex-item newsitem\" id=\"" + indexid + "_item\" style=\"text-align: left;\">"
+ "<p><span class=\"anchor-title\">" + "<a href=\"" + hreflink + "\" style=\"text-decoration: none; color:inherit;\" onmouseover=\"document.getElementById('" + indexid + "_item\').classList.add('newshover')\" onmouseleave=\"document.getElementById('" + indexid + "_item\').classList.remove('newshover')\">"
                  +  anchorTitle
               + "</a></span><span style=\"color: grey; mix-blend-mode:color-dodge; white-space: nowrap; font-family: Myriad-Pro; font-style: italic; \">"+date+"</span></p>"
               +"<table style=\" table-layout:fixed; resize: both; overflow: auto;\"><tr><td rowspan=\"2\" style=\"min-width: 23%; width:23%; white-space: nowrap; vertical-align: top;\"><img style=\"width:97%; border-radius: 5px; margin-right:9px; mix-blend-mode:color-dodge;\" src=\""
               + primaryThumbnail + "\"></img></td>"
+ "<td style=\"font-weight: normal; vertical-align: top; word-break: normal; mix-blend-mode:plus-lighter;\"><p class=\"preview-body-content\">" + previewContent + "<br></td></tr><tr><td><span"
+ " style=\"margin-left: auto; margin-right: 0;\"><button class=\"subnav btn\" onclick=\"navigator.share({ url: '"+hreflink+"', title: '"+anchorTitle+" - HMSE' });\" style=\"float: right; margin: 0; mix-blend-mode:color-dodge; font-family: Myriad-Pro; font-style: italic; font-weight: bold; text-transform: capitalize; padding-left: 12px; padding-right: 12px; padding-top: 6px; padding-bottom: 6px;\">Share...</button></span></td></tr></table></div>"
        }      
          newscount += 1;
      }
      
      function listOtherNews(anchorTitle, date, hreflink, primaryThumbnail, indexid, isFromGallery) {
          let galleryUrl = "";
          if (isFromGallery == " from-gallery=true") {
            galleryUrl = "&from-gallery=true";
          }
          document.getElementById("more_posts").innerHTML +=
        "<div class=\"flex-item newsitemobile\" style=\"text-align: left; margin-bottom: .6rem;\"><table id=\"" + indexid + "_item\" style=\"table-layout:fixed; resize: both; overflow: auto;\"><tr><th style=\"min-width: 35%; width:35%; white-space: nowrap; vertical-align: top;\"><div style=\"width:7rem; height: 4.5rem; background-image: url('"
               + primaryThumbnail + "'); background-size: cover; border-radius: 5px; margin-right:9px;\"></div></th>"
+ "<th style=\"font-weight: normal; font-size: 9pt; vertical-align: top; word-break: normal;\"><span class=\"anchor-title-mobile sidetitle\"><a style=\"text-decoration: none; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; color: inherit;\" href=\"" + hreflink + galleryUrl
+ "\" onmouseover=\"document.getElementById('" + indexid + "_item\').classList.add('sidehover')\" onmouseleave=\"document.getElementById('" + indexid + "_item\').classList.remove('sidehover')\">"
                  +  anchorTitle
               + "</a></div></span>" + "<p class=\"sidedate\" style=\"font-size: 10pt; margin-top: 0.4rem; margin-bottom: 0; font-family: Myriad-Pro; font-style: italic;\">"+date+"</p>"
               + "</th></tr></table>"
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
          if (!isMobile) {
            fadeout(6);
              var timer = setInterval(function () {
                  if (!isfadingout) {
          window.location.href = 'https://hmse-unipi.or.id/news/search?q=' + searchvalue.split(' ').join('+');
                      clearInterval(timer);
                      alreadydisplayed = false;
              }}, 10);
          } else {
          window.location.href = 'https://hmse-unipi.or.id/news/search?q=' + searchvalue.split(' ').join('+');
          }
    }
      }

      $(window).focus(function() {
          if (!alreadydisplayed) {
          fadein(6, 0.01);
          }
      });
      
      function checkPage() {
          if (totalnews > 0) {
              if ((totalnews % newslimit) != 0) {
                  lastpage = Math.floor(totalnews/newslimit) + 1;
              } else {
                 lastpage = Math.floor(totalnews/newslimit);
              }
          } else {
                  document.getElementById("nextpage").classList.add("disabled");
                  document.getElementById("lastpage").classList.add("disabled");
        document.getElementById("news_listing").innerHTML = 
        "<p style=\"text-align: center; margin-bottom: 0; margin-top: 1rem;\"><span class=\"anchor-title\" style=\"color: black; mix-blend-mode: normal;\">Tidak ada hasil.</span></p><br>";
        document.getElementById("news_listing").innerHTML += 
        "<p style=\"text-align: center; padding-bottom:10%; color: #0a314b; mix-blend-mode: normal; font-family: Myriad-Pro; font-style: italic; font-size: 14pt;\">Coba mencari dengan kata kunci yang berbeda.</p>";
                  lastpage = 1;
          }
          const queryString = window.location.search;
          const urlParams = new URLSearchParams(queryString);
          const pagenum = parseInt(urlParams.get('page'));
          if (pagenum > lastpage) { //if less than 10, it's the last page
                if (lastpage > 1) {
                  if (isSearching()) {
            window.location.href = "https://hmse-unipi.or.id/news/search?q=" + searchedq.replace(' ', '+') + "&page=" + lastpage;
          } else {
            window.location.href = "https://hmse-unipi.or.id/news/?page=" + lastpage;
          }
                } else {
                    if (isSearching()) {
            window.location.href = "https://hmse-unipi.or.id/news/search?q=" + searchedq.replace(' ', '+');
          } else {
            window.location.href = "https://hmse-unipi.or.id/news/";
          }
                }
              } else if (pagenum < 1) {
                  if (isSearching()) {
            window.location.href = "https://hmse-unipi.or.id/news/search?q=" + searchedq.replace(' ', '+');
          } else {
            window.location.href = "https://hmse-unipi.or.id/news/";
          }
              }
      }
      
      function isSearching() {
          return window.location.href.includes("search?q=");
      }
      
      function checkNavButtons() {
          if (totalnews > 0) {
              if ((totalnews % newslimit) != 0) {
                  lastpage = Math.floor(totalnews/newslimit) + 1;
              } else {
                 lastpage = Math.floor(totalnews/newslimit);
              }
          } else {
                  document.getElementById("nextpage").classList.add("disabled");
                  document.getElementById("lastpage").classList.add("disabled");
        document.getElementById("news_listing").innerHTML = 
        "<p style=\"text-align: center; margin-bottom: 0; margin-top: 1rem;\"><span class=\"anchor-title\" style=\"color: black; mix-blend-mode: normal;\">Tidak ada hasil.</span></p><br>";
        document.getElementById("news_listing").innerHTML += 
        "<p style=\"text-align: center; padding-bottom:10%; color: #0a314b; mix-blend-mode: normal; font-family: Myriad-Pro; font-style: italic; font-size: 14pt;\">Coba mencari dengan kata kunci yang berbeda.</p>";
                  lastpage = 1;
          }
          var curpage = 1;
          var pagenum = 1;
          const queryString = window.location.search;
          const urlParams = new URLSearchParams(queryString);
          if (urlParams.has('page')) {
              pagenum = urlParams.get('page');
              if (pagenum > 1) {
                  document.getElementById("firstpage").classList.remove("disabled");
                  document.getElementById("prevpage").classList.remove("disabled");
                  if (isSearching()) {
                  document.title = document.title.replace(" - HMSE","") + " - Page " + pagenum + " - HMSE";
                  } else {
                  document.title = "News - Page " + pagenum + " - HMSE";
                  }
              }
              curpage = ((parseInt(pagenum) - 1) * parseInt(newslimit)) + 1;
          }
              if (pagenum == lastpage) { //if less than 10, it's the last page
                  document.getElementById("nextpage").classList.add("disabled");
                  document.getElementById("lastpage").classList.add("disabled");
              }
          //document.getElementById("pagecount").innerHTML = "Halaman " + curpage + " - " + (curpage + newscount - 1) + " dari " + totalnews;
          document.getElementById("pagecount").innerHTML = "Halaman " + pagenum + " / " + lastpage;
      }
      
      function gobackwithfade(fromGallery) {
          if (!isMobile) {
            fadeout(6);
              var timer = setInterval(function () {
                  if (!isfadingout) {
                        //history.back();
                        let backtourl = sessionStorage.getItem("backtoaddress");
                    if (fromGallery == true) {
                        window.location.href = "https://hmse-unipi.or.id/gallery/";
                    } else {
                        if (backtourl !== null && backtourl !== undefined) {
                            window.location.href = sessionStorage.getItem("backtoaddress");
                        } else {
                            window.location.href = "https://hmse-unipi.or.id/news/";
                        }
                    }
                      clearInterval(timer);
                      alreadydisplayed = false;
              }}, 10);
          } else {
            //history.back();
            let backtourl = sessionStorage.getItem("backtoaddress");
            if (fromGallery == true) {
                        window.location.href = "https://hmse-unipi.or.id/gallery/";
                    } else {
                        if (backtourl !== null && backtourl !== undefined) {
                            window.location.href = sessionStorage.getItem("backtoaddress");
                        } else {
                            window.location.href = "https://hmse-unipi.or.id/news/";
                        }
                    }
          }
      }
      
      function backtostart() {
          if (!isMobile) {
            fadeout(6);
              var timer = setInterval(function () {
                  if (!isfadingout) {
          if (isSearching()) {
              window.location.href = "https://hmse-unipi.or.id/news/search?q=" + searchedq.replace(' ', '+');
          } else {
              window.location.href = "https://hmse-unipi.or.id/news/";
          }
                      clearInterval(timer);
                      alreadydisplayed = false;
              }}, 10);
            } else {
          if (isSearching()) {
              window.location.href = "https://hmse-unipi.or.id/news/search?q=" + searchedq.replace(' ', '+');
          } else {
              window.location.href = "https://hmse-unipi.or.id/news/";
          }
            }
      }
      
      function gotolast(){
          const queryString = window.location.search;
          const urlParams = new URLSearchParams(queryString);
          const pagenum = parseInt(urlParams.get('page'));
          if (!isMobile) {
            fadeout(6);
              var timer = setInterval(function () {
                  if (!isfadingout) {
          if (isSearching()) {
            window.location.href = "https://hmse-unipi.or.id/news/search?q=" + searchedq.replace(' ', '+') + "&page=" + lastpage;
          } else {
            window.location.href = "https://hmse-unipi.or.id/news/?page=" + lastpage;
          }
                      clearInterval(timer);
                      alreadydisplayed = false;
              }}, 10);
            } else {
          if (isSearching()) {
            window.location.href = "https://hmse-unipi.or.id/news/search?q=" + searchedq.replace(' ', '+') + "&page=" + lastpage;
          } else {
            window.location.href = "https://hmse-unipi.or.id/news/?page=" + lastpage;
          }
            }
      }
      
      function nextpage() {
          var curpage = 1;
          const queryString = window.location.search;
          const urlParams = new URLSearchParams(queryString);
          const pagenum = urlParams.get('page');
          if (urlParams.has('page')) {
              curpage = parseInt(pagenum);
          }
          if (!isMobile) {
            fadeout(6);
              var timer = setInterval(function () {
                  if (!isfadingout) {
          if (isSearching()) {
              window.location.href = "https://hmse-unipi.or.id/news/search?q=" + searchedq.replace(' ', '+') + "&page=" + (curpage+1);
          } else {
              window.location.href = "https://hmse-unipi.or.id/news/?page=" + (curpage+1);
          }
                      clearInterval(timer);
                      alreadydisplayed = false;
              }}, 10);
            } else {
          if (isSearching()) {
              window.location.href = "https://hmse-unipi.or.id/news/search?q=" + searchedq.replace(' ', '+') + "&page=" + (curpage+1);
          } else {
              window.location.href = "https://hmse-unipi.or.id/news/?page=" + (curpage+1);
          }
            }
      }
      
      function prevpage() {
          const queryString = window.location.search;
          const urlParams = new URLSearchParams(queryString);
          const pagenum = parseInt(urlParams.get('page'));
          if (!isMobile) {
            fadeout(6);
              var timer = setInterval(function () {
                  if (!isfadingout) {
          if (pagenum > 2) {
              
          if (isSearching()) {
            window.location.href = "https://hmse-unipi.or.id/news/search?q=" + searchedq.replace(' ', '+') + "&page=" + (parseInt(pagenum)-1);
          } else {
            window.location.href = "https://hmse-unipi.or.id/news/?page=" + (parseInt(pagenum)-1);
          }
          } else {
              
          if (isSearching()) {
              window.location.href = "https://hmse-unipi.or.id/news/search?q=" + searchedq.replace(' ', '+');
          } else {
              window.location.href = "https://hmse-unipi.or.id/news/";
          }
          }
                      clearInterval(timer);
                      alreadydisplayed = false;
              }}, 10);
            } else {
          if (pagenum > 2) {
              
          if (isSearching()) {
            window.location.href = "https://hmse-unipi.or.id/news/search?q=" + searchedq.replace(' ', '+') + "&page=" + (parseInt(pagenum)-1);
          } else {
            window.location.href = "https://hmse-unipi.or.id/news/?page=" + (parseInt(pagenum)-1);
          }
          } else {
              
          if (isSearching()) {
              window.location.href = "https://hmse-unipi.or.id/news/search?q=" + searchedq.replace(' ', '+');
          } else {
              window.location.href = "https://hmse-unipi.or.id/news/";
          }
          }
            }
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

$conn->execute_query("DELETE FROM schedule WHERE evt_venue_datetime_end <= NOW();");

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

function newsRegularList($listquery) {
//list the news regularly
//Truncate the preview body content text to 255 characters
//Remove the HTML codes from the preview content
//Sort by the newest date using the MySQL query

if ($listquery->num_rows > 0) {
while($row = mysqli_fetch_array($listquery)) {
  $n_prev_title = $row['newsHeadline'];
  $n_url_id_pointer = "https://hmse-unipi.or.id/news/" . $row['news_url_slug'];
  $n_p_date = date('D, j M Y H:i', strtotime($row['newsDate']));
  $n_prim_thumb = $row['newsMainThumbImg'];
  $n_prev_content = removeLink(substr(preg_replace("/\r\n|\r|\n|\n\r/", ' ', strip_tags($row['newsBodyContent'])), 0, 255));
  $indexid = rand(100000, 999999);
echo "<script>listNewsItems('$n_prev_title', '$n_p_date', '$n_prev_content', '$n_url_id_pointer', '$n_prim_thumb', '$indexid');</script>";
}
} else {
  echo "<script>document.getElementById(\"vnav\").style.display = \"none\";</script>";
  echo "<script>emptyNewsList();</script>";
}

}
        
    if (isset($_GET["page"])) {
    $n_pageindex = intval($_GET['page']) - 1;
    echo "<script>sessionStorage.setItem(\"backtoaddress\", window.location.href);</script>";
} else {
    $n_pageindex = 0;
}


function newsOthersList($listquery, $currentPointer, $fromGalleryArg) {
//list other news
//exclude the currently read news URL pointer

while($row = mysqli_fetch_array($listquery)) {
  $n_prev_title = $row['newsHeadline'];
  $n_url_id_pointer = "https://hmse-unipi.or.id/news/" . $row['news_url_slug'];
  $n_p_date = date('D, j M Y H:i', strtotime($row['newsDate']));
  $n_prim_thumb = $row['newsMainThumbImg'];
  $n_prev_content = removeLink(substr(preg_replace("/\r\n|\r|\n|\n\r/", ' ', strip_tags($row['newsBodyContent'])), 0, 255));
//if ($currentPointer != $row['news_url_slug']) {
  $indexid = rand(100000, 999999);
echo "<script>listOtherNews('$n_prev_title', '$n_p_date', '$n_url_id_pointer', '$n_prim_thumb', '$indexid', ' $fromGalleryArg');</script>";
//}
}

}
        
    if (isset($_GET["page"])) {
    $n_pageindex = intval($_GET['page']) - 1;
    echo "<script>sessionStorage.setItem(\"backtoaddress\", window.location.href);</script>";
} else {
    $n_pageindex = 0;
}

$newslimit = 10;

$n_pageindexoffset = $n_pageindex * $newslimit;

if(isset($_SERVER['PATH_INFO'])) {
    $pathinfo = $_SERVER['PATH_INFO'];
    $idpointerp = str_replace('/', '', substr($pathinfo, 1));
    $idpointer = $idpointerp;
    $isfromgalleryarg = 'from-gallery=false';
    if (str_contains($idpointerp, '&')) {
        $idpointer = explode('&', $idpointerp)[0];
        $isfromgalleryarg = explode('&', $idpointerp)[1];
    }
    if ($idpointer == "") {

      newsRegularList($conn->execute_query("SELECT newsHeadline, newsBodyContent, newsDate, news_url_slug, newsMainThumbImg FROM news ORDER BY ordered_at DESC LIMIT $newslimit OFFSET $n_pageindexoffset"));
  echo "<script>newslimit = \"" . $newslimit . "\";</script>";
    echo "<script>totalnews = \"" . $conn->execute_query("SELECT newsHeadline FROM news")->num_rows . "\";</script>";
      
    } else {

      $result = $conn->execute_query("SELECT newsHeadline, newsBodyContent, newsDate, newsAuthor FROM news WHERE news_url_slug = ? LIMIT 1",  [$idpointer]);

      if ($result->num_rows == 1) { //Check if the article exists
        while($row = mysqli_fetch_array($result)) {
          $n_title = $row['newsHeadline'];
          $n_author = $row['newsAuthor'];
          $n_date = date('D, j M Y H:i', strtotime($row['newsDate']));
          $n_content = preg_replace("/\r\n|\r|\n|\n\r/", '<br>', $row['newsBodyContent']);
         if ($isfromgalleryarg == "from-gallery=true") {
            echo "<script>openNewsId('$n_title', '$n_author', '$n_date', '$n_content', '$isfromgalleryarg');</script>";
      newsOthersList($conn->execute_query("SELECT newsHeadline, newsBodyContent, newsDate, news_url_slug, newsMainThumbImg FROM news WHERE (showInGallery = 1) AND (news_url_slug != '$idpointer') ORDER BY RAND() LIMIT 6;"), $idpointer, $isfromgalleryarg);
          } else {
            echo "<script>openNewsId('$n_title', '$n_author', '$n_date', '$n_content', 'from-gallery=false');</script>";
      newsOthersList($conn->execute_query("SELECT newsHeadline, newsBodyContent, newsDate, news_url_slug, newsMainThumbImg FROM news WHERE (news_url_slug != '$idpointer') ORDER BY RAND() LIMIT 6;"), $idpointer, '');
          }
        }
      } else {
        if (str_starts_with($idpointer, 'search')) { //searching for certain news
          //clear the current listings first

          //execute the search query

          $uriquery = $_SERVER['REQUEST_URI'];

            $n_search_display = $_GET['q'];
            $searchlistquery = $conn->execute_query("SELECT * FROM news WHERE newsHeadline like '%$n_search_display%' OR newsBodyContent like '%$n_search_display%' OR newsDate like '%$n_search_display%' OR newsAuthor like '%$n_search_display%' OR news_url_slug like '%$n_search_display%' ORDER BY newsDate DESC LIMIT $newslimit OFFSET $n_pageindexoffset");
            $search_result_count = $conn->execute_query("SELECT * FROM news WHERE newsHeadline like '%$n_search_display%' OR newsBodyContent like '%$n_search_display%' OR newsDate like '%$n_search_display%' OR newsAuthor like '%$n_search_display%' OR news_url_slug like '%$n_search_display%'")->num_rows;
            $search_result_count_limited = $searchlistquery->num_rows;
            echo "<script>newslimit = \"" . $newslimit . "\";</script>";
            echo "<script>totalnews = \"" . $search_result_count . "\";</script>";
            echo "<script>searchedq = \"$n_search_display\";</script>";
            if ($search_result_count > 0) {
            if ($search_result_count == 1) {
            echo "<script>document.title = \"$search_result_count search result for '$n_search_display' - HMSE\";</script>";
            } else {
            echo "<script>document.title = \"$search_result_count search results for '$n_search_display' - HMSE\";</script>";
            }
            echo "<script>document.getElementById(\"permanent-title\").innerHTML = \"Hasil pencarian untuk '$n_search_display'<br>($search_result_count hasil ditemukan)\"</script>";
            } else {
            echo "<script>document.title = \"No search result found for '$n_search_display' - HMSE\";</script>";
            echo "<script>document.getElementById(\"permanent-title\").innerHTML = \"Hasil pencarian untuk '$n_search_display' tidak ditemukan\"</script>";
            }
            echo "<script>document.getElementById(\"vsearch-text\").style.textTransform = \"inherit\"; document.getElementById(\"vsearch-text\").value = \"$n_search_display\";</script>";
    echo "<script>sessionStorage.setItem(\"backtoaddress\", window.location.href);</script>";
            //continue the searching function (show the search result)

while($row = mysqli_fetch_array($searchlistquery)) {
  $n_search_prev_title = $row['newsHeadline'];
  $n_search_url_id_pointer = "https://hmse-unipi.or.id/news/" . $row['news_url_slug'];
  $n_search_prim_thumb = $row['newsMainThumbImg'];
  $n_search_p_date = date('D, j M Y H:i', strtotime($row['newsDate']));
  $n_search_prev_content = removeLink(substr(preg_replace("/\r\n|\r|\n|\n\r/", ' ', strip_tags($row['newsBodyContent'])), 0, 255));
  $indexid = rand(100000, 999999);
echo "<script>listNewsItems('$n_search_prev_title', '$n_search_p_date', '$n_search_prev_content', '$n_search_url_id_pointer', '$n_search_prim_thumb', '$indexid');</script>";
}

        } else { //Redirect to 404 Not Found
          echo "<script>window.location.replace('https://hmse-unipi.or.id/404/');</script>";
        }
      }
    }
} else {
  
  if (str_contains(getAddress(), "index.php")) {
    $noindex = str_replace('/index.php', '', getAddress());
    echo "<script>window.location.href='$noindex';</script>";
  }
  
  newsRegularList($conn->execute_query("SELECT newsHeadline, newsBodyContent, newsDate, news_url_slug, newsMainThumbImg FROM news ORDER BY newsDate DESC LIMIT $newslimit OFFSET $n_pageindexoffset"));
  echo "<script>newslimit = \"" . $newslimit . "\";</script>";
    echo "<script>totalnews = \"" . $conn->execute_query("SELECT newsHeadline FROM news")->num_rows . "\";</script>";
}

?>