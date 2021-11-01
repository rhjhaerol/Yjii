<?php

require_once('core.php');

if (isset($_GET['submit'])) {

    $is_valid = validate_regist($_GET);

    if ($is_valid) {
        
        $regist1_data = json_encode($_GET);

        setcookie('regist_1', $regist1_data, time() + 3600, '/');
        
        header('Location: daftar_2.php');
        
    }
}

$regist_form = array(
    array(
        'type' => 'text',
        'name' => 'username',
        'label' => 'Username',
        'placeholder' => 'Username',
        'ket' => 'Username akan digunakan sebagai identitas profile Anda'
    ),
    array(
        'type' => 'email',
        'name' => 'email',
        'label' => 'Email',
        'placeholder' => 'Alamat Email',
        'ket' => 'Gunakan alamat email aktif Anda'
    ),
    array(
        'type' => 'password',
        'name' => 'password',
        'label' => 'Password',
        'placeholder' => 'Masukan Password',
        'ket' => 'Gunakan minimal 8 karakter dengan kombinasi huruf dan angka'
    ),
    array(
        'type' => 'password',
        'name' => 'konfpwd',
        'label' => 'Password',
        'placeholder' => 'Konfirmasi Password',
        'ket' => 'Ulangi password di atas sekali lagi'
    )
);

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="mx-auto p-5" style="width: 1000px;">
        <form method="GET" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" style="padding:10px; border: 1px solid grey; border-radius: 1px;">
        <h4 class="modal-title">Daftar Akun Baru</h4>
        <hr>

        <?php
        
        foreach ($regist_form as $key => $value) {
            echo render_form($value);
        }

        ?>

        <div class="form-group pt-2" style="text-align:right;">
            <button type="submit" class="dcd-btn btn-primary px-4 btn-md" name="submit" value="1">
                Next
            </button>
        </div>
        <!-- <div class="pt-2">
            <div class="mb-3 font-weight-medium">Sudah punya akun? <a href="loginjs.php"><strong>Masuk sekarang</strong></a></div>
        </div> -->
        </form>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>