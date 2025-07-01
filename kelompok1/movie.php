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
<!-- Carousel Section -->
<section class="media-carousel">
  <div class="owl-carousel owl-theme">

    <!-- Video Slide 1 -->
    <div class="item video-slide">
      <div class="video-wrapper">
        <video controls autoplay loop playsinline>
          <source src="img/trailer/trailerkapan.mp4" type="video/mp4">
        </video>
        <div class="video-caption-overlay">
          <div class="caption-line"></div>
          <div class="caption-text">
            <h2>Kapan Pindah Rumah</h2>
            <p>Tayang di Netflix</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Video Slide 2 -->
    <div class="item video-slide">
      <div class="video-wrapper">
        <video controls autoplay loop playsinline>
          <source src="img/trailer/trailekopi.mp4" type="video/mp4">
        </video>
        <div class="video-caption-overlay">
          <div class="caption-line"></div>
          <div class="caption-text">
            <h2>Kopi Pahit</h2>
            <p>Tayang di KlikFilm</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Video Slide 3 -->
    <div class="item video-slide">
      <div class="video-wrapper">
        <video controls autoplay loop playsinline>
          <source src="img/trailer/trailersashi.mp4" type="video/mp4">
        </video>
        <div class="video-caption-overlay">
          <div class="caption-line"></div>
          <div class="caption-text">
            <h2>My Sassy Girl</h2>
            <p>Tayang di Bioskop</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

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

            </div> <!-- tutup row oneMusic-albums -->

            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center">
                        <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>

            <br>
            <br>
        </div> <!-- ini penutup div.container -->
    </section> <!-- ini penutup section.album-catagory -->

    <!-- ##### Buy Now Area End ##### -->

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

    <?php include_once 'template/footer.php'; ?>

</body>

</html>