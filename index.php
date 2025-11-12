
<?php
    include 'include/header.php';
    include("include/nav.php");
    ?>

    <!-- Carousel Swiper -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./images/carousel/img1 (1).jpg" alt="Slide 1"></div>
                <div class="swiper-slide"><img src="./images/carousel/img1 (2).jpg" alt="Slide 2"></div>
                <div class="swiper-slide"><img src="./images/carousel/img1 (3).jpg" alt="Slide 3"></div>
                <div class="swiper-slide"><img src="./images/carousel/img1 (4).jpg" alt="Slide 4"></div>
                <div class="swiper-slide"><img src="./images/carousel/img1 (5).jpg" alt="Slide 5"></div>
                <div class="swiper-slide"><img src="./images/carousel/img1 (6).jpg" alt="Slide 6"></div>
            </div>
            <!-- Optional controls -->
            <!-- <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div> -->
        </div>
    </div>

    <!-- Check Availability Form -->
    <div class="container availability-form">
        <div class="row justify-content-center">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-center me-2">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label fw-medium">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label fw-medium">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label fw-medium">Adults</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label fw-medium">Children</label>
                            <select class="form-select shadow-none">
                                <option value="0">None</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mt-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Our rooms -->
    <h2 class="text-center pt-4 m-4 fw-bold h-font " id="rooms">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width:350px; margin:auto;" ;>
                    <img src="./images//rooms/img (1).jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Simple room name</h5>
                        <h6 class="mb-4">₹30000 per night</h6>
                        <div class=" features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                2 Rooms
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                2 Bathrooms
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                1 Bed
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                Wifi
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                AC
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                Hot water
                            </span>
                        </div>
                        <div class=" features mb-4">
                            <h6 class="mb-1">GUESTS</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                5 Adults
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width:350px; margin: auto;" ;>
                    <img src="./images//rooms/img (2).jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Simple room name</h5>
                        <h6 class="mb-4">₹30000 per night</h6>
                        <div class=" features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                2 Rooms
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                2 Bathrooms
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                1 Bed
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                Wifi
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                AC
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                Hot water
                            </span>
                        </div>
                        <div class=" features mb-4">
                            <h6 class="mb-1">GUESTS</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                5 Adults
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width:350px; margin: auto;" ;>
                    <img src="./images//rooms/img (3).jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Simple room name</h5>
                        <h6 class="mb-4">₹30000 per night</h6>
                        <div class=" features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                2 Rooms
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                2 Bathrooms
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                1 Bed
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                Wifi
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                AC
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                Hot water
                            </span>
                        </div>
                        <div class=" features mb-4">
                            <h6 class="mb-1">GUESTS</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                5 Adults
                            </span><span class="badge rounded-pill bg-light text-dark text-wrap lh-base me-2">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <button class="btn btn-outline-dark px-3 py-2 rounded-pill fw-semibold shadow-sm hover-btn">
                    <i class="bi bi-door-open me-2"></i>More Rooms>>>
                </button>
            </div>

        </div>
    </div>

    <!-- Our Facilities -->
    <h2 class="text-center pt-4 m-4 fw-bold h-font " id="facilities">OUR FACILITIES</h2>
    <div class="container">
        <div class="row d-flex justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center rounded py-4 shadow my-3 bg-white">
                <img src="./images/features/img1.png" alt="" class="img-fluid" width="80px">
                <h4 class="mt-3 ">WIFI</h4>
            </div>
            <div class="col-lg-2 col-md-2 text-center rounded py-4 shadow my-3 bg-white">
                <img src="./images/features/img2.png" alt="" class="img-fluid" width="90px">
                <h4 class="mt-3 ">STAR</h4>
            </div>
            <div class="col-lg-2 col-md-2 text-center rounded py-4 shadow my-3 bg-white">
                <img src="./images/features/img3.png" alt="" class="img-fluid" width="90px">
                <h4 class="mt-3 ">GYM</h4>
            </div>
            <div class="col-lg-2 col-md-2 text-center rounded py-4 shadow my-3 bg-white">
                <img src="./images/features/img4.png" alt="" class="img-fluid" width="90px">
                <h4 class="mt-3 ">PARKING</h4>
            </div>
            <div class="col-lg-2 col-md-2 text-center rounded py-4 shadow my-3 bg-white">
                <img src="./images/features/img5.jpg" alt="" class="img-fluid" width="90px">
                <h4 class="mt-3 ">SECURITY</h4>
            </div>
            <div class="col-lg-12 text-center my-5 ">
                <button class="btn btn-outline-dark px-3 py-2 rounded-pill fw-semibold shadow-sm hover-btn">
                    More Facilities>>>
                </button>
            </div>



        </div>
    </div>


    <!-- Testimonials Section -->
    <h2 class="text-center pt-4 mb-5 fw-bold h-font">TESTIMONIALS</h2>

    <section class="testimonials py-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="customers-testimonials" class="owl-carousel">

                        <!-- Testimonial 1 -->
                        <div class="item bg-white shadow-sm rounded p-4 text-center">
                            <img src="images/features/img2.png" alt="" class="rounded-circle mb-3"
                                style="width:60px; height:60px; object-fit:cover;">
                            <h6 class="fw-semibold mb-2 text-dark">EMILIANO AQUILANI</h6>
                            <p class="text-muted mb-3" style="font-size: 0.9rem; line-height: 1.5;">
                                “Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nobis ipsam
                                laudantium nam officia ab.”
                            </p>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="item bg-white shadow-sm rounded p-4 text-center">
                            <img src="images/features/img2.png" alt="" class="rounded-circle mb-3"
                                style="width:60px; height:60px; object-fit:cover;">
                            <h6 class="fw-semibold mb-2 text-dark">ANNA ITURBE</h6>
                            <p class="text-muted mb-3" style="font-size: 0.9rem; line-height: 1.5;">
                                “Dolore adipisci eligendi facere, consectetur adipisicing elit. Reiciendis explicabo
                                totam temporibus.”
                            </p>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="item bg-white shadow-sm rounded p-4 text-center">
                            <img src="images/features/img2.png" alt="" class="rounded-circle mb-3"
                                style="width:60px; height:60px; object-fit:cover;">
                            <h6 class="fw-semibold mb-2 text-dark">LARA ATKINSON</h6>
                            <p class="text-muted mb-3" style="font-size: 0.9rem; line-height: 1.5;">
                                “Pariatur totam optio amet fugiat dolorem voluptatibus. Ipsam laudantium nam officia
                                ab.”
                            </p>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <button class="btn btn-outline-dark px-3 py-2 rounded-pill fw-semibold shadow-sm hover-btn">
                    know more>>>
                </button>
            </div>
        </div>
    </section>

    <!-- END OF TESTIMONIALS -->


    <!-- Reach us -->
    <h2 class="text-center pt-4 mb-5 fw-bold h-font" id="contact-us">REACH US</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54301.87716126267!2d72.94328503098403!3d31.71951908768015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39223b4386eeabb3%3A0xf3c7882889607d8b!2sChiniot%2C%20Pakistan!5e0!3m2!1sen!2s!4v1760955549116!5m2!1sen!2s"
                    height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="col-lg-4 col-md-4">
                <!-- Call Us Box -->
                <div class="bg-white rounded shadow-sm p-4 mb-4">
                    <h5 class="fw-semibold mb-3 text-uppercase text-primary">
                        <i class="bi bi-telephone-outbound-fill me-2 text-primary"></i>Call Us
                    </h5>

                    <a href="tel:+923114030585" class="d-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-telephone-fill me-2 text-success"></i> +92 311 4030585
                    </a>
                    <a href="tel:+923049278336" class="d-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill me-2 text-success"></i> +92 304 9278336
                    </a>
                </div>

                <!-- Follow Us Box -->
                <div class="bg-white rounded shadow-sm p-4 ">
                    <h5 class="fw-semibold mb-3 text-uppercase text-primary">
                        <i class="bi bi-people-fill me-2 text-primary"></i>Follow Us
                    </h5>
                    <div class="d-flex flex-column gap-2 mb-3">
                        <a href="#" class="badge bg-light text-dark fs-6 py-2 border rounded d-flex align-items-center">
                            <i class="bi bi-facebook me-2 text-primary fs-5"></i> Facebook
                        </a>

                        <a href="#" class="badge bg-light text-dark fs-6 py-2 border rounded d-flex align-items-center">
                            <i class="bi bi-twitter-x me-2 text-info fs-5"></i> Twitter
                        </a>

                        <a href="#" class="badge bg-light text-dark fs-6 py-2 border rounded d-flex align-items-center">
                            <i class="bi bi-instagram me-2 text-danger fs-5"></i> Instagram
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

    

    <!-- footer link -->
    <?php
    require("include/footer.php");
    ?>
    <script>
        var swiper = new Swiper(".swiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
        });


    $(document).ready(function () {
            $("#customers-testimonials").owlCarousel({
                loop: true,
                center: true,
                items: 3,
                margin: 30,
                autoplay: true,
                autoplayTimeout: 4000,
                smartSpeed: 450,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1170: {
                        items: 3
                    }
                }
            });
        });


    </script>
