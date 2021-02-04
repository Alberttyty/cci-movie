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

$pseMovies = [
    1 => [
        'movie' => $pathOfGlory,
        'combinations' => [
            1 => [
                'price' => 10.000000,
                'title' => 1
            ],
            2 => [
                'price' => 15.000000,
                'title' => 5
            ],
            3 => [
                'price' => 18.000000,
                'title' => 10
            ],
            5 => [
                'price' => 20.000000,
                'title' => 20
            ],
        ]
    ],
    2 => [
        'movie' => $spartacus,
        'combinations' => [
            1 => [
                'price' => 10.000000,
                'title' => 1
            ],
            2 => [
                'price' => 15.000000,
                'title' => 5
            ],
            3 => [
                'price' => 18.000000,
                'title' => 10
            ],
            5 => [
                'price' => 20.000000,
                'title' => 20
            ],
        ]
    ],
    3 => [
        'movie' => $lolita,
        'combinations' => [
            1 => [
                'price' => 10.000000,
                'title' => 1
            ],
            2 => [
                'price' => 15.000000,
                'title' => 5
            ],
            3 => [
                'price' => 18.000000,
                'title' => 10
            ],
            5 => [
                'price' => 20.000000,
                'title' => 20
            ],
        ]
    ],
    4 => [
        'movie' => $drStrangeLove,
        'combinations' => [
            1 => [
                'price' => 11.500000,
                'title' => 1
            ],
            2 => [
                'price' => 13.000000,
                'title' => 5
            ],
            3 => [
                'price' => 16.000000,
                'title' => 10
            ],
            5 => [
                'price' => 20.000000,
                'title' => 20
            ],
        ]
    ],
    5 => [
        'movie' => $aSpaceOdyssey,
        'combinations' => [
            1 => [
                'price' => 10.000000,
                'title' => 1
            ],
            2 => [
                'price' => 15.000000,
                'title' => 5
            ],
            3 => [
                'price' => 18.000000,
                'title' => 10
            ],
            5 => [
                'price' => 20.000000,
                'title' => 20
            ],
        ]
    ],
    6 => [
        'movie' => $clockworkOrange,
        'combinations' => [
            1 => [
                'price' => 10.500000,
                'title' => 1
            ],
            2 => [
                'price' => 12.000000,
                'title' => 5
            ],
            3 => [
                'price' => 15.000000,
                'title' => 10
            ],
            5 => [
                'price' => 18.000000,
                'title' => 20
            ],
        ]
    ],
    7 => [
        'movie' => $barryLindon,
        'combinations' => [
            1 => [
                'price' => 7.500000,
                'title' => 1
            ],
            2 => [
                'price' => 10.000000,
                'title' => 5
            ],
            3 => [
                'price' => 12.500000,
                'title' => 10
            ],
            5 => [
                'price' => 15.000000,
                'title' => 20
            ],
        ]
    ],
    8 => [
        'movie' => $shining,
        'combinations' => [
            1 => [
                'price' => 12.000000,
                'title' => 1
            ],
            2 => [
                'price' => 13.500000,
                'title' => 5
            ],
            3 => [
                'price' => 15.500000,
                'title' => 10
            ],
            5 => [
                'price' => 18.000000,
                'title' => 20
            ],
        ]
    ],
    9 => [
        'movie' => $fullMetalJacket,
        'combinations' => [
            1 => [
                'price' => 12.500000,
                'title' => 1
            ],
            2 => [
                'price' => 16.000000,
                'title' => 5
            ],
            3 => [
                'price' => 18.500000,
                'title' => 10
            ],
            5 => [
                'price' => 21.000000,
                'title' => 20
            ],
        ]
    ],
    10 => [
        'movie' => $eyesWideShut,
        'combinations' => [
            1 => [
                'price' => 10.500000,
                'title' => 1
            ],
            2 => [
                'price' => 15.500000,
                'title' => 5
            ],
            3 => [
                'price' => 18.000000,
                'title' => 10
            ],
            5 => [
                'price' => 19.500000,
                'title' => 20
            ],
        ]
    ],
    11 => [
        'movie' => $dune,
        'combinations' => [
            1 => [
                'price' => 12.000000,
                'title' => 1
            ],
            2 => [
                'price' => 13.000000,
                'title' => 5
            ],
            3 => [
                'price' => 15.000000,
                'title' => 10
            ],
            5 => [
                'price' => 18.000000,
                'title' => 20
            ],
        ]
    ],
];
