    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light bg-white sticky-top px-lg-3 py-lg-2 shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold h-font fs-3" href="index.php">TJ HOTEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active me-2" href="./index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link me-2" href="./rooms.php">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link me-2" href="./facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link me-2" href="./contact.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="./about.php">About</a></li>
                </ul>
                <div class="d-flex">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal"
                        class="btn btn-outline-dark shadow-none me-2 me-lg-3">Login</button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#registerModal"
                        class="btn btn-outline-dark shadow-none">Register</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="loginLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 d-flex align-items-center" id="loginLabel">
                            <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                        </h1>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none" id="loginEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="loginPass" class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" id="loginPass" required>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                            <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot
                                Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="registerLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 d-flex align-items-center" id="registerLabel">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration
                        </h1>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <span class="badge text-bg-light text-dark lh-base text-wrap">
                            Note: Your details must match your ID (CNIC, passport, or license) which will be required at
                            check-in.
                        </span>

                        <div class="container-fluid mt-3">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label for="regName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control shadow-none" id="regName" required>
                                </div>

                                <div class="col-md-6 p-0 mb-3">
                                    <label for="regEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none" id="regEmail" required>
                                </div>

                                <div class="col-md-6 ps-0 mb-3">
                                    <label for="regPhone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control shadow-none" id="regPhone" required>
                                </div>

                                <div class="col-md-6 p-0 mb-3">
                                    <label for="regPic" class="form-label">Picture</label>
                                    <input type="file" class="form-control shadow-none" id="regPic" accept="image/*">
                                </div>

                                <div class="col-md-12 ps-0 mb-3">
                                    <label for="regAddress" class="form-label">Address</label>
                                    <textarea class="form-control shadow-none" id="regAddress" rows="2"
                                        required></textarea>
                                </div>

                                <div class="col-md-6 ps-0 mb-3">
                                    <label for="regPin" class="form-label">Pincode</label>
                                    <input type="number" class="form-control shadow-none" id="regPin">
                                </div>

                                <div class="col-md-6 p-0 mb-3">
                                    <label for="regDob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control shadow-none" id="regDob">
                                </div>

                                <div class="col-md-6 ps-0 mb-3">
                                    <label for="regPass" class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none" id="regPass" required>
                                </div>

                                <div class="col-md-6 p-0 mb-3">
                                    <label for="regConfirmPass" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none" id="regConfirmPass"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-dark shadow-none mt-2">REGISTER</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
