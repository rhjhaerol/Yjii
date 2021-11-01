<?php

require_once('core.php');

$existing_data = isset($_COOKIE['regist_1']) ? $_COOKIE['regist_1'] : [];

if (empty($existing_data)) {
    header('Location: daftar_1.php');
}

if (isset($_GET['submit'])) {

    $is_valid = validate_regist($_GET);

    if ($is_valid) {

        $regist2_data = json_encode($_GET);

        setcookie('regist_2', $regist2_data, time() + 3600, '/');

        header('Location: home.php');
    }
}

$regist_form = array(
    array(
        'type' => 'text',
        'name' => 'nama',
        'label' => 'Full Name',
        'placeholder' => 'Full Name',
        'ket' => 'Masukkan nama asli Anda'
    ),
    array(
        'type' => 'text',
        'name' => 'nama',
        'label' => 'Nickname',
        'placeholder' => 'Nickname',
        'ket' => 'Masukkan nama panggilan Anda'
    ),
    array(
        'type' => 'radio',
        'name' => 'gender',
        'label' => 'Gender',
        'data' => [
            [
                'label' => 'Male',
                'value' => 'male'
            ], [
                'label' => 'Female',
                'value' => 'male'
            ]
        ]
    ),
    array(
        'type' => 'date',
        'name' => 'lahir',
        'label' => 'Birthdate',
        'placeholder' => 'Birthdate',
        'ket' => 'Masukkan tanggal lahir Anda'
    ),
    array(
        'type' => 'number',
        'name' => 'umur',
        'label' => 'Age',
        'placeholder' => 'Age',
        'ket' => 'Masukkan umur Anda'
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

        <div class="form-group pt-2">
            <button type="submit" class="dcd-btn btn-primary px-4 btn-md" name="submit" value="1">
                Daftar
            </button>
        </div>
        <div class="pt-2">
            <div class="mb-3 font-weight-medium">Sudah punya akun? <a href="loginjs.php"><strong>Masuk sekarang</strong></a></div>
        </div>
        </form>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>