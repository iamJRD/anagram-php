<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AnagramValidator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("home.html.twig");
    });

    $app->get("/view_results", function() use ($app) {
        $anagramChecker = new AnagramValidator;
        $anagramResult = $anagramChecker->checkAnagram($_GET["original_word"], $_GET["anagram_compare"]);
        
        return $app["twig"]->render("anagram_compare.html.twig", array('results'=>$anagramResult, "displayOriginalWord"=>$_GET["original_word"], "displayAnagramCompare"=>$_GET["anagram_compare"]));
    });

    return $app;
?>
