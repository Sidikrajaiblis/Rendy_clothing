<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Rendy Clothing</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('user/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('user/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('user/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Dewi
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="#hero" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('user/img/logo.png') }}" alt=""> -->
        <h1 class="sitename">Rendy Clothing</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#services">Servis</a></li>
          <li><a href="#portfolio">Produk</a></li>
          <li><a href="#team">Tim</a></li>
          <li><a href="#contact">KontaK</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{ asset('user/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">Desain. Jahit. packing.</h2>
        <p data-aos="fade-up" data-aos-delay="200">Kami mendesain dan menjahit pakaian yang anda inginkan</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#about" class="btn-get-started">Ayo Mulai</a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Tentang Rendy Clothing</h3>
            <img src="{{ asset('user/img/about.jpg') }}" class="img-fluid rounded-4 mb-4" alt="">
            <p>Rendy Clothing berdiri dengan visi menjadi pelopor fashion berkualitas yang mengedepankan kenyamanan, gaya, dan inovasi. Kami percaya bahwa pakaian tidak hanya melindungi tubuh, tetapi juga mencerminkan kepribadian dan semangat setiap individu.</p>
            <p>Sejak berdiri, kami berkomitmen untuk menghadirkan produk-produk pakaian dengan bahan terbaik, desain yang stylish, serta harga yang terjangkau untuk semua kalangan. Dengan tim kreatif yang berdedikasi, kami selalu berusaha mengikuti tren terbaru tanpa meninggalkan nilai-nilai klasik dalam setiap koleksi kami.</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p>
              <h3>Visi Kami</h3>
              </p>
              <p>
                Menjadi brand fashion pilihan utama di Indonesia dan mancanegara dengan produk yang berkualitas, inovatif, dan ramah lingkungan.
              </p>
              <p>
              <h3>Misi Kami</h3>
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Menghadirkan produk pakaian yang nyaman, stylish, dan berkualitas tinggi.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Memberikan pelayanan terbaik kepada pelanggan dengan kecepatan, keramahan, dan profesionalisme.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Berkontribusi terhadap kelestarian lingkungan melalui penggunaan bahan yang berkelanjutan.</span></li>
              </ul>

              <div class="position-relative mt-4">
                <img src="{{ asset('user/img/about-2.jpg') }}" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Klien Kami</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Jenis Pakaian</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
                <p>Jam Support Kami</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
                <p>Pekerja Keras</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Servis</h2>
        <p>Pelayanan Kami<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('user/img/services-1.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-brush"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Desain</h3>
                </a>
                <p>Kami menciptakan desain yang mengikuti tren global dengan fokus pada kenyamanan, kualitas, dan karakter unik di setiap koleksi.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('user/img/services-2.png') }}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Jahit</h3>
                </a>
                <p>Proses produksi dilakukan dengan ketelitian tinggi oleh tenaga profesional, menghasilkan pakaian dengan jahitan rapi dan standar premium.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('user/img/services-3.png') }}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-box-seam"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Packing</h3>
                </a>
                <p>Setiap produk dikemas dengan rapi dan elegan, melalui proses quality control ketat untuk memastikan sampai ke pelanggan dalam kondisi sempurna.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('user/img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('user/img/clients/client-2.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('user/img/clients/client-3.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('user/img/clients/client-4.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('user/img/clients/client-5.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('user/img/clients/client-6.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
              <i class="bi bi-palette"></i>
              <h4 class="d-none d-lg-block">Desain Eksklusif</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
              <i class="bi bi-box-seam"></i>
              <h4 class="d-none d-lg-block">Kualitas Terjamin</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
              <i class="bi bi-clock"></i>
              <h4 class="d-none d-lg-block">Produksi Tepat Waktu</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
              <i class="bi bi-hand-thumbs-up"></i>
              <h4 class="d-none d-lg-block">Layanan Pelanggan Responsif</h4>
            </a>
          </li>
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Kami percaya bahwa desain adalah identitas dari setiap produk.</h3>
                <p>
                  Di Rendy Clothing, setiap pakaian diciptakan melalui riset mendalam tentang tren fashion terkini, preferensi pasar, dan inspirasi dari berbagai budaya. Tim desainer kami bekerja dengan pendekatan kreatif dan detail, memastikan setiap koleksi memiliki karakter unik dan estetika yang kuat. Kami tidak hanya membuat pakaian, tapi menghadirkan karya yang mampu merepresentasikan gaya hidup penggunanya.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>
                    <spab>Tim desain berpengalaman & kreatif.</spab>
                  </li>
                  <li><i class="bi bi-check2-all"></i> <span>Mengikuti tren fashion lokal & internasional.</span>.</li>
                  <li><i class="bi bi-check2-all"></i> <span>Sentuhan unik di setiap koleksi.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Desain fleksibel: casual, formal, streetwear.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('user/img/working-1.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Kualitas adalah prioritas utama kami. </h3>
                <p>
                  Rendy Clothing menggunakan bahan berkualitas tinggi yang dipilih secara selektif, serta didukung oleh proses jahit presisi yang dikerjakan oleh tenaga profesional berpengalaman. Setiap produk melewati tahapan quality control yang ketat untuk memastikan kerapihan, kenyamanan, dan daya tahan. Hasilnya adalah pakaian yang tidak hanya stylish, tetapi juga nyaman dan tahan lama saat digunakan.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Bahan kain premium & nyaman.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Jahitan rapi dan kuat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Finishing berkualitas.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Finishing berkualitas.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('user/img/working-2.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Kami memahami pentingnya ketepatan waktu dalam industri fashion.</h3>
                <p>
                  Dengan sistem manajemen produksi yang efisien dan terstruktur, kami dapat memastikan setiap pesanan dikerjakan secara profesional dan selesai sesuai tenggat waktu. Baik untuk skala kecil maupun besar, kami berkomitmen memberikan pelayanan tepat waktu tanpa mengorbankan kualitas hasil produksi.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Proses produksi terjadwal dan efisien.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Dukungan tenaga kerja terlatih.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Kapasitas produksi fleksibel (custom atau massal).</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Estimasi waktu pengiriman jelas dan akurat.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('user/img/working-4.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Kepuasan pelanggan adalah komitmen kami.</h3>
                <p>
                  Rendy Clothing menyediakan layanan pelanggan yang cepat, ramah, dan solutif. Kami siap membantu mulai dari konsultasi produk, proses pemesanan, hingga after-sales service. Dengan komunikasi yang responsif dan transparan, kami ingin memastikan setiap pengalaman pelanggan bersama Rendy Clothing selalu menyenangkan dan memuaskan.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Respons cepat via WhatsApp & email.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Pendampingan dalam proses pemesanan.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Penanganan keluhan dengan baik.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Garansi & after-sales support.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('user/img/working-3.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Services 2 Section -->
    <!-- /Services 2 Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="{{ asset('user/img/testimonials-bg.jpg') }}" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            @foreach ($struktural as $data)

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('images/struktural/' . $data->foto) }}" class="testimonial-img" alt="">
                <h3>{{$data->nama_struktural}}</h3>
                <h4>{{$data->jabatan}}</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>{{$data->deskripsi}}</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Produk</h2>
        <p>PRODUK KAMI</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            @foreach ($kategori as $data)
            <li data-filter=".filter-{{ $data->id }}">{{ $data->nama_kategori }}</li>
            @endforeach
          </ul>


          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            @foreach ($produk as $data)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $data->id_kategori }}">
              <div class="portfolio-content h-100">
                <img src="{{ asset('images/produk/' . $data->gambar_produk ) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $data->nama_produk }}</h4>
                  <p>{{ $data->deskripsi ?? 'Lorem ipsum, dolor sit amet consectetur' }}</p>
                  <a href="{{ asset('images/produk/' . $data->gambar_produk ) }}" title="{{ $data->nama_produk }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            @endforeach


          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tim</h2>
        <p>TIM KAMI</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gx-4 justify-content-center">
          @foreach ($pekerja as $data)
          <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic">
                <img src="{{ asset('images/pekerja/' . $data->cover) }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ $data->nama }}</h4>
                <span>{{ $data->jenis_pekerjaan }}</span>
                <div class="social">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>


    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Hubungi Kami</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>Bm</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Dewi</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Dewi</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('user/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('user/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('user/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('user/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('user/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('user/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('user/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('user/js/main.js') }}"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var elem = document.querySelector('.isotope-container');
      var iso = new Isotope(elem, {
        itemSelector: '.isotope-item',
        layoutMode: 'masonry',
      });

      // Filter items on button click
      var filtersElem = document.querySelector('.portfolio-filters');
      filtersElem.addEventListener('click', function(event) {
        if (!event.target.matches('li')) return;

        var filterValue = event.target.getAttribute('data-filter');
        iso.arrange({
          filter: filterValue
        });

        // Toggle active class
        document.querySelectorAll('.portfolio-filters li').forEach(function(el) {
          el.classList.remove('filter-active');
        });
        event.target.classList.add('filter-active');
      });
    });
  </script>



</body>

</html>