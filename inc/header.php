    <!-- navbar -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white px-lg-2 py-lg-3 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">T J Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="rooms.php">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="facilities.php">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
                <div class="d-flex" role="search">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
                        data-bs-target="#loginmodal">
                        Log In
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
                        data-bs-target="#registermodal">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </nav>


    <!-- Log in Modal -->
    <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header d-flex align-item-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i>
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">User Log in</h1>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-item-center justify-content-between">
                            <button type="submit" class="btn btn-dark shadow-null ">Log In</button>
                            <a href="javascript: void(0)" class="text-decoration-none text-secondary mt-2">Forgot
                                Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- regestration Modal -->
    <div class="modal fade modal-lg" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header d-flex align-item-center">
                        <i class="bi bi-person-fill-add fs-3 me-2"></i>
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">User Regetartion</h1>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>


                    <div class="modal-body">
                        <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                            Note: Your provided details should match with your ID (Aadhar, Passport, Driving License
                            etc.)
                            That will be required during check in!</span>


                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label ps-0">Name</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label p-0">Email</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label ps-0">Phone Number</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label p-0">Picture</label>
                                    <input type="file" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label p-0">Address</label>
                                    <textarea class="form-control " rows="1"></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label ps-0">Pincode</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label p-0">Date of Birth</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label ps-0">Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label p-0">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                            </div>

                            <div class="text-center my-1">
                                <button type="submit" class="btn btn-dark shadow-null ">Register</button>
                            </div>
                        </div>
                        <!-- <div class="mb-3">
                            
                            <label  class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none" >
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" >
                        </div>
                        <div class= "d-flex align-item-center justify-content-between">
                            <button type ="submit" class = "btn btn-dark shadow-null ">Log In</button>
                            <a href="javascript: void(0)" class="text-decoration-none text-secondary mt-2">Forgot Password?</a>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

