<!DOCTYPE html>
<html lang="en">

    <?php include_once 'template/header.php'; ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/mahalini\ mati2an.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Movie and Videos!</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <br>
    <br>

<!-- Carousel Section -->
<!-- Tambahkan ini di HEAD kalau belum -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<style>
  .video-slide {
    position: relative;
    overflow: hidden;
  }

  .video-wrapper video {
    width: 100%;
    height: auto;
    border-radius: 10px;
  }

  .video-caption-overlay {
    position: absolute;
    top: 30px;
    left: 30px;
    z-index: 2;
    color: #ffffff;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.85);
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 5px;
  }

  .video-caption-overlay h2 {
    font-size: 28px;
    font-weight: bold;
    margin: 0;
    color: #ffffff;
  }

  .video-caption-overlay p {
    font-size: 16px;
    margin: 0;
    color: #ffffff;
  }

  .top-left-gradient {
    position: absolute;
    top: 0;
    left: 0;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle at top left, rgba(181, 27, 255, 0.5), transparent 70%);
    z-index: 1;
    pointer-events: none;
  }
</style>

<section class="media-carousel section-padding-100-50">
  <div class="owl-carousel owl-theme">

    <!-- Slide 1 -->
    <div class="item video-slide">
      <div class="video-wrapper">
        <div class="top-left-gradient"></div>
<video playsinline muted loop controls>
          <source src="img/trailer/traileralibi.mp4" type="video/mp4">
        </video>
        <div class="video-caption-overlay">
          <h2>Alibii.com</h2>
          <p>Coming Soon in Vidio.com</p>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="item video-slide">
      <div class="video-wrapper">
        <div class="top-left-gradient"></div>
<video playsinline muted loop controls>
          <source src="img/trailer/trailerkapan.mp4" type="video/mp4">
        </video>
        <div class="video-caption-overlay">
          <h2>Kapan Pindah Rumah</h2>
          <p>Watch it on Netflix</p>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="item video-slide">
      <div class="video-wrapper">
        <div class="top-left-gradient"></div>
<video playsinline muted loop controls>
          <source src="img/trailer/trailekopi.mp4" type="video/mp4">
        </video>
        <div class="video-caption-overlay">
          <h2>Kopi Pahit</h2>
          <p>Watch it on Netflix</p>
        </div>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="item video-slide">
      <div class="video-wrapper">
        <div class="top-left-gradient"></div>
<video playsinline muted loop controls>
          <source src="img/trailer/trailersashi.mp4" type="video/mp4">
        </video>
        <div class="video-caption-overlay">
          <h2>My Sassy Girl</h2>
          <p>Watch it on PrimeVideo</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Tambahkan sebelum </body> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(document).ready(function () {
    const $owl = $(".owl-carousel");

    $owl.owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      dots: true,
      autoplay: true,
      autoplayTimeout: 8000,
      autoplayHoverPause: true,
      navText: [
        '<span style="font-size: 3em; color: white;">&#10094;</span>',
        '<span style="font-size: 3em; color: white;">&#10095;</span>'
      ],
      onInitialized: function (event) {
        playCurrentVideo(event.item.index);
      },
      onTranslate: function () {
        pauseAllVideos();
      },
      onTranslated: function (event) {
        playCurrentVideo(event.item.index);
      }
    });

    function pauseAllVideos() {
      $(".owl-carousel video").each(function () {
        this.pause();
        this.currentTime = 0;
      });
    }

    function playCurrentVideo(index) {
      const currentItem = $(".owl-item").eq(index).find("video").get(0);
      if (currentItem) {
        currentItem.muted = true;
        currentItem.play().catch(() => {});
      }
    }

    $(".owl-carousel video").on("play", function () {
      $(".owl-carousel video").not(this).each(function () {
        this.pause();
      });
    });
  });
</script>

