<?php
include 'include/header.php';
include("include/nav.php");
?>

<!-- Page Heading -->
<div class="my-5 px-4 text-center">
  <h2 class="h-font fw-bold">OUR ROOMS</h2>
  <div class="h-line bg-dark"></div>
</div>

<!-- Room Section -->
<div class="container">
  <div class="row">
    <!-- LEFT FILTERS -->
    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
      <nav class="navbar bg-white shadow rounded navbar-expand-lg">
        <div class="container-fluid flex-lg-column align-items-stretch">
          <h4 class="mt-2">FILTERS</h4>
          <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#filterDropdown" aria-controls="filterDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse flex-column mt-3 align-items-stretch" id="filterDropdown">
            
            <!-- Availability -->
            <div class="border rounded bg-light p-3 mb-3">
              <h5 class="mb-3 fs-6 fw-bold">CHECK AVAILABILITY</h5>
              <label class="form-label fw-medium">Check-in</label>
              <input type="date" class="form-control shadow-none mb-3">
              <label class="form-label fw-medium">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>

            <!-- Facilities -->
            <div class="border rounded bg-light p-3 mb-3">
              <h5 class="mb-3 fs-6 fw-bold">FACILITIES</h5>
              <div class="form-check mb-2">
                <input type="checkbox" id="f1" class="form-check-input shadow-none">
                <label class="form-check-label fw-medium" for="f1">Wi-Fi</label>
              </div>
              <div class="form-check mb-2">
                <input type="checkbox" id="f2" class="form-check-input shadow-none">
                <label class="form-check-label fw-medium" for="f2">Air Conditioning</label>
              </div>
              <div class="form-check mb-2">
                <input type="checkbox" id="f3" class="form-check-input shadow-none">
                <label class="form-check-label fw-medium" for="f3">Television</label>
              </div>
            </div>

            <!-- Guests -->
            <div class="border rounded bg-light p-3">
              <h5 class="mb-3 fs-6 fw-bold">GUESTS</h5>
              <div class="row g-3">
                <div class="col-6">
                  <label class="form-label fw-medium">Adults</label>
                  <input type="number" class="form-control shadow-none" min="0" placeholder="0">
                </div>
                <div class="col-6">
                  <label class="form-label fw-medium">Children</label>
                  <input type="number" class="form-control shadow-none" min="0" placeholder="0">
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <!-- RIGHT ROOM LIST -->
    <div class="col-lg-9 col-md-12">
      <div class="row g-4">
        
        <!-- ROOM CARD 1 -->
        <div class="col-md-12">
          <div class="card border-0 shadow-lg rounded-3 overflow-hidden">
            <div class="row g-0 p-2">
              <div class="col-md-5">
                <img src="images/rooms/img (1).jpg" class="img-fluid h-100 rounded" alt="Room Image">
              </div>
              <div class="col-md-5 p-4">
                <h5 class="fw-bold mb-3">Deluxe Family Room</h5>

                <div class="mb-3">
                  <h6 class="text-secondary mb-2">Features</h6>
                  <span class="badge bg-light text-dark me-1 mb-1">2 Rooms</span>
                  <span class="badge bg-light text-dark me-1 mb-1">2 Bathrooms</span>
                  <span class="badge bg-light text-dark me-1 mb-1">1 Balcony</span>
                  <span class="badge bg-light text-dark me-1 mb-1">1 Bed</span>
                </div>

                <div class="mb-3">
                  <h6 class="text-secondary mb-2">Facilities</h6>
                  <span class="badge bg-light text-dark me-1 mb-1">Wi-Fi</span>
                  <span class="badge bg-light text-dark me-1 mb-1">AC</span>
                  <span class="badge bg-light text-dark me-1 mb-1">Television</span>
                  <span class="badge bg-light text-dark me-1 mb-1">Hot Water</span>
                </div>

                <div>
                  <h6 class="text-secondary mb-2">Guests</h6>
                  <span class="badge bg-light text-dark me-1 mb-1">5 Adults</span>
                  <span class="badge bg-light text-dark me-1 mb-1">4 Children</span>
                </div>
              </div>
              <div class="col-md-2 d-flex flex-column justify-content-center align-items-center bg-light p-3">
                <h6 class="fw-semibold mb-3 text-center">₹30,000<br><small class="text-muted">per night</small></h6>
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none w-100 mb-2">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none w-100">More Details</a>
              </div>
            </div>
          </div>
        </div>

        <!-- ROOM CARD 2 -->
        <div class="col-md-12">
          <div class="card border-0 shadow-lg rounded-3 overflow-hidden">
            <div class="row g-0 p-2">
              <div class="col-md-5">
                <img src="images/rooms/img (2).jpg" class="img-fluid h-100 w-100 object-fit-cover" alt="Room Image">
              </div>
              <div class="col-md-5 p-4">
                <h5 class="fw-bold mb-3">Luxury Suite Room</h5>
                <div class="mb-3">
                  <h6 class="text-secondary mb-2">Features</h6>
                  <span class="badge bg-light text-dark me-1 mb-1">3 Rooms</span>
                  <span class="badge bg-light text-dark me-1 mb-1">2 Bathrooms</span>
                  <span class="badge bg-light text-dark me-1 mb-1">2 Balcony</span>
                </div>
                <div class="mb-3">
                  <h6 class="text-secondary mb-2">Facilities</h6>
                  <span class="badge bg-light text-dark me-1 mb-1">Wi-Fi</span>
                  <span class="badge bg-light text-dark me-1 mb-1">Jacuzzi</span>
                  <span class="badge bg-light text-dark me-1 mb-1">Mini Bar</span>
                </div>
                <div>
                  <h6 class="text-secondary mb-2">Guests</h6>
                  <span class="badge bg-light text-dark me-1 mb-1">3 Adults</span>
                  <span class="badge bg-light text-dark me-1 mb-1">2 Children</span>
                </div>
              </div>
              <div class="col-md-2 d-flex flex-column justify-content-center align-items-center bg-light p-3">
                <h6 class="fw-semibold mb-3 text-center">₹45,000<br><small class="text-muted">per night</small></h6>
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none w-100 mb-2">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none w-100">More Details</a>
              </div>
            </div>
          </div>
        </div>

        <!-- ROOM CARD 3 -->
        <div class="col-md-12">
          <div class="card border-0 shadow-lg rounded-3 overflow-hidden">
            <div class="row g-0 p-2">
              <div class="col-md-5">
                <img src="images/rooms/img (3).jpg" class="img-fluid h-100 w-100 object-fit-cover" alt="Room Image">
              </div>
              <div class="col-md-5 p-4">
                <h5 class="fw-bold mb-3">Cozy Single Room</h5>
                <div class="mb-3">
                  <h6 class="text-secondary mb-2">Features</h6>
                  <span class="badge bg-light text-dark me-1 mb-1">1 Room</span>
                  <span class="badge bg-light text-dark me-1 mb-1">1 Bathroom</span>
                </div>
                <div class="mb-3">
                  <h6 class="text-secondary mb-2">Facilities</h6>
                  <span class="badge bg-light text-dark me-1 mb-1">Wi-Fi</span>
                  <span class="badge bg-light text-dark me-1 mb-1">TV</span>
                  <span class="badge bg-light text-dark me-1 mb-1">Hot Shower</span>
                </div>
                <div>
                  <h6 class="text-secondary mb-2">Guests</h6>
                  <span class="badge bg-light text-dark me-1 mb-1">1 Adult</span>
                </div>
              </div>
              <div class="col-md-2 d-flex flex-column justify-content-center align-items-center bg-light p-3">
                <h6 class="fw-semibold mb-3 text-center">₹10,000<br><small class="text-muted">per night</small></h6>
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none w-100 mb-2">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none w-100">More Details</a>
              </div>
            </div>
          </div>
        </div>

      </div> <!-- row -->
    </div>
  </div>
</div>

<!-- footer link -->
<?php
require("include/footer.php");
?>
