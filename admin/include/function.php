
<?php

//check if admin active than he who redirect kry ga
function adminLogin(){
    
    
    if(!(isset( $_SESSION['adminLogin']) &&  $_SESSION['adminLogin']==true)){
          echo "
          <script>window.location.href='index.php';
          </script>";
    }
    session_regenerate_id(true);
}
//Page redirect function
function redirect($url){
  echo "<script>
  setTimeout(() => window.location.href='$url');

  </script>";
}

//alert message
function alert($type, $msg) {
    return '
    <div class="alert alert-' . $type . ' alert-dismissible fade show text-center custom-alert" role="alert">
        <strong>' . ucfirst($type) . '!</strong> ' . htmlspecialchars($msg) . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}

// Clean string function
function cleanStr($data)
{
    if (is_array($data)) {
        foreach ($data as &$value) {
            $value = cleanStr($value);
        }
        return $data;
    } else {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
        return $data;
    }
}
//for encrypt password
function salt($password)
{
    $pwd = $password;  // input password ko variable me rakho
    $hash_format = "$2y$10$";  // Blowfish hashing format
    $salt = md5("Techware house chiniot"); // starting salt

    // 5 baar loop me password ko aur encrypt karo
    for ($j = 1; $j <= 5; $j++) {
        $salt = md5($salt);  // salt ko dobara md5 karo
        $formated_salt = $hash_format . $salt; // proper format me lagao
        $pwd = crypt($pwd, $formated_salt); // crypt() function se hash banao
    }
    return $pwd; // final encrypted password return karo
}




?>