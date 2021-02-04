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
