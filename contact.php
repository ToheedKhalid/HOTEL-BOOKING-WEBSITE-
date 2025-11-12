
<?php
    include 'include/header.php';
    include("include/nav.php");
?>

    <!-- Page Heading -->
    <div class="my-5 px-4 text-center">
        <h2 class="h-font fw-bold">CONTACT US</h2>
        <div class="h-line bg-dark mx-auto mb-3" style="width: 90px; height: 3px;"></div>
        <p class="mt-3 mx-auto w-75 w-md-50 lh-base text-secondary">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. Velit, exercitationem. A repellendus quas nihil consequatur consectetur.
        </p>
    </div>

    <!-- Contact Info Section -->
    <div class="container">
        <div class="row gy-4">

            <!-- Left Column -->
            <div class="col-lg-6 col-md-6">
                <div class="bg-white shadow p-4 rounded">
                    <!-- Map -->
                    <iframe class="w-100 rounded mb-4"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54301.87716126267!2d72.94328503098403!3d31.71951908768015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39223b4386eeabb3%3A0xf3c7882889607d8b!2sChiniot%2C%20Pakistan!5e0!3m2!1sen!2s!4v1760955549116!5m2!1sen!2s"
                        height="300" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <!-- Address -->
                    <h5 class="fw-semibold mb-2 text-uppercase text-primary">
                        <i class="bi bi-geo-alt-fill me-2"></i>Address
                    </h5>
                    <a href="https://maps.app.goo.gl/URgw2tFks48w1cWx8"
                        class="text-decoration-none text-dark d-inline-block mb-4" target="_blank">
                        Chiniot, Punjab 35400, Pakistan
                    </a>

                    <!-- Call Us -->
                    <h5 class="fw-semibold mb-2 text-uppercase text-primary">
                        <i class="bi bi-telephone-outbound-fill me-2"></i>Call Us
                    </h5>
                    <a href="tel:+923114030585" class="d-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-telephone-fill me-2 text-success"></i> +92 311 4030585
                    </a>
                    <a href="tel:+923049278336" class="d-block text-decoration-none text-dark mb-4">
                        <i class="bi bi-telephone-fill me-2 text-success"></i> +92 304 9278336
                    </a>

                    <!-- Email -->
                    <h5 class="fw-semibold mb-2 text-uppercase text-primary">
                        <i class="bi bi-envelope-arrow-up me-2"></i>Email
                    </h5>
                    <a href="mailto:toheedansari071@gmail.com"
                        class="d-block text-decoration-none text-dark mb-4">
                        toheedansari071@gmail.com
                    </a>

                    <!-- Follow Us -->
                    <h5 class="fw-semibold mb-3 text-uppercase text-primary">
                        <i class="bi bi-people-fill me-2"></i>Follow Us
                    </h5>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#" class="d-flex align-items-center justify-content-center border rounded px-3 py-2 bg-light text-dark text-decoration-none shadow-sm">
                            <i class="bi bi-facebook me-2 text-primary fs-5"></i> Facebook
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-center border rounded px-3 py-2 bg-light text-dark text-decoration-none shadow-sm">
                            <i class="bi bi-twitter-x me-2 text-info fs-5"></i> Twitter
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-center border rounded px-3 py-2 bg-light text-dark text-decoration-none shadow-sm">
                            <i class="bi bi-instagram me-2 text-danger fs-5"></i> Instagram
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column (Optional Info or Image/Feature Box) -->
             <div class="col-lg-6 col-md-6">
    <div class="bg-white shadow p-4 rounded">
        <h5 class="fw-semibold mb-3 text-primary">Send a Message</h5>

        <form action="" method="post">
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Name</label>
                <input type="text" id="name" name="name" class="form-control shadow-none" placeholder="Enter your name" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" id="email" name="email" class="form-control shadow-none" placeholder="Enter your email" required>
            </div>

            <!-- Subject -->
            <div class="mb-3">
                <label for="subject" class="form-label fw-semibold">Subject</label>
                <input type="text" id="subject" name="subject" class="form-control shadow-none" placeholder="Enter subject">
            </div>

            <!-- Message -->
            <div class="mb-3">
                <label for="message" class="form-label fw-semibold">Message</label>
                <textarea id="message" name="message" rows="5" class="form-control shadow-none" placeholder="Write your message here..." style="resize: none;" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-start">
                <button type="submit" class="btn btn-primary px-4 shadow-none">Send</button>
            </div>
        </form>
    </div>
</div>

           

        </div>
    </div>

    <!-- Footer -->
    <?php require("include/footer.php"); ?>

