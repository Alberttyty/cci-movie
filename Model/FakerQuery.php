<?php

$authors = [
    $stanleyKubrick, $davidLynch
];

$categories = [
    $comedy, $drama, $historical, $peplum, $scienceFiction, $war
];

$movies = [
    1 => $pathOfGlory,
    2 => $spartacus,
    3 => $lolita,
    4 => $drStrangeLove,
    5 => $aSpaceOdyssey,
    6 => $clockworkOrange,
    7 => $barryLindon,
    8 => $shining,
    9 => $fullMetalJacket,
    10 => $eyesWideShut,
    11 => $dune,
];

$moviesByAuthor = [
    1 => [
        $pathOfGlory,
        $spartacus,
        $lolita,
        $drStrangeLove,
        $aSpaceOdyssey,
        $clockworkOrange,
        $barryLindon,
        $shining,
        $fullMetalJacket,
        $eyesWideShut,
    ],
    2 => [
        $dune,
    ]
];

$moviesByCategory = [
    1 => [
        $drStrangeLove,
    ],
    2 => [
        $drStrangeLove,
        $lolita,
        $clockworkOrange,
        $barryLindon,
        $fullMetalJacket,
        $eyesWideShut,
    ],
    3 => [
        $barryLindon,
    ],
    4 => [
        $spartacus,
    ],
    5 => [
        $aSpaceOdyssey,
        $dune,
    ],
    6 => [
        $pathOfGlory,
        $fullMetalJacket,
    ],
];

$pseCombinaisons = [
    '1' => 1,
    '5' => 2,
    '10' => 3,
    '20' => 4
];

$pseMovies = [
    1 => [
        'movie' => $pathOfGlory,
        'combinations' => [
            1 => 10.000000,
            2 => 15.000000,
            3 => 18.000000,
            4 => 20.000000,
        ]
    ],
    2 => [
        'movie' => $spartacus,
        'combinations' => [
            1 => 10.000000,
            2 => 15.000000,
            3 => 18.000000,
            4 => 20.000000,
        ]
    ],
    3 => [
        'movie' => $lolita,
        'combinations' => [
            1 => 10.000000,
            2 => 15.000000,
            3 => 18.000000,
            4 => 20.000000,

        ]
    ],
    4 => [
        'movie' => $drStrangeLove,
        'combinations' => [
            1 => 11.500000,
            2 => 13.000000,
            3 => 16.000000,
            4 => 20.000000,
        ]
    ],
    5 => [
        'movie' => $aSpaceOdyssey,
        'combinations' => [
            1 => 10.000000,
            2 => 15.000000,
            3 => 18.000000,
            4 => 20.000000,
        ]
    ],
    6 => [
        'movie' => $clockworkOrange,
        'combinations' => [
            1 => 10.500000,
            2 => 12.000000,
            3 => 15.000000,
            4 => 18.000000,
        ]
    ],
    7 => [
        'movie' => $barryLindon,
        'combinations' => [
            1 => 7.500000,
            2 => 10.000000,
            3 => 12.500000,
            4 => 15.000000,
        ]
    ],
    8 => [
        'movie' => $shining,
        'combinations' => [
            1 => 12.000000,
            2 => 13.500000,
            3 => 15.500000,
            4 => 18.000000,
        ]
    ],
    9 => [
        'movie' => $fullMetalJacket,
        'combinations' => [
            1 => 12.500000,
            2 => 16.000000,
            3 => 18.500000,
            4 => 21.000000,
        ]
    ],
    10 => [
        'movie' => $eyesWideShut,
        'combinations' => [
            1 => 10.500000,
            2 => 15.500000,
            3 => 18.000000,
            4 => 19.500000,
        ]
    ],
    11 => [
        'movie' => $dune,
        'combinations' => [
            1 => 12.000000,
            2 => 13.000000,
            3 => 15.000000,
            4 => 18.000000,
        ]
    ],
];
