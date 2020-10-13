<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>POKEMON</title>
    </head>
    <body>
        <?php
        include "css/estilo.php";
        ?>


        <h1>POKEDEX</h1>

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

 
        <p><a href="pruebas.php">PRUEBAS</a></p>

    </body>
</html>
