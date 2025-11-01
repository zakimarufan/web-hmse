<?php

function getAddress() {
  $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "https://";
  return $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

$pgtitle = "Gallery - HMSE";

include '/home/hmseunip/public_html/templates/header.php';

?>

                <!-- JUMBOTRON START -->
                <section id="toppage" class="jumbotron text-center" style="padding-top: 30;">

                  <h1 style="transform: translateY(40px);">Galeri</h1>
                  <!-- <p class="lead">Fakultas Ilmu Komputer Universitas Indonesia</p> -->
                  <div style="transform: scaleY(1.02); overflow-x: hidden;">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 100%; min-width:1440px; height: auto;" viewBox="0 10 1440 120">
                    <path fill="#ffffff" fill-opacity="10" d="M 0 63.652 L 48 63.652 C 96 63.652 192 63.652 288 76.329 C 384 89.141 480 114.291 576 121.666 C 672 128.905 768 118.029 864 103.518 C 960 89.141 1056 70.789 1152 65.453 C 1248 59.913 1344 67.39 1392 70.891 L 1440 74.527 L 1440 150.656 L 1392 150.656 C 1344 150.656 1248 150.656 1152 150.656 C 1056 150.656 960 150.656 864 150.656 C 768 150.656 672 150.656 576 150.656 C 480 150.656 384 150.656 288 150.656 C 192 150.656 96 150.656 48 150.656 L 0 150.656 L 0 63.652 Z"></path>
                  </svg>
                  </div>
                </section>
                <!-- JUMBOTRON END -->

<style>
    /*
  The grid itself needs only 4 CSS declarations:
*/

@keyframes smooth-appear {
  from{
    /*zoom: 70%;*/
    transform: scale(0.7);
    filter: blur(19px);
    opacity:0;
  }
  to{
    /*zoom: 100%;*/
    transform: scale(1);
    filter: blur(0px);
    opacity:1;
  }
}

@keyframes mobile-item-click {
  0%   {transform: scale(1);}
  50%  {transform: scale(0.89);}
  100% {transform: scale(1);}
}

.myGallery {
    display: flex;
    flex-wrap: wrap;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 0px;
  grid-gap: 10px;
  justify-content: center;
}

.myGallery img {
  width: 100%;
  aspect-ratio: 1 / 1;
  object-fit: cover;
}

/*
  And here are some declarations for the image caption.
  Just hover over one of the last 5 images to see it.
*/

.myGallery .item {
  position: relative;
  overflow: hidden;
  border-radius: 6px;
  animation: smooth-appear 1.3s ease-out;
}

.myGallery .item img {
  vertical-align: middle;
}

@media (hover:hover) {
    
.myGallery {
  padding-left: 70px;
  padding-right: 76px;
  padding-top: 2.4rem;
}
    
.myGallery .captionbg {
 
  position: absolute;
  bottom: -1;
  left: 0;
  width: 100.4%;
  backdrop-filter: blur(0px);
  -webkit-backdrop-filter: blur(0px);
  transform: scaleY(0%);
  transition: transform 0.5s ease, backdrop-filter 0.5s ease, -webkit-backdrop-filter 0.5s ease;
  transform-origin: 0% 100%;
  background: rgba(0, 0, 0, 0.5);
  mask: linear-gradient(to top, #000, #000, #000, #000C, #0000);
    
}

.myGallery .item:hover .captionbg {
  transform: scaleY(100%);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
}

.myGallery .caption {
  margin: 0;
  padding: 1em;
  position: absolute;
  z-index: 1;
  bottom: 0;
  left: 0;
  width: 100%;
  max-height: 100%;
  mix-blend-mode: color-dodge;
  overflow: auto;
  box-sizing: border-box;
  transition: transform 0.5s ease;
  transform: scaleY(0%);
  transform-origin: 0% 100%;
  display: flex;
  flex-direction: column-reverse;
}

.myGallery .item:hover .caption {
  transform: scaleY(100%);
}

/* CHROME-BASED */
@supports(-webkit-tap-highlight-color: black) {
    .myGallery .captionbg {
 
        position: absolute;
        bottom: -1;
        left: 0;
        width: 101%;
        height: 100%;
        backdrop-filter: blur(6px);
        transform: scaleY(100%);
        opacity: 0;
        transition: opacity 0.5s ease;
        background: rgba(0, 0, 0, 0.5);
        mask: linear-gradient(to top, #000, #000, #000, #000C, #0000);
    
    }
    
    .myGallery .item:hover .captionbg {
        opacity: 1;
    }

.myGallery .caption {
  margin: 0;
  padding: 1em;
  position: absolute;
  z-index: 1;
  bottom: 0;
  left: 0;
  width: 100%;
  max-height: 100%;
  mix-blend-mode: normal;
  overflow: auto;
  box-sizing: border-box;
  transition: transform 0.5s ease;
  transform: scaleY(0%);
  transform-origin: 0% 100%;
  display: flex;
  flex-direction: column-reverse;
}

.myGallery .item:hover .caption {
  mix-blend-mode: color-dodge;
  transform: scaleY(100%);
}

  }

.captionDate{
    color: rgba(144, 144, 144, 1);
    font-style: italic;
    font-family: Myriad-Pro;
    font-size: 11pt;
    filter: contrast(1.75);
    background-color: transparent;
}

.captionAnchorTitle{
    color: rgba(224, 224, 224, 1);
    font-size: 14pt;
    font-weight: bold;
    mix-blend-mode: hard-light;
    background-color: transparent;
}

.myGallery .item{
     z-index: inherit;
     min-width: 250;
        min-height: 250;
        max-width: 337;
        max-height: 337;
        flex-grow: 1;
        flex-shrink: 1;
        flex-basis: min-content;
     transition: transform 0.6s ease, box-shadow 0.6s ease;
     box-shadow: 0 0 0 #135D8F;
  transform:scale(1);
}

.myGallery .item:hover {
     z-index: 20;
     transition: transform 0.6s ease, box-shadow 0.6s ease;
     box-shadow: 0 0 1.5rem #135D8F;
  transform:scale(1.1);
  zoom: 100%;
}

}

@media (hover:none), (hover:on-demand) {
    
.myGallery {
  transform: translateY(-30px);
  margin-bottom: 20px;
}

.myGallery .item {
    box-shadow: 0px 3px 9px rgba(0, 0, 0, .4);
    margin-top: 3px;
    margin-bottom: 3px;
}
    
.myGallery .item:hover {
    animation: mobile-item-click .75s 1;
}

.myGallery .caption {
  margin: 0;
  padding: 1em;
  position: absolute;
  z-index: 1;
  bottom: 0;
  left: 0;
  width: 100%;
  max-height: 100%;
  overflow: auto;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.7);
  color: rgb(255, 255, 255);
  display: flex;
  flex-direction: column-reverse;
}

.myGallery .captionbg {
 
  display: none;
    
}

.myGallery .caption .captionDate{
    color: rgb(192, 192, 192);
    font-style: italic;
    font-family: Myriad-Pro;
    font-size: 10pt;
}

.myGallery .caption .captionAnchorTitle{
    font-size: 14pt;
    font-weight: bold;
}

}

</style>

                <!-- ACTIVITIES -->
                  <section class="myGallery" id="galleryCentre">
  
</section>
                <!-- ACTIVITIES END -->
              <?php include '/home/hmseunip/public_html/templates/footerp.php'; ?>

        $(document).ready(function() {
            alreadydisplayed = true;
            fadein(6, 0.01);
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
        
        function makeid(length) {
    let result = '';
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const charactersLength = characters.length;
    let counter = 0;
    while (counter < length) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
      counter += 1;
    }
    return result;
}

       async function listGalleryItems(anchorTitle, date, hreflink, galleryThumbnail) {
            let tempid = makeid(8);
          document.getElementById("galleryCentre").innerHTML +=
        "<div class=\"item\">"
+ "<a href=\""+ hreflink + "\">"
                  +  "<img src=\"" + galleryThumbnail + "\">"
                  + "<div class=\"captionbg\" id=\"" + tempid + "_m\"></div><div class=\"caption\" id=\"" + tempid + "_b\"><div class=\"captionAnchorTitle\">" + anchorTitle + "</div><div class=\"captionDate\">" + date + "</div></div>"
                  + "</a></div>";
                  
            document.getElementById(tempid + "_m").style.height = (parseInt(getComputedStyle(document.getElementById(tempid + "_b"), "null").getPropertyValue('height').replace("px","")) + 44) + "px";  
                    
                    if ((BrowserDetect.browser === "Safari")) {
                            document.getElementById(tempid + "_m").style.borderBottomLeftRadius = "8px";
                            document.getElementById(tempid + "_m").style.borderBottomRightRadius = "8px 10px";
                    }  
         
      }

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
                if ($(this).parent().attr("class") === "item") {
                    setTimeout(function() { window.location.href = href; }, 500);
                } else {
                    window.location.href = href;
                }
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

function galleryRegularList($listquery) {
//list the news regularly
//Truncate the preview body content text to 255 characters
//Remove the HTML codes from the preview content
//Sort by the newest date using the MySQL query

if ($listquery->num_rows > 0) {
while($row = mysqli_fetch_array($listquery)) {
  $n_prev_title = $row['newsHeadline'];
  $n_url_id_pointer = "https://hmse-unipi.or.id/news/" . $row['news_url_slug'] . "&from-gallery=true";
  if (!empty((int)$row['galleryDate'])) {

  $n_p_date = date('j M Y', strtotime($row['galleryDate']));

    } else {
  $n_p_date = date('j M Y', strtotime($row['newsDate']));
    }
  $n_prim_thumb = $row['newsMainThumbImg'];
  $n_prev_content = removeLink(substr(preg_replace("/\r\n|\r|\n|\n\r/", ' ', strip_tags($row['newsBodyContent'])), 0, 255));
  $show_in_gallery = $row['showInGallery'];
  if ($show_in_gallery == 1) {
echo "<script>listGalleryItems('$n_prev_title', '$n_p_date', '$n_url_id_pointer', '$n_prim_thumb');</script>";
}
}
} else {
  echo "<script>document.getElementById(\"vsearch\").style.display = \"none\";</script>";
  echo "<script>emptyNewsList();</script>";
}

}
  
  if (str_contains(getAddress(), "index.php")) {
    $noindex = str_replace('/index.php', '', getAddress());
    echo "<script>window.location.href='$noindex';</script>";
  }
  
  galleryRegularList($conn->execute_query("SELECT newsHeadline, newsBodyContent, newsDate, news_url_slug, newsMainThumbImg, showInGallery, galleryDate FROM news ORDER BY newsDate ASC"));


?>