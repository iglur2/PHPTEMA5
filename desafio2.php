<?php

// Matriz de filmes e gêneros
$filmes_e_generos = array(
    array("filme" => "Interestelar", "genero" => "Ficção Científica"),
    array("filme" => "O Poderoso Chefão", "genero" => "Drama"),
    array("filme" => "Vingadores: Ultimato", "genero" => "Ação"),
    array("filme" => "Cidade de Deus", "genero" => "Drama"),
    array("filme" => "Matrix", "genero" => "Ficção Científica"),
    array("filme" => "O Senhor dos Anéis: A Sociedade do Anel", "genero" => "Fantasia"),
    array("filme" => "O Lobo de Wall Street", "genero" => "Drama"),
    array("filme" => "Batman: O Cavaleiro das Trevas", "genero" => "Ação"),
    array("filme" => "A Origem", "genero" => "Ficção Científica"),
    array("filme" => "Clube da Luta", "genero" => "Drama")
);

// Matriz apenas com o gênero Ficção Científica
$filmes_genero_ficcao_cientifica = array();
foreach ($filmes_e_generos as $filme) {
    $genero = $filme['genero'];
    if ($genero == "Ficção Científica") {
        $filmes_genero_ficcao_cientifica[] = $filme['filme'];
    }
}

echo "<br> Lista de filmes assistidos em 2021 e seus gêneros:<br>";
foreach ($filmes_e_generos as $filme) {
    echo $filme['filme'] . " - " . $filme['genero'] . "<br>";
}

echo "<br>Filmes do gênero Ficção Científica:<br>";
foreach ($filmes_genero_ficcao_cientifica as $filme) {
    echo $filme . "<br>";
}

?>