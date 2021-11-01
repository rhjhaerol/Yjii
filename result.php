<?php

$amount = $_GET['amount'];

$destination = array(
    array(
        'place' => 'Japan',
        'cost' => 5625000,
        'include' => '3 days 2 nights in Tokyo and Osaka, Public Transportation, Disneyland Tokyo Ticket, Insurance'
    ),
    array(
        'place' => 'France',
        'cost' => 34067880,
        'include' => 'Hotel, Tour Leader, Tour Bus, Insurance'
    ),
    array(
        'place' => 'Thailand',
        'cost' => 2990000,
        'include' => 'Tour Leader, 3 days 2 night in Bangkok, Tourist spot'
    ),
    array(
        'place' => 'China',
        'cost' => 3990000,
        'include' => '4 days 3 night in Hainan, Tourist spot'
    ),
    array(
        'place' => 'Australia',
        'cost' => 12500000,
        'include' => '6 days 5 night in Sydney and Melbourne, Tourist spot'
    ),
    array(
        'place' => 'Malaysia',
        'cost' => 2000000,
        'include' => '2 days in Kuala Lumpur, Tourist spot'
    ),
    array(
        'place' => 'Turkey',
        'cost' => 12700000,
        'include' => '4 days 3 nights in Istanbul, Tourist spot'
    ),
    array(
        'place' => 'Korea',
        'cost' => 9900000,
        'include' => '5 days 4 nights in Istanbul, Public Transportation, Tourist spot'
    )
);

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Result</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="col-8"style="margin:auto;">
      <div class="content-section-heading mb-3">
            <h2 class="text-secondary mb-0">Result</h2>
        </div>
          <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-default">
            <tr>
                <th>No</th>
                <th>Country</th>
                <th>Includes</th>
            </tr>
            </thead>
            
            <tbody>
                <?php

                $counter = 0; 

                foreach ($destination as $key => $value) {

                    $costneed = $value['cost'] - $amount; 

                    if ($amount > $value['cost']) {
                        $counter++;              
                        echo "
                            <tr>
                                <td scope='row'>$counter</td>
                                <td>{$value['place']}</td>
                                <td>{$value['include']}</td>
                            </tr>
                        ";
                    }else {
                        echo "Need  Rp.". $costneed . ",00 to get to " . $value['place']. "<br>";
                    }
                }               
                ?>
            </tbody>
    </table>
      </div>
    
          

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>