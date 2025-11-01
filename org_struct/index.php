<?php

function getAddress() {
  $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
  return $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

if (str_contains(getAddress(), "index.php")) {
  $noindex = str_replace('/index.php', '', getAddress());
  echo "<script>window.location.href='$noindex';</script>";
}

$pgtitle = "Organisation Structure - HMSE";

include '/home/hmseunip/public_html/templates/header.php';

?>

                          <style>
                            .orgstr {
    min-height: 50vh;
    background-color: rgba(255,255,255,1);
                            }
                        
                        div .structhead {
                            font-family: Myriad-Pro !important;
                            font-style: italic;
                        }
                            
                            .desktopdetails {
                                font-family: Myriad-Pro;
                                font-style: italic;
                                color: white;
                                margin: 0;
                                transform: translateY(16pt);
                            }
                            

@media (hover:hover) {
    .desktopfiller, .topstyle, #footerdiv, footer {
        min-width: 1314px !important;
    }
    .desktopfiller {
        background-color: white;
    }
}
@media (hover:none), (hover:on-demand) {
    #mobile-mode-view {
        transform: translateY(-32pt);
    }
}
                          </style>


                <!-- JUMBOTRON START -->
                <section id="toppage" class="jumbotron text-center">

                  <h1><b>Struktur Organisasi</b></h1>
                  <p class="desktopdetails" id="desktopdetails">Arahkan kursor pada kotak hirarki untuk melihat info lengkap tiap-tiap BPH.</p>
                  <!-- <p class="lead">Fakultas Ilmu Komputer Universitas Indonesia</p> -->
                  <div class="topstyle" style="transform: scaleY(1.02); overflow-x: hidden;">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 100%; min-width:1440px; height: auto;" viewBox="0 10 1440 120">
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
                              
                              .hoverbox {
                                transform: scale(0.4);
                                border-radius: 8px;
                                    position: fixed;
                                  display: block;
                                visibility: hidden;
                                z-index: 7;
                              transition: visibility 250ms, transform 500ms ease-in-out, left 250ms linear, right 250ms linear, top 250ms linear, bottom 250ms linear;
                             }
                             
                             .hoverbox-container {
                                max-width: 519px;
                                /*backdrop-filter: blur(12px);*/
                                overflow: hidden;
                                isolation: isolate;
                                border-radius: 8px;
                                position: relative;
                                transition: opacity 500ms, transform 500ms ease-in-out;
                             }
                              
                              .hoverbox:hover {
                                transform: scale(1);
                                visibility: visible;
                              }
                              
                              .hoverbox:hover .hoverbox-container {
                                transform: scale(1);
                              }
    
    .hoverbox-background {
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
                                border-radius: 8px;
        left:0;
                                box-shadow: 0px 3px 12px rgba(0, 0, 0, .8);
        top:0;
        z-index: -1;
    }
    
    .hoverbox-background-colour {
        background-color: #00c3ee80;
    }
    
    .hoverbox-opacity-controller {
        opacity: 0;
        filter: blur(19px);
        transition: opacity 300ms ease-in-out, filter 300ms ease-in-out;
    }
    
    .hoverbox-opacity-filter-controller {
        filter: opacity(0) blur(19px);
        transition: filter 300ms ease-in-out;
    }
                              
                              .hoverbox:hover .hoverbox-opacity-controller {
                                 opacity: 1;
        filter: blur(0px);
                              }
                              
                              .hoverbox:hover .hoverbox-opacity-filter-controller {
        filter: opacity(1) blur(0px);
                              }
                              
                              .deptname {
                                  font-weight: bold;
                                  margin-top: -1.27rem;
                              }
                              
                              .linkcont {
                                  cursor: pointer;
                                  font-family: Myriad-Pro;
                                  font-style: italic; 
                                  display: inline-block;
                              }
                              
                              .membernameshadow {
                                  position: relative;
                                    font-size: 24pt !important;
                                    -webkit-mask: linear-gradient(#000 0 0) text;
                                    mask: linear-gradient(#000 0 0) text;
                                    z-index: -2;
                                    pointer-events: none;
                                    backdrop-filter: brightness(1);
                                    -webkit-backdrop-filter: brightness(1);
                                    transition: backdrop-filter 100ms ease-in, -webkit-backdrop-filter 100ms ease-in;
                              }
                              
                              @supports (-webkit-mask: linear-gradient(#000 0 0) text) {
                              
                              .membernameshadow {
                                    color: transparent;
                                    -webkit-mask: linear-gradient(#000 0 0) text;
                                    mask: linear-gradient(#000 0 0) text;
                                    backdrop-filter: brightness(1);
                                    -webkit-backdrop-filter: brightness(1);
                                    transition: backdrop-filter 60ms ease-in-out, -webkit-backdrop-filter 60ms ease-in-out;
                              }
                              
    .deptname, .linkcont {
                                  color: transparent;
                                    -webkit-mask: linear-gradient(#000 0 0) text;
                                    mask: linear-gradient(#000 0 0) text;
                                backdrop-filter: saturate(0.5) brightness(9) saturate(2) opacity(0);
                                    -webkit-backdrop-filter: saturate(0.5) brightness(9) saturate(2) opacity(0);
                                    transition: backdrop-filter 300ms ease-in-out, -webkit-backdrop-filter 300ms ease-in-out;
    }
                              
                              .hoverbox:hover .deptname {
                                    backdrop-filter:saturate(0.5) brightness(9) saturate(2) opacity(1);
                                    -webkit-backdrop-filter: saturate(0.5) brightness(9) saturate(2) opacity(1);
                              }
                              
                              .hoverbox:hover .linkcont {
                                    backdrop-filter: brightness(9) opacity(1);
                                    -webkit-backdrop-filter: brightness(9) opacity(1);
                                    transition: backdrop-filter 300ms ease-in-out, -webkit-backdrop-filter 300ms ease-in-out;
                              }
                              
                              .hoverbox:hover .linkcont:hover {
                                    backdrop-filter:saturate(0.5) brightness(100) saturate(2) opacity(1);
                                    -webkit-backdrop-filter: saturate(0.5) brightness(100) saturate(2) opacity(1);
                                    text-decoration: underline;
                                    transition: backdrop-filter 300ms ease-in-out, -webkit-backdrop-filter 300ms ease-in-out;
                              }
                              
                              .hoverbox:hover .membernameshadow {
                                    backdrop-filter: brightness(100);
                                    -webkit-backdrop-filter: brightness(100);
                                    transition: backdrop-filter 1800ms ease-in-out, -webkit-backdrop-filter 1800ms ease-in-out;
                              }
   
    
                                }
    
                             @supports not (-webkit-mask: linear-gradient(#000 0 0) text) {
                              
    .deptname, .membernameshadow, .linkcont {
                                    opacity: 0;
                                    filter: blur(19px);
                                  color: #00FFFF;
                                    transition: opacity 300ms ease-in-out, filter 300ms ease-in-out;
    }
                              
                              .hoverbox:hover .deptname {
                                    opacity: 1;
                                    filter: blur(0px);
                              }
                              
                              .hoverbox:hover .linkcont {
                                    opacity: 1;
                                    filter: blur(0px);
                              }
                              
                              .hoverbox:hover .linkcont:hover {
                                    color: white;
                                    text-decoration: underline;
                              }
                              
                              .hoverbox:hover .membernameshadow {
                                    opacity: 0.7;
                              }
    
                                }

                              .membername {
                                  font-size: 24pt !important;
                                  color: #0a314b;
                                  position: absolute;
                                    top: 11;
                                  /*text-shadow: 0px 0px 12px white;*/
                              }
                              
                              
                          </style>
                          
                          <!-- ITEM HOVER BOX -->
                          <div class="hoverbox" id="hoveritembox" onmouseleave="hoverexit();">
                              
                              <div class="hoverbox-background hoverbox-opacity-controller hoverbox-background-colour" style="backdrop-filter: blur(4px) brightness(0.5); -webkit-backdrop-filter: brightness(0.5);"></div>
                              <div class="hoverbox-background hoverbox-opacity-controller" style="backdrop-filter: invert() brightness(2) invert() brightness(0.75); -webkit-backdrop-filter: invert() brightness(2) invert() brightness(0.75); border-radius: 6px !important;"></div>
                              
                              <div class="hoverbox-container">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <td colspan="2" ><h2 id="hovernameshadow" class="membernameshadow"></h2>
                              <div class="hoverbox-opacity-controller" style="backdrop-filter: blur(6px) brightness(1.5); -webkit-backdrop-filter: blur(6px) brightness(1.5); position: absolute; width: 100%; height: 100%; top: 0; left: 0; border-radius: 8px; z-index: -1"></div>
                              <h2 id="hovername" class="membername hoverbox-opacity-controller"></h2></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <h4 class="deptname" id="hoverdept"></h4>
                                          </td>
                                  <td style="width:35%; right: 1.2rem; position: relative;" rowspan="2">
                                      <img id="hoverphoto" class="hoverbox-opacity-filter-controller" style="max-width: 100%; backdrop-filter: saturate(0.5) brightness(9) saturate(2); -webkit-backdrop-filter: saturate(0.5) brightness(9) saturate(2); box-shadow: 0px 0px 9px rgba(0,0,0,.7); padding: 4px; border-radius: 4px;">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div id="hoverinfo" class="hoverbox-opacity-controller" style="color: white;">
                                      </div>
                                      <div id="hoverlinks" style="padding-top:.75rem;">
                                      </div>
                                  </td></tr>
                              </table>
                              </div>
                          </div>
                        
                        <div style="margin-top: 1.5rem;">
                        
                        <svg id="orggraph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="1167" height="1034" viewBox="-0.5 -0.5 1167 1034" style="overflow-x: hidden; margin-left:.7em;"><defs>
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
<filter id="dropShadow"><feGaussianBlur in="SourceAlpha" stdDeviation="1.9" result="blur"/><feOffset in="blur" dx="0.6" dy="0.6" result="offsetBlur"/><feFlood flood-color="#000" flood-opacity="0.9" result="offsetColor"/><feComposite in="offsetColor" in2="offsetBlur" operator="in" result="offsetBlur"/><feBlend in="SourceGraphic" in2="offsetBlur"/></filter></defs>
<g filter="url(#dropShadow)"><g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-34" x="620.52" y="740.78" width="233" height="94.61" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-34" d="M 620.52 787.78 L 853.16 787.78" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-35" x="620.52" y="740.78" width="233" height="47" fill="#0a314b" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-35" d="M 620.52 740.78 M 853.16 740.78 M 853.16 787.78 M 620.52 787.78" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-36" d="M 620.52 740.78 M 853.52 740.78 M 853.52 787.78 M 620.52 787.78" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-36" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-36"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-36" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 764px; margin-left: 622px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 43px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 18px; font-family: &quot;Myriad-Pro&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2000000000000002; pointer-events: none; font-weight: bold; font-style: italic; white-space: normal; word-wrap: normal; "><b>
<font color="#ffffff" face="Myriad-Pro" size="1"><i style="font-size: 18px">Litbang</i></font></b></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="9SeNFymFEoiaXwJL" d="M636.921875,771.103125 h201.140625"/></defs>
<text fill="rgb(255, 255, 255)" font-size="18px" font-family="Myriad-Pro" font-weight="900"><textPath xlink:href="#9SeNFymFEoiaXwJL" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Litbang</tspan></textPath></text></svg></switch></g></g>

<g shape-node=""><rect
onmouseover="hoveritem('Zaki Ma\&apos;rufan Chandra', 'Ketua Divisi Litbang', '<b>NPM:</b> 2023807008<br><b>Semester:</b> 4 (Pagi)<br><b>Alamat:</b> Perum Villa Balaraja', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/LITBANG/ZAKI/_MG_0755.JPG', 'https://instagram.com/zakimarufan', 'mailto:zaki.marufan@hmse-unipi.or.id');"
cell-id="uyBNu8ZkWYXFzvXpFR8D-37" x="620.52" y="787.78" width="233" height="48" fill="#ffffff" stroke="#000000"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-37" d="M 620.52 787.78 M 853.16 787.78 M 853.16 835.78 M 620.52 835.78" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-38" x="620.52" y="787.78" width="233" height="48" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-38" d="M 620.52 787.78 M 853.52 787.78 M 853.52 835.78 M 620.52 835.78" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-38" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-38"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-38" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 812px; margin-left: 622px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Zaki Ma'rufan Chandra (Kadiv)</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="bSeNFymFEoiaXwJM" d="M669.03125,820.20625 h136.9375"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#bSeNFymFEoiaXwJM" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Zaki Ma'rufan Chandra (Kadiv)</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-69" d="M 736.84 858.71 L 736.84 835.78" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect
onmouseover="hoveritem('Wardiyansyah', 'Litbang', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/WARDIYANSYAH.JPG', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="uyBNu8ZkWYXFzvXpFR8D-55" x="620.52" y="858.71" width="233" height="47.99" fill="#ffffff" stroke="#000000"/></g>

<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-56" d="M 620.52 858.71 M 853.16 858.71 M 853.16 906.71 M 620.52 906.71" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-57" d="M 620.52 858.71 M 853.52 858.71 M 853.52 906.71 M 620.52 906.71" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-57" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-57"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-57" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 883px; margin-left: 622px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Wardiyansyah</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="fSeNFymFEoiaXwJN" d="M657.4375,891.20625 h160.109375"/><path id="AyeNFymFEoiaXwJO" d="M783.75,891.20625 h33.796875"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#fSeNFymFEoiaXwJN" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Wardiyansyah</tspan>
<tspan xml:space="preserve" style="font-size: 16px; font-weight: bold;"><tspan xml:space="preserve"></tspan></tspan></textPath></text>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#AyeNFymFEoiaXwJO" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve"></tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-68" d="M 736.84 930.01 L 736.84 906.71" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect
onmouseover="hoveritem('Riyan Hidayat', 'Litbang', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="uyBNu8ZkWYXFzvXpFR8D-59" x="620.52" y="930.01" width="233" height="47.99" fill="#ffffff" stroke="#000000"/></g>

<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-60" d="M 620.52 930.01 M 853.16 930.01 M 853.16 978.01 M 620.52 978.01" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-61" d="M 620.52 930.01 M 853.52 930.01 M 853.52 978.01 M 620.52 978.01" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-61" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-61"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-61" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 954px; margin-left: 622px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Riyan Hidayat</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="kyeNFymFEoiaXwJP" d="M679.46875,957.00625 h116.0625"/><path id="WyeNFymFEoiaXwJQ" d="M720.828125,962.20625 h74.703125"/></defs>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#kyeNFymFEoiaXwJP" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Riyan </tspan>
<tspan xml:space="preserve" style="font-size: 16px; font-weight: bold;"><tspan xml:space="preserve">Hidayat   </tspan></tspan></textPath></text>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#WyeNFymFEoiaXwJQ" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Hidayat   </tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><rect cell-id="eG40mamMxs6arq8eiBQ4-66" x="926.36" y="718.92" width="233" height="110.86" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="eG40mamMxs6arq8eiBQ4-66" d="M 926.36 766.92 L 1159 766.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><rect cell-id="eG40mamMxs6arq8eiBQ4-67" x="926.36" y="718.92" width="233" height="48" fill="#0a314b" stroke="#000000" pointer-events="none"/><path cell-id="eG40mamMxs6arq8eiBQ4-67" d="M 926.36 718.92 M 1159 718.92 M 1159 766.92 M 926.36 766.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-68" d="M 926.36 718.92 M 1159.36 718.92 M 1159.36 766.92 M 926.36 766.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="eG40mamMxs6arq8eiBQ4-68" transform="translate(-0.5 -0.5)"><switch cell-id="eG40mamMxs6arq8eiBQ4-68"><foreignObject cell-id="eG40mamMxs6arq8eiBQ4-68" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 743px; margin-left: 927px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 18px; font-family: &quot;Myriad-Pro&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2000000000000002; pointer-events: none; font-weight: bold; font-style: italic; white-space: normal; word-wrap: normal; "><font color="#ffffff" face="Myriad-Pro" size="1"><b>
<i style="font-size: 18px">Sarana &amp; Prasarana</i></b></font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="RyeNFymFEoiaXwJR" d="M1004.578125,750.103125 h75.84375"/></defs>
<text fill="rgb(255, 255, 255)" font-size="18px" font-family="Myriad-Pro" font-weight="900"><textPath xlink:href="#RyeNFymFEoiaXwJR" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Sarana &amp; Prasarana</tspan></textPath></text></svg></switch></g></g>

<g shape-node=""><rect
onmouseover="hoveritem('Irfan Hafizh', 'Ketua Divisi Sarana & Prasarana', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/HAFIZH.JPG', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="eG40mamMxs6arq8eiBQ4-69" x="926.36" y="766.92" width="233" height="63" fill="#ffffff" stroke="#000000"/><path cell-id="eG40mamMxs6arq8eiBQ4-69" d="M 926.36 766.92 M 1159 766.92 M 1159 829.92 M 926.36 829.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect cell-id="eG40mamMxs6arq8eiBQ4-70" x="926.36" y="766.92" width="233" height="63" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="eG40mamMxs6arq8eiBQ4-70" d="M 926.36 766.92 M 1159.36 766.92 M 1159.36 829.92 M 926.36 829.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="eG40mamMxs6arq8eiBQ4-70" transform="translate(-0.5 -0.5)"><switch cell-id="eG40mamMxs6arq8eiBQ4-70"><foreignObject cell-id="eG40mamMxs6arq8eiBQ4-70" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 798px; margin-left: 927px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 59px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Irfan Hafizh (Kadiv)</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="1yeNFymFEoiaXwJS" d="M961.375,796.6125 h162.25 M961.375,815.8125 h162.25"/><path id="dyeNFymFEoiaXwJT" d="M961.375,796.6125 h162.25 M961.375,815.8125 h162.25"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#1yeNFymFEoiaXwJS"><tspan xml:space="preserve">Irfan Hafizh</tspan>
<tspan xml:space="preserve"/><tspan xml:space="preserve">(Kadiv)</tspan></textPath></text>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#dyeNFymFEoiaXwJT"><tspan xml:space="preserve">Irfan Hafizh</tspan>
<tspan xml:space="preserve"/><tspan xml:space="preserve">(Kadiv)</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-81" d="M 1042.68 846.8 L 1042.68 829.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect
onmouseover="hoveritem('Aflahal Bambang Jaya', 'Sarana & Prasarana', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/AFLAHAL.JPG', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="eG40mamMxs6arq8eiBQ4-136" x="926.36" y="846.8" width="233" height="47.99" fill="#ffffff" stroke="#000000"/></g>

<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-139" d="M 926.36 846.8 M 1159 846.8 M 1159 894.8 M 926.36 894.8" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-140" d="M 926.36 846.8 M 1159.36 846.8 M 1159.36 894.8 M 926.36 894.8" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="eG40mamMxs6arq8eiBQ4-140" transform="translate(-0.5 -0.5)"><switch cell-id="eG40mamMxs6arq8eiBQ4-140"><foreignObject cell-id="eG40mamMxs6arq8eiBQ4-140" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 871px; margin-left: 927px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Aflahal Bambang Jaya</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="ryeNFymFEoiaXwJU" d="M1013.15625,879.20625 h58.6875"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#ryeNFymFEoiaXwJU" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Aflahal Bambang Jaya</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-82" d="M 1042.68 912.4 L 1042.68 894.8" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect
onmouseover="hoveritem('Ahmad Nurohman', 'Sarana & Prasarana', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/MARMUT.JPG', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="eG40mamMxs6arq8eiBQ4-141" x="926.36" y="912.4" width="233" height="47.99" fill="#ffffff" stroke="#000000"/></g>

<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-144" d="M 926.36 912.4 M 1159 912.4 M 1159 960.4 M 926.36 960.4" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-145" d="M 926.36 912.4 M 1159.36 912.4 M 1159.36 960.4 M 926.36 960.4" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="eG40mamMxs6arq8eiBQ4-145" transform="translate(-0.5 -0.5)"><switch cell-id="eG40mamMxs6arq8eiBQ4-145"><foreignObject cell-id="eG40mamMxs6arq8eiBQ4-145" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 936px; margin-left: 927px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Ahmad Nurohman</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="PyeNFymFEoiaXwJV" d="M992.109375,944.20625 h100.78125"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#PyeNFymFEoiaXwJV" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Ahmad Nurohman</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-80" d="M 1042.68 978.01 L 1042.68 960.4" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect
onmouseover="hoveritem('Andryan Permana', 'Sarana & Prasarana', '<b>NPM:</b> <br><b>Semester:</b> 5 (Pagi)<br><b>Alamat:</b> Kec. Cikupa', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/RADIT.JPG', 'https://instagram.com/guaudin__', 'mailto:nursidin25@hmse-unipi.or.id');"
cell-id="eG40mamMxs6arq8eiBQ4-151" x="926.36" y="978.01" width="233" height="47.99" fill="#ffffff" stroke="#000000"/></g>

<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-154" d="M 926.36 978.01 M 1159 978.01 M 1159 1026.01 M 926.36 1026.01" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-155" d="M 926.36 978.01 M 1159.36 978.01 M 1159.36 1026.01 M 926.36 1026.01" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="eG40mamMxs6arq8eiBQ4-155" transform="translate(-0.5 -0.5)"><switch cell-id="eG40mamMxs6arq8eiBQ4-155"><foreignObject cell-id="eG40mamMxs6arq8eiBQ4-155" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 1002px; margin-left: 927px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Andryan Permana</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="wKeNFymFEoiaXwJW" d="M992.6875,1010.20625 h99.609375"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#wKeNFymFEoiaXwJW" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Andryan Permana</tspan></textPath></text></svg></switch></g></g>

<g shape-node=""><rect
onmouseover="hoveritem('Azzahra', 'Bendahara', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/AZRA.JPG', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="EpU-Q-2c0rqgZvnUK9TC-34" x="463.18" y="544.08" width="233" height="56.22" fill="#ffffff" stroke="#000000"/></g>

<g shape-node="" text-node=""><g cell-id="EpU-Q-2c0rqgZvnUK9TC-34" transform="translate(-0.5 -0.5)"><switch cell-id="EpU-Q-2c0rqgZvnUK9TC-34"><foreignObject cell-id="EpU-Q-2c0rqgZvnUK9TC-34" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 572px; margin-left: 464px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Azzahra</div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="EKeNFymFEoiaXwJX" d="M550.140625,579.20625 h58.703125"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#EKeNFymFEoiaXwJX" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Azzahra</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><rect cell-id="eG40mamMxs6arq8eiBQ4-36" x="463.18" y="406.29" width="233" height="112.43" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="eG40mamMxs6arq8eiBQ4-36" d="M 463.18 461.29 L 695.82 461.29" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><rect cell-id="eG40mamMxs6arq8eiBQ4-37" x="463.18" y="406.29" width="233" height="55" fill="#0a314b" stroke="#000000" pointer-events="none"/><path cell-id="eG40mamMxs6arq8eiBQ4-37" d="M 463.18 406.29 M 695.82 406.29 M 695.82 461.29 M 463.18 461.29" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-38" d="M 463.18 406.29 M 696.18 406.29 M 696.18 461.29 M 463.18 461.29" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="eG40mamMxs6arq8eiBQ4-38" transform="translate(-0.5 -0.5)"><switch cell-id="eG40mamMxs6arq8eiBQ4-38"><foreignObject cell-id="eG40mamMxs6arq8eiBQ4-38" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 434px; margin-left: 464px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 51px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 18px; font-family: &quot;Myriad-Pro&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2000000000000002; pointer-events: none; font-weight: bold; font-style: italic; white-space: normal; word-wrap: normal; "><b>
<font color="#ffffff" face="Myriad-Pro" size="1"><i style="font-size: 18px">Bendahara</i></font></b></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="SKeNFymFEoiaXwJY" d="M525.03125,441.103125 h108.921875"/></defs>
<text fill="rgb(255, 255, 255)" font-size="18px" font-family="Myriad-Pro" font-weight="900"><textPath xlink:href="#SKeNFymFEoiaXwJY" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Bendahara</tspan></textPath></text></svg></switch></g></g>

<g shape-node=""><rect
onmouseover="hoveritem('Nadiah Zahra', 'Ketua Divisi Bendahara', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/NADIA.JPG', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="eG40mamMxs6arq8eiBQ4-40" x="463.18" y="461.29" width="233" height="57" fill="#ffffff" stroke="none"/><path cell-id="eG40mamMxs6arq8eiBQ4-40" d="M 463.18 461.29 M 696.18 461.29 M 696.18 518.29 M 463.18 518.29" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node="" text-node=""><g cell-id="eG40mamMxs6arq8eiBQ4-40" transform="translate(-0.5 -0.5)"><switch cell-id="eG40mamMxs6arq8eiBQ4-40"><foreignObject cell-id="eG40mamMxs6arq8eiBQ4-40" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 490px; margin-left: 464px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 53px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Nadiah Zahra (Kadiv)</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="mKeNFymFEoiaXwJZ" d="M503.453125,498.20625 h152.078125"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#mKeNFymFEoiaXwJZ" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Nadiah Zahra (Kadiv)</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-67" d="M 579.5 544.08 L 579.5 518.29" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-39" x="926.27" y="410.05" width="233" height="94.61" fill="#ffffff" stroke="#000000"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-39" d="M 926.27 457.05 L 1158.91 457.05" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-40" x="926.27" y="410.05" width="233" height="47" fill="#0a314b" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-40" d="M 926.27 410.05 M 1158.91 410.05 M 1158.91 457.05 M 926.27 457.05" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-41" d="M 926.27 410.05 M 1159.27 410.05 M 1159.27 457.05 M 926.27 457.05" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-41" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-41"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-41" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 434px; margin-left: 927px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 43px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 18px; font-family: &quot;Myriad-Pro&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2000000000000002; pointer-events: none; font-weight: bold; font-style: italic; white-space: normal; word-wrap: normal; "><b>
<font color="#ffffff" face="Myriad-Pro" size="1"><i style="font-size: 18px">SDM</i></font></b></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="xKeNFymFEoiaXwJa" d="M1020.09375,441.103125 h44.796875"/></defs>
<text fill="rgb(255, 255, 255)" font-size="18px" font-family="Myriad-Pro" font-weight="900"><textPath xlink:href="#xKeNFymFEoiaXwJa" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">SDM</tspan></textPath></text></svg></switch></g></g>

<g shape-node=""><rect
onmouseover="hoveritem('Yesih Sustari', 'Ketua Divisi SDM', '<b>NPM:</b> 2023807040<br><b>Semester:</b> 4 (Pagi)<br><b>Alamat:</b> Curug', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/SDM/YESIH/_MG_0873.JPG', 'https://instagram.com/yesihsst_', 'mailto:yesihstr@hmse-unipi.or.id');"
cell-id="uyBNu8ZkWYXFzvXpFR8D-42" x="926.27" y="457.05" width="233" height="48" fill="#ffffff" stroke="#000000"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-42" d="M 926.27 457.05 M 1158.91 457.05 M 1158.91 505.05 M 926.27 505.05" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-43" x="926.27" y="457.05" width="233" height="48" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-43" d="M 926.27 457.05 M 1159.27 457.05 M 1159.27 505.05 M 926.27 505.05" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-43" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-43"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-43" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 481px; margin-left: 927px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Yesih Sustari (Kadiv)</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="NKeNFymFEoiaXwJb" d="M968.53125,489.20625 h147.921875"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#NKeNFymFEoiaXwJb" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Yesih Sustari (Kadiv)</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-71" d="M 1042.59 530.72 L 1042.59 505.05" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect
onmouseover="hoveritem('Amelia Virnada', 'SDM', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/NADA.JPG', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="uyBNu8ZkWYXFzvXpFR8D-44" x="926.27" y="530.72" width="233" height="47.99" fill="#ffffff" stroke="#000000"/></g>

<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-45" d="M 926.27 530.72 M 1158.91 530.72 M 1158.91 578.72 M 926.27 578.72" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-46" d="M 926.27 530.72 M 1159.27 530.72 M 1159.27 578.72 M 926.27 578.72" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-46" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-46"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-46" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 555px; margin-left: 927px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Amelia Virnada</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="LKeNFymFEoiaXwJc" d="M988.390625,563.20625 h108.21875"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#LKeNFymFEoiaXwJc" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Amelia Virnada</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><rect cell-id="eG40mamMxs6arq8eiBQ4-111" x="309.88" y="718.92" width="233" height="94.61" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="eG40mamMxs6arq8eiBQ4-111" d="M 309.88 765.92 L 542.52 765.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><rect cell-id="eG40mamMxs6arq8eiBQ4-112" x="309.88" y="718.92" width="233" height="47" fill="#0a314b" stroke="#000000" pointer-events="none"/><path cell-id="eG40mamMxs6arq8eiBQ4-112" d="M 309.88 718.92 M 542.52 718.92 M 542.52 765.92 M 309.88 765.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-113" d="M 309.88 718.92 M 542.88 718.92 M 542.88 765.92 M 309.88 765.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="eG40mamMxs6arq8eiBQ4-113" transform="translate(-0.5 -0.5)"><switch cell-id="eG40mamMxs6arq8eiBQ4-113"><foreignObject cell-id="eG40mamMxs6arq8eiBQ4-113" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 742px; margin-left: 311px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 43px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 18px; font-family: &quot;Myriad-Pro&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2000000000000002; pointer-events: none; font-weight: bold; font-style: italic; white-space: normal; word-wrap: normal; "><b>
<font color="#ffffff" face="Myriad-Pro" size="1"><i style="font-size: 18px">Kominfo</i></font></b></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="PKeNFymFEoiaXwJd" d="M384.40625,749.103125 h84.1875"/></defs>
<text fill="rgb(255, 255, 255)" font-size="18px" font-family="Myriad-Pro" font-weight="900"><textPath xlink:href="#PKeNFymFEoiaXwJd" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Kominfo</tspan></textPath></text></svg></switch></g></g>

<g shape-node=""><rect
onmouseover="hoveritem('Nandito Restu Faiza', 'Ketua Divisi Kominfo', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/KOMINFO/NANDITO/_MG_0808.JPG', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="eG40mamMxs6arq8eiBQ4-114" x="309.88" y="765.92" width="233" height="48" fill="#ffffff" stroke="#000000"/><path cell-id="eG40mamMxs6arq8eiBQ4-114" d="M 309.88 765.92 M 542.52 765.92 M 542.52 813.92 M 309.88 813.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect cell-id="eG40mamMxs6arq8eiBQ4-115" x="309.88" y="765.92" width="233" height="48" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="eG40mamMxs6arq8eiBQ4-115" d="M 309.88 765.92 M 542.88 765.92 M 542.88 813.92 M 309.88 813.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="eG40mamMxs6arq8eiBQ4-115" transform="translate(-0.5 -0.5)"><switch cell-id="eG40mamMxs6arq8eiBQ4-115"><foreignObject cell-id="eG40mamMxs6arq8eiBQ4-115" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 790px; margin-left: 311px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Nandito Restu Faiza (Kadiv)</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="IqeNFymFEoiaXwJe" d="M326.453125,798.20625 h200.09375"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#IqeNFymFEoiaXwJe" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Nandito Restu Faiza (Kadiv)</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-86" d="M 426.2 832.4 L 426.2 813.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect
onmouseover="hoveritem('Latif Palikal Isbah', 'Kominfo', '<b>NPM:</b> 2023807015<br><b>Semester:</b> 4 (Pagi)<br><b>Alamat:</b> Parung Panjang, Bogor', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/KOMINFO/LATIF/Latif-HMSE-02.png', 'https://instagram.com/latiffhalik_22', 'mailto:latiffalikal@hmse-unipi.or.id');"
cell-id="eG40mamMxs6arq8eiBQ4-116" x="309.88" y="832.4" width="233" height="47.99" fill="#ffffff" stroke="#000000"/></g>

<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-119" d="M 309.88 832.4 M 542.52 832.4 M 542.52 880.4 M 309.88 880.4" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-120" d="M 309.88 832.4 M 542.88 832.4 M 542.88 880.4 M 309.88 880.4" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="eG40mamMxs6arq8eiBQ4-120" transform="translate(-0.5 -0.5)"><switch cell-id="eG40mamMxs6arq8eiBQ4-120"><foreignObject cell-id="eG40mamMxs6arq8eiBQ4-120" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 856px; margin-left: 311px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Latif Palikal Isbah</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="8qeNFymFEoiaXwJf" d="M363.796875,864.20625 h125.40625"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#8qeNFymFEoiaXwJf" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Latif Palikal Isbah</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-85" d="M 426.2 899.67 L 426.2 880.4" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect
onmouseover="hoveritem('Rizki Wahyudi', 'Kominfo', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/WAHYU_2025.jpg', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="eG40mamMxs6arq8eiBQ4-121" x="309.88" y="899.67" width="233" height="47.99" fill="#ffffff" stroke="#000000"/></g>

<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-124" d="M 309.88 899.67 M 542.52 899.67 M 542.52 947.67 M 309.88 947.67" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-125" d="M 309.88 899.67 M 542.88 899.67 M 542.88 947.67 M 309.88 947.67" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="eG40mamMxs6arq8eiBQ4-125" transform="translate(-0.5 -0.5)"><switch cell-id="eG40mamMxs6arq8eiBQ4-125"><foreignObject cell-id="eG40mamMxs6arq8eiBQ4-125" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 924px; margin-left: 311px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Rizki Wahyudi</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="6qeNFymFEoiaXwJg" d="M376.109375,932.20625 h100.765625"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#6qeNFymFEoiaXwJg" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Rizki Wahyudi</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-84" d="M 426.2 968.3 L 426.2 947.67" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect
onmouseover="hoveritem('Didik Aprilianto', 'Kominfo', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/DIDIK.JPG', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="eG40mamMxs6arq8eiBQ4-126" x="309.88" y="968.3" width="233" height="47.99" fill="#ffffff" stroke="#000000"/></g>

<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-129" d="M 309.88 968.3 M 542.52 968.3 M 542.52 1016.3 M 309.88 1016.3" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-130" d="M 309.88 968.3 M 542.88 968.3 M 542.88 1016.3 M 309.88 1016.3" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="eG40mamMxs6arq8eiBQ4-130" transform="translate(-0.5 -0.5)"><switch cell-id="eG40mamMxs6arq8eiBQ4-130"><foreignObject cell-id="eG40mamMxs6arq8eiBQ4-130" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 992px; margin-left: 311px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 12px; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Didik Aprilianto </font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="hqeNFymFEoiaXwJh" d="M381.46875,1000.20625 h40.015625"/><path id="JqeNFymFEoiaXwJi" d="M381.46875,995.00625 h90.046875"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#hqeNFymFEoiaXwJh" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Didik </tspan></textPath></text>
<text fill="rgb(0, 0, 0)" font-size="12px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#JqeNFymFEoiaXwJi" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve" style="font-size: 16px; font-weight: bold;"><tspan xml:space="preserve">Didik </tspan></tspan>
<tspan xml:space="preserve">Aprilianto </tspan></textPath></text></svg></switch></g></g>

<g shape-node=""><rect
onmouseover="hoveritem('Yuliana Zahra', 'Sekretaris', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/YULIANA.JPG', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="uyBNu8ZkWYXFzvXpFR8D-1" x="0" y="578.72" width="233" height="47.99" fill="rgba(255, 255, 255, 1)" stroke="#000000"/></g>

<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-2" d="M 0 578.72 M 232.64 578.72 M 232.64 626.72 M 0 626.72" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-3" d="M 0 578.72 M 233 578.72 M 233 626.72 M 0 626.72" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-3" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-3"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-3" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 603px; margin-left: 1px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Yuliana Zahra </font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="9qeNFymFEoiaXwJj" d="M67.125,611.20625 h98.734375"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#9qeNFymFEoiaXwJj" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Yuliana Zahra </tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-26" x="0" y="379.89" width="233" height="94.61" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-26" d="M 0 426.89 L 232.64 426.89" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-27" x="0" y="379.89" width="233" height="47" fill="#0a314b" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-27" d="M 0 379.89 M 232.64 379.89 M 232.64 426.89 M 0 426.89" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-28" d="M 0 379.89 M 233 379.89 M 233 426.89 M 0 426.89" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-28" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-28"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-28" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 403px; margin-left: 1px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 43px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 18px; font-family: &quot;Myriad-Pro&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2000000000000002; pointer-events: none; font-weight: bold; font-style: italic; white-space: normal; word-wrap: normal; "><b>
<font color="#ffffff" face="Myriad-Pro" size="1"><i style="font-size: 18px">Sekretaris</i></font></b></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="7qeNFymFEoiaXwJk" d="M64.625,410.103125 h103.734375"/></defs>
<text fill="rgb(255, 255, 255)" font-size="18px" font-family="Myriad-Pro" font-weight="900"><textPath xlink:href="#7qeNFymFEoiaXwJk" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Sekretaris</tspan></textPath></text></svg></switch></g></g>

<g shape-node=""><rect
onmouseover="hoveritem('Riani Eka Putri', 'Ketua Divisi Sekretaris', '<b>NPM:</b> 2023807023<br><b>Semester:</b> 4 (Pagi)<br><b>Alamat:</b> Bitung', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/RIANI2025.png', 'https://www.instagram.com/rputt.3/', 'mailto:rianiputri381@hmse-unipi.or.id');"
cell-id="uyBNu8ZkWYXFzvXpFR8D-29" x="0" y="426.89" width="233" height="48" fill="#ffffff" stroke="#000000"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-29" d="M 0 426.89 M 232.64 426.89 M 232.64 474.89 M 0 474.89" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-30" d="M 0 426.89 M 233 426.89 M 233 474.89 M 0 474.89" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-30" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-30"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-30" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 451px; margin-left: 1px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Riani Eka Putri (Kadiv)</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="AaeNFymFEoiaXwJl" d="M36.015625,459.20625 h160.953125"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#AaeNFymFEoiaXwJl" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Riani Eka Putri (Kadiv)</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-65" d="M 116.32 501.93 L 116.32 474.89" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect
onmouseover="hoveritem('Sherly Mila Saputri', 'Sekretaris', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/SHERLY.JPG', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="uyBNu8ZkWYXFzvXpFR8D-31" x="0" y="501.93" width="233" height="47.99" fill="#ffffff" stroke="#000000"/></g>

<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-32" x="0" y="501.93" width="233" height="48" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-32" d="M 0 501.93 M 232.64 501.93 M 232.64 549.93 M 0 549.93" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-33" d="M 0 501.93 M 233 501.93 M 233 549.93 M 0 549.93" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-33" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-33"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-33" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 526px; margin-left: 1px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Sherly Mila Saputri</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="UaeNFymFEoiaXwJm" d="M49.359375,534.20625 h134.28125"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#UaeNFymFEoiaXwJm" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Sherly Mila Saputri</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-66" d="M 116.32 578.72 L 116.32 549.93" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect
onmouseover="hoveritem('Ahmad Jahroni', 'Humas', '<b>NPM:</b> 2023807042<br><b>Semester:</b> 4 (Pagi)<br><b>Alamat:</b> Kp. Kalijodo, Ds. Parahu, Kec. Sukamulya', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/JAHRONI_2025.jpg', 'https://instagram.com/jahronii24._', 'mailto:ahmadjahroni2410@hmse-unipi.or.id');"
cell-id="eG40mamMxs6arq8eiBQ4-56" x="0" y="835.2" width="233" height="47.99" fill="#ffffff" stroke="#000000"/></g>

<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-59" d="M 0 835.2 M 232.64 835.2 M 232.64 883.2 M 0 883.2" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-60" d="M 0 835.2 M 233 835.2 M 233 883.2 M 0 883.2" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="eG40mamMxs6arq8eiBQ4-60" transform="translate(-0.5 -0.5)"><switch cell-id="eG40mamMxs6arq8eiBQ4-60"><foreignObject cell-id="eG40mamMxs6arq8eiBQ4-60" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 859px; margin-left: 1px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Ahmad Jahroni </font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="KaeNFymFEoiaXwJn" d="M62.6875,867.20625 h107.625"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#KaeNFymFEoiaXwJn" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Ahmad Jahroni </tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-77" d="M 116.32 903.05 L 116.32 883.2" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect
onmouseover="hoveritem('Sahriyal Riza Saputra', 'Humas', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/SAHRIYAL.JPG', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="eG40mamMxs6arq8eiBQ4-61" x="0" y="903.05" width="233" height="47.99" fill="#ffffff" stroke="#000000"/></g>

<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-64" d="M 0 903.05 M 232.64 903.05 M 232.64 951.05 M 0 951.05" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="eG40mamMxs6arq8eiBQ4-65" d="M 0 903.05 M 233 903.05 M 233 951.05 M 0 951.05" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="eG40mamMxs6arq8eiBQ4-65" transform="translate(-0.5 -0.5)"><switch cell-id="eG40mamMxs6arq8eiBQ4-65"><foreignObject cell-id="eG40mamMxs6arq8eiBQ4-65" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 927px; margin-left: 1px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; ">Sahriyal Riza Saputra</div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="2aeNFymFEoiaXwJo" d="M39.125,934.20625 h154.75"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#2aeNFymFEoiaXwJo" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Sahriyal Riza Saputra</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-47" x="0" y="718.92" width="233" height="94.61" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-47" d="M 0 765.92 L 232.64 765.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-48" x="0" y="718.92" width="233" height="47" fill="#0a314b" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-48" d="M 0 718.92 M 232.64 718.92 M 232.64 765.92 M 0 765.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-49" d="M 0 718.92 M 233 718.92 M 233 765.92 M 0 765.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-49" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-49"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-49" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 742px; margin-left: 1px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 43px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 18px; font-family: &quot;Myriad-Pro&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2000000000000002; pointer-events: none; font-weight: bold; font-style: italic; white-space: normal; word-wrap: normal; "><b>
<font color="#ffffff" face="Myriad-Pro" style="font-size: 18px"><i>Humas</i></font></b></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="paeNFymFEoiaXwJp" d="M81.671875,749.103125 h69.65625"/></defs>
<text fill="rgb(255, 255, 255)" font-size="18px" font-family="Myriad-Pro" font-weight="900"><textPath xlink:href="#paeNFymFEoiaXwJp" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Humas</tspan></textPath></text></svg></switch></g></g>

<g shape-node=""><rect
onmouseover="hoveritem('Marliyani Sutraliyana', 'Ketua Divisi Humas', '<b>NPM:</b> 2023807034<br><b>Semester:</b> 4 (Pagi)<br><b>Alamat:</b> Balaraja', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/YAYA_2025.jpg', 'https://instagram.com/marliyanistrr_', 'mailto:sutraliyanamarliyani@hmse-unipi.or.id');"
cell-id="uyBNu8ZkWYXFzvXpFR8D-50" x="0" y="765.92" width="233" height="48" fill="#ffffff" stroke="#000000"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-50" d="M 0 765.92 M 232.64 765.92 M 232.64 813.92 M 0 813.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-51" x="0" y="765.92" width="233" height="48" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-51" d="M 0 765.92 M 233 765.92 M 233 813.92 M 0 813.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-51" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-51"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-51" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 790px; margin-left: 1px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Marliyani Sutraliyana (Kadiv)</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="NaeNFymFEoiaXwJq" d="M14.671875,798.20625 h203.640625"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#NaeNFymFEoiaXwJq" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Marliyani Sutraliyana (Kadiv)</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-78" d="M 116.32 835.2 L 116.32 813.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-76" d="M 116.32 972.27 L 116.32 951.05" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><rect
onmouseover="hoveritem('Ade Tricahyo', 'Humas', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/ADE.JPG', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="uyBNu8ZkWYXFzvXpFR8D-52" x="0" y="972.27" width="233" height="47.99" fill="#ffffff" stroke="#000000"/></g>

<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-53" d="M 0 972.27 M 232.64 972.27 M 232.64 1020.27 M 0 1020.27" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-54" d="M 0 972.27 M 233 972.27 M 233 1020.27 M 0 1020.27" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-54" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-54"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-54" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 996px; margin-left: 1px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Ade Tricahyo</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="7aeNFymFEoiaXwJr" d="M69.796875,1004.20625 h93.390625"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#7aeNFymFEoiaXwJr" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Ade Tricahyo</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-104" d="M 116.29 379.89 L 116.29 306.53 Q 116.29 296.53 126.29 296.53 L 463.18 296.53" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-105" d="M 1042.65 410.05 L 1042.65 306.53 Q 1042.65 296.53 1032.65 296.53 L 579.47 296.53" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-106" d="M 579.5 406.29 L 579.5 344.96" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-108" d="M 579.47 296.96 L 353.47 296.55 Q 343.47 296.53 343.47 306.53 L 343.47 663.71 Q 343.47 673.71 333.47 673.71 L 126.29 673.71 Q 116.29 673.71 116.29 683.71 L 116.29 718.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-109" d="M 579.47 296.96 L 353.47 296.55 Q 343.47 296.53 343.47 306.53 L 343.47 663.71 Q 343.47 673.71 353.47 673.71 L 415.59 673.71 Q 425.59 673.71 425.59 683.71 L 425.59 718.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="xWkydAX8N_GGxFbMMNK_-6" d="M 579.47 296.96 L 804.18 296.55 Q 814.18 296.53 814.18 306.53 L 814.18 639 Q 814.18 649 804.18 649 L 747.47 649 Q 737.47 649 737.47 659 L 737.47 740.78" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="xWkydAX8N_GGxFbMMNK_-7" d="M 579.47 296.96 L 804.18 296.55 Q 814.18 296.53 814.18 306.53 L 814.18 639 Q 814.18 649 824.18 649 L 1032.76 649 Q 1042.76 649 1042.76 659 L 1042.76 718.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><rect cell-id="Goh8kqh8WTPJw_EtFKFW-1" x="463" y="0" width="233" height="103" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="Goh8kqh8WTPJw_EtFKFW-1" d="M 463 47 L 695.64 47" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><rect cell-id="Goh8kqh8WTPJw_EtFKFW-2" x="463" y="0" width="233" height="47" fill="#0a314b" stroke="#000000" pointer-events="none"/><path cell-id="Goh8kqh8WTPJw_EtFKFW-2" d="M 463 0 M 695.64 0 M 695.64 47 M 463 47" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="Goh8kqh8WTPJw_EtFKFW-3" d="M 463 0 M 696 0 M 696 47 M 463 47" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="Goh8kqh8WTPJw_EtFKFW-3" transform="translate(-0.5 -0.5)"><switch cell-id="Goh8kqh8WTPJw_EtFKFW-3"><foreignObject cell-id="Goh8kqh8WTPJw_EtFKFW-3" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 24px; margin-left: 464px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 43px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 18px; font-family: &quot;Myriad-Pro&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2000000000000002; pointer-events: none; font-weight: bold; font-style: italic; white-space: normal; word-wrap: normal; "><font color="#ffffff" face="Myriad-Pro" size="1"><b>
<i style="font-size: 18px">Kaprodi</i></b></font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="E6eNFymFEoiaXwJs" d="M540.234375,31.103125 h78.515625"/></defs>
<text fill="rgb(255, 255, 255)" font-size="18px" font-family="Myriad-Pro" font-weight="900"><textPath xlink:href="#E6eNFymFEoiaXwJs" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Kaprodi</tspan></textPath></text></svg></switch></g></g>

<!-- MASTER CHIEF -->
<g shape-node=""><rect
onmouseover="hoveritem('Gusti Nyoman Budiadnyana S. Kom., MM.', 'Ketua Program Studi Software Engineering', '<b>NID:</b> 04-2804-7602<br><b>Alamat:</b> Telaga Bestari', 'https://hmse-unipi.or.id/img/6c358d28e71fab8eb4a0798f146460ea.jpg', 'https://instagram.com/gustibudiadnyana', 'mailto:vnvlnxn@hmse-unipi.or.id');"
cell-id="Goh8kqh8WTPJw_EtFKFW-4" x="463" y="47" width="233" height="56" fill="rgba(255, 255, 255, 1)" stroke="#000000"/><path cell-id="Goh8kqh8WTPJw_EtFKFW-4" d="M 463 47 M 695.64 47 M 695.64 103 M 463 103" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><path cell-id="Goh8kqh8WTPJw_EtFKFW-5" d="M 463 47 M 696 47 M 696 103 M 463 103" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="Goh8kqh8WTPJw_EtFKFW-5" transform="translate(-0.5 -0.5)"><switch cell-id="Goh8kqh8WTPJw_EtFKFW-5"><foreignObject cell-id="Goh8kqh8WTPJw_EtFKFW-5" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 75px; margin-left: 464px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 52px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><span style="font-size: 16px; font-weight: bold;">Gusti Nyoman Budiadnyana<br />S.Kom., MM.</span></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="86eNFymFEoiaXwJt" d="M479.875,73.6125 h199.234375 M479.875,92.8125 h199.234375"/><path id="q6eNFymFEoiaXwJu" d="M479.875,73.6125 h199.234375 M479.875,92.8125 h199.234375"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#86eNFymFEoiaXwJt"><tspan xml:space="preserve">Gusti Nyoman Budiadnyana</tspan>
<tspan xml:space="preserve"/><tspan xml:space="preserve">S.Kom., MM.</tspan></textPath></text>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#q6eNFymFEoiaXwJu"><tspan xml:space="preserve">Gusti Nyoman Budiadnyana</tspan>
<tspan xml:space="preserve"/><tspan xml:space="preserve">S.Kom., MM.</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-101" d="M 579.42 129.3 L 579.37 103" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-16" x="463.18" y="129.3" width="233" height="94.61" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-16" d="M 463.18 176.3 L 695.82 176.3" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-17" x="463.18" y="129.3" width="233" height="47" fill="#0a314b" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-17" d="M 463.18 129.3 M 695.82 129.3 M 695.82 176.3 M 463.18 176.3" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-18" d="M 463.18 129.3 M 696.18 129.3 M 696.18 176.3 M 463.18 176.3" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-18" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-18"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-18" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 153px; margin-left: 464px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 43px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 18px; font-family: &quot;Myriad-Pro&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2000000000000002; pointer-events: none; font-weight: bold; font-style: italic; white-space: normal; word-wrap: normal; "><font color="#ffffff" face="Myriad-Pro" size="1"><b>
<i style="font-size: 18px">Ketua Umum</i></b></font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="e6eNFymFEoiaXwJv" d="M550.046875,160.103125 h58.890625"/></defs>
<text fill="rgb(255, 255, 255)" font-size="18px" font-family="Myriad-Pro" font-weight="900"><textPath xlink:href="#e6eNFymFEoiaXwJv" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Ketua</tspan></textPath></text></svg></switch></g></g>

<!-- GENERAL CHIEF -->
<g shape-node=""><rect
onmouseover="hoveritem('Muhamad Luthfian', 'Ketua Umum Himpunan', '<b>NPM:</b> 2023807020<br><b>Semester:</b> 4 (Shift)<br><b>Alamat:</b> Pasir gadung Perum Griyayasa', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/VIAN_2025.JPG', 'https://instagram.com/vnnvyn', 'mailto:vnvlnxn@hmse-unipi.or.id');"
cell-id="uyBNu8ZkWYXFzvXpFR8D-19" x="463.18" y="176.3" width="233" height="48" fill="#ffffff" stroke="#000000"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-19" d="M 463.18 176.3 M 695.82 176.3 M 695.82 224.3 M 463.18 224.3" fill="none" stroke="#000000" stroke-miterlimit="10"/></g>

<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-20" d="M 463.18 176.3 M 696.18 176.3 M 696.18 224.3 M 463.18 224.3" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-20" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-20"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-20" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 200px; margin-left: 464px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Muhamad Luthfian</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="p6eNFymFEoiaXwJw" d="M513.234375,208.20625 h132.53125"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#p6eNFymFEoiaXwJw" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Muhamad Luthfian</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-102" d="M 579.5 249.96 L 579.5 224.3" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-21" x="463.18" y="249.96" width="233" height="94.61" fill="#ffffff" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-21" d="M 463.18 296.96 L 695.82 296.96" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><rect cell-id="uyBNu8ZkWYXFzvXpFR8D-22" x="463.18" y="249.96" width="233" height="47" fill="#0a314b" stroke="#000000" pointer-events="none"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-22" d="M 463.18 249.96 M 695.82 249.96 M 695.82 296.96 M 463.18 296.96" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-23" d="M 463.18 249.96 M 696.18 249.96 M 696.18 296.96 M 463.18 296.96" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-23" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-23"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-23" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 273px; margin-left: 464px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 43px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 18px; font-family: &quot;Myriad-Pro&quot;, &quot;VP Default&quot;; color: #ffffff; line-height: 1.2000000000000002; pointer-events: none; font-weight: bold; font-style: italic; white-space: normal; word-wrap: normal; "><b>
<font color="#ffffff" face="Myriad-Pro" size="1"><i style="font-size: 18px">Wakil Ketua Umum</i></font></b></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="t6eNFymFEoiaXwJx" d="M518.625,280.103125 h121.75"/></defs>
<text fill="rgb(255, 255, 255)" font-size="18px" font-family="Myriad-Pro" font-weight="900"><textPath xlink:href="#t6eNFymFEoiaXwJx" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Wakil Ketua</tspan></textPath></text></svg></switch></g></g>

<!-- VICE GENERAL CHIEF -->
<g shape-node=""><rect
onmouseover="hoveritem('Ferry Andransaputra', 'Wakil Ketua Himpunan', '<b>NPM:</b> <br><b>Semester:</b> <br><b>Alamat:</b> ', 'https://hmse-unipi.or.id/img/FOTO_PENGURUS/FERRY.JPG', 'https://instagram.com/', 'mailto:@hmse-unipi.or.id');"
cell-id="uyBNu8ZkWYXFzvXpFR8D-24" x="463.18" y="296.96" width="233" height="48" fill="#ffffff" stroke="#000000"/><path cell-id="uyBNu8ZkWYXFzvXpFR8D-24" d="M 463.18 296.96 M 695.82 296.96 M 695.82 344.96 M 463.18 344.96" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>

<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-25" d="M 463.18 296.96 M 696.18 296.96 M 696.18 344.96 M 463.18 344.96" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node="" text-node=""><g cell-id="uyBNu8ZkWYXFzvXpFR8D-25" transform="translate(-0.5 -0.5)"><switch cell-id="uyBNu8ZkWYXFzvXpFR8D-25"><foreignObject cell-id="uyBNu8ZkWYXFzvXpFR8D-25" style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 231px; height: 1px; padding-top: 321px; margin-left: 464px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; max-height: 44px; overflow: hidden; "><div ani="" style="display: inline-block; font-size: 16px; font-weight: bold;; font-family: &quot;Futura&quot;, &quot;VP Default&quot;; color: #000000; line-height: 1.2; pointer-events: none; white-space: normal; word-wrap: normal; "><font style="font-size: 16px; font-weight: bold;">Ferry Andransaputra</font></div></div></div></foreignObject>
<svg width="100%" height="100%"><defs>
<path id="L6eNFymFEoiaXwJy" d="M506.5625,329.20625 h145.859375"/></defs>
<text fill="rgb(0, 0, 0)" font-size="16px" font-family="Futura, &quot;VP Default&quot;" font-weight="400"><textPath xlink:href="#L6eNFymFEoiaXwJy" startOffset="50%" text-anchor="middle"><tspan xml:space="preserve">Ferry Andransaputra</tspan></textPath></text></svg></switch></g></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-69" d="M 736.84 858.71 L 736.84 835.78" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-68" d="M 736.84 930.01 L 736.84 906.71" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-81" d="M 1042.68 846.8 L 1042.68 829.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-82" d="M 1042.68 912.4 L 1042.68 894.8" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-80" d="M 1042.68 978.01 L 1042.68 960.4" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-67" d="M 579.5 544.08 L 579.5 518.29" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-71" d="M 1042.59 530.72 L 1042.59 505.05" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-86" d="M 426.2 832.4 L 426.2 813.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-85" d="M 426.2 899.67 L 426.2 880.4" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-84" d="M 426.2 968.3 L 426.2 947.67" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-65" d="M 116.32 501.93 L 116.32 474.89" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-66" d="M 116.32 578.72 L 116.32 549.93" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-77" d="M 116.32 903.05 L 116.32 883.2" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-78" d="M 116.32 835.2 L 116.32 813.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-76" d="M 116.32 972.27 L 116.32 951.05" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-104" d="M 116.29 379.89 L 116.29 306.53 Q 116.29 296.53 126.29 296.53 L 463.18 296.53" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-105" d="M 1042.65 410.05 L 1042.65 306.53 Q 1042.65 296.53 1032.65 296.53 L 579.47 296.53" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-106" d="M 579.5 406.29 L 579.5 344.96" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-108" d="M 579.47 296.96 L 353.47 296.55 Q 343.47 296.53 343.47 306.53 L 343.47 663.71 Q 343.47 673.71 333.47 673.71 L 126.29 673.71 Q 116.29 673.71 116.29 683.71 L 116.29 718.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-109" d="M 579.47 296.96 L 353.47 296.55 Q 343.47 296.53 343.47 306.53 L 343.47 663.71 Q 343.47 673.71 353.47 673.71 L 415.59 673.71 Q 425.59 673.71 425.59 683.71 L 425.59 718.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="xWkydAX8N_GGxFbMMNK_-6" d="M 579.47 296.96 L 804.18 296.55 Q 814.18 296.53 814.18 306.53 L 814.18 639 Q 814.18 649 804.18 649 L 747.47 649 Q 737.47 649 737.47 659 L 737.47 740.78" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="xWkydAX8N_GGxFbMMNK_-7" d="M 579.47 296.96 L 804.18 296.55 Q 814.18 296.53 814.18 306.53 L 814.18 639 Q 814.18 649 824.18 649 L 1032.76 649 Q 1042.76 649 1042.76 659 L 1042.76 718.92" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-101" d="M 579.42 129.3 L 579.37 103" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g>
<g shape-node=""><path cell-id="uyBNu8ZkWYXFzvXpFR8D-102" d="M 579.5 249.96 L 579.5 224.3" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g></g></svg>

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
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Ketua Umum Himpunan</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/VIAN_2025.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807020<br>
                                          <b>Semester:</b> 4 (Shift)<br>
                                          <b>Alamat:</b> Pasir gadung Perum Griyayasa<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/vnnvyn/">@vnnvyn</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Ferry Andransaputra</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Wakil Ketua Himpunan</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/FERRY.JPG">
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
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Ketua Divisi Sekretaris</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/RIANI2025.png">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807023<br>
                                          <b>Semester:</b> 4 (Pagi)<br>
                                          <b>Alamat:</b> Bitung<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/rputt.3/">@rputt.3</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Sherly Mila Saputri</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Sekretaris</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/SHERLY.JPG">
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
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Yuliana Zahra</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Sekretaris</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/YULIANA.JPG">
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
                          
                          <button type="button" class="collapsible">Bendahara</button>
                              <div class="item-content">
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Nadiah Zahra</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Ketua Divisi Bendahara</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/NADIA.JPG">
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
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Azzahra</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Bendahara</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/AZRA.JPG">
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
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Yesih Sustari</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Ketua Divisi SDM</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/SDM/YESIH/_MG_0873.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807040<br>
                                          <b>Semester:</b> 4 (Pagi)<br>
                                          <b>Alamat:</b> Curug<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/yesihsst_/">@yesihsst_</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Amelia Virnada</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">SDM</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/NADA.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> <br>
                                          <b>Semester:</b> <br>
                                          <b>Alamat:</b> <br>
                                          <b>Instagram:</b> <br>
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
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Marliyani Sutraliyana</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Ketua Divisi Humas</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/YAYA_2025.jpg">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807034<br>
                                          <b>Semester:</b> 4 (Pagi)<br>
                                          <b>Alamat:</b> Balaraja<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/marliyanistrr_/">@marliyanistrr_</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Ahmad Jahroni</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Humas</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/JAHRONI_2025.jpg">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807042<br>
                                          <b>Semester:</b> 4 (Pagi)<br>
                                          <b>Alamat:</b> Kp. Kalijodo, Ds. Parahu, Kec. Sukamulya<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/jahronii24._/">@jahronii24._</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Sahriyal Riza Saputra</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Humas</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/SAHRIYAL.JPG">
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
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Ade Tricahyo</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Humas</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/ADE.JPG">
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
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Ketua Divisi Kominfo</h4></td>
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
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Kominfo</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/KOMINFO/LATIF/Latif-HMSE-02.png">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807015<br>
                                          <b>Semester:</b> 4 (Pagi)<br>
                                          <b>Alamat:</b> Parung Panjang, Bogor<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/latiffhalik_22/">@latiffhalik_22</a><br>
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
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Kominfo</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/WAHYU_2025.jpg">
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
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Didik Aprilianto</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Kominfo</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/DIDIK.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> <br>
                                          <b>Semester:</b> <br>
                                          <b>Alamat:</b> <br>
                                          <b>Instagram:</b> <br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <br>
</div>
                          
                          <button type="button" class="collapsible">Sarana & Prasarana</button>
                        <div class="item-content">
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Irfan Hafizh</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Ketua Divisi Sarana & Prasarana</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/HAFIZH.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> <br>
                                          <b>Semester:</b> <br>
                                          <b>Alamat:</b> <br>
                                          <b>Instagram:</b> <br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Aflahal Bambang Jaya</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Sarana & Prasarana</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/AFLAHAL.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> <br>
                                          <b>Semester:</b> <br>
                                          <b>Alamat:</b> <br>
                                          <b>Instagram:</b> <br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Ahmad Nurohman</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Sarana & Prasarana</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/MARMUT.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> <br>
                                          <b>Semester:</b> <br>
                                          <b>Alamat:</b> <br>
                                          <b>Instagram:</b> <br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
						  <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Andryan Permana</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Sarana & Prasarana</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/RADIT.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> <br>
                                          <b>Semester:</b> <br>
                                          <b>Alamat:</b> <br>
                                          <b>Instagram:</b> <br>
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
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Ketua Divisi Litbang</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/LITBANG/ZAKI/_MG_0755.JPG">
                                      </td></th>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div style="padding-bottom: 15%;">
                                          <b>NPM:</b> 2023807008<br>
                                          <b>Semester:</b> 4 (Pagi)<br>
                                          <b>Alamat:</b> Perum Villa Balaraja<br>
                                          <b>Instagram:</b> <a href="https://www.instagram.com/zakimarufan/">@zakimarufan</a><br>
                                      </div>
                                  </td></tr>
                              </table>
                          </div>
                          <div class="item-mobile">
                              
                              <table style="width: 100%; margin: 2%;">
                                  <tr>
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Wardiyansyah</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Litbang</h4></td>
                                  <td style="width:35%;" rowspan="2">
                                      <img style="max-width: 100%; padding-right: 11%; padding-bottom: 9%;" src="https://hmse-unipi.or.id/img/FOTO_PENGURUS/WARDIYANSYAH.JPG">
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
                                      <th colspan="2"><h2 style="margin-top: 9pt; line-height: 90%; font-size: 20pt !important; color: #0a314b;">Riyan Hidayat</h2></th>
                                  </tr>
                                  <tr>
                                      <td><h4 style="transform:translateY(-25%); font-family: Myriad-Pro !important; font-style: italic !important; font-weight: bold !important; font-size: 16pt !important; padding-bottom: 8pt; ">Litbang</h4></td>
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
                          <br>
                          </div>

                      </div>
                    </div>
                  </div>
                <!-- ORGANIZATION STRUCTURE END -->

              <?php include '/home/hmseunip/public_html/templates/footerp.php'; ?>

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
        
        
        function hoveritem(name, dept, info, photo, instagram, email) {
            document.getElementById("hoverphoto").src = "";
            document.getElementById("hoveritembox").style.visibility = "visible";
            disableScrolling = true;  //temporarily disable scrolling when hovering an item
            document.getElementById("hovernameshadow").innerHTML = name;
            document.getElementById("hovername").innerHTML = name;
            document.getElementById("hoverdept").innerHTML = dept;
            document.getElementById("hoverinfo").innerHTML = info;
            document.getElementById("hoverlinks").innerHTML = "<b><h3 class=\"linkcont\" onclick=\"window.open('"+instagram+"', '_blank');\">Instagram</h3> </b>" + "<h3 class=\"linkcont\" onclick=\"window.open('"+email+"', '_blank');\"><b>Email</b></h3>";
            document.getElementById("hoverphoto").src = photo;
            document.getElementById("hoveritembox").style.left = Math.max(event.clientX - (document.getElementById("hoveritembox").offsetWidth / 2), 0);
            document.getElementById("hoveritembox").style.top = event.clientY - (document.getElementById("hoveritembox").offsetHeight / 2);
        }
        
        function hoverexit() {
                disableScrolling = false; //re-enable scrolling on hover exit
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