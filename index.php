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
var_dump($_GET['vote']);
var_dump($_GET['parking']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: black;
            min-height: 100vh;
            color: white;
        }

        select {
            padding: 0.5rem !important;
            width: 50% !important;
            height: 50px !important;
            min-height: 50px !important;
        }

        table:hover {
            filter: drop-shadow(0px 0px 5px red);
        }
    </style>
</head>

<body>

    <div class="container pt-5">

        <form class="form-floating d-flex py-5 gap-5" method="get">
            <select class="form-select" id="vote" name="vote" aria-label="Floating label select example">
                <option disabled selected>filter by vote</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select>

            <select class="form-select" id="parking" name="parking" aria-label="Floating label select example">
                <option disabled selected>filter by parking</option>
                <option value="true">yes</option>
                <option value="false">no</option>
            </select>

            <button type="submit">search</button>
        </form>



        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">parking</th>
                    <th scope="col">vote</th>
                    <th scope="col">distance_to_center</th>

                </tr>
            </thead>
            <tbody>

                <?php foreach ($hotels as $key => $hotel) : ?>
                    <tr <?php if ($_GET['parking'] = true) {
                        } ?>>
                        <th><?= $key + 1 ?></th>
                        <td><?= $hotel["name"] ?></td>
                        <td><?= $hotel["description"] ?></td>
                        <td><?= $hotel["parking"] ? "Si" : "No" ?> </td>
                        <td><?= $hotel["vote"] . '/5' ?></td>
                        <td><?= $hotel["distance_to_center"] . 'm' ?></td>
                    </tr>
                <?php endforeach ?>


            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>