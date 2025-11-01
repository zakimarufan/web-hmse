<?php

function getAddress() {
  $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "https://";
  return $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

if (str_contains(getAddress(), "index.php")) {
  $noindex = str_replace('/index.php', '', getAddress());
  echo "<script>window.location.href='$noindex';</script>";
}

$pgtitle = "401 - Unauthorized - HMSE";

include '/home/hmseunip/public_html/templates/header.php';

?>



                <!-- JUMBOTRON START -->
                <section id="toppage" class="jumbotron text-center">

                  <h1>401 - Unauthorized</h1>
                  <!-- <p class="lead">Fakultas Ilmu Komputer Universitas Indonesia</p> -->
               <div style="transform: scaleY(1.02); overflow-x: hidden;">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 100%; min-width:1440px; height: auto;" viewBox="0 10 1440 120">
                    <path fill="#ffffff" fill-opacity="10" d="M 0 63.652 L 48 63.652 C 96 63.652 192 63.652 288 76.329 C 384 89.141 480 114.291 576 121.666 C 672 128.905 768 118.029 864 103.518 C 960 89.141 1056 70.789 1152 65.453 C 1248 59.913 1344 67.39 1392 70.891 L 1440 74.527 L 1440 150.656 L 1392 150.656 C 1344 150.656 1248 150.656 1152 150.656 C 1056 150.656 960 150.656 864 150.656 C 768 150.656 672 150.656 576 150.656 C 480 150.656 384 150.656 288 150.656 C 192 150.656 96 150.656 48 150.656 L 0 150.656 L 0 63.652 Z"></path>
                  </svg>
                  </div>
                </section>
                <!-- JUMBOTRON END -->

                <!-- 404 ERROR MESSAGE START-->
                  <div class="container view-error">
                    <div class="row text-center mb-3">
                      <div class="col" style="padding-top: 4rem">
                        
                        <h3><b>Otorisasi diperlukan</b></h3>
                        <p>Periksa kembali kredensial autentikasi anda (seperti username dan password) untuk mengakses jalur ini, lalu coba lagi.</p>
                      <br>
                        <p><a style="text-decoration: none; font-family: Myriad-Pro; font-style: italic; font-size: 14pt;" href="https://hmse-unipi.or.id/">Kembali ke halaman utama</a></p>


                      </div>
                    </div>
                  </div>
                <!-- 404 ERROR MESSAGE END -->
                
                

              <?php

include '/home/hmseunip/public_html/templates/footer.php';

?>