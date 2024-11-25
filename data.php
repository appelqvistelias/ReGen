<?php

$products = [
    [
        'name' => 'Mössa',
        'price' => '3000',
        'colors' => [
            'yellow' => [
                'images' => [
                    'mossa_yellow.jpg',
                    'mossa_yellow.gif'
                ]
            ],
            'green' => [
                'images' => [
                    'mossa_green.jpg',
                    'mossa_green.gif'
                ]
            ],
            'brown' => [
                'images' => [
                    'mossa_brown.jpg',
                    'mossa_brown.gif'
                ]
            ],
        ]
    ],
    [
        'name' => 'Sovsäck',
        'price' => '3000',
        'colors' => [
            'yellow' => [
                'images' => [
                    'sovsack_yellow.jpg',
                    'sovsack_yellow_2.jpg'
                ]
            ],
            'green' => [
                'images' => [
                    'sovsack_green.jpg',
                    'sovsack_green_2.jpg'
                ]
            ],
            'brown' => [
                'images' => [
                    'sovsack_brown.jpg',
                    'sovsack_brown_2.jpg'
                ]
            ],
        ]
    ],
    [
        'name' => 'Sko',
        'price' => '3000',
        'colors' => [
            'black' => [
                'images' => [
                    'sko_black.png',
                    'sko_black.gif'
                ]
            ],
            'green' => [
                'images' => [
                    'sko_green.png',
                    'sko_green.gif'
                ]
            ],
            'brown' => [
                'images' => [
                    'sko_brown.png',
                    'sko_brown.gif'
                ]
            ],
        ]
    ],
    [
        'name' => 'Fiskespö',
        'price' => '3000',
        'colors' => [
            'black' => [
                'images' => [
                    'fiskespo_black.png',
                    'fiskespo_black.gif'
                ]
            ],
            'green' => [
                'images' => [
                    'fiskespo_green.png',
                    'fiskespo_green.gif'
                ]
            ],
            'brown' => [
                'images' => [
                    'fiskespo_brown.png',
                    'fiskespo_brown.gif'
                ]
            ],
        ]
    ],
];

$productsReverse = array_reverse($products);
