<?php
include("include/header.php"); // includes $conn (PDO), cleanStr(), salt(), alert(), session_start()
    session_regenerate_id();
 if(isset( $_SESSION['adminLogin']) &&  $_SESSION['adminLogin']==true){
          redirect('dashboard.php');
    }

$message = ""; // For Bootstrap alert

if (isset($_POST['login'])) {
    // 1️⃣ Sanitize input
    $admin_name = cleanStr($_POST['admin_name'] ?? '');
    $admin_pass = cleanStr($_POST['admin_pass'] ?? '');

    // 2️⃣ Encrypt password using your salt() function
    $admin_pass_hashed = salt($admin_pass);

    // 3️⃣ Prepare SQL (safe with PDO)
    $query = "SELECT * FROM admin_crud WHERE admin_name = :username AND admin_pass = :admin_pass LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->execute([
        ':username'   => $admin_name,
        ':admin_pass' => $admin_pass_hashed
    ]);

    // 4️⃣ Check result
    if ($stmt->rowCount() > 0) {
        $admin = $stmt->fetch(PDO::FETCH_ASSOC); // fetch sr_no + name

        // ✅ Store data in session
        $_SESSION['adminLogin'] = true;
        $_SESSION['adminName']  = $admin['admin_name'];
        $_SESSION['sr_no']      = $admin['sr_no'];

        // ✅ Success alert
        $message = alert('success', 'Login Successful! Redirecting to dashboard...');

       redirect('dashboard.php');
    } else {
        // ❌ Invalid login
        $message = alert('warning', 'Invalid Admin Name or Password!');
    }
}
?>

<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
  <form action="" method="POST" class="p-4 rounded shadow bg-white text-center" style="width: 350px;">
    <h4 class="mb-4 fw-bold">ADMIN LOGIN PANEL</h4>

    <?php if (!empty($message)) echo $message; ?>

    <div class="mb-3">
      <input type="text" name="admin_name" class="form-control shadow-none text-center" required placeholder="Admin Name">
    </div>

    <div class="mb-3">
      <input type="password" name="admin_pass" class="form-control shadow-none text-center" required placeholder="Password">
    </div>

    <button type="submit" class="btn text-white shadow-none custom-bg w-100" name="login">
      LOGIN
    </button>
  </form>
</div>

<?php require("include/script.php"); ?>
</body>
</html>


<!-- HTML FORM -->
<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
  <form action="" method="POST" class="p-4 rounded shadow bg-white text-center" style="width: 350px;">
    <h4 class="mb-4 fw-bold">ADMIN LOGIN PANEL</h4>

    <!-- Show Alert Message -->
    <?php if (!empty($message)) echo $message; ?>

    <div class="mb-3">
      <input type="text" name="admin_name" class="form-control shadow-none text-center" required
        placeholder="Admin Name">
    </div>

    <div class="mb-3">
      <input type="password" name="admin_pass" class="form-control shadow-none text-center" required
        placeholder="Password">
    </div>

    <button type="submit" class="btn text-white shadow-none custom-bg w-100" name="login">
      LOGIN
    </button>
  </form>
</div>

<?php require("include/script.php"); ?>
</body>
</html>


<!-- ✅ Admin Login Form -->
<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
  <form action="" method="POST" class="p-4 rounded shadow bg-white text-center" style="width: 350px;">
    <h4 class="mb-4 fw-bold">ADMIN LOGIN PANEL</h4>

    <?php if (!empty($message)) echo $message; ?>

    <div class="mb-3">
      <input type="text" name="admin_name" class="form-control shadow-none text-center" required placeholder="Admin Name">
    </div>

    <div class="mb-3">
      <input type="password" name="admin_pass" class="form-control shadow-none text-center" required placeholder="Password">
    </div>

    <button type="submit" class="btn text-white shadow-none custom-bg w-100" name="login">
      LOGIN
    </button>
  </form>
</div>

<?php require("include/script.php"); ?>
</body>
</html>
