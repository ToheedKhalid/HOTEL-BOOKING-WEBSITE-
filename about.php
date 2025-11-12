<?php
include 'include/header.php';
include "include/nav.php";
?>

<!-- ABOUT SECTION -->
<div class="my-5 px-5">
  <h2 class="h-font fw-bold text-center">ABOUT US</h2>
  <div class="h-line bg-dark "></div>
  <p class="text-center mt-3 m-auto w-75 w-md-50 lh-base">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque Lorem ipsum dolor sit amet,
    consectetur adipisicing elit. Velit, exercitationem. A repellendus quas nihil consequatur consectetur.
  </p>
</div>

<!-- ABOUT IMAGE + TEXT -->
<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h3 class="mb-3">Lorem ipsum dolor sit amet.</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum dolores dicta vel ex
        amet earum! Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Nesciunt, ipsam!</p>
    </div>
    <div class="col-lg-5 col-md-5 order-lg-2 order-md-2 order-1 mb-4">
      <img src="images/about/about.jpg" alt="About TJ Hotel" class="img-fluid w-100 rounded">
    </div>
  </div>
</div>

<!-- STATISTICS BOXES -->
<div class="container mt-5 mb-4">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/hotel.svg" alt="" width="70">
        <h4 class="mt-3">100+ ROOMS</h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/customers.svg" alt="" width="70">
        <h4 class="mt-3">500+ CUST..</h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/rating.svg" alt="" width="70">
        <h4 class="mt-3">150+ REVIEWS</h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/staff.svg" alt="" width="70">
        <h4 class="mt-3">50+ STAFFS</h4>
      </div>
    </div>
  </div>
</div>

<!-- MANAGEMENT TEAM SECTION -->
<h2 class="h-font fw-bold text-center mb-5">MANAGEMENT TEAM</h2>

<div class="container px-4">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <!-- Team Member 1 -->
      <div class="swiper-slide">
        <div class="card border-0 rounded shadow-sm overflow-hidden">
          <img src="images/about/img1.jpg" alt="Member 1" class="img-fluid">
          <div class="card-body text-center py-3">
            <h5 class="mb-0 fw-semibold">RANDOM NAME</h5>
          </div>
        </div>
      </div>

      <!-- Team Member 2 -->
      <div class="swiper-slide">
        <div class="card border-0 rounded shadow-sm overflow-hidden">
          <img src="images/about/img2.jpg" alt="Member 2" class="img-fluid">
          <div class="card-body text-center py-3">
            <h5 class="mb-0 fw-semibold">RANDOM NAME</h5>
          </div>
        </div>
      </div>

      <!-- Team Member 3 -->
      <div class="swiper-slide">
        <div class="card border-0 rounded shadow-sm overflow-hidden">
          <img src="images/about/img3.jpg" alt="Member 3" class="img-fluid">
          <div class="card-body text-center py-3">
            <h5 class="mb-0 fw-semibold">RANDOM NAME</h5>
          </div>
        </div>
      </div>

      <!-- Team Member 4 -->
      <div class="swiper-slide">
        <div class="card border-0 rounded shadow-sm overflow-hidden">
          <img src="images/about/about.jpg" alt="Member 4" class="img-fluid">
          <div class="card-body text-center py-3">
            <h5 class="mb-0 fw-semibold">RANDOM NAME</h5>
          </div>
        </div>
      </div>

      <!-- Add more members as needed -->
    </div>
  </div>

  <!-- Pagination BELOW the Swiper -->
  <div class="text-center mt-3 mb-5">
    <div class="swiper-pagination"></div>
  </div>
</div>




<!-- FOOTER -->
<?php
require("include/footer.php");
?>

<!-- Swiper Initialization (MUST come after HTML) -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const teamSwiper = new Swiper('.mySwiper', {
    slidesPerView: 4,
    spaceBetween: 24,
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 12,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 24,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 24,
      },
    },
  });
});
</script>

