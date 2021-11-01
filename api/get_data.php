<?php

$filter = isset($_POST['search']) ? strtolower($_POST['search']) : '';

$data_dest = array(
    array(
        'country' => 'Japan',
        'cost' => 5625000,
        'include' => '3 days 2 nights in Tokyo and Osaka, Public Transportation, Disneyland Tokyo Ticket, Insurance'
    ),
    array(
        'country' => 'France',
        'cost' => 34067880,
        'include' => 'Hotel, Tour Leader, Tour Bus, Insurance'
    ),
    array(
        'country' => 'Thailand',
        'cost' => 2990000,
        'include' => 'Tour Leader, 3 days 2 night in Bangkok, Tourist spot'
    ),
    array(
        'country' => 'China',
        'cost' => 3990000,
        'include' => '4 days 3 night in Hainan, Tourist spot'
    ),
    array(
        'country' => 'Australia',
        'cost' => 12500000,
        'include' => '6 days 5 night in Sydney and Melbourne, Tourist spot'
    ),  
    array(
        'country' => 'Korea',
        'cost' => 9900000,
        'include' => '5 days 4 nights in Seoul and Busan, Public Transportation, Tourist spot'
    ),
    array(
        'country' => 'Malaysia',
        'cost' => 2000000,
        'include' => '2 days in Kuala Lumpur, Tourist spot'
    ),
    array(
        'country' => 'Switzerland',
        'cost' => 11700000,
        'include' => '3 days 2 nights in Bern and Zurich, Tourist spot'
    ),
    array(
        'country' => 'Turkey',
        'cost' => 12700000,
        'include' => '4 days 3 nights in Istanbul, Tourist spot'
    ),
    array(
        'country' => 'Rusia',
        'cost' => 16900000,
        'include' => '6 days 5 nights in Moskow and Siberia, Tourist spot'
    ),
    array(
        'country' => 'Finland',
        'cost' => 14850000,
        'include' => '4 days 3 nights in Finland, Tourist spot'
    ),
    array(
        'country' => 'Singapore',
        'cost' => 1500000,
        'include' => '2 days 1 nights in Singapore, Tourist spot'
    ),

);

if (!empty($filter)) {
    
    $data = [];

    foreach ($data_dest as $key => $value) {
        $current_data = strtolower($value['country']);

        if (strpos($current_data, $filter) !== false) {
            $data[] = $value;
        }
    }
} else {
    $data = $data_dest;
}

$result = array(
    'data' => $data,
    'total' => count($data_dest)
);

echo json_encode($result);

?>