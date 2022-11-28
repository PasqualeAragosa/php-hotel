<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

// foreach ($hotels as $hotel) {
//     echo $hotel['name'] . '-' . $hotel['description'] . '-' . $hotel['parking'] . '-' . $hotel['vote'] . '-' . $hotel['distance_to_center'] . '<br>';
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Hotel</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>

    <div class="wrapper my-5">
        <h1 class="text-center my-5">Hotels</h1>
        <div class="container">
            <div class="row row-cols-3 g-3">
                <?php foreach ($hotels as $hotel) : ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $hotel['name'] ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo $hotel['description'] ?>
                                </p>
                                <p class="card-text">
                                    Parcheggio:
                                    <?php if ($hotel['parking']) {
                                        echo 'Si';
                                    } else {
                                        echo 'No';
                                    }
                                    ?>
                                </p>
                                <p class="card-text">
                                    Voto: <?php echo $hotel['vote'] ?>/5
                                </p>
                                <p class="card-text">
                                    Distanza dal centro: <?php echo $hotel['distance_to_center'] ?> km
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-4 -->
                <?php endforeach; ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->

</body>

</html>