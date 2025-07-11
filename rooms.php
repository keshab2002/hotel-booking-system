<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T J Hotel ROOMS</title>

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
        <h2 class="h-font fw-bold text-dark text-center">OUR ROOMS</h2>
        <div class="h-lines bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white shadow rounded">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <a class="navbar-brand" href="#">FILTERS</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#searchNav" aria-controls="searchNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="searchNav">
                            <div class="border bg-light mb-6 p-3 rounded w-100"> 
                                <h5 class="fs-6">CHECK AVAILBILITY</h5>
                                <label class="form-label ">Check IN</label>
                                <input type="date" name="" id="" class=" mb-2 form-control">
                                <label class="form-label ">Check OUT</label>
                                <input type="date" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

        </div>
    </div>



    <!-- Footer  -->

    <?php require('inc/footer.php') ?>



</body>

</html>