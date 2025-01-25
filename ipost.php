<?php

echo "<div id=\"fade-overlay\"  style=\"display: block; opacity: 0;\"></div>";

$pname = str_replace("'", "''", $_POST['pname']);
$pemail = $_POST['pemail'];
$pcontent = str_replace("'", "''", $_POST['pcontent']);

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

function getAddress() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
    return $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hmseunip_main";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $id = generateRandomString(16);

  date_default_timezone_set('Asia/Jakarta');
  $date = date('Y-m-d H:i:s');

  $sql = "INSERT INTO contact_submissions (contact_id_pointer, sender_name, sender_email, message_body_content, contact_date, is_read)
  VALUES ('$id', '$pname', '$pemail', '$pcontent', '$date', 'FALSE')";
  
  
  if ($pname != '' && $pemail != '' && $pcontent != '') {
  if ($conn->query($sql) === TRUE) {
    echo "<body style='background-color:#0a314b;'><br><h1 style=\"text-align:center; font-family:Futura; font-weight: bold;\">Terima kasih atas umpan balik Anda yang berhasil terkirim.</h1><br><p style=\"color: white; text-align:center; font-family:Myriad-Pro; font-style: italic;\">Klik tombol kembali jika halaman ini tidak berpindah secara otomatis setelah beberapa detik.</p></body>";
  } else {
    echo "<body style='background-color:#0a314b;'><br><p style=\"color: white; text-align:center; font-family:Friz-Quadrata;\">Error: " . $sql . "<br>" . $conn->error . "</p></body>";
  }
} else {
    //Go back to the previous page immediately
    $ppage = str_replace('/ipost.php', '', getAddress());
    echo "<script>window.location.href='$ppage';</script>";
}
  
  $conn->close();

  $ppage = str_replace('/ipost.php', '', getAddress());
    echo "<script>setPrevAddress($ppage);</script>";

?>

<html>

<head>

  <title>Feedback Submission - HMSE</title>

<style>
    .container {
    -ms-overflow-style: none;  /* Internet Explorer 10+ */
    scrollbar-width: none;  /* Firefox */
}
.container::-webkit-scrollbar { 
    display: none;  /* Safari and Chrome */
}
</style>

  <!-- Always fit the page horizontally so that the horizontal scrollbar won't show anymore -->
  <!-- The fade transition effect is exclusive on Desktop only -->

  <!-- Announcement elements:
      - Title
      - Author
      - Date and time
      - Body contents

    -->
    
    <link
    rel="stylesheet"
    type="text/css"
    href="https://hmse-unipi.or.id/style-ex.css"
  />
    
    <link
    rel="stylesheet"
    type="text/css"
    href="https://hmse-unipi.or.id/fade-transition.css"
  />
  
    <script
      type="text/javascript"
      src="./fade-transition.js"
    ></script>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

let pAddress = ".";

function setPrevAddress(prevAddress, duration) {
    pAddress = prevAddress;
}

function goBackWithDelay(prevAddress, duration) {
    setTimeout(function() {
        if (!isMobile) {
              document.getElementById("fade-overlay").style.removeProperty("transition");
              fadeout(6);
                var timer = setInterval(function () {
                    if (!isfadingout) {
        window.location.href = prevAddress;
                        clearInterval(timer);
                        alreadydisplayed = false;
                }}, 10);
              } else {
        window.location.href = prevAddress;
              }
    }, duration);
}

  //Go back to the previous page after 5 seconds
document.addEventListener("DOMContentLoaded", (event) => {
    goBackWithDelay(pAddress, 5000);
});

</script>
</html>