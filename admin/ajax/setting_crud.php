<?php
// ✅ Use absolute paths — works regardless of where this file is included from
require(__DIR__ . "/../../include/config.php");
require(__DIR__ . "/../include/header.php");

// ✅ Check if the AJAX request sent "get_general"
if (isset($_POST['get_general'])) {
    try {
        // ⚙️ Fetch settings data (make sure table name matches your DB)
        $stmt = $conn->prepare("SELECT * FROM settings WHERE sr_no = ?");
        $stmt->execute([1]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // ✅ Send JSON response
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode($result ?: []);
    } catch (PDOException $e) {
        // ⚠️ Handle errors properly
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode(['error' => $e->getMessage()]);
    }

    // ✅ Always stop script after AJAX response
    exit;
}
?>
