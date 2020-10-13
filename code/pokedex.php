<?php

$content = array(); // Para guardar los pokemon

const FIELDS = array("NUMBER", "NAME", "REGION", "TYPE", "HEIGHT", "WEIGHT", "EVOLUTION");

// Crear pokémon
function createPokemon(Pokemon $pokemon) {
    return array(
        FIELDS[0] => $pokemon->getNumber(),
        FIELDS[1] => $pokemon->getName(),
        FIELDS[2] => $pokemon->getRegion(),
        FIELDS[3] => $pokemon->getType(),
        FIELDS[4] => $pokemon->getHeight(),
        FIELDS[5] => $pokemon->getWeight(),
        FIELDS[6] => $pokemon->getEvolution());
}

//==============================================================================
// Mostrar pokémon.

function showPokemon($namePokemon, &$contentPokedex) {
    $rest = 0;
    $locatedPokemon;

    foreach ($contentPokedex as $pokemon) {
        foreach ($pokemon as $clave => $valor) {
            if ($namePokemon === $valor) {
                $locatedPokemon = $pokemon; // almacena el array asociativo con la info del pokemon encontrado             
                $rest = 1;
            }
        }
    }

    foreach ($locatedPokemon as $clave => $valor) {
        echo "$clave : $valor <br>";
    }
}

//==============================================================================
// Añadir pokémon.
function addPokemon($asociativoPokemon, &$contentPokedex) { // FALTA TERMINAR
    $namePokemon = $asociativoPokemon[FIELDS[1]];
    $indice = 0;
    $rest = 0;
    foreach ($contentPokedex as $pokemon) {
        foreach ($pokemon as $clave => $valor) {
            if ($namePokemon === $valor) {
                echo '<br>Error el pokemon ya existe.';
                $rest = 1;
            }
        }
        $indice++;
    }
    if ($rest == 0) {
        array_push($contentPokedex, $asociativoPokemon); // agrega un array asociativo al array contenedor
        echo '<br>Pokemon agregado.';
    }
}

//==============================================================================
// Buscar pokémon.

function seachPokemon($namePokemon, &$contentPokedex) {
    $indice = 0;
    $rest = 0;
    $retorno;

    foreach ($contentPokedex as $pokemon) {
        foreach ($pokemon as $clave => $valor) {
            if ($namePokemon === $valor) {
                //echo "<br>El pokemon '$namePokemon' si existe y su indice es: $indice";
                $retorno = $indice;
                $rest = 1;
            }
        }
        $indice++;
    }
    if ($rest == 0) {
        return -1;
    } else {
        return $retorno;
    }
}

//==============================================================================
// Mostrar pokédex.

function showPokedex($contentPokedex) {
    foreach ($contentPokedex as $pokemon) {
        echo"<br>";
        foreach ($pokemon as $clave => $valor) {
            echo "$clave : $valor <br>";
        }
    }
}

//==============================================================================
// Borrar pokémon.

function deletePokemon($namePokemon, &$contentPokedex) {
    $indice = 0;
    $rest = 0;
    foreach ($contentPokedex as $pokemon) {
        foreach ($pokemon as $clave => $valor) {
            if ($namePokemon === $valor) {
                unset($contentPokedex[$indice]);
                echo 'pokemon eliminado';
                $rest = 1;
            }
        }
        $indice++;
    }
    if ($rest == 0) {
        echo 'Error no se pudo borrar el pokemon porque no existe.';
    }
}

//==============================================================================

/*




 */