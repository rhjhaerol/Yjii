<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
        <div class="mx-auto p-5" style="width: 600px;">
            <form id="login-app" style="padding:10px; border: 1px solid grey; border-radius: 1px;">
            <h4 class="modal-title">Login</h4>
            <i><p id="info-msg" style="color:red;"></p></i>
            <hr>
            <div class="form-group mb-4">
                <label for="login_email" class="control-label">Username</label>
                <input class="form-control font-weight-medium" placeholder="Masukan username" name="username" type="text">
            </div>

            <div class="form-group mb-2">
                <label for="login_password" class="control-label">Password</label>
                <div class="input-group mb-2">
                    <input class="form-control font-weight-medium" placeholder="Masukkan password" name="password" type="password">
                </div>      
            </div>

            <div class="form-group mb-2">
                <a href="#!" class="font-weight-medium">Lupa Password?</a>
            </div>

            <div class="form-group mb-2">
                <button type="submit" class="dcd-btn btn-primary px-4 btn-md ">Login</button>
            </div>

            <div class="form-group mb-2">
                <div class="font-weight-medium">
                    Belum punya akun? Ayo <a href="daftar_1.php"><strong>Daftar</strong></a>
                </div>
            </div>
            </form>
        </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>

