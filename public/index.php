<?php
require "./../vendor/autoload.php";

$products = ['pomme', 'poire', 'cerise', 'pêche', 'abricot'];


$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/view');
$twig = new Twig\Environment($loader);

echo $twig->render("index.html.twig",
    ['products'=>$products,
      'title'=>'Twig exercice'
    ]);
