<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wedding Invitation For You, From us.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="guidenesia.id" />
    <meta name="keywords" content="guidenesia" />
    <meta name="author" content="guidenesia.id" />

    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    {{-- sweet alert css --}}
    <link rel="stylesheet" href="{{ url('/') }}/css/sweetalert2.min.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
 <script src="js/respond.min.js"></script>
 <![endif]-->

</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="{{ url('/') }}">AZ Wedding<strong>.</strong></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li><a href="#" class="menu" target="fh5co-header">Home</a></li>
                            <li><a href="#" class="menu" target="fh5co-couple-story">Story</a></li>
                            <li><a href="#" class="menu" target="fh5co-event">Event</a></li>
                            <li><a href="#" class="menu" target="fh5co-testimonial">Pesanmu</a></li>
                            <li><a href="#" class="menu" target="fh5co-started">RSVP</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <header id="fh5co-header" class="fh5co-cover" role="banner"
            style="background-image:url({{ url('images/cover-top.jpg') }});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                <h1>Aji &amp; Zakia</h1>
                                <h2>Kita Akan Menikah Pada</h2>
                                <div class="simply-countdown simply-countdown-one">
                                    <div class="simply-section simply-days-section">
                                        <div><span class="simply-amount">0</span><span class="simply-word">day</span>
                                        </div>
                                    </div>
                                    <div class="simply-section simply-hours-section">
                                        <div><span class="simply-amount">0</span><span class="simply-word">hour</span>
                                        </div>
                                    </div>
                                    <div class="simply-section simply-minutes-section">
                                        <div><span class="simply-amount">0</span><span class="simply-word">minute</span>
                                        </div>
                                    </div>
                                    <div class="simply-section simply-seconds-section">
                                        <div><span class="simply-amount">0</span><span class="simply-word">second</span>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#" target="fh5co-started"
                                        class="btn btn-default btn-sm menu saveTheData">Save the
                                        date</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="fh5co-couple">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h2>Hello {{ !empty($nama) ? ' ' . $nama : '' }}!</h2>
                        <h3>17 Mei 2021, Datar, Warungpring, Pemalang (<a target="__blank"
                                href="https://goo.gl/maps/niugWpf7QJqpfJyF7">GOOGLE MAPS</a>)</h3>
                        <p>Kita mengundang Kamu untuk merayakan pernikahan Kita!</p>
                    </div>
                </div>
                <div class="couple-wrap animate-box">
                    <div class="couple-half">
                        <div class="groom">
                            <img src="images/aji-face.jpg" alt="groom" class="img-responsive">
                        </div>
                        <div class="desc-groom">
                            <h3>Aji Wibowo</h3>
                            <p>Menikah bukanlah bisa hidup dengannya, menikah berarti tidak bisa hidup tanpanya</p>
                        </div>
                    </div>
                    <p class="heart text-center"><i class="icon-heart2"></i></p>
                    <div class="couple-half">
                        <div class="bride">
                            <img src="images/zakia-face.jpg" alt="groom" class="img-responsive">
                        </div>
                        <div class="desc-bride">
                            <h3>Zakia Dwi Uka</h3>
                            <p>Pernikahan yang sukses adalah jatuh cinta sering kali dan selalu terhadap orang yang sama
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>Acara Spesial Kami</span>
                        <h2>Acara Pernikahan</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="event-wrap animate-box">
                                        <h3>Akad Nikah</h3>
                                        <div class="event-col">
                                            <i class="icon-clock"></i>
                                            <span>9:00</span>
                                            <span>13:00</span>
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span>Senin</span>
                                            <span>17 Mei, 2021</span>
                                        </div>
                                        <p>
                                            "Siapa yang diberi karunia oleh Allah seorang istri yang salehah, berarti
                                            Allah telah menolongnya untuk menyempurnakan setengah agamanya. Karena itu,
                                            bertakwalah kepada Allah setengah sisanya". (HR. Baihaqi 1916)
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="event-wrap animate-box">
                                        <h3>Resepsi</h3>
                                        <div class="event-col">
                                            <i class="icon-clock"></i>
                                            <span>14:00</span>
                                            <span>selesai</span>
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span>Senin</span>
                                            <span>17 Mei, 2021</span>
                                        </div>
                                        <p>
                                            Kami harap teman-teman sekalian dapat menikmati dalam acara resepsi kami
                                            yang sederhana ini. Membuat teman-teman turut serta bahagia dalam
                                            kesederhanaan adalah harapan kami.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-couple-story">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>Kita Mencinatai Satu Sama Lain</span>
                        <h2>Cerita Kita</h2>
                        <p>Jika melangkah ke tingkat tertinggi, beruntunglah yang tetap bertahan dan menjadikan cinta
                            hanya ujian dan kesabaran sebagai penjaganya.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0">
                        <ul class="timeline animate-box">
                            <li class="animate-box">
                                <div class="timeline-badge" style="background-image:url(images/pertemuan.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Pertemuan</h3>
                                        <span class="date">31 Agustus 2017</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Saat itu aku menemuinya di terminal Kota Pemalang pada pukul 1 dini hari.
                                            Dengan membawa sebuah boneka, ia menghampiri aku yang menunggunya di motor
                                            beat popku. Saat itu pertama kali kita bertemu, bertatap muka, bahkan
                                            bercanda tawa hingga kita sampai di Kecamatan Randudongkal. Kemudian
                                            berpisah setelah dia dijemput oleh adik laki-lakinya. Malam yang bahagia..
                                        </p>
                                        <br>
                                        <p style="text-align: right">Calon suamimu, </p>
                                        <p style="text-align: right">Aji Wibowo</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge" style="background-image:url(images/firstdate.jpeg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">First Date</h3>
                                        <span class="date">30 Januari 2018</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>
                                            Aku mendengar kabar kamu akan mengunjungiku disela-sela kesibukanku bekerja,
                                            itu adalah kabar yang membuat penat dan letihku menghilang dalam sekejab.
                                            Saat itu sore hari, HP-ku berdering, kamu memberitahuku bahwa sudah sampai
                                            titik lokasi yang aku berikan 6jam yang lalu.
                                            Dengan gugup, aku menghampirimu dan saat itulah kita melalui kencan pertama
                                            kita. Malam itu, sungguh malam yang bahagia..
                                        </p>
                                        <br>
                                        <p style="text-align: right">Calon istrimu, </p>
                                        <p style="text-align: right">Zakia Dwi Uka</p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box">
                                <div class="timeline-badge" style="background-image:url(images/jadian.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">In A Relationship</h3>
                                        <span class="date">14 Februari 2018</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>
                                            Akhirnya, di hari kasih sayang kita berkomitmen untuk saling memperhatikan,
                                            untuk saling menyayangi, untuk saling mencintai, untuk selamanya.
                                        </p>
                                        <br>
                                        <p style="text-align: right">Salam Cinta, </p>
                                        <p style="text-align: right">Aji Wibowo & Zakia Dwi Uka</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div id="fh5co-gallery" class="fh5co-section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>Our Memories</span>
                        <h2>Wedding Gallery</h2>
                        <p>Biar gambar ini yang menceritakan segalanya tentang kebahagiaan kita.</p>
                    </div>
                </div>
                <div class="row row-bottom-padded-md">
                    <div class="col-md-12">
                        <ul id="fh5co-gallery-list">

                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url(images/monas.jpeg); ">
                                <a href="images/gallery-1.jpg">
                                    <div class="case-studies-summary">
                                        <span>Monas</span>
                                        <h2>Seharian Bahagia</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url(images/widuri.jpeg); ">
                                <a href="#" class="color-2">
                                    <div class="case-studies-summary">
                                        <span>Widuri</span>
                                        <h2>Banyak lucunya</h2>
                                    </div>
                                </a>
                            </li>


                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url(images/semarang.jpeg); ">
                                <a href="#" class="color-3">
                                    <div class="case-studies-summary">
                                        <span>Semarang</span>
                                        <h2>Ciye, abis kenalan sama nenekku</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url(images/lamaran.jpeg); ">
                                <a href="#" class="color-4">
                                    <div class="case-studies-summary">
                                        <span>Pemalang</span>
                                        <h2>Tunangan kita..</h2>
                                    </div>
                                </a>
                            </li>

                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url(images/prewedku.jpeg); ">
                                <a href="#" class="color-3">
                                    <div class="case-studies-summary">
                                        <span>Pemalang</span>
                                        <h2>Prewed biar kaya orang-orang</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url(images/prewedku2.jpeg); ">
                                <a href="#" class="color-4">
                                    <div class="case-studies-summary">
                                        <span>Pemalang</span>
                                        <h2>Biar romantis</h2>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}

        <div id="fh5co-testimonial">
            <div class="container">
                <div class="row">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <span>Best Wishes</span>
                            <h2>Friends Wishes</h2>
                            <p>Taruh harapanmu di sini saat mengisi <a href="#" class="menu"
                                    target="fh5co-started">RSVP</a> ya!</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <div class="wrap-testimony">
                                <div class="owl-carousel-fullwidth">
                                    @foreach ($data as $item)
                                        <div class="item">
                                            <div class="testimony-slide active text-center">
                                                <figure>
                                                    <img src="images/couple-1.png" alt="user">
                                                </figure>
                                                <span>{{ $item->name }}</span>
                                                <blockquote>
                                                    <p>"{{ $item->wishes }}"</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Apakah kamu akan datang?</h2>
                        <p>Harap isi form di bawah ini untuk kami dapat mengingatkan kamu untuk menghadiri acara kami.
                            Terima kasih!</p>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-10 col-md-offset-1">
                        <form class="form-inline" action="{{ route('wishes') }}" method="post">
                            @csrf
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Nama</label>
                                    <input type="name" name="name" class="form-control" id="name" placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="wish" class="sr-only">Harapanmu</label>
                                    <input type="wish" name="wishes" class="form-control" id="wish"
                                        placeholder="Harapanmu">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <button type="submit" class="btn btn-default btn-block">AKU DATANG</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer id="fh5co-footer" role="contentinfo">
            <div class="container">

                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2021 Aji & Zakia. All Rights Reserved.</small>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="js/jquery.countTo.js"></script>

    <!-- Stellar -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
    <script src="js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

    {{-- sweet alert js --}}
    <script src="{{ url('/') }}/js/sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.menu').click(function(e) {
                e.preventDefault();
                var id = $(this).attr('target');
                target_offset = $('#' + id).offset(),
                    target_top = target_offset.top;
                $('html, body').animate({
                    scrollTop: target_top
                }, 800);
            })

            // Mengatur waktu akhir perhitungan mundur
            var countDownDate = new Date("May 7, 2021 00:00:00").getTime();

            // Memperbarui hitungan mundur setiap 1 detik
            var x = setInterval(function() {

                // Untuk mendapatkan tanggal dan waktu hari ini
                var now = new Date().getTime();

                // Temukan jarak antara sekarang dan tanggal hitung mundur
                var distance = countDownDate - now;

                // Perhitungan waktu untuk hari, jam, menit dan detik
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                $('.simply-days-section .simply-amount').html(days);
                $('.simply-hours-section .simply-amount').html(hours);
                $('.simply-minutes-section .simply-amount').html(minutes);
                $('.simply-seconds-section .simply-amount').html(seconds);

                // Jika hitungan mundur selesai, tulis beberapa teks 
                if (distance < 0) {
                    clearInterval(x);
                    $('.simply-countdown').html('<h1>Hari ini!</h1>');
                    $('.saveTheData').html('beri kami ucapan disini');
                }
            }, 1000);

            // var d = new Date("May 17, 2021 00:00:00");
            // d.setDate(d.getDate() + 10);

            // console.log(d);

            var sMessage = '{{ Session::has('sweetAlertMessage') }}';
            if (sMessage == '1') {
                Swal.fire({
                    icon: '{{ Session::has('sweetAlertMessage') ? Session::get('sweetAlertMessage')['icon'] : '' }}',
                    title: '{{ Session::has('sweetAlertMessage') ? Session::get('sweetAlertMessage')['title'] : '' }}',
                    text: '{{ Session::has('sweetAlertMessage') ? Session::get('sweetAlertMessage')['text'] : '' }}'
                })
            }

            //jQuery example
            // $('.simply-countdown-one').simplyCountdown({
            //     year: d.getFullYear(),
            //     month: d.getMonth(),
            //     day: d.getDate(),
            //     enableUtc: false
            // });
        });

    </script>

</body>

</html>
