<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhação</title>
</head>
<body>
<?php 
    require_once("modelo/Carta.php");

    function sorteiaCarta($cartas, &$numSort, &$cartaSort) {
        $numSort = rand(1, 3);
        $cartaSort = $cartas[$numSort - 1];
    }

    $palpite = $_GET["palpite"];

    if ($palpite != null) {
        $cartas = [];

        $carta = new Carta();
        $carta->setNome("Charmander");
        $carta->setLink("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/004.png");
        $cartas[] = $carta;

        $carta = new Carta();
        $carta->setNome("Squirtle");
        $carta->setLink("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/007.png");
        $cartas[] = $carta;

        $carta = new Carta();
        $carta->setNome("Bulbasaur");
        $carta->setLink("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/001.png");
        $cartas[] = $carta;

        $numSort = 0;
        $cartaSort = null;

        sorteiaCarta($cartas, $numSort, $cartaSort);

        if ($palpite == $numSort) {
            echo '<h1>Parabéns, você acertou!</h1><br>';
            echo '<h3>Informações da sua carta:</h3><br>';
            echo '<span><img src="' . $cartaSort->getLink() . '" width="70" height="70"></span><br>';
            echo '<h3>' . $cartaSort->getNome() . '</h3><br>';
        } else {
            echo '<h1>Infelizmente você errou!</h1><br>';
            echo '<h3>Informações da carta sorteada:</h3><br>';
            echo '<span><img src="' . $cartaSort->getLink() . '" width="70" height="70"></span><br>';
            echo '<h3>' . $cartaSort->getNome() . '</h3><br>';
        }

    } else {
        echo '<h1>O valor deve ser informado no link da página. Ex: "localhost/adivinhacao/execucao.php?palpite=2"</h1>';
    }
?>
</body>
</html>