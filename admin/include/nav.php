<!-- ✅ Top Navbar -->
<div
    class=" text-light bg-dark p-3 d-flex justify-content-between align-items-center fixed-top border-bottom border-3 border-secondary">

    <h3 class="mb-0 h-font">HB WEBSITE</h3>
    <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
</div>

<!-- ✅ Sidebar Menu -->
<div class="col-lg-2 bg-dark" id="dashboard-menu">
    <nav class="navbar navbar-expand-lg navbar-dark flex-lg-column align-items-stretch">
        <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class=" text-light AP">ADMIN PANEL</h4>

            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#adminDropdown" aria-controls="adminDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse flex-column mt-3 align-items-stretch" id="adminDropdown">

                <ul class="nav nav-pills flex-column">

                    <li class="nav-item">
                        <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="settings.php">Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>