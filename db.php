<?php

require_once './Models/Movie.php';
require_once './Models/Genres.php';


$movies = [
    new Movie('Fight Club', '1999', new Genres('Drammatico', 'Thriller', 'Commedia'), 'David Fincher', array('Brad Pitt', 'Edward Norton')),
    new Movie('Mulholland Drive', '2001', new Genres('Thriller', 'Drammatico', 'Mistero'), 'David Lynch', array('Naomi Watts', 'Laura Harring')),
    new Movie('Pulp Fiction', 1994, new Genres('Thriller', 'Crime', ''), 'Quentin Tarantino', array('John Travolta', 'Samuel L. Jackson', 'Uma Thurman'))
];
