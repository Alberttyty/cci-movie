<?php
require_once('Author.php');
require_once('Category.php');
require_once('Movie.php');

$stanleyKubrick = new Author(1, 'Stanley', 'Kubrick');
$davidLynch = new Author(2, 'David', 'Lynch');

$comedy = new Category(1, 'Comedy');
$drama = new Category(2, 'Drama');
$historical = new Category(3, 'Historical');
$peplum = new Category(4, 'Peplum');
$scienceFiction = new Category(5, 'Science Fiction');
$war = new Category(6, 'War');

$pathOfGlory = new Movie(
    1,
    'Les Sentiers de la Gloire',
    'Film de guerre américain en noir et blanc sorti en 1957 et inspiré du livre de même titre de Humphrey Cobb',
    'paths-of-glory.jpg'
);
$spartacus = new Movie(
    2,
    'Spartacus',
    'Film américain sorti en 1960, adapté du roman homonyme de Howard Fast publié en 1951 qui retrace la biographie de Spartacus.',
    'spartacus.png'
);
$lolita = new Movie(
    3,
    'Lolita',
    'Film britannico-américain sorti en 1962, adaptation du roman homonyme de Vladimir Nabokov publié en 1955.',
    'lolita.jpg'
);
$drStrangeLove = new Movie(
    4,
    'Docteur Folamour',
    'Docteur Folamour ou : comment j\'ai appris à ne plus m\'en faire et à aimer la bombe est une satire militaire sortir en 1964.',
    'dr-strangelove.png'
);
$aSpaceOdyssey = new Movie(
    5,
    '2001 : l\'Odyssée de l\'Espace',
    'Film britannico-américain sorti en 1968 partiellement incpiré de deux nouvelles de Arthur Charles Clarke.',
    '2001-a-space-odyssey.jpg'
);
$clockworkOrange = new Movie(
    6,
    'Orange Mécanique',
    'Film d\'anticipation britannico-américain sorti en 1971, adapté du roman d\'Anthony Burgess.',
    'clockwork-orange.png'
);
$barryLindon = new Movie(
    7,
    'Barry Lindon',
    'Film anglo-américain sorti en 1975 adapté du roman de William Makepeace Thackeray.',
    'barry-lyndon.png'
);
$shining = new Movie(
    8,
    'Shining',
    'Film américo-britannique sorti en 1980 avec Jack Nicholson.',
    'the-shining.png'
);
$fullMetalJacket = new Movie(
    9,
    'Full Metal Jacket',
    'Film britanno-américain sorti en 1987 qui met en scène des jeunes soldats du corps des Marines à la fin des années 60s.',
    'full-metal-jacket.png'
);
$eyesWideShut = new Movie(
    10,
    'Eyes Wide Shut',
    'Film britannico-américain sorti en 1999 dont le scénario est fondé sur la nouvelle Traumnovelle d\'Arthur Schnitzler publiée en 1926.',
    'eyes-wide-shut.jpg'
);
$dune = new Movie(
    11,
    'Dune',
    'Film américain sorti en 1984 adapté du roman homonyme paru en 1965.',
    'dune.jpg'
);
