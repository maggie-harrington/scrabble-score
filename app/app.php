<?php
    date_default_timezone_set('America/Los_Angeles');

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ScrabbleScore.php";

    session_start();
    if (empty($_SESSION['scrabble_session'])) {
        $_SESSION['scrabble_session'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app ['debug'] = true;

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->post("/score", function() use ($app) {
        $newScore = new ScrabbleScore($_POST['input-word']);
        $newCalculateScore = $newScore->calculateScore($_POST['input-word']);
        return $app['twig']->render('score.html.twig', array('new_array' => $newCalculateScore));
    });

    return $app;
?>
