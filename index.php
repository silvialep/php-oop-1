<?php

require_once './Models/Movie.php';
require_once './Models/Genres.php';


$movies = [
    new Movie('Fight Club', '1999', new Genres('Drammatico', 'Thriller', 'Commedia'), 'David Fincher', array('Brad Pitt', 'Edward Norton')),
    new Movie('Mulholland Drive', '2001', new Genres('Thriller', 'Drammatico', 'Mistero'), 'David Lynch', array('Naomi Watts', 'Laura Harring')),
    new Movie('Pulp Fiction', 1994, new Genres('Thriller', 'Crime', ''), 'Quentin Tarantino', array('John Travolta', 'Samuel L. Jackson', 'Uma Thurman'))
];

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
</head>

<body>

    <div class="container pt-3">
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

<!-- 
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->