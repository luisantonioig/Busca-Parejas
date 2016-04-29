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
        <form method="post" action="">
            <br>
            <center> <h1 >ELIMINAR REGISTRO</h1></center>;
            <b>
                <center> <table width='800' border='1' style="color:#ffffff;text-align: center;font-family: Maiandra GD ">
                        <tbody>
                            <TR>
                                <td>
                                    <p>NOMBRE DE LA PERSONA A ELIMINAR</p>
                                    <P> <input type="text" name="nombre" size="30" value=""></p>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <p><input type="submit" value="Eliminar" name="eliminar">
                                        <input type="reset" value="Restablecer" name="B2">
                                        
                                </td>
                                </p>
                            </tr>
                        </tbody>
                    </table></center>
            </b>

            <?php
            include 'conecta.php';
            mysql_select_db("buscapareja");
            $nombre = filter_input(INPUT_POST, 'nombre');
            $nombreP = "";
            $mostar_datosS = mysql_query("SELECT * FROM pareja WHERE nombre='" . $nombre . "';", $conexion);
            $mostrar1 = mysql_fetch_array($mostar_datosS);

            if ($mostrar1["nombre"] == $nombre) {

                mysql_query("DELETE FROM pareja WHERE nombre='" . $nombre . "'");
                echo "REGISTRO ELIMINADO";
            } else {
                echo '<script language="javascript">';
                echo 'alert("NO EXISTE ESA PERSONA")';
                echo '</script>';
            }
            ?>
        </form>
    </body>
</html>
