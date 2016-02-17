<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AnagramValidator.php";

    use Symfony\Component\Debug\Debug;
Debug::enable();

    session_start();
    if(empty($_SESSION['anagram_list'])) {
    $_SESSION['anagram_list'] = array();
    }

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("home.html.twig");
    });

    $app->post("/anagram_confirmation", function() use ($app) {
        $anagram = new AnagramValidator($_POST['original_word'], $_POST['anagram_compare']);
        $anagram->save();
        return $app['twig']->render('confirmation.html.twig', array('newanagram' => $anagram));
    });

    $app->get("/view_results", function() use ($app) {
        $anagramChecker = new AnagramValidator;
        $anagramResult = $anagramChecker->checkAnagram($_GET["original_word"], $_GET["anagram_compare"]);

        return $app["twig"]->render("anagram_compare.html.twig", array('results'=>$anagramResult, "displayOriginalWord"=>$_GET["original_word"], "displayAnagramCompare"=>$_GET["anagram_compare"]));
    });

    return $app;
?>
