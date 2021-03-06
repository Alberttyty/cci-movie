<?php
require_once('Model/Faker.php');
require_once('Model/FakerQuery.php');

if (! empty($_POST['product_id']) && ! empty($_POST['quantity'])
    //&& isset($_SERVER['HTTP_X_REQUESTED_WITH'])
    //&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
) {
    header('Content-Type: text/html; charset=utf-8');

    echo('<!DOCTYPE html>'.PHP_EOL);
    echo('<html>'.PHP_EOL);
    echo('<head>'.PHP_EOL);
    echo('<meta charset="utf-8" />'.PHP_EOL);
    echo('<title>Page panier</title>'.PHP_EOL);
    echo('</head>'.PHP_EOL);
    echo('<body>'.PHP_EOL);
    echo('<h1>Welcome to the Movie API</h1>'.PHP_EOL);
    echo('<p>Please, send a POST "product_id" and "quantity".</p>'.PHP_EOL);
    echo('<div id="cart-container">'.PHP_EOL);
    echo('<p>'.PHP_EOL);
    echo($movies[$_POST['product_id']]->title.' X '.$_POST['quantity'].'<br />added to cart'.PHP_EOL);
    echo('</p>'.PHP_EOL);
    echo('</div>'.PHP_EOL);
    echo('</body>'.PHP_EOL);
    echo('</html>'.PHP_EOL);
}

if (! empty($_POST['surface'])) {
    switch($_POST['surface']) {
        case $_POST['surface'] > 20:
            $combination_id = 20;
            break;
        case $_POST['surface'] > 10:
            $combination_id = 10;
            break;
        case $_POST['surface'] > 5:
            $combination_id = 5;
            break;
        default:
            $combination_id = 1;
    }

    echo($pseCombinaisons[$combination_id]);
    //$_POST['combination_id'] = $pseCombinaisons[$index];
}

if (! empty($_POST['product_id']) && ! empty($_POST['combination_id'])
    //&& isset($_SERVER['HTTP_X_REQUESTED_WITH'])
    //&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
) {
    echo('<h1>Welcome to the Movie API</h1>'.PHP_EOL);
    echo('<p>Please, send a POST "product_id" and "combination_id".</p>'.PHP_EOL);
    echo('<div id="cart-container">'.PHP_EOL);
    echo('<p>'.PHP_EOL);
    echo($pseMovies[$_POST['product_id']]['movie']->title.' => '.$pseMovies[$_POST['product_id']]['combinations'][$_POST['combination_id']].' € <br />added to cart'.PHP_EOL);
    echo('</p>'.PHP_EOL);
    echo('</div>'.PHP_EOL);
}
