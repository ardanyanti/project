<!DOCTYPE html>
<html lang="en">

    <?php include_once 'template/header.php'; ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/mahalini\ mati2an.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Movie</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

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
                        <img src="img/Poster_film_Kapan_Pindah_Rumah.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Kapan Pindah Rumah</h5>
                            </a>
                            <p>Firts</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item k p">
                    <div class="single-album">
                        <img src="img/Kopi_Pahit_2022_-_official_poster.jpeg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Kopi Pahit</h5>
                            </a>
                            <p>Second</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item m s g">
                    <div class="single-album">
                        <img src="img/My_Sassy_Girl_(film_2022)_-_Poster_Teatrikal_.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>My Sassy Girl</h5>
                            </a>
                            <p>Third</p>
                        </div>
                    </div>
                </div>

            </div>          
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center">
                        <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
    <!-- ##### Buy Now Area End ##### -->
<br>
<section class="media-carousel" style="margin-top: 50px;">
  <div class="owl-carousel owl-theme">

    <!-- Video Slide 1 -->
    <div class="item video-slide">
      <video controls autoplay muted loop>
        <source src="img/Official Trailer 'Kapan Pindah Rumah' I 17 Desember di KlikFilm.mp4" type="video/mp4">
      </video>
      <div class="video-overlay">
        <div class="overlay-caption-top">
          <div class="overlay-line"></div>
          <div class="overlay-text">
            <h2>Kapan Pindah Rumah</h2>
            <p>Bisa ditonton di KlikFilm mulai 17 Desember</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Video Slide 2 -->
    <div class="item video-slide">
      <video controls autoplay muted loop>
        <source src="img/Official Trailer 'Kopi Pahit' I 20 Mei 2022 di KlikFilm.mp4" type="video/mp4">
      </video>
      <div class="video-overlay">
        <div class="overlay-caption-top">
          <div class="overlay-line"></div>
          <div class="overlay-text">
            <h2>Kopi Pahit</h2>
            <p>Bisa ditonton di KlikFilm mulai 20 Mei 2022</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Video Slide 3 -->
    <div class="item video-slide">
      <video controls autoplay muted loop>
        <source src="img/Official Trailer ‘My Sassy Girl’ _ 23 Juni 2022 di Bioskop.mp4" type="video/mp4">
      </video>
      <div class="video-overlay">
        <div class="overlay-caption-top">
          <div class="overlay-line"></div>
          <div class="overlay-text">
            <h2>My Sassy Girl</h2>
            <p>Bisa ditonton di bioskop mulai 23 Juni 2022</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>



<!-- ##### Media Carousel Full Screen End ##### -->

<!-- Tambahkan OwlCarousel library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        autoplayTimeout:120000,
        nav:true,
        dots:true,
        navText: [
            '<span style="font-size: 3em; color: white;">&#10094;</span>',
            '<span style="font-size: 3em; color: white;">&#10095;</span>'
        ]
    });
});
</script>
<style>
.media-carousel {
    margin-top: 50px;
}
.media-carousel .item video, 
.media-carousel .item img {
    width: 100%;
    height: 100vh;
    object-fit: cover;
    
}

/* Responsive untuk HP */
@media (max-width: 768px) {
    .media-carousel .item video, 
    .media-carousel .item img {
        height: 60vh; /* Biar ga terlalu tinggi di HP */
    }
}
</style>

    <?php include_once 'template/footer.php'; ?>

</body>

</html>