<!-- ##### Media Carousel Full Screen End ##### -->


    <!-- ##### Album Catagory Area Start ##### -->
    <section class="album-catagory section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                        <a href="#" data-filter="*">Browse All</a>
                        <a href="#" data-filter=".a" class="active">A</a>
                        <a href="#" data-filter=".k">K</a>
                        <a href="#" data-filter=".m">M</a>
                        <a href="#" data-filter=".r">R</a>
                        <a href="#" data-filter=".s">S</a>
                        <a href="#" data-filter=".p">P</a>
                    </div>
                </div>
            </div>

            
            <div class="row oneMusic-albums">
<!-- Single Album -->
<div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item k p r">
    <div class="single-album">
        <img src="img/posterfilm/alibii-com-0ce95f.webp" alt="">
        <div class="album-info">
            <a href="https://www.vidio.com/premier/11438/alibii-com" target="_blank">
                <h5>Alibii.com</h5>
            </a>
            <p>COMING SOON in vidio.com 12 July 2025</p>
        </div>
    </div>
</div>

<!-- Single Album -->
<div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item k p r">
    <div class="single-album">
        <img src="img/Poster_film_Kapan_Pindah_Rumah.jpg" alt="">
        <div class="album-info">
            <a href="https://www.netflix.com/id-en/title/81690262?source=35&fromWatch=true" target="_blank">
                <h5>Kapan Pindah Rumah</h5>
            </a>
            <p>Available on Netflix</p>
        </div>
    </div>
</div>

<!-- Single Album -->
<div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item k p">
    <div class="single-album">
        <img src="img/Kopi_Pahit_2022_-_official_poster.jpeg" alt="">
        <div class="album-info">
            <a href="https://www.netflix.com/id-en/title/81690527?source=35&fromWatch=true" target="_blank">
                <h5>Kopi Pahit</h5>
            </a>
            <p>Watch on Netflix</p>
        </div>
    </div>
</div>

<!-- Single Album -->
<div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item m s g">
    <div class="single-album">
        <img src="img/My_Sassy_Girl_(film_2022)_-_Poster_Teatrikal_.jpg" alt="">
        <div class="album-info">
            <a href="https://www.primevideo.com/dp/amzn1.dv.gti.2c5696c0-45fb-4cd2-87c6-77dd6c0c3e56?autoplay=0&ref_=atv_cf_strg_wb" target="_blank">
                <h5>My Sassy Girl</h5>
            </a>
            <p>Streaming on Viu</p>
        </div>
    </div>
</div>

<br>
<br>
<br>
</div> <!-- penutup .container dari section sebelumnya -->
</section> <!-- penutup section sebelumnya -->

<!-- ##### Konser Mahalini Showcase Start ##### -->
<section class="konser-section section-padding-100-50">
    <div class="container">
        <div class="row oneMusic-albums">

            <!-- Konser 1 -->
            <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item m s g">
                <div class="single-album">
                    <img src="img/posterfilm/konsermahal1.png" alt="Konser Pertama">
                    <div class="album-info">
                        <a href="https://www.youtube.com/watch?v=fChUJ6UZyP8" target="_blank">
                            <h5>Fabula 1.0 Live</h5>
                        </a>
                        <p>Watch the first Concert in Malaysia Live in ZEPP Kuala Lumpur</p>
                    </div>
                </div>
            </div>

            <!-- Konser 2 -->
            <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item m s g">
                <div class="single-album">
                    <img src="img/posterfilm/konsermahal2.png" alt="Konser Kedua">
                    <div class="album-info">
                        <a href="https://youtu.be/SXnhpfq1umI?si=kSPIa1HE456v7ATy" target="_blank">
                            <h5>Fabula 2.0 Live</h5>
                        </a>
                        <p>Watch the second Concert in In Indonesia Tennis Indoor Senayan</p>
                    </div>
                </div>
            </div>

            <!-- Album Party -->
            <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item m s g">
                <div class="single-album">
                    <img src="img/posterfilm/konsermahal3.png" alt="Album Party">
                    <div class="album-info">
                        <a href="https://www.youtube.com/watch?v=CwEMFnHczG8&list=PLOKslS11h4LdqtLryRUqExjesnZbxmoBu" target="_blank">
                            <h5>Special Concert in Malaysia</h5>
                        </a>
                        <p>Watch the Second Concert in In Malaysia</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### Konser Mahalini Showcase End ##### -->


