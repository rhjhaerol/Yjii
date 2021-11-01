<!doctype html>
<html lang="en">
  <head>
    <title>Destination List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="col-8" style="margin:auto">
    <h2 class="text-secondary mb-0">Destination</h2>
        <div class="d-grid gap-2">
            <div class="container pt-4">
                <form id='data-table-filter'>
                    Search: <input type="search" name="search" id="data-table-filter-text">
                    <input type="submit" value="Search">
                </form>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>No</th>
                            <th>Country</th>
                            <th>Cost</th>
                            <th>Includes</th>
                        </tr>
                        </thead>
                        <tbody id="tbody-data-table">
                            
                        </tbody>
                        <tr>
                            <th colspan="3">Total data: <span id='infobox-total-data'>0</span></th>
                        </tr>
                        </tbody>
                        <tr>
                            <th colspan="3">Total row(s): <span id='infobox-total-row'>0</span></th>
                        </tr>
                </table>
                
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>