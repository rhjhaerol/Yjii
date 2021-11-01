<!doctype html>
<html lang="en">
  <head>
    <title>Cost Estimate</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>

  <body>
    <div class="col-8" style="margin: auto">
        <div class="content-section-heading mb-3">
            <h2 class="text-secondary mb-0">Cost Estimate</h2>
        </div>
        <form class="form-inline" action="result.php" method="GET">
            <div class="mb-3 row">
                <label class="amount" for="amount">Amount (in Rupiah)</label>
                    <div class="input-group">
                        <div class="input-group-addon col-md-0">Rp.</div>
                            <input type="text" class="form-control" name="amount" id="amount" placeholder="Amount">
                        <div class="input-group-addon">,00</div>
                    </div>
            </div>
            <div class="col-md-1 row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Action</button>
                </div>
            </div>        
        </form>
    </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>