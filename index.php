<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T J Hotel HOME</title>

    <?php require('inc/links.php') ?>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .availability-form {
            position: relative;
            z-index: 1;
            margin-top: -50px;
        }

        @media screen and (max-width:575px) {

            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">

    <!-- Header -->
    <?php require('inc/header.php') ?>

    <!-- carousel -->

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swipwe-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide ">
                    <img src="images\carousel\1.png " class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images\carousel\2.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images\carousel\3.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images\carousel\4.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images\carousel\5.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images\carousel\6.png" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>


    <!-- Check Availability -->
    <div class="container availability-form">
        <div class="row ">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label p-0" style="font-weight: 500">Check In</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label p-0" style="font-weight: 500">Check Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label p-0" style="font-weight: 500">Adult</label>.
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label p-0" style="font-weight: 500">Children</label>.
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mt-3">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Our Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center h-font">Our Rooms</h2>

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">Price: ₹2000 per night</h6>

                        <div class="features mb-2">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                1 Kitchen
                            </span>
                        </div>

                        <div class="facilities mb-2">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                Room Heater
                            </span>
                        </div>

                        <div class="guests mb-2">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                4 Adults
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                2 Children
                            </span>
                        </div>

                        <div class="rating mb-2">
                            <h6 class="mb-1">Ratings</h6>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex mb-2 justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custom-bg">Book Now!</a>
                            <a href="#" class="btn btn-sm btn-outline-dark">Book Now!</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">Price: ₹2000 per night</h6>
                        <div class="features mb-2">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                1 Kitchen
                            </span>
                        </div>
                        <div class="facilities mb-2">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                Room Heater
                            </span>
                        </div>
                        <div class="guests mb-2">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                3 Adults
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                2 Children
                            </span>
                        </div>

                        <div class="rating mb-2">
                            <h6 class="mb-1">Ratings</h6>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex mb-2 justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custom-bg">Book Now!</a>
                            <a href="#" class="btn btn-sm btn-outline-dark">Book Now!</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">Price: ₹2000 per night</h6>
                        <div class="features mb-2">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                1 Kitchen
                            </span>
                        </div>
                        <div class="facilities mb-2">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                Room Heater
                            </span>
                        </div>
                        <div class="guests mb-2">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                3 Adults
                            </span>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                2 Children
                            </span>
                        </div>
                        <div class="rating mb-2">
                            <h6 class="mb-1">Ratings</h6>
                            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex mb-2 justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custom-bg">Book Now!</a>
                            <a href="#" class="btn btn-sm btn-outline-dark">Book Now!</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>


    <!-- Our Facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center h-font">Our Facilities</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/facilities/wifi.svg" alt="" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/facilities/wifi.svg" alt="" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/facilities/wifi.svg" alt="" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/facilities/wifi.svg" alt="" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/facilities/wifi.svg" alt="" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
        </div>
    </div>



    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center h-font">Testimonials</h2>

    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide p-4 bg-white">
                    <div class="profile d-flex align-item-center">
                        <img src="images/about/customers.svg" alt="" width="50px">
                        <h5 class="fs-7 mt-3 mx-4">Customer Names</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita officia consequuntur iure
                        dolores deleniti animi beatae ratione rerum ut fuga!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide p-4 bg-white">
                    <div class="profile d-flex align-item-center">
                        <img src="images/about/customers.svg" alt="" width="50px">
                        <h5 class="fs-7 mt-3 mx-4">Customer Names</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita officia consequuntur iure
                        dolores deleniti animi beatae ratione rerum ut fuga!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide p-4 bg-white">
                    <div class="profile d-flex align-item-center">
                        <img src="images/about/customers.svg" alt="" width="50px">
                        <h5 class="fs-7 mt-3 mx-4">Customer Names</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita officia consequuntur iure
                        dolores deleniti animi beatae ratione rerum ut fuga!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide p-4 bg-white">
                    <div class="profile d-flex align-item-center">
                        <img src="images/about/customers.svg" alt="" width="50px">
                        <h5 class="fs-7 mt-3 mx-4">Customer Names</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita officia consequuntur iure
                        dolores deleniti animi beatae ratione rerum ut fuga!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide p-4 bg-white">
                    <div class="profile d-flex align-item-center">
                        <img src="images/about/customers.svg" alt="" width="50px">
                        <h5 class="fs-7 mt-3 mx-4">Customer Names</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita officia consequuntur iure
                        dolores deleniti animi beatae ratione rerum ut fuga!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide p-4 bg-white">
                    <div class="profile d-flex align-item-center">
                        <img src="images/about/customers.svg" alt="" width="50px">
                        <h5 class="fs-7 mt-3 mx-4">Customer Names</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita officia consequuntur iure
                        dolores deleniti animi beatae ratione rerum ut fuga!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>
    </div>


    <!-- Reach us -->
    <h2 class="mt-5 pt-4 mb-4 text-center h-font">Reach Us</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 bg-white rounded p-4 ">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58871.11840295682!2d88.29654873340262!3d22.748864817590007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89b2213f5a85b%3A0x3a2ead22f174a6e2!2sSerampore%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1751514065402!5m2!1sen!2sin"
                    height="320px" class="w-100 rounded" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 mb-4 rounded">
                    <h5>Contact Us</h5>
                    <a href="tel: +919999888877" class="d-inline-block mb-2 text-dark text-decoration-none "> <i
                            class="bi bi-telephone-fill my-1"></i> +919999888877</a>
                    <br>
                    <a href="tel: +919999888877" class="d-inline-block mb-2 text-dark text-decoration-none "> <i
                            class="bi bi-telephone-fill my-1"></i> +919999888877</a>
                </div>

                <div class="bg-white p-4 mb-4 rounded">
                    <h5>Contact Us</h5>
                    <a href="#" class="d-inline-block mb-2 text-dark ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter-x mx-1"></i>Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-2 text-dark ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook mx-1"></i>Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block text-dark ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram mx-1"></i>Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer  -->

    <?php require('inc/footer.php') ?>

    <script>
        var swiper = new Swiper(".swipwe-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false
            }
        });
    </script>

    <script>
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            loop: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: "1",
                },
                640: {
                    slidesPerView: "1",
                },
                758: {
                    slidesPerView: "2",
                },
                1024: {
                    slidesPerView: "3",
                }

            }
        });
    </script>
</body>

</html>