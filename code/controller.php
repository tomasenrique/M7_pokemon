<?php

include "pokedex.php";
include "../entities/Pokemon.php";

$number = trim($_POST["number"]);
$name = trim($_POST["name"]);
$region = trim($_POST["region"]);
$type = trim($_POST["type"]);
$height = trim($_POST["height"]); // altura
$weight = trim($_POST["weight"]); // peso
$evolution = trim($_POST["evolution"]);

/*
  echo $number;
  echo $name;
  echo $region;
  echo $type;
  echo $height; // altura
  echo $weight; // peso
  echo $evolution;
 */

// CREANDO POKEMONS
echo 'CREANDO POKEMON';
$pokeCreado = createPokemon(new Pokemon($number, $name, $region, $type, $height, $weight, $evolution)); // method 1
$pokeCreado2 = createPokemon(new Pokemon("002", "Ivysaur", "Hoen", "Planta, Veneno", "100", "13", "Primera evolució")); // method 1
$pokeCreado3 = createPokemon(new Pokemon("003", "Charmander", "Jotho", "Fuego", "60", "8,5", "Sense evolucionar")); // method 1
$pokeCreado4 = createPokemon(new Pokemon("003", "Charmander", "Jotho", "Fuego", "60", "8,5", "Sense evolucionar")); // method 1

echo '<br>=========<br>';
echo 'AGREGANDO POKEMON';
// AGREGANDO POKEMON AL ARRAY (POKEDEX)
addPokemon($pokeCreado, $content);
addPokemon($pokeCreado2, $content);
addPokemon($pokeCreado3, $content);
addPokemon($pokeCreado4, $content); // pokemon con datos iguales al 3, no se guarda

echo '<br>=========<br>';

// MOSTRAR POKEDEX 
echo 'MOSTRANDO POKEDEX';
showPokedex($content);

echo '<br>=========<br>';
echo 'BUSCANDO POKEMON';
// BUSCAR POKEMON
$namePokemon1 = "Bulbasaur";
$namePokemon2 = "Ivysaur";
$namePokemon3 = "Charmander";
$namePokemon4 = "mi gato";

$numero = seachPokemon($namePokemon1, $content);
echo "<br>Retorno de busqueda: " . $numero;

echo '<br>=========<br>';

// MONSTRAR UN POKEMON
echo 'MOSTRANDO UN POKEMON<br>';
showPokemon($namePokemon2, $content);

echo '<br>=========<br>';

// BORRAR UN POKEMON
echo 'BORRANDO POKEMON Y MOSTRANDO POKEDEX<br>';
deletePokemon($namePokemon2, $content);
echo '<br>';
showPokedex($content);



/*  





*/


