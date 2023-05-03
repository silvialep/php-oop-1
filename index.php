<?php

require_once './db.php';
// var_dump($movies);

// echo $movies[0]->year;

// echo implode(', ', $movies[0]->genres);

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie oop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php
    include './Partials/header.php';
    ?>

    <div class="container pt-5 pb-3 position-relative" style="margin-top: 80px; height: calc(100vh - 80px)">
        <h1>Movies</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Anno</th>
                    <th>Generi</th>
                    <th>Regista</th>
                    <th>Attori principali</th>
                    <th>Is Millennial?</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($movies); $i++) {
                ?>
                    <tr>
                        <td><?= $movies[$i]->title ?></td>
                        <td><?= $movies[$i]->year ?></td>
                        <td><?= $movies[$i]->genres->getGenres() ?></td>
                        <td><?= $movies[$i]->director ?></td>
                        <td><?= $movies[$i]->getStringFromArray() ?></td>
                        <td><?= $movies[$i]->isMillennial ?></td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>

    <?php
    include './Partials/footer.php'
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>