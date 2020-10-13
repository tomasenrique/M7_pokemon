<?php

$persona1 = array("Nombre" => "Tomas", "Apellido" => "Estrada", "Edad" => 40);
$persona2 = array("Nombre" => "enrique", "Apellido" => "silva", "Edad" => 13);
$persona3 = array("Nombre" => "jose", "Apellido" => "zapata", "Edad" => 44);
$persona4 = array("Nombre" => "esther", "Apellido" => "galdeano", "Edad" => 55);
$persona5 = array("Nombre" => "federica", "Apellido" => "berti", "Edad" => 12);

$grupo = array($persona1, $persona2, $persona3, $persona4, $persona5);


// Muestra los datos 
foreach ($grupo as $value) {
    foreach ($value as $key => $dato) {
        echo "$key : $dato <br>";
    }
}



$alimentos = array(
    "fruta" => array(
        "tropical" => "kiwi",
        "citrico" => "mandarina",
        "otros" => "manzana"),
    "leche" => array(
        "animal" => "vaca",
        "vegetal" => "coco"),
    "carne" => array(
        "vacuno" => "lomo",
        "porcino" => "pata")
);


//$alimentos["carne"]["porcino"] = "pollo"; // accede a un dato interno
$alimentos["carne"]["Ave"] = "pollo"; // agrega un nuevo campo

foreach ($alimentos as $clave_alim => $alim) { // para el primer array
    echo '<br>';
    echo "$clave_alim:<br>"; // imprime los primeros array
    // aqui 'list' obtiene el tamaño de los array internos                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    while (list($clave, $valor) = each($alim)) { // para recorrer los array interno de cada array
        echo "$clave = $valor<br>";
    }
}


echo '<br>====================================<br>';

$variable1true = 1;
$variable2false = 0;

$variable3true = true;
$variable4false = false;

$variable5true = TRUE;
$variable6false = FALSE;

echo 'boleano true: ' . $variable1true . "<br>";
echo 'boleano false: ' . $variable2false;
echo '<br>----------<br>';
echo 'boleano true: ' . $variable3true . "<br>";
echo 'boleano false: ' . $variable4false;
echo '<br>----------<br>';
echo 'boleano true: ' . $variable5true . "<br>";
echo 'boleano false: ' . $variable6false;
echo '<br>----------<br>';


echo '<br>====================================<br>';
echo "BOLEANOS<br>";
echo '0:        ' . (boolval(0) ? 'true' : 'false') . "<br>";
echo '42:       ' . (boolval(42) ? 'true' : 'false') . "<br>";
echo '0.0:      ' . (boolval(0.0) ? 'true' : 'false') . "<br>";
echo '4.2:      ' . (boolval(4.2) ? 'true' : 'false') . "<br>";
echo '"":       ' . (boolval("") ? 'true' : 'false') . "<br>";
echo '"string": ' . (boolval("string") ? 'true' : 'false') . "<br>";
echo '"0":      ' . (boolval("0") ? 'true' : 'false') . "<br>";
echo '"1":      ' . (boolval("1") ? 'true' : 'false') . "<br>";
echo '[1, 2]:   ' . (boolval([1, 2]) ? 'true' : 'false') . "<br>";
echo '[]:       ' . (boolval([]) ? 'true' : 'false') . "<br>";
echo 'stdClass: ' . (boolval(new stdClass) ? 'true' : 'false') . "<br>";


echo '<br>====================================<br>';
var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)


/*




        <form name="form1" method="post" action="code/controller.php"> <!--Aqui se llama a la pagina de resultado-->
            <table border="0" align="center">
                <tr>
                    <td>Number</td>
                    <td>
                        <label for="number"></label>
                        <input type="text" name="number" id="number">
                    </td> 
                </tr>

                <tr>
                    <td>Name</td>
                    <td>
                        <label for="name"></label>
                        <input type="text" name="name" id="name">
                    </td>
                </tr>

                <tr>
                    <td>Región</td>
                    <td>
                        <label for="region"></label>
                        <input type="text" name="region" id="region">
                    </td>
                </tr>

                <tr>
                    <td>Type</td>
                    <td>
                        <label for="type"></label>
                        <input type="text" name="type" id="type">
                    </td>
                </tr>

                <tr>
                    <td>Height</td>
                    <td>
                        <label for="height"></label>
                        <input type="text" name="height" id="height">
                    </td>
                </tr>


                <tr>
                    <td>Weight</td>
                    <td>
                        <label for="$weight"></label>
                        <input type="text" name="weight" id="weight">
                    </td>
                </tr>

                <tr>
                    <td>Evolution</td>
                    <td>
                        <label for="evolution"></label>
                        <input type="text" name="evolution" id="evolution">
                    </td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td align="center">
                        <input type="submit" name="agregar" id="enviar" value="Agregar">
                    </td>
                    <td align="center">
                        <input type="reset" name="borrar" id="borrar" value="Borrar">
                    </td>
                </tr>

            </table>
        </form>










*/










