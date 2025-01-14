<?php
// Koneksi ke database
include('kon.php');
// Ambil nama dari database
$name = 'Tamu'; // Default jika tidak ada data
if (isset($_GET['nama'])) {
    $stmt = $conn->prepare("SELECT name FROM recipients WHERE name = ?");
    $stmt->bind_param("s", $_GET['nama']);
    $stmt->execute();
    $stmt->bind_result($name);
    if ($stmt->fetch()) {
        // Nama ditemukan
    } else {
        $name = "Tidak ditemukan"; // Nama default jika tidak ada data
    }
    $stmt->close();
} else {
    $name = "Saudara di tempat"; // Jika parameter nama tidak ada
}
?>
<html class="hydrated">

<head>
    <meta charset="utf-8">
    <style data-styles="">
        ion-icon {
            visibility: hidden
        }

        .hydrated {
            visibility: inherit
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://goinvite.id/assets/images/icon.ico">
    <title>Undangan Pernikahan Izal &amp; Qintan</title>
    <meta name="title" content="Undangan Pernikahan Izal &amp; Qintan">
    <meta classname="meta-description" name="description"
        content="Spesial mengundang untuk menghadiri resepsi pernikahan kami. - Izal &amp; Qintan">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Undangan Pernikahan Izal &amp; Qintan">
    <meta classname="meta-description" property="og:description"
        content="Spesial mengundang untuk menghadiri resepsi pernikahan kami. - Izal &amp; Qintan">
    <meta property="og:image"
        content="https://diginvikreasi.b-cdn.net/goinvite/1736007318-8116477C-C6D8-E9D6-0533-16C042B18339.jpg">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Undangan Pernikahan Izal &amp; Qintan">
    <meta classname="meta-description" property="twitter:description"
        content="Spesial mengundang untuk menghadiri resepsi pernikahan kami. - Izal &amp; Qintan">
    <meta property="twitter:image"
        content="https://diginvikreasi.b-cdn.net/goinvite/1736007318-8116477C-C6D8-E9D6-0533-16C042B18339.jpg">
    <meta name="author" content="GOINVITE">
    <link href="https://goinvite.id/css/app.css?v=1.1.8" rel="stylesheet">
    <link href="https://goinvite.id/css/vendor/e-gallery.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lightgallery.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lg-zoom.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/css/justifiedGallery.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lg-thumbnail.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Carattere">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <style>
        :root {
            --bg-cover-color: #fff8f4;
            --bg-profile-color: #b17a46;
            --border-decor-color: #FFF;
            --border-decor-color-cover: #764312
        }

        .p-inherit {
            position: inherit
        }

        .bg-color {
            background-color: #fff8f4
        }

        .bg-color-one {
            background-color: #764312
        }

        .bg-color-two {
            background-color: #b17a46
        }

        .bg-color-three {
            background-color: #FFF
        }

        .bg-color-four {
            background-color: #000
        }

        .bg-color-mode {
            background-color: #fff8f4
        }

        .bg-color-mode-one {
            background-color: #FFF
        }

        .font-one {
            font-size: 2.42rem;
            font-family: Carattere
        }

        .font-two {
            font-family: Cinzel
        }

        .font-three {
            font-family: Manrope
        }

        .font-four {
            font-family: Lora
        }

        .font-color-profile {
            color: #FFF
        }

        .font-color-one {
            color: #764312
        }

        .font-color-two {
            color: #b17a46
        }

        .font-color-three {
            color: #FFF
        }

        .font-color-four {
            color: #000
        }

        .font-color-mode {
            color: #000
        }

        .font-color-mode-one {
            color: #FFF
        }

        .font-color-mode-two {
            color: #FFF
        }

        .font-color-mode-bg {
            color: #000
        }

        .font-color-cover {
            color: #764312
        }

        .border-color-decor {
            border-color: #FFF
        }

        .border-color-cover {
            border-color: #764312
        }

        .border-color-one {
            border-color: #764312
        }

        .border-color-two {
            border-color: #b17a46
        }

        .border-color-three {
            border-color: #FFF
        }

        .border-color-four {
            border-color: #000
        }

        .border-color-one-opacity {
            border-color: #7643128c
        }

        .top-svg-type-2 {
            top: 0rem
        }

        .bottom-svg-type-2 {
            bottom: 9rem
        }

        @media only screen and (max-width:600px) {
            .top-svg-type-2 {
                top: 3rem
            }

            .bottom-svg-type-2 {
                bottom: 9.5rem
            }
        }
    </style>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-ZKM54VPM2Q"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments) }; gtag('js', new Date()); gtag('config', 'G-ZKM54VPM2Q');</script>
</head>

<body class=" stop-scrolling " data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0"
    style="position: relative;">
   
    <div class="body-single font-secondary" id="bodysingle">
        <div class="fixed z-50 w-full" id="envelope">
            <div class="relative bg-color pb-32 h-screen z-50" id="openEnvelope">
                <div class="absolute top-0 right-0 z-0 decor-envelope"> <img
                        src="https://diginvikreasi.b-cdn.net/assets/goinvite/themes2/rustic-29/main-0.webp"></div>
                <div class="absolute bottom-0 left-0 z-0 decor-envelope"> <img
                        src="https://diginvikreasi.b-cdn.net/assets/goinvite/themes2/rustic-29/main-1.webp"></div>
                <div class="z-20 block p-inherit font-color-mode">
                    <div class="text-center pt-20 ">
                        <div class="flex justify-center">
                            <div class=" mt-24 relative" style="margin-top:6vh">
                                <div style="background: url('https://diginvikreasi.b-cdn.net/goinvite/1736006819-04CCC103-4093-3734-0FAD-461961819E89.jpg') no-repeat center; background-size:cover; border-radius: 100%;width: 10rem;height: 15rem; box-shadow: 0 0 0 7px var(--bg-cover-color), 0 0 0 8px var(--border-decor-color-cover);margin:auto"
                                    class="h-full" data-transform-origin="center center"></div>
                            </div>
                        </div>
                        <h3 class="font-one font-color-mode mt-6 mb-3">Izal &amp; Qintan</h3>
                    </div>
                    <div class="text-center pt-8 ">
                        <p class="font-four text-sm">Kepada Bapak/Ibu/Saudara/i</p>
                        <p class="text-2xl font-semibold mb-4"><?= htmlspecialchars($name) ?></p>
                        <p class="font-four text-sm">Bekasi</p>
                        <p class="font-four mt-2" style="font-size: 10px">Kami mengundang Anda untuk hadir di acara
                            pernikahan kami.</p> <button type="button"
                            class="font-three m-auto flex py-3 px-8 rounded-full mt-6" style="background:#b17a46">
                            <ion-icon class="text-white w-5 h-5 mr-2 md hydrated" name="mail-open-outline" role="img"
                                aria-label="mail open outline"></ion-icon> <span
                                class="text-white font-three text-sm">Buka Undangan</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div >
            <div id="musicContainer"
                class="bg-color-one font-color-three fixed z-50 bottom-24 left-2 h-12 w-12 overflow-y-scroll flex justify-center items-center rounded-full hidden ">
                <audio id="music" loop="">
                    <source src="https://api.paleo.id/uploads/songs/Wedding%20Instrumental%20-%20Vespoidea.mp3"
                        type="audio/mp3">
                </audio><ion-icon class="hidden p-2 pl-3 md hydrated" id="musicPlay" name="play" role="img"
                    aria-label="play"></ion-icon> <ion-icon id="musicPause" class="p-2 pl-3 md hydrated" name="pause"
                    role="img" aria-label="pause"></ion-icon></div>
            <div name="coverContainer" class="h-screen">
                <div id="pageCover">
                    <div class="relative bg-color pb-32">
                        <div class="absolute top-0 right-0"> <img
                                src="https://diginvikreasi.b-cdn.net/assets/goinvite/themes2/rustic-29/main-0.webp">
                        </div>
                        <div class="absolute bottom-0 left-0 z-0"> <img
                                src="https://diginvikreasi.b-cdn.net/assets/goinvite/themes2/rustic-29/main-1.webp">
                        </div>
                        <div class="text-center md:pt-36 pt-20 pb-12 p-inherit" style="z-index:2">
                            <p class="font-four text-md font-color-mode absolute w-full mb-10 z-20">Resepsi Pernikahan
                            </p>
                            <div class=" mt-12">
                                <div class="flex justify-center">
                                    <div class="p-2 relative">
                                        <div style="background: url('https://diginvikreasi.b-cdn.net/goinvite/1736006819-04CCC103-4093-3734-0FAD-461961819E89.jpg') no-repeat center; background-size:cover; border-radius: 100%;width: 10rem;height: 15rem; box-shadow: 0 0 0 7px var(--bg-cover-color), 0 0 0 8px var(--border-decor-color-cover);margin:auto"
                                            class="h-full" data-transform-origin="center center"></div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="font-one font-color-mode mt-6 mb-3">Izal &amp; Qintan</h3>
                            <p class="font-four text-md font-color-mode mb-8">Sabtu, 25 Januari 2025</p> <a
                                href="https://www.google.com/calendar/event?action=TEMPLATE&amp;text=Resepsi+Pernikahan+Izal+%26+Qintan&amp;details=Resepsi+Pernikahan&amp;location=Bertempat+di+Gedung+Graha+Angakasa+Pura%2C+Jl.+Jend.+Sudirman+No.99A%2C+RT.001%2FRW.007%2C+Kranji%2C+Kec.+Bekasi+Bar.&amp;dates=20250125T190000/20250125T210000&amp;ctz=Asia%2FJakarta"
                                target="_blank"
                                class="font-three text-xs px-6 py-2 rounded-full border font-color-one border-color-one relative z-10 ">Save
                                the Date</a>
                        </div>
                        <div class="z-10 block p-inherit">
                            <div class="container mx-auto px-16 font-four-color z-10">
                                <div class="grid grid-cols-4 gap-2 font-three">
                                    <div class="text-center py-2 col-span-1 bg-color-one font-color-three rounded-md">
                                        <p class="font-bold text-sm m-0" id="countdownDay">11</p>
                                        <p class="text-xs">Hari</p>
                                    </div>
                                    <div class="text-center py-2 col-span-1 bg-color-one font-color-three rounded-md">
                                        <p class="font-bold text-sm m-0" id="countdownHour">21</p>
                                        <p class="text-xs">Jam</p>
                                    </div>
                                    <div class="text-center py-2 col-span-1 bg-color-one font-color-three rounded-md">
                                        <p class="font-bold text-sm m-0" id="countdownMinute">42</p>
                                        <p class="text-xs">Menit</p>
                                    </div>
                                    <div class="text-center py-2 col-span-1 bg-color-one font-color-three rounded-md">
                                        <p class="font-bold text-sm m-0" id="countdownSecond">17</p>
                                        <p class="text-xs">Detik</p>
                                    </div>
                                </div>
                            </div>
                        </div> <svg data-src="https://api.goinvite.id/public/assets/images/themes/template-32/top.svg"
                            width="100%" fill="#b17a46" class="absolute bottom-0" id="Layer_1_2" data-name="Layer 1"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1023.68 103.11" data-id="svg-loader_1">
                            <g id="Template-32_3">
                                <path
                                    d="M.1,103.11H1023.77V84.05s-23.7,17.44-96.19,17.44c-122.9,0-236.53-68.06-310.1-68.06-119.36,0-139.8,53.77-233.81,53.77s-168.13-61-267.87-61C49.86,26.16.09,58.62.09,58.62Z"
                                    transform="translate(-0.09)"></path>
                                <path
                                    d="M198.1,0C310.37,0,320.18,86.23,570.88,86.23,635.19,86.23,774.71,0,875,0c112.27,0,148.78,70.16,148.78,70.16v33H.1S36.78,0,198.1,0Z"
                                    transform="translate(-0.09)" opacity="0.3"></path>
                                <path d="M110.34,103.11S305.47,1,441.71,1C640.65,1,740.06,101.05,913.52,101.05v2.06Z"
                                    transform="translate(-0.09)" opacity="0.3"></path>
                                <path d="M348,103.11S463.51,1,599.76,1s261.6,116.75,424,83.08v19.06Z"
                                    transform="translate(-0.09)" opacity="0.3"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div id="pageProfile">
                    <div class="relative bg-color">
                        <div class="relative">
                            <div class="bg-color-two">
                                <div class="container mx-auto px-6 py-24 font-color-three">
                                    <p class="font-one font-color-profile text-center aos-init aos-animate"
                                        style="font-size:2rem !important" data-aos="fade-up" data-aos-duration="800">
                                        Profil Kedua Mempelai</p>
                                    <p class="text-center text-sm font-color-three font-four whitespace-pre-line mb-10 aos-init aos-animate"
                                        data-aos="fade-up" data-aos-duration="800">Tanpa mengurangi rasa hormat<br>kami
                                        bermaksud mengundang Bapak/Ibu/Saudara/i untuk menghadiri acara pernikahan kami
                                    </p>
                                    <div>
                                        <div class="flex justify-center">
                                            <div class="p-2 relative aos-init aos-animate" data-aos="fade-right"
                                                data-aos-duration="800">
                                                <div style="background: url('https://diginvikreasi.b-cdn.net/goinvite/1736480345-9BC1B282-A39D-DD7C-10D4-DF55BC318004.jpg') no-repeat center; background-size:cover; border-radius: 100%;width: 10rem;height: 15rem; box-shadow: 0 0 0 7px var(--bg-cover-color), 0 0 0 8px var(--border-decor-color-cover);margin:auto"
                                                    class="h-full" data-transform-origin="center center"></div>
                                            </div>
                                        </div>
                                        <div class="text-center py-6 pb-0">
                                            <p class="font-one font-color-profile aos-init" data-aos="fade-up"
                                                data-aos-duration="800">Izal Azis</p>
                                            <p class="font-light font-four text-sm mt-3 aos-init" data-aos="fade-up"
                                                data-aos-duration="800">Putra dari Bapak H.Atang Sulaeman &amp; Ibu
                                                Hj.Yati Sumiati</p>
                                            <div class="flex justify-center mt-6 aos-init" data-aos="fade-up"
                                                data-aos-duration="800"></div>
                                        </div>
                                    </div>
                                    <p class="font-four text-4xl text-center py-8 font-color-three aos-init"
                                        data-aos="fade-up" data-aos-duration="800">&amp;</p>
                                    <div>
                                        <div class="flex justify-center">
                                            <div class="p-2 relative aos-init" data-aos="fade-right"
                                                data-aos-duration="800">
                                                <div style="background: url('https://diginvikreasi.b-cdn.net/goinvite/1736260412-20D11538-1606-566A-69D8-E25D90028EF9.jpg') no-repeat center; background-size:cover; border-radius: 100%;width: 10rem;height: 15rem; box-shadow: 0 0 0 7px var(--bg-cover-color), 0 0 0 8px var(--border-decor-color-cover);margin:auto"
                                                    class="h-full" data-transform-origin="center center"></div>
                                            </div>
                                        </div>
                                        <div class="text-center py-8">
                                            <p class="font-one font-color-profile aos-init" data-aos="fade-up"
                                                data-aos-duration="800">Alifa Qintan Zain</p>
                                            <p class="font-light font-four text-sm mt-3 aos-init" data-aos="fade-up"
                                                data-aos-duration="800">Putri dari Bapak M.Ridwan Taufiq &amp; Ibu
                                                Khoirini</p>
                                            <div class="flex justify-center mt-6 aos-init" data-aos="fade-up"
                                                data-aos-duration="800"></div>
                                        </div>
                                    </div>
                                    <div class="pt-16">
                                        <div class="bg-color-three p-2 aos-init" data-aos="fade-down"
                                            data-aos-duration="800">
                                            <div class="py-4 px-6 border-2 border-color-two">
                                                <p class="text-center font-four italic font-color-two text-sm mb-4">"Dan
                                                    di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu
                                                    istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa
                                                    tenteram kepadanya, dan dijadikan-Nya di antaramu rasa kasih dan
                                                    sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat
                                                    tanda-tanda bagi kaum yang berfikir."<br></p>
                                                <p class="text-center font-four italic font-color-two text-sm">surah Ar
                                                    Rum ayat 21</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pageEvent">
                    <div class="relative bg-color">
                        <div class="absolute top-0 right-0"> <img
                                src="https://diginvikreasi.b-cdn.net/assets/goinvite/themes2/rustic-29/main-0.webp">
                        </div>
                        <div class="absolute bottom-0 left-0"> <img
                                src="https://diginvikreasi.b-cdn.net/assets/goinvite/themes2/rustic-29/main-1.webp">
                        </div> <svg
                            data-src="https://api.goinvite.id/public/assets/images/themes/template-32/bottom.svg"
                            width="100%" fill="#b17a46" class="absolute top-0" id="Layer_1_5" data-name="Layer 1"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1023.68 103.11" data-id="svg-loader_4">
                            <g id="Template-32_6">
                                <path
                                    d="M1023.77,1344.89H.09V1364s23.71-17.44,96.19-17.44c122.9,0,236.53,68.06,310.11,68.06,119.35,0,139.79-53.77,233.8-53.77s168.13,61,267.87,61c65.94,0,115.71-32.46,115.71-32.46Z"
                                    transform="translate(-0.09 -1344.89)"></path>
                                <path
                                    d="M825.76,1448c-112.27,0-122.08-86.23-372.78-86.23-64.31,0-203.83,86.23-304.11,86.23C36.6,1448,.09,1377.84.09,1377.84v-32.95H1023.77S987.08,1448,825.76,1448Z"
                                    transform="translate(-0.09 -1344.89)" opacity="0.3"></path>
                                <path
                                    d="M913.52,1344.89S718.39,1447,582.15,1447C383.21,1447,283.8,1347,110.34,1347v-2.06Z"
                                    transform="translate(-0.09 -1344.89)" opacity="0.3"></path>
                                <path d="M675.89,1344.89S560.35,1447,424.1,1447,162.5,1330.28.09,1364v-19.06Z"
                                    transform="translate(-0.09 -1344.89)" opacity="0.3"></path>
                            </g>
                        </svg> <svg data-src="https://api.goinvite.id/public/assets/images/themes/template-32/top.svg"
                            width="100%" fill="#b17a46" class="absolute bottom-0" id="Layer_1_8" data-name="Layer 1"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1023.68 103.11" data-id="svg-loader_7">
                            <g id="Template-32_9">
                                <path
                                    d="M.1,103.11H1023.77V84.05s-23.7,17.44-96.19,17.44c-122.9,0-236.53-68.06-310.1-68.06-119.36,0-139.8,53.77-233.81,53.77s-168.13-61-267.87-61C49.86,26.16.09,58.62.09,58.62Z"
                                    transform="translate(-0.09)"></path>
                                <path
                                    d="M198.1,0C310.37,0,320.18,86.23,570.88,86.23,635.19,86.23,774.71,0,875,0c112.27,0,148.78,70.16,148.78,70.16v33H.1S36.78,0,198.1,0Z"
                                    transform="translate(-0.09)" opacity="0.3"></path>
                                <path d="M110.34,103.11S305.47,1,441.71,1C640.65,1,740.06,101.05,913.52,101.05v2.06Z"
                                    transform="translate(-0.09)" opacity="0.3"></path>
                                <path d="M348,103.11S463.51,1,599.76,1s261.6,116.75,424,83.08v19.06Z"
                                    transform="translate(-0.09)" opacity="0.3"></path>
                            </g>
                        </svg>
                        <div class="md:px-24 px-6 pt-32 pb-48 p-inherit z-10">
                            <p class="text-center font-color-mode text-sm font-four mb-8 aos-init" data-aos="fade-up"
                                data-aos-duration="800">Kami sangat berharap Bapak/Ibu/Saudara/i bisa hadir di acara
                                yang spesial ini:</p>
                            <div>
                                <div class="py-2 text-center border border-color-two rounded-md relative aos-init"
                                    data-aos="fade-up" data-aos-duration="800">
                                    <div class="absolute z-0 top-0 left-0"> <img class="w-10"
                                            src="https://diginvikreasi.b-cdn.net/assets/goinvite/themes2/rustic-29/event-0.webp">
                                    </div>
                                    <div class="absolute z-0 bottom-0 right-0"> <img class="w-10"
                                            src="https://diginvikreasi.b-cdn.net/assets/goinvite/themes2/rustic-29/event-1.webp">
                                    </div>
                                    <div class="p-4 p-inherit z-10 font-color-mode">
                                        <h4 class="font-one text-4xl pb-4 aos-init" data-aos="fade-up"
                                            data-aos-duration="800">Resepsi Pernikahan</h4>
                                        <p class="font-four text-sm font-bold aos-init" data-aos="fade-up"
                                            data-aos-duration="800">Sabtu, 25 Januari 2025</p>
                                        <p class="font-four text-sm aos-init" data-aos="fade-up"
                                            data-aos-duration="800">19.00 - 21.00</p>
                                        <p class="font-four text-sm italic aos-init" data-aos="fade-up"
                                            data-aos-duration="800">Bertempat di Gedung Graha Angakasa Pura, Jl. Jend.
                                            Sudirman No.99A, RT.001/RW.007, Kranji, Kec. Bekasi Bar.</p>
                                    </div>
                                </div> <a target="_blank" data-aos="fade-up" data-aos-duration="800"
                                    href="https://www.google.com/maps/search/?api=1&amp;query=-6.2278159429788,%20106.98164161295"
                                    class="font-three m-auto flex py-2 px-8 rounded mt-4 mb-8 w-fit bg-color-one font-color-three aos-init">
                                    <ion-icon class="w-6 h-6 mr-2 md hydrated" name="location-outline" role="img"
                                        aria-label="location outline"></ion-icon> <span>Lihat Lokasi</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pageGallery" style="position:relative;z-index:1">
                    <style>
                        .mySwiper2 {
                            height: 80%;
                            ;
                            width: 100%;
                        }

                        .mySwiper {
                            height: 20%;
                            ;
                            box-sizing: border-box;
                            ;
                            padding: 10px 0;
                        }

                        .mySwiper2 .swiper-slide {
                            background: #000;
                        }

                        .mySwiper .swiper-slide {
                            background: #000;
                            ;
                            width: 25%;
                            ;
                            height: 100%;
                            ;
                            opacity: .4;
                        }

                        .mySwiper .swiper-slide-thumb-active {
                            opacity: 1;
                        }
                    </style>
                    <div class="relative bg-color-two">
                        <div class="md:px-24 px-6 p-8 pt-8">
                            <div class="text-center">
                                <h2 class="bg-color-three text-center font-two font-color-one mb-8 text-xl py-2 px-8 inline-block rounded-md aos-init"
                                    data-aos="fade-up" data-aos-duration="800">Galeri Foto</h2>
                            </div>
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                class="swiper mySwiper2 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                <div class="swiper-wrapper" id="animated-thumbnails-gallery" aria-live="off"
                                    style="transform: translate3d(-538px, 0px, 0px); transition-duration: 0ms;"><a
                                        class="swiper-slide gallery-item swiper-slide-prev"
                                        data-src="https://diginvikreasi.b-cdn.net/goinvite/1736005830-FF7B0334-741F-C1AE-E7BD-AC1F072D338E.jpg"
                                        style="width: 528px; margin-right: 10px;" role="group" aria-label="1 / 6"
                                        data-lg-id="eeb10835-96fa-4deb-8881-e85fff49921e"><img alt=""
                                            class="object-scale-down w-full h-48 lg:h-80 img-responsive"
                                            src="https://diginvikreasi.b-cdn.net/goinvite/1736005830-FF7B0334-741F-C1AE-E7BD-AC1F072D338E.jpg"></a><a
                                        class="swiper-slide gallery-item swiper-slide-active"
                                        data-src="https://diginvikreasi.b-cdn.net/goinvite/1736005831-5F35CBAC-070D-58E5-5469-44D447CB3017.jpg"
                                        style="width: 528px; margin-right: 10px;" role="group" aria-label="2 / 6"
                                        data-lg-id="54e64b39-5f4c-412c-b7a0-de9dcefcc12e"><img alt=""
                                            class="object-scale-down w-full h-48 lg:h-80 img-responsive"
                                            src="https://diginvikreasi.b-cdn.net/goinvite/1736005831-5F35CBAC-070D-58E5-5469-44D447CB3017.jpg"></a><a
                                        class="swiper-slide gallery-item swiper-slide-next"
                                        data-src="https://diginvikreasi.b-cdn.net/goinvite/1736005831-3D253266-5E0F-097E-8F83-083782E99A31.jpg"
                                        style="width: 528px; margin-right: 10px;" role="group" aria-label="3 / 6"
                                        data-lg-id="e22f4a40-ac68-4b12-8ae4-1b86dd71e6ff"><img alt=""
                                            class="object-scale-down w-full h-48 lg:h-80 img-responsive"
                                            src="https://diginvikreasi.b-cdn.net/goinvite/1736005831-3D253266-5E0F-097E-8F83-083782E99A31.jpg"></a><a
                                        class="swiper-slide gallery-item"
                                        data-src="https://diginvikreasi.b-cdn.net/goinvite/1736005831-157BE066-CFFF-4711-50A2-8271056D1F6A.jpg"
                                        style="width: 528px; margin-right: 10px;" role="group" aria-label="4 / 6"
                                        data-lg-id="03edce0a-b6a9-4471-a98f-739b4b72a11d"><img alt=""
                                            class="object-scale-down w-full h-48 lg:h-80 img-responsive"
                                            src="https://diginvikreasi.b-cdn.net/goinvite/1736005831-157BE066-CFFF-4711-50A2-8271056D1F6A.jpg"></a><a
                                        class="swiper-slide gallery-item"
                                        data-src="https://diginvikreasi.b-cdn.net/goinvite/1736049936-364CE0A3-D441-66F1-E8AE-D7E704371D64.jpg"
                                        style="width: 528px; margin-right: 10px;" role="group" aria-label="5 / 6"
                                        data-lg-id="94828d12-e8e3-4157-a470-e07c41ba57a3"><img alt=""
                                            class="object-scale-down w-full h-48 lg:h-80 img-responsive"
                                            src="https://diginvikreasi.b-cdn.net/goinvite/1736049936-364CE0A3-D441-66F1-E8AE-D7E704371D64.jpg"></a><a
                                        class="swiper-slide gallery-item"
                                        data-src="https://diginvikreasi.b-cdn.net/goinvite/1736049936-C7A89F6D-5E1E-28A6-723F-EDF96FCDE7AE.jpg"
                                        role="group" aria-label="6 / 6" style="width: 528px; margin-right: 10px;"
                                        data-lg-id="2c2076b0-53ac-4903-97de-d472118d30b3"><img alt=""
                                            class="object-scale-down w-full h-48 lg:h-80 img-responsive"
                                            src="https://diginvikreasi.b-cdn.net/goinvite/1736049936-C7A89F6D-5E1E-28A6-723F-EDF96FCDE7AE.jpg"></a>
                                </div>
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                                    aria-controls="animated-thumbnails-gallery" aria-disabled="false"></div>
                                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                                    aria-controls="animated-thumbnails-gallery" aria-disabled="false"></div><span
                                    class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                            <div thumbsslider=""
                                class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden swiper-thumbs">
                                <div class="swiper-wrapper" id="swiper-wrapper-05985eaf2e88d95f" aria-live="polite"
                                    style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="swiper-slide swiper-slide-visible swiper-slide-active"
                                        style="width: 124.5px; margin-right: 10px;" role="group" aria-label="1 / 6"><img
                                            alt="" class=" object-cover w-full h-16 lg:h-24 img-responsive"
                                            src="https://diginvikreasi.b-cdn.net/goinvite/1736005830-FF7B0334-741F-C1AE-E7BD-AC1F072D338E.jpg">
                                    </div>
                                    <div class="swiper-slide swiper-slide-visible swiper-slide-next swiper-slide-thumb-active"
                                        style="width: 124.5px; margin-right: 10px;" role="group" aria-label="2 / 6"><img
                                            alt="" class=" object-cover w-full h-16 lg:h-24 img-responsive"
                                            src="https://diginvikreasi.b-cdn.net/goinvite/1736005831-5F35CBAC-070D-58E5-5469-44D447CB3017.jpg">
                                    </div>
                                    <div class="swiper-slide swiper-slide-visible"
                                        style="width: 124.5px; margin-right: 10px;" role="group" aria-label="3 / 6"><img
                                            alt="" class=" object-cover w-full h-16 lg:h-24 img-responsive"
                                            src="https://diginvikreasi.b-cdn.net/goinvite/1736005831-3D253266-5E0F-097E-8F83-083782E99A31.jpg">
                                    </div>
                                    <div class="swiper-slide swiper-slide-visible"
                                        style="width: 124.5px; margin-right: 10px;" role="group" aria-label="4 / 6"><img
                                            alt="" class=" object-cover w-full h-16 lg:h-24 img-responsive"
                                            src="https://diginvikreasi.b-cdn.net/goinvite/1736005831-157BE066-CFFF-4711-50A2-8271056D1F6A.jpg">
                                    </div>
                                    <div class="swiper-slide" style="width: 124.5px; margin-right: 10px;" role="group"
                                        aria-label="5 / 6"><img alt=""
                                            class=" object-cover w-full h-16 lg:h-24 img-responsive"
                                            src="https://diginvikreasi.b-cdn.net/goinvite/1736049936-364CE0A3-D441-66F1-E8AE-D7E704371D64.jpg">
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="6 / 6"
                                        style="width: 124.5px; margin-right: 10px;"><img alt=""
                                            class=" object-cover w-full h-16 lg:h-24 img-responsive"
                                            src="https://diginvikreasi.b-cdn.net/goinvite/1736049936-C7A89F6D-5E1E-28A6-723F-EDF96FCDE7AE.jpg">
                                    </div>
                                </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative bg-color">
                    <div class="absolute top-0 right-0"> <img
                            src="https://diginvikreasi.b-cdn.net/assets/goinvite/themes2/rustic-29/main-0.webp"></div>
                    <div class="absolute bottom-0 left-0"> <img
                            src="https://diginvikreasi.b-cdn.net/assets/goinvite/themes2/rustic-29/main-1.webp"></div>
                    <div class="absolute z-10 w-full">
                        <div class="relative"> <svg
                                data-src="https://api.goinvite.id/public/assets/images/themes/template-32/bottom.svg"
                                width="100%" fill="#b17a46" id="Layer_1_11" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1023.68 103.11" data-id="svg-loader_10">
                                <g id="Template-32_12">
                                    <path
                                        d="M1023.77,1344.89H.09V1364s23.71-17.44,96.19-17.44c122.9,0,236.53,68.06,310.11,68.06,119.35,0,139.79-53.77,233.8-53.77s168.13,61,267.87,61c65.94,0,115.71-32.46,115.71-32.46Z"
                                        transform="translate(-0.09 -1344.89)"></path>
                                    <path
                                        d="M825.76,1448c-112.27,0-122.08-86.23-372.78-86.23-64.31,0-203.83,86.23-304.11,86.23C36.6,1448,.09,1377.84.09,1377.84v-32.95H1023.77S987.08,1448,825.76,1448Z"
                                        transform="translate(-0.09 -1344.89)" opacity="0.3"></path>
                                    <path
                                        d="M913.52,1344.89S718.39,1447,582.15,1447C383.21,1447,283.8,1347,110.34,1347v-2.06Z"
                                        transform="translate(-0.09 -1344.89)" opacity="0.3"></path>
                                    <path d="M675.89,1344.89S560.35,1447,424.1,1447,162.5,1330.28.09,1364v-19.06Z"
                                        transform="translate(-0.09 -1344.89)" opacity="0.3"></path>
                                </g>
                            </svg></div>
                    </div><svg data-src="https://api.goinvite.id/public/assets/images/themes/template-32/top.svg"
                        width="100%" fill="#b17a46" class="absolute bottom-0" id="Layer_1_14" data-name="Layer 1"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1023.68 103.11" data-id="svg-loader_13">
                        <g id="Template-32_15">
                            <path
                                d="M.1,103.11H1023.77V84.05s-23.7,17.44-96.19,17.44c-122.9,0-236.53-68.06-310.1-68.06-119.36,0-139.8,53.77-233.81,53.77s-168.13-61-267.87-61C49.86,26.16.09,58.62.09,58.62Z"
                                transform="translate(-0.09)"></path>
                            <path
                                d="M198.1,0C310.37,0,320.18,86.23,570.88,86.23,635.19,86.23,774.71,0,875,0c112.27,0,148.78,70.16,148.78,70.16v33H.1S36.78,0,198.1,0Z"
                                transform="translate(-0.09)" opacity="0.3"></path>
                            <path d="M110.34,103.11S305.47,1,441.71,1C640.65,1,740.06,101.05,913.52,101.05v2.06Z"
                                transform="translate(-0.09)" opacity="0.3"></path>
                            <path d="M348,103.11S463.51,1,599.76,1s261.6,116.75,424,83.08v19.06Z"
                                transform="translate(-0.09)" opacity="0.3"></path>
                        </g>
                    </svg>
                    <div class="md:px-24 px-6 pt-6 pb-16 p-inherit z-10">
                        <div class="p-8 py-16 text-center aos-init" data-aos="fade-right" data-aos-duration="800">
                            <div class="text-center">
                                <h2 class="bg-color-one text-center font-two font-color-three mb-8 text-xl py-2 px-8 inline-block rounded-md aos-init"
                                    data-aos="fade-up" data-aos-duration="800">Amplop Digital</h2>
                            </div>
                            <p class="mb-8 font-color-mode font-four text-md aos-init" data-aos="fade-up"
                                data-aos-duration="800">Bagi saudara bapak/ibu/saudara/i yang ingin mengirimkan hadiah
                                pernikahan dapat melalui:</p>
                            <div class="mt-10 font-color-mode aos-init" data-aos="flip-up" data-aos-duration="800"
                                data-aos-delay="100"><img src="https://api.paleo.id/memo/bank/bca.png"
                                    class="w-28 m-auto">
                                <div class="w-full border-t-2 my-2 mx-auto border-color-one"></div>
                                <p class="font-four font-bold">Nomor Rekening : 5211477645</p> <button type="button"
                                    class="btn font-three m-auto flex py-2 px-8 rounded-full bg-color-one font-color-three my-3 text-sm"
                                    data-clipboard-text="5211477645"> <ion-icon class="w-5 h-5 mr-2 md hydrated"
                                        name="copy-outline" role="img" aria-label="copy outline"></ion-icon> <span
                                        class=" font-four">Salin Nomor</span></button>
                                <p class="font-four font-bold text-sm">a.n. Khoirini</p>
                            </div>
                            <div class="mt-10 font-color-mode aos-init" data-aos="flip-up" data-aos-duration="800"
                                data-aos-delay="200"><img src="https://api.paleo.id/memo/bank/bca.png"
                                    class="w-28 m-auto">
                                <div class="w-full border-t-2 my-2 mx-auto border-color-one"></div>
                                <p class="font-four font-bold">Nomor Rekening : 3911300557</p> <button type="button"
                                    class="btn font-three m-auto flex py-2 px-8 rounded-full bg-color-one font-color-three my-3 text-sm"
                                    data-clipboard-text="3911300557"> <ion-icon class="w-5 h-5 mr-2 md hydrated"
                                        name="copy-outline" role="img" aria-label="copy outline"></ion-icon> <span>Salin
                                        Nomor</span></button>
                                <p class="font-four font-bold text-sm">a.n. M.Ridwan Taufiq</p>
                            </div>
                            <div class="mt-10 font-color-mode aos-init" data-aos="flip-up" data-aos-duration="800"
                                data-aos-delay="300">
                                <p class="font-two text-lg">Kirim Hadiah</p>
                                <div class="w-full border-t-2 my-2 mx-auto border-color-one"></div>
                                <p class="font-four font-bold">Tb Tanjung 77 Kranji, Jalan Pemuda, Kranji, Bekasi Barat,
                                    Kota Bekasi, Bekasi Barat.</p> <button type="button"
                                    class="btn font-three m-auto flex py-2 px-8 rounded-full bg-color-one font-color-three my-3 text-sm"
                                    data-clipboard-text="Tb Tanjung 77 Kranji, Jalan Pemuda, Kranji, Bekasi Barat, Kota Bekasi, Bekasi Barat.">
                                    <ion-icon class="w-5 h-5 mr-2 md hydrated" name="copy-outline" role="img"
                                        aria-label="copy outline"></ion-icon> <span class="">Salin
                                        Alamat</span></button>
                            </div>
                        </div>
                        <div class="p-4 py-16 text-center aos-init" data-aos="fade-up" data-aos-duration="800">
                            <div class="text-center">
                                <h2 class="bg-color-one text-center font-two font-color-three mb-8 text-xl py-2 px-8 inline-block rounded-md aos-init"
                                    data-aos="fade-up" data-aos-duration="800">Protokol Kesehatan</h2>
                            </div>
                            <p class="mb-8 font-color-mode font-four text-md aos-init" data-aos="fade-up"
                                data-aos-duration="800">Kami menghimbau agar tetap memperhatikan protokol kesehatan
                                dalam rangka pencegahan penyebaran virus Covid-19.</p>
                            <div class="grid grid-rows-2 font-color-mode grid-flow-col gap-2 w-72 mx-auto">
                                <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" class="aos-init">
                                    <div class="block pt-3 rounded-full w-20 h-20 mx-auto bg-color-two">
                                        <div class="w-12 h-12 m-auto bg-color-three"
                                            style=" -webkit-mask-size: cover; -webkit-mask-repeat: no-repeat; mask-size: cover; mask-repeat: no-repeat; -webkit-mask-image: url(https://api.paleo.id/memo/svg/health-3.svg); mask-image: url(https://api.paleo.id/memo/svg/health-3.svg); ">
                                        </div>
                                    </div>
                                    <p class="my-4 font-bold font-four text-sm">Cuci tangan</p>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" class="aos-init">
                                    <div class="block pt-3 rounded-full w-20 h-20 mx-auto bg-color-two">
                                        <div class="w-12 h-12 m-auto bg-color-three"
                                            style=" -webkit-mask-size: cover; -webkit-mask-repeat: no-repeat; mask-size: cover; mask-repeat: no-repeat; -webkit-mask-image: url(https://api.paleo.id/memo/svg/health-2.svg); mask-image: url(https://api.paleo.id/memo/svg/health-2.svg); ">
                                        </div>
                                    </div>
                                    <p class="my-4 font-bold font-four text-sm">Pakai masker</p>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" class="aos-init">
                                    <div class="block pt-3 rounded-full w-20 h-20 mx-auto bg-color-two">
                                        <div class="w-12 h-12 m-auto bg-color-three"
                                            style=" -webkit-mask-size: cover; -webkit-mask-repeat: no-repeat; mask-size: cover; mask-repeat: no-repeat; -webkit-mask-image: url(https://api.paleo.id/memo/svg/health-1.svg); mask-image: url(https://api.paleo.id/memo/svg/health-1.svg); ">
                                        </div>
                                    </div>
                                    <p class="my-4 font-bold font-four text-sm">Cek temperatur</p>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" class="aos-init">
                                    <div class="block pt-3 rounded-full w-20 h-20 mx-auto bg-color-two">
                                        <div class="w-12 h-12 m-auto bg-color-three"
                                            style=" -webkit-mask-size: cover; -webkit-mask-repeat: no-repeat; mask-size: cover; mask-repeat: no-repeat; -webkit-mask-image: url(https://api.paleo.id/memo/svg/health-4.svg); mask-image: url(https://api.paleo.id/memo/svg/health-4.svg); ">
                                        </div>
                                    </div>
                                    <p class="my-4 font-bold font-four text-sm">Jaga jarak</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pageGuestbook">
                    <div class="bg-color-two relative"><svg
                            data-src="https://api.goinvite.id/public/assets/images/themes/template-32/top.svg"
                            width="100%" fill="#764312" class="absolute bottom-0" id="Layer_1_17" data-name="Layer 1"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1023.68 103.11" data-id="svg-loader_16">
                            <g id="Template-32_18">
                                <path
                                    d="M.1,103.11H1023.77V84.05s-23.7,17.44-96.19,17.44c-122.9,0-236.53-68.06-310.1-68.06-119.36,0-139.8,53.77-233.81,53.77s-168.13-61-267.87-61C49.86,26.16.09,58.62.09,58.62Z"
                                    transform="translate(-0.09)"></path>
                                <path
                                    d="M198.1,0C310.37,0,320.18,86.23,570.88,86.23,635.19,86.23,774.71,0,875,0c112.27,0,148.78,70.16,148.78,70.16v33H.1S36.78,0,198.1,0Z"
                                    transform="translate(-0.09)" opacity="0.3"></path>
                                <path d="M110.34,103.11S305.47,1,441.71,1C640.65,1,740.06,101.05,913.52,101.05v2.06Z"
                                    transform="translate(-0.09)" opacity="0.3"></path>
                                <path d="M348,103.11S463.51,1,599.76,1s261.6,116.75,424,83.08v19.06Z"
                                    transform="translate(-0.09)" opacity="0.3"></path>
                            </g>
                        </svg>
                        <div class="md:px-24 px-6 py-8">
                            <div class="py-16 aos-init" data-aos="fade-up" data-aos-duration="800">
                                <div class="text-center">
                                    <h2 class="bg-color-one text-center font-two font-color-three mb-8 text-xl py-2 px-8 inline-block rounded-md aos-init"
                                        data-aos="fade-up" data-aos-duration="800">Buku Tamu</h2>
                                </div>
                                <p class=" text-center font-four font-color-three mb-12">Tulis ucapan dan doa Anda di
                                    sini karena kami sangat bersemangat untuk memulai perjalanan baru ini bersama-sama
                                </p>
                                <div
                                    class="w-full inline-block align-bottom bg-white p-4 rounded text-left overflow-hiddentransform transition-all">
                                    <form id="formSendMessage">
                                        <div>
                                            <div class=" text-center ">
                                                <div class="mt-2 space-y-4 grid grid-cols-1">
                                                    <div class="text-left">
                                                        <div><input placeholder="Nama" type="text" name="name"
                                                                class="p-2 rounded-md text-sm block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-color-one-opacity"
                                                                value="" tabindex="0" required=""></div>
                                                    </div>
                                                    <div class="text-left">
                                                        <div class="mt-1"><select required="" name="guest"
                                                                class="p-2 rounded-md w-full block focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border border-color-one-opacity">
                                                                <option value="0">Jumlah Orang</option>
                                                                <option value="1">1 Orang</option>
                                                                <option value="2">2 Orang</option>
                                                                <option value="3">3 Orang</option>
                                                            </select></div>
                                                    </div>
                                                    <div class="text-left">
                                                        <div class="mt-1"><select required="" name="presence"
                                                                class="p-2 rounded-md w-full block focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border border-color-one-opacity">
                                                                <option value="dont_know">Konfirmasi Kehadiran Anda
                                                                </option>
                                                                <option value="presence">Ya, Saya akan hadir</option>
                                                                <option value="not_presence">Tidak</option>
                                                            </select></div>
                                                    </div>
                                                    <div class="text-left">
                                                        <div class="mt-1"><textarea
                                                                placeholder="Berikan Ucapan &amp; Doa" required=""
                                                                name="body" rows="8"
                                                                class="p-2 rounded-md text-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 border border-color-one-opacity"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 text-right"><button type="submit"
                                                class="text-sm font-three font-color-three inline-flex justify-center rounded-md bg-color-one border border-transparent px-8 py-2 font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 ">Kirim
                                                Ucapan</button></div>
                                    </form>
                                    <div class="max-h-60 overflow-hidden overflow-y-scroll space-y-3 mt-10"
                                        id="listMessages"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center py-16 pb-32 bg-color-one ">
                    <p class="font-four text-md font-color-three mb-4">Powered By:</p><a target="_blank"
                        href="https://goinvite.page.link/maincredit"><img
                            src="https://goinvite.id/assets/images/go-credit.png" class="w-36 m-auto"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed bottom-5 right-0 left-0 z-40 text-center ">
        <div class=" bottom-0 h-14 w-80 mx-auto px-4 overflow-y-scroll bg-color-three rounded-full font-color-one"
            style="border:0.01rem solid #7643124d">
            <div class="mx-auto max-w-lg grid grid-cols-5 gap-x-2 h-full"> <a href="#pageCover">
                    <div class="cursor-pointer flex flex-col justify-center items-center h-full"> <ion-icon
                            class="text-lg mb-1 font-color-one md hydrated" name="home-outline" role="img"
                            aria-label="home outline"></ion-icon>
                        <p style="font-size: 10px" class=" font-light font-three font-color-one">Beranda</p>
                    </div>
                </a> <a href="#pageProfile">
                    <div class="cursor-pointer flex flex-col justify-center items-center h-full"> <ion-icon
                            class="text-lg mb-1 font-color-one md hydrated" name="people-outline" role="img"
                            aria-label="people outline"></ion-icon>
                        <p style="font-size: 10px" class="font-light font-three font-color-one">Mempelai</p>
                    </div>
                </a> <a href="#pageEvent">
                    <div class="cursor-pointer flex flex-col justify-center items-center h-full"> <ion-icon
                            class="text-lg mb-1 font-color-one md hydrated" name="calendar-outline" role="img"
                            aria-label="calendar outline"></ion-icon>
                        <p style="font-size: 10px" class="font-light font-three font-color-one">Acara</p>
                    </div>
                </a> <a href="#pageGallery">
                    <div class="cursor-pointer flex flex-col justify-center items-center h-full"> <ion-icon
                            class="text-lg mb-1 font-color-one md hydrated" name="image-outline" role="img"
                            aria-label="image outline"></ion-icon>
                        <p style="font-size: 10px" class="font-light font-three font-color-one">Galeri</p>
                    </div>
                </a><a href="#pageGuestbook">
                    <div class="cursor-pointer flex flex-col justify-center items-center h-full"> <ion-icon
                            class="text-lg mb-1 font-color-one md hydrated" name="book-outline" role="img"
                            aria-label="book outline"></ion-icon>
                        <p style="font-size: 10px" class="font-light font-three font-color-one">Ucapan</p>
                    </div>
                </a></div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/external-svg-loader@1.6.1/svg-loader.min.js"
        async=""></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://goinvite.id/js/vendor/e-gallery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/lightgallery.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/zoom/lg-zoom.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/js/jquery.justifiedGallery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/thumbnail/lg-thumbnail.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>function isMobile() { return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) }; AOS.init(); let isPlay = false; history.scrollRestoration = "manual"; $(window).scrollTop(0); function getMessages() { $("#listMessages").html(''); $.getJSON("https://api.goinvite.id/api/public/message/QintanIzal", function (data) { data.result.map((message, i) => { $("#listMessages").append(`<div class="relative flex items-start space-x-3"><div class="relative"><span class="flex mx-auto mb-4 items-center justify-center h-12 w-12 rounded-full bg-gray-400"><span class="text-sm sm:text-base font-normal leading-none text-white">${message.name.length > 0 ? message.name.substr(0, 1) : '-'}</span></span></div><div class="min-w-0 flex-1"><div><p class="font-color-four font-four text-sm font-bold">${message.name}</p></div><div class="mt-1 font-light font-color-four font-four text-sm"><p>${message.body}</p></div></div></div>`) }) }) }; getMessages(); $(document).on('click', 'a[href^="#"]', function (event) { event.preventDefault(); $('html, body').animate({ scrollTop: $($.attr(this, 'href')).offset().top }, 1000) }); $(document).ready(function () { var countDownDate = new Date("2025-01-25 19:00:00".replace(/-/g, "/")); var x = setInterval(function () { var now = new Date(); var distance = countDownDate - now; var days = Math.floor(distance / (1000 * 60 * 60 * 24)); var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)); var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)); var seconds = Math.floor((distance % (1000 * 60)) / 1000); if (!isNaN(distance) && Number(seconds) > 0) { document.getElementById("countdownDay").innerHTML = String(days).padStart(2, '0'); document.getElementById("countdownHour").innerHTML = String(hours).padStart(2, '0'); document.getElementById("countdownMinute").innerHTML = String(minutes).padStart(2, '0'); document.getElementById("countdownSecond").innerHTML = String(seconds).padStart(2, '0'); document.getElementById("countdownDay2").innerHTML = String(days).padStart(2, '0'); document.getElementById("countdownHour2").innerHTML = String(hours).padStart(2, '0'); document.getElementById("countdownMinute2").innerHTML = String(minutes).padStart(2, '0'); document.getElementById("countdownSecond2").innerHTML = String(seconds).padStart(2, '0') } }, 1000); var swiper = new Swiper(".memo-swiper", { centeredSlides: true, effect: "fade", autoplay: { delay: 4500, disableOnInteraction: false, }, }); var clipboard = new ClipboardJS('.btn'); clipboard.on('success', function (e) { Toastify({ text: "Berhasil disalin", duration: 3000, gravity: "top", position: "right", style: { background: "rgb(15 15 15)", color: "#fff", fontSize: "12px" } }).showToast(); e.clearSelection() }); $('.swiper-kenburn .swiper-slide img').each(function () { var _this_transform_origin = $(this).data('transform-origin'); if (_this_transform_origin != undefined) { $(this).css({ 'transform-origin': _this_transform_origin }) } }); $("#openEnvelope").click(function () { $("#envelope").addClass('close-envelope '); $(".decor-envelope").fadeOut(); $("body").removeClass('stop-scrolling'); $("#musicContainer").removeClass('hidden'); document.getElementById('music').play(); isPlay = true }); $("#musicPlay").click(function () { $(this).addClass('hidden'); $("#musicPause").removeClass('hidden'); if (!isPlay) { document.getElementById('music').play(); isPlay = true } else { document.getElementById('music').muted = false } }); $("#musicPause").click(function () { $(this).addClass('hidden'); $("#musicPlay").removeClass('hidden'); document.getElementById('music').muted = true }); $("#sendMessage").click(function () { $("#modalMessage").fadeIn() }); $("#formSendMessage").submit(function (e) { $("#formSendMessage").find("button[type=submit]").css("background-color", "#e9e4de"); $("#formSendMessage").find("button[type=submit]").attr("disabled", "disabled"); e.preventDefault(); $.post("https://api.goinvite.id/api/public/message/QintanIzal", $(this).serialize(), function (data) { if (!data.error) { $("#formSendMessage").find("button[type=submit]").css("background-color", "#C2AE92"); $("#formSendMessage").find("button[type=submit]").removeAttr("disabled"); Toastify({ text: "Berhasil terkirim", duration: 3000, gravity: "top", position: "right", style: { background: "rgb(15 15 15)", color: "#fff", fontSize: "12px" } }).showToast(); getMessages(); $("#formSendMessage").trigger("reset"); $("#modalMessage").fadeOut() } }, 'json') }); $("#sendRsvp").click(function () { $("#modalRsvp").fadeIn() }); $("#formSendRsvp").submit(function (e) { $("#formSendRsvp").find("button[type=submit]").css("background-color", "#e9e4de"); $("#formSendRsvp").find("button[type=submit]").attr("disabled", "disabled"); e.preventDefault(); $.post("https://api.goinvite.id/api/public/rsvp/QintanIzal", $(this).serialize(), function (data) { if (!data.error) { $("#formSendRsvp").find("button[type=submit]").css("background-color", "#C2AE92"); $("#formSendRsvp").find("button[type=submit]").removeAttr("disabled"); Toastify({ text: "Berhasil terkirim", duration: 3000, gravity: "top", position: "right", style: { background: "rgb(15 15 15)", color: "#fff", fontSize: "12px" } }).showToast(); getMessages(); $("#formSendRsvp").trigger("reset"); $("#modalRsvp").fadeOut() } }, 'json') }) });</script>
    <script>var swiper = new Swiper(".mySwiper", { spaceBetween: 10, slidesPerView: 4, freeMode: true, watchSlidesProgress: true, }); var swiper2 = new Swiper(".mySwiper2", { autoplay: { delay: 5000, }, spaceBetween: 10, navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev", }, thumbs: { swiper: swiper, }, on: { imagesReady: function () { window.lightGallery(document.getElementById("animated-thumbnails-gallery"), { autoplayFirstVideo: false, pager: false, galleryId: "nature", plugins: [lgZoom, lgThumbnail], mobileSettings: { controls: false, showCloseIcon: true, download: false, rotate: false } }) }, } });</script>
    <div class="lg-container  " id="lg-container-1" tabindex="-1" aria-modal="true" role="dialog">
        <div id="lg-backdrop-1" class="lg-backdrop" style="transition-duration: 300ms;"></div>

        <div id="lg-outer-1"
            class="lg-outer lg-use-css3 lg-css3 lg-slide lg-grab lg-show-after-load lg-use-transition-for-zoom lg-animate-thumb lg-has-thumb">
            <div id="lg-content-1" class="lg" style="width: 100%; height:100%">
                <div id="lg-inner-1" class="lg-inner"
                    style="transition-timing-function: ease; transition-duration: 400ms;"></div>
                <div id="lg-toolbar-1" class="lg-toolbar lg-group">

                    <button type="button" aria-label="Close gallery" id="lg-close-1" class="lg-close lg-icon"></button>
                    <a id="lg-download-1" target="_blank" aria-label="Download" download=""
                        class="lg-download lg-icon"></a>
                    <div class="lg-counter" role="status" aria-live="polite">
                        <span id="lg-counter-current-1" class="lg-counter-current">1 </span> /
                        <span id="lg-counter-all-1" class="lg-counter-all">6 </span>
                    </div><button id="lg-actual-size-1" type="button" class="lg-zoom-in lg-icon"></button>
                </div>
                <button type="button" id="lg-prev-1" aria-label="Previous slide" class="lg-prev lg-icon"> </button>
                <button type="button" id="lg-next-1" aria-label="Next slide" class="lg-next lg-icon"> </button>
                <div id="lg-components-1" class="lg-components">
                    <div class="lg-sub-html" role="status" aria-live="polite"></div>
                    <div class="lg-thumb-outer lg-thumb-align-middle lg-grab">
                        <div class="lg-thumb lg-group"
                            style="transition-duration: 400ms; width: 630px; position: relative;">
                            <div data-lg-item-id="0" class="lg-thumb-item  active" style="width:100px; height: 80px;
            margin-right: 5px;">
                                <img data-lg-item-id="0"
                                    src="https://diginvikreasi.b-cdn.net/goinvite/1736005830-FF7B0334-741F-C1AE-E7BD-AC1F072D338E.jpg">
                            </div>
                            <div data-lg-item-id="1" class="lg-thumb-item " style="width:100px; height: 80px;
            margin-right: 5px;">
                                <img data-lg-item-id="1"
                                    src="https://diginvikreasi.b-cdn.net/goinvite/1736005831-5F35CBAC-070D-58E5-5469-44D447CB3017.jpg">
                            </div>
                            <div data-lg-item-id="2" class="lg-thumb-item " style="width:100px; height: 80px;
            margin-right: 5px;">
                                <img data-lg-item-id="2"
                                    src="https://diginvikreasi.b-cdn.net/goinvite/1736005831-3D253266-5E0F-097E-8F83-083782E99A31.jpg">
                            </div>
                            <div data-lg-item-id="3" class="lg-thumb-item " style="width:100px; height: 80px;
            margin-right: 5px;">
                                <img data-lg-item-id="3"
                                    src="https://diginvikreasi.b-cdn.net/goinvite/1736005831-157BE066-CFFF-4711-50A2-8271056D1F6A.jpg">
                            </div>
                            <div data-lg-item-id="4" class="lg-thumb-item " style="width:100px; height: 80px;
            margin-right: 5px;">
                                <img data-lg-item-id="4"
                                    src="https://diginvikreasi.b-cdn.net/goinvite/1736049936-364CE0A3-D441-66F1-E8AE-D7E704371D64.jpg">
                            </div>
                            <div data-lg-item-id="5" class="lg-thumb-item " style="width:100px; height: 80px;
            margin-right: 5px;">
                                <img data-lg-item-id="5"
                                    src="https://diginvikreasi.b-cdn.net/goinvite/1736049936-C7A89F6D-5E1E-28A6-723F-EDF96FCDE7AE.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>