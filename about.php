<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T J Hotel ABOUT</title>

    <?php require('inc/links.php') ?>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.01);
            transition: all 0.3s;
        }
    </style>
</head>

<body class="bg-light">

    <!-- Header -->
    <?php require('inc/header.php') ?>


    <div class="my-5 px-4">
        <h2 class="h-font fw-bold text-dark text-center">ABOUT US</h2>
        <div class="h-lines bg-dark"></div>
        <p class="text-center my-4">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>Voluptatum asperiores deleniti minus explicabo
            qui labore iusto reprehenderit error reiciendis esse?
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 order-lg-1 order-2">
                <h3 class="my-3">
                    Lorem ipsum dolor sit.
                </h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum eum ducimus odio inventore nesciunt
                    quas quasi eveniet ullam. Doloribus a quibusdam at voluptatem, ad aliquid odio dignissimos
                    aspernatur facilis itaque numquam accusantium iusto officia quas animi similique, eaque atque ut.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 order-lg-1 order-1">
                <img src="images/about/about.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white shadow border-3 border-top px-5 text-center p-4 rounded pop">
                    <img src="images/about/hotel.svg" class="mb-4" width="70px">
                    <h5 class="">100+ Rooms</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white shadow border-3 border-top px-5 text-center p-4 rounded pop">
                    <img src="images/about/customers.svg" class="mb-4" width="70px">
                    <h5 class="">200+ Customers</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white shadow border-3 border-top px-5 text-center p-4 rounded pop">
                    <img src="images/about/rating.svg" class="mb-4" width="70px">
                    <h5 class="">1000+ Reviews</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white shadow border-3 border-top px-5 text-center p-4 rounded pop">
                    <img src="images/about/staff.svg" class="mb-4" width="70px">
                    <h5 class="">50+ Staffs</h5>
                </div>
            </div>
        </div>
    </div>

    <h2 class="h-font text-center fw-bold">Management Team</h2>
    <div class="container px-4">

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white text-center rounded overflow-hidden">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center rounded overflow-hidden">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center rounded overflow-hidden">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center rounded overflow-hidden">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center rounded overflow-hidden">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center rounded overflow-hidden">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center rounded overflow-hidden">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center rounded overflow-hidden">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center rounded overflow-hidden">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center rounded overflow-hidden">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Random name</h5>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

    <!-- Footer  -->

    <?php require('inc/footer.php') ?>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: "1",
                },
                640: {
                    slidesPerView: "2",
                },
                758: {
                    slidesPerView: "3",
                },
                1024: {
                    slidesPerView: "4",
                }

            }
        });
    </script>

</body>

</html>