<!-- In Celebrate: First Album Party -->

<!-- Mahalini Creating Song for Anggis Devaki -->
<div class="row justify-content-center mb-5">
    <div class="col-12 col-md-10">
        <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
            <div class="row g-0 align-items-center">
                <div class="col-md-5">
                    <a href="https://youtu.be/_SP7ROxi0E4?si=5N4I_frpEy9dMO9X" target="_blank">
                        <img src="https://img.youtube.com/vi/_SP7ROxi0E4/hqdefault.jpg" class="img-fluid" alt="Mahalini Writing Song for Anggis Devaki">
                    </a>
                </div>
                <div class="col-md-7 p-4">
                    <h4 class="card-title">Behind the Song: Mahalini for Anggis Devaki</h4>
                    <p class="card-text">Go behind the scenes as Mahalini writes and composes a heartfelt song for fellow artist Anggis Devaki. Witness the emotion and artistry behind the process.</p>
                    <a href="https://youtu.be/_SP7ROxi0E4?si=5N4I_frpEy9dMO9X" target="_blank" class="btn oneMusic-btn mt-2">Watch Video <i class="fa fa-play-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Curious & Live Performance Mahalini -->
<div class="row justify-content-center mb-5">
    <div class="col-12 col-md-10">
        <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
            <div class="row g-0 align-items-center">
                <div class="col-md-5">
                    <a href="https://youtu.be/iSpG5aBZoRo?si=yqUdcZBUxy3SWrg-" target="_blank">
                        <img src="https://img.youtube.com/vi/iSpG5aBZoRo/hqdefault.jpg" class="img-fluid" alt="Curious & Live Performance Mahalini">
                    </a>
                </div>
                <div class="col-md-7 p-4">
                    <h4 class="card-title">Curious & Live Performance</h4>
                    <p class="card-text">Experience a glimpse of Mahalini's raw vocals and real personality in this live performance session. Honest, intimate, and captivating from start to finish.</p>
                    <a href="https://youtu.be/iSpG5aBZoRo?si=yqUdcZBUxy3SWrg-" target="_blank" class="btn oneMusic-btn mt-2">Watch Now <i class="fa fa-play-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center mb-5">
    <div class="col-12 col-md-10">
        <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
            <div class="row g-0 align-items-center">
                <div class="col-md-5">
                    <a href="https://www.youtube.com/watch?v=EUJwhCAItZw&list=PLOKslS11h4LcjRiwVVUw96jDHjbjAOaS2" target="_blank">
                        <img src="https://img.youtube.com/vi/EUJwhCAItZw/hqdefault.jpg" class="img-fluid" alt="First Album Party Mahalini">
                    </a>
                </div>
                <div class="col-md-7 p-4">
                    <h4 class="card-title">In Celebrate: First Album Party</h4>
                    <p class="card-text">Perayaan penuh haru dan tawa saat perilisan album pertama Mahalini. Saksikan momen keakraban, penampilan spesial, dan rasa syukur bersama fans & tim.</p>
                    <a href="https://www.youtube.com/playlist?list=PLOKslS11h4LcjRiwVVUw96jDHjbjAOaS2" target="_blank" class="btn oneMusic-btn mt-2">Tonton Playlist <i class="fa fa-play-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center mb-5">
    <div class="col-12 col-md-10">
        <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
            <div class="row g-0 align-items-center">
                <div class="col-md-5">
                    <a href="https://www.youtube.com/watch?v=n6SUTW0gL9M" target="_blank">
                        <img src="https://img.youtube.com/vi/n6SUTW0gL9M/hqdefault.jpg" class="img-fluid" alt="Behind the Scene Konser Kedua Mahalini">
                    </a>
                </div>
                <div class="col-md-7 p-4">
                    <h4 class="card-title">Behind the Scene Konser Pertama</h4>
                    <p class="card-text">Dari persiapan hingga panggung, saksikan bagaimana tim dan Mahalini membangun konser keduanya jadi pengalaman emosional dan megah yang tak terlupakan.</p>
                    <a href="https://www.youtube.com/watch?v=n6SUTW0gL9M" target="_blank" class="btn oneMusic-btn mt-2">Tonton Video <i class="fa fa-play-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Behind the Scene Konser Kedua -->
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-12 col-lg-10">
                <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5">
                            <a href="https://www.youtube.com/watch?v=2wsg-Qcy-gc&list=PLOKslS11h4LcjRiwVVUw96jDHjbjAOaS2" target="_blank">
                                <img src="https://img.youtube.com/vi/2wsg-Qcy-gc/hqdefault.jpg" class="img-fluid" alt="Behind the Scene Konser Kedua">
                            </a>
                        </div>
                        <div class="col-md-7 p-4">
                            <h4 class="card-title">Behind the Scene Konser Kedua</h4>
                            <p class="card-text">Lihat persiapan, latihan, dan momen emosional dari balik panggung konser kedua Mahalini. Playlist ini penuh kejujuran, tawa, dan semangat.</p>
                            <a href="https://www.youtube.com/playlist?list=PLOKslS11h4LcjRiwVVUw96jDHjbjAOaS2" target="_blank" class="btn oneMusic-btn mt-2">Tonton Playlist <i class="fa fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Playlist Vlog Mahalini -->
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-12 col-lg-10">
                <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5">
                            <a href="https://www.youtube.com/watch?v=YzyQEqVT2P0&list=PLOKslS11h4LcALBFQ6NZJjodo9bK_QX7p" target="_blank">
                                <img src="https://img.youtube.com/vi/YzyQEqVT2P0/hqdefault.jpg" class="img-fluid" alt="Vlog Mahalini">
                            </a>
                        </div>
                        <div class="col-md-7 p-4">
                            <h4 class="card-title">Playlist Vlog Mahalini</h4>
                            <p class="card-text">Saksikan kumpulan vlog seru dan personal dari Mahalini, termasuk di balik layar, konser, momen liburan, dan keseharian yang belum pernah kamu lihat sebelumnya.</p>
                            <a href="https://www.youtube.com/playlist?list=PLOKslS11h4LcALBFQ6NZJjodo9bK_QX7p" target="_blank" class="btn oneMusic-btn mt-2">Tonton Sekarang <i class="fa fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ##### Vlog & Behind the Scene Section End ##### -->

