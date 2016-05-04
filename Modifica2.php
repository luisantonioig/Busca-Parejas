<?php
include("conecta.php");
$nombre = $_GET["nombre"];

$edad = "";
$sexo = "";
$signo = "";
$bailar = "";
$leer = "";
$Musica = "";
$voli = "";
$ojos = "";
$descripcion = "";
$estatura = "";
$peso = "";


include 'conecta.php';
mysql_select_db("buscapareja");
$mostar_datosS = mysql_query("SELECT * FROM pareja WHERE nombre='" . $nombre . "';", $conexion);
$mostrar1 = mysql_fetch_array($mostar_datosS);
if ($mostrar1["nombre"] == $nombre) {
    mysql_select_db("buscapareja");
    $mostar_datosS = mysql_query("SELECT * FROM pareja WHERE nombre='" . $nombre . "';", $conexion);
    while (($row = mysql_fetch_array($mostar_datosS))) {
        $edad = $row[2];
        $sexo = $row[3];
        $signo = $row[4];
        $bailar = $row[5];
        $leer = $row[6];
        $Musica = $row[7];
        $voli = $row[8];
        $ojos = $row[9];
        $descripcion = $row[10];
        $estatura = $row[11];
        $peso = $row[12];
    }
    ?>
    <html>
        <link href="estilorojo.css" rel="stylesheet" type="text/css"/>
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
            
            <form method="get" action="Modificar3.php">
                <center> <h1 >MODIFICAR REGISTRO</h1></center>;
                <center> <table width='800' border='1' >
                        <tbody>
                            <TR>
                                <td>
                                    <p>NOMBRE <input type="text" name="nombre" size="30" value="<?php echo $nombre ?>">                                    
                                        <input  type="text" name="nombre1" hidden="" value="<?php echo $nombre ?>"></p>
                                </td>
                                <td>
                                    <p>EDAD <input type="text" name="edad" size="30" value=<?php echo $edad ?>></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>SEXO</p>
                                    <blockquote>
                                        <?php
                                        if ($sexo == 'Hombre') {
                                            echo'<h4>Hombre<input type="radio" checked name="sexo" value="Hombre" ></h4>';
                                            echo'<h4>Mujer<input type="radio" name="sexo" value="Mujer"></h4>';
                                        }
                                        if ($sexo == 'Mujer') {
                                            echo'<h4>Hombre<input type="radio"  name="sexo" value="Hombre" ></h4>';
                                            echo'<h4>Mujer<input type="radio" checked name="sexo" value="Mujer"></h4>';
                                        }
                                        ?>
                                    </blockquote>
                                </td>
                                <td>
                                    <p>SIGNO

                                        <select size="1" name="signo">
                                            <OPTION  ><?php echo $signo ?></OPTION>  
                                            <option >Aries </option>
                                            <option >Tauro</option>
                                            <option >Geminis</option>
                                            <option>Cancer</option>
                                            <option >Leo</option>
                                            <option >Virgo</option>
                                            <option >Libra</option>
                                            <option >Escorpio</option>
                                            <option >Sagitario</option>
                                            <option >Acuario</option>
                                            <option >Pisicis</option>
                                        </SELECT> 
                                    </p>   
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>AFICIONES</p>
                                    <blockquote>
                                        <?php
                                        if ($bailar == "" && $leer == "" && $Musica == "" && $voli == "") {

                                            echo' <p>Bailar <input type="checkbox"  name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox" name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox" name="musica" value="musica">
                            ......Volibol <input type="checkbox" name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar != "" && $leer == "" && $Musica == "" && $voli == "") {

                                            echo' <p>Bailar <input type="checkbox" checked name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox" name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox" name="musica" value="musica">
                            ......Volibol <input type="checkbox" name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar == "" && $leer != "" && $Musica == "" && $voli == "") {
                                            echo' <p>Bailar <input type="checkbox"  name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox" checked name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox" name="musica" value="musica">
                            ......Volibol <input type="checkbox" name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar == "" && $leer == "" && $Musica != "" && $voli == "") {
                                            echo' <p>Bailar <input type="checkbox"  name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox"  name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox" checked name="musica" value="musica">
                            ......Volibol <input type="checkbox" name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar == "" && $leer == "" && $Musica == "" && $voli != "") {
                                            echo' <p>Bailar <input type="checkbox"  name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox"  name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox"  name="musica" value="musica">
                            ......Volibol <input type="checkbox" checked name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar != "" && $leer != "" && $Musica == "" && $voli == "") {
                                            echo' <p>Bailar <input type="checkbox" checked name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox" checked name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox"  name="musica" value="musica">
                            ......Volibol <input type="checkbox"  name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar != "" && $leer == "" && $Musica != "" && $voli == "") {
                                            echo' <p>Bailar <input type="checkbox" checked name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox"  name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox"  checked name="musica" value="musica">
                            ......Volibol <input type="checkbox"  name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar != "" && $leer == "" && $Musica == "" && $voli != "") {
                                            echo' <p>Bailar <input type="checkbox" checked name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox"  name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox"  name="musica" value="musica">
                            ......Volibol <input type="checkbox" checked name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar == "" && $leer != "" && $Musica != "" && $voli == "") {
                                            echo' <p>Bailar <input type="checkbox"  name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox" checked name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox" checked name="musica" value="musica">
                            ......Volibol <input type="checkbox"  name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar == "" && $leer != "" && $Musica == "" && $voli != "") {
                                            echo' <p>Bailar <input type="checkbox"  name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox" checked name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox"  name="musica" value="musica">
                            ......Volibol <input type="checkbox" checked name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar == "" && $leer == "" && $Musica != "" && $voli != "") {
                                            echo' <p>Bailar <input type="checkbox"  name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox"  name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox" checked name="musica" value="musica">
                            ......Volibol <input type="checkbox" checked name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar != "" && $leer != "" && $Musica != "" && $voli != "") {
                                            echo' <p>Bailar <input type="checkbox" checked name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox" checked name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox" checked name="musica" value="musica">
                            ......Volibol <input type="checkbox" checked name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar != "" && $leer != "" && $Musica != "" && $voli == "") {
                                            echo' <p>Bailar <input type="checkbox" checked name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox" checked name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox" checked name="musica" value="musica">
                            ......Volibol <input type="checkbox"  name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar != "" && $leer != "" && $Musica == "" && $voli != "") {
                                            echo' <p>Bailar <input type="checkbox" checked name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox" checked name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox"  name="musica" value="musica">
                            ......Volibol <input type="checkbox" checked name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar != "" && $leer == "" && $Musica != "" && $voli != "") {
                                            echo' <p>Bailar <input type="checkbox" checked name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox"  name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox" checked name="musica" value="musica">
                            ......Volibol <input type="checkbox" checked name="Volibol" value="Volibol">';
                                        }
                                        if ($bailar == "" && $leer != "" && $Musica != "" && $voli != "") {
                                            echo' <p>Bailar <input type="checkbox"  name="bailar" value="bailar"> 
                            .......Leer <input type="checkbox" checked name="Leer" value="Leer"></p>
                        <p>Escuchar musica <input type="checkbox" checked name="musica" value="musica">
                            ......Volibol <input type="checkbox" checked name="Volibol" value="Volibol">';
                                        }
                                        ?>
                                    </blockquote>
                                </td>
                                <td>
                                    <p>COLOR DE OJOS</p>
                                    <blockquote>   
                                        <?php
                                        if ($ojos == 'Cafe') {
                                            echo' <p>Cafe<input type="radio" value="Cafe" checked name="ojos">
                                            .......Negro <input type="radio" name="ojos" value="Negro"></p>
                                        <p>Azul <input type="radio" name="ojos" value="Azul">
                                            .....Verde <input type="radio" name="ojos" value="Verde"></p>';
                                        }
                                        if ($ojos == 'Negro') {
                                            echo' <p>Cafe<input type="radio" value="Cafe"  name="ojos">
                                            .......Negro <input type="radio" checked name="ojos" value="Negro"></p>
                                        <p>Azul <input type="radio" name="ojos" value="Azul">
                                            .....Verde <input type="radio" name="ojos" value="Verde"></p>';
                                        }
                                        if ($ojos == 'Azul') {
                                            echo' <p>Cafe<input type="radio" value="Cafe"  name="ojos">
                                            .......Negro <input type="radio" name="ojos" value="Negro"></p>
                                        <p>Azul <input type="radio" checked name="ojos" value="Azul">
                                            .....Verde <input type="radio" name="ojos" value="Verde"></p>';
                                        }
                                        if ($ojos == 'Verde') {
                                            echo' <p>Cafe<input type="radio" value="Cafe"  name="ojos">
                                            .......Negro <input type="radio" name="ojos" value="Negro"></p>
                                        <p>Azul <input type="radio" name="ojos" value="Azul">
                                            .....Verde <input type="radio" checked name="ojos" value="Verde"></p>';
                                        }
                                        ?>
                                    </blockquote>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>DESCRIPCION</p>

                                    <p><textarea name="descripcion"><?php echo $descripcion ?></textarea></p>
                                    <p><input type="submit" value="Modificar" name="modificar">
                                    </p>
                                </td>
                                <td>
                                    <p>ESTATURA <input type="text" name="estatura" size="20" value=<?php echo $estatura ?>></p>
                                    <p>PESO <input type="text" name="peso" size="20" value=<?php echo $peso ?>></p>
                                </td>
                            </tr>

                        </tbody>
                    </table></center>
            </form>
        </body>
    </html>
    <?php
} else {
    echo '<script language="javascript">';
    echo 'alert("NO EXISTE ESA PERSONA")';
    echo '</script>';
    echo"<script> location.href='Modificar.php'</script>";
}
?>