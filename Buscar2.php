<html>
    <head>
        <link href="estilorojo.css" rel="stylesheet" type="text/css"/>
    </head>

    <body background="fondo.jpg" style="color:#ffffff;text-align: center;font-family: Maiandra GD ">
        <div >
            <ul id="menu-bar">
                <li><a href='#'>        </a></li>
                <li><a href='#'>        </a></li>
                <li><a href='#'>        </a></li>
                <li><a href='#'>        </a></li>
                <li class="active"><a href="menu2.php">Home</a></li>

                <li><a href="#">Registrate</a>
                    <ul>
                        <li><a href='LlenarP.php'>Dar de alta datos personales</a>
                    </ul>
                </li>
                <li><a href="#">Modificar registros</a>
                    <ul>
                        <li><a href='Modificar.php'>Modificar</a>
                        </li>
                        <li><a href='Eliminar.php'>Eliminar</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Buscar</a>
                    <ul>
                        <li><a href='Buscar.php'>Buscar Pareja</a></li>
                        <li><a href='Mostrar.php'>Mostrar todos los registros</a></li>

                    </ul>
                </li>
            </ul>
        </div>
        <?php
        include 'conecta.php';

        $edad = filter_input(INPUT_POST, 'edad');
        $edad2 = filter_input(INPUT_POST, 'edad2');
        $sexo = $_POST['sexo'];
        $estatura = filter_input(INPUT_POST, 'estatura');
        $estatura2 = filter_input(INPUT_POST, 'estatura2');

        echo " <BR>";
        ECHO "<center> <h1 >BUSCA TU PAREJA IDEAL</h1></center>";
        echo "<h2>";
        echo $sexo . " con edad entre  " . $edad . " y " . $edad2 . " anios y  estatura entre ";
        echo $estatura . " y " . $estatura2;
        echo "</h2>";

        if (isset($_POST['bailar'])) {
            $bailar = "Bailar";
        } else {
            $bailar = "";
        }
        if (isset($_POST['Leer'])) {
            $leer = "Leer";
        } else {
            $leer = "";
        }
        if (isset($_POST['musica'])) {
            $Musica = "Escuchar musica";
        } else {
            $Musica = "";
        }
        if (isset($_POST['Volibol'])) {
            $voli = "Jugar volibol";
        } else {
            $voli = "";
        }

        mysql_select_db("buscapareja"); //seleccionar la BD
        $guardar_datos = mysql_query("SELECT * FROM pareja
        Where edad between '" . $edad . "' and '" . $edad2 . "'and sexo='" . $sexo . "'  and "
                . " estatura between '" . $estatura . "' and '" . $estatura2 . "';", $conexion);

        
        echo "<br>";
        echo "<br>";
        echo" <center><table width='1000' border='1' style='color:#ffffff;text-align: center;font-family: Maiandra GD ' >";
        echo "<tbody>";
        echo "<tr>";
        echo '<td ><b>NOMBRE</b></td>';
        echo '<td ><b>EDAD</b></td>';
        echo ' <td "><b>SEXO</b></td>';
        echo '<td "><b>SIGNO</b></td>';
        echo '<td colspan="4""><b>AFICIONES </b></td>';
        echo '<td "><b>COLOR DE OJOS </b></td>';
        echo '<td "><b>DESCRIPCION</b></td>';
        echo '<td "><b>ESTATURA </b></td>';
        echo '<td "><b>PESO KL</b></td>';

        echo " </tr>";
        while ($row = mysql_fetch_array($guardar_datos)) {
            echo "<tr>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "<td>$row[6]</td>";
            echo "<td>$row[7]</td>";
            echo "<td>$row[8]</td>";
            echo "<td>$row[9]</td>";
            echo "<td>$row[10]</td>";
            echo "<td>$row[11]</td>";
            echo "<td>$row[12]</td>";
            echo "<td>";
            ?>

            <img src="<?php echo "$row[Foto1]"; ?>" width="100" height="100" />

            <?php
            echo "</td>";
        }
        
        echo "</table></center>";
        ?>
    </body>
</html>