<!-- ##### Vlog & Behind the Scene Section End ##### -->


            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center">
                        <a href="https://www.youtube.com/@mahaliniraharjaofc/playlists" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>

            <br>
            <br>


        </div> <!-- ini penutup div.container -->
    </section> <!-- ini penutup section.album-catagory -->

    <!-- ##### Buy Now Area End ##### -->

   <!-- jQuery & Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(document).ready(function () {
    const $owl = $(".owl-carousel");

    $owl.owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      dots: true,
      autoplay: true,
      autoplayTimeout: 8000,
      autoplayHoverPause: true
    });

    function playActiveVideo() {
      // Pause & mute all videos
      $("video").each(function () {
        this.pause();
        this.muted = true;
      });

      // Play and unmute current active slide video
      const currentSlide = $(".owl-item.active video").get(0);
      if (currentSlide) {
        currentSlide.muted = false;
        currentSlide.currentTime = 0;
        currentSlide.play().catch(e => console.warn("Autoplay prevented:", e));
      }
    }

    // Run on init
    setTimeout(playActiveVideo, 600);

    // Run on slide change
    $owl.on('changed.owl.carousel', function () {
      setTimeout(playActiveVideo, 300);
    });
  });
</script>




    <?php include_once 'template/footer.php'; ?>

</body>

</html>