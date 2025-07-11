<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T J Hotel CONTACT</title>

    <?php require('inc/links.php') ?>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
</head>

<body class="bg-light">

    <!-- Header -->
    <?php require('inc/header.php') ?>


    <div class="my-5 px-4">
        <h2 class="h-font fw-bold text-dark text-center">CONTACT US</h2>
        <div class="h-lines bg-dark"></div>
        <p class="text-center my-4">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>Voluptatum asperiores deleniti minus explicabo
            qui labore iusto reprehenderit error reiciendis esse?
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4 px-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58871.11840295682!2d88.29654873340262!3d22.748864817590007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89b2213f5a85b%3A0x3a2ead22f174a6e2!2sSerampore%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1751514065402!5m2!1sen!2sin"
                    height="320px" class="w-100 rounded mb-4" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

                <a href="https://maps.app.goo.gl/UJeY3XeC7AWARSHf9"
                    class="fs-5 text-decoration-none text-dark d-inline-block" target="_blank">
                    <i class="bi bi-geo-alt-fill"></i>
                    123 G. T. Road Station Road Serampore West Bengal
                </a>

                <div class="bg-white p-4 mb-4 rounded">
                    <h5>Contact Us</h5>
                    <a href="tel: +919999888877" class="d-inline-block mb-2 text-dark text-decoration-none "> <i
                            class="bi bi-telephone-fill my-1"></i> +919999888877</a>
                    <br>
                    <a href="tel: +919999888877" class="d-inline-block mb-2 text-dark text-decoration-none ">
                        <i class="bi bi-telephone-fill my-1"></i> +919999888877</a>

                    <h5>Email</h5>
                    <a href="mailto: ask.tjhotel@gmail.com" class="d-inline-block mb-2 text-dark text-decoration-none ">
                        <i class="bi bi-envelope-fill"></i>
                        ask.tjhotel@gmail.com
                    </a>

                    <h5>Follow Us On</h5>
                    <a href="#" class="d-inline-block mb-2 me-2 fs-5 text-dark ">
                        <i class="bi bi-twitter-x mx-1"></i>
                    </a>
                    <a href="#" class="d-inline-block mb-2 fs-5 me-2 text-dark ">
                        <i class="bi bi-facebook mx-1"></i>
                    </a>
                    <a href="#" class="d-inline-block fs-5 text-dark ">
                        <i class="bi bi-instagram mx-1"></i>
                    </a>
                </div>


            </div>
            <div class="col-lg-6 col-md-6 mb-4 px-4">

                <div class="bg-white shadow rounded p-4">
                    <h5>Send a message</h5>
                    <form>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="name" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control " rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn custom-bg text-white mt-3 ">Send</button>

                    </form>
                </div>

            </div>

        </div>
    </div>



    <!-- Footer  -->

    <?php require('inc/footer.php') ?>



</body>

</html>