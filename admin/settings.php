<!-- ✅ Admin Dashboard Page -->
<?php
include("include/header.php"); // includes session_start()
adminLogin(); // ensures only logged-in admin can access

require("include/nav.php");
?>

<!-- ✅ Main Content Area -->
<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden" style="margin-top: 60px;">
            <h4 class="mb-4">SETTINGS</h4>

            <!-- General setting section card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="m-0">General Settings</h5>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                            data-bs-target="#general-s">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>
                    </div>

                    <!-- ✅ Display Fetched Data -->
                    <h6 class="card-title">Site Title</h6>
                    <p class="card-text" id="site_title">Loading...</p>

                    <h6 class="card-title">About Us</h6>
                    <p class="card-text" id="site_about">Loading...</p>
                </div>

                <!-- ✅ Modal for Editing General Settings -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">General Settings</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-6 ps-0 mb-3">
                                        <label for="regName" class="form-label">Site Title</label>
                                        <input type="text" class="form-control shadow-none" id="regName"
                                            name="site_title" required>
                                    </div>
                                    <div class="col-md-12 ps-0 mb-3">
                                        <label for="regAddress" class="form-label">About Us</label>
                                        <textarea class="form-control shadow-none" id="regAddress" rows="4"
                                            name="site_about"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn shadow-none text-secondary"
                                        data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require("include/script.php"); ?>

<!-- ✅ AJAX Script -->
<script>
let general_data;

function get_general() {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function () {
        if (xhr.status === 200) {
            try {
                general_data = JSON.parse(xhr.responseText);
                console.log("✅ General Settings Fetched:", general_data);

                // ✅ Update display
                document.querySelector("#site_title").innerText = general_data.site_title || "N/A";
                document.querySelector("#site_about").innerText = general_data.site_about || "N/A";

                // ✅ Pre-fill modal inputs
                document.querySelector("#regName").value = general_data.site_title || "";
                document.querySelector("#regAddress").value = general_data.site_about || "";
            } catch (e) {
                console.error("Error parsing JSON:", e);
                console.log("Response:", xhr.responseText);
            }
        } else {
            console.error("Request failed. Status:", xhr.status);
        }
    };

    xhr.send("get_general=1");
}

// ✅ Run automatically when page loads
window.onload = get_general;
</script>

</body>
</html>
