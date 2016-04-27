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
        <form method="post" action="" enctype="multipart/form-data">
            <br>
            <center> <h1 >REGISTRATE</h1></center>;
            <b>
                <center> <table width='800' border='1' >
                        <tbody>
                            <TR>
                                <td>
                                    <p>NOMBRE <input type="text" name="nombre" size="30" value=""></p>
                                </td>
                                <td>
                                    <p>EDAD <input type="text" name="edad" size="30" value=""></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>SEXO</p>
                                    <blockquote>
                                        <p>Hombre<input type="radio" value="Hombre" checked name="sexo"></p>
                                        <p>Mujer <input type="radio" name="sexo" value="Mujer"></p>
                                    </blockquote>
                                </td>
                                <td>
                                    <p>SIGNO
                                        <select size="1" name="signo">
                                            <option selected value="Aries">Aries </option>
                                            <option value="Tauro">Tauro</option>
                                            <option value="Geminis">Geminis</option>
                                            <option value="Cancer">Cancer</option>
                                            <option value="Leo">Leo</option>
                                            <option value="Virgo">Virgo</option>
                                            <option value="Libra">Libra</option>
                                            <option value="Escorpio">Escorpio</option>
                                            <option value="Sagitario">Sagitario</option>
                                            <option value="Acuario">Acuario</option>
                                            <option value="Pisicis">Pisicis</option>
                                        </select>
                                    </p>   
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>AFICIONES</p>
                                    <p>Bailar <input type="checkbox" name="bailar" value="bailar"> 
                                        .......Leer <input type="checkbox" name="Leer" value="Leer"></p>
                                    <p>Escuchar musica <input type="checkbox" name="musica" value="musica">
                                        ......Volibol <input type="checkbox" name="Volibol" value="Volibol">
                                </td>
                                <td>
                                    <p>COLOR DE OJOS</p>
                                    <blockquote>
                                        <p>Cafe<input type="radio" value="Cafe" checked name="ojos">
                                            .......Negro <input type="radio" name="ojos" value="Negro"></p>
                                        <p>Azul <input type="radio" name="ojos" value="Azul">
                                            .....Verde <input type="radio" name="ojos" value="Verde"></p>
                                    </blockquote>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>DESCRIPCION</p>
                                    <p><textarea rows="5" name="descripcion" cols="28"></textarea></p>

                                </td>
                                <td>
                                    <p>ESTATURA <input type="text" name="estatura" size="20" value=""></p>
                                    <p>PESO <input type="text" name="peso" size="20" value=""></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#EB0000;font-family: MT Extra" >
                                    <?PHP
//session_start();
                                    include "conecta.php";
                                    ?>
                                    <?PHP
                                    $id = 0;
                                    mysql_select_db("buscapareja");
                                    $resultado = mysql_query("SELECT * FROM pareja ORDER BY id ASC");
                                    while ($row = mysql_fetch_array($resultado)) {
                                        $id = $row[0];
                                    }

                                    $nombrefoto1 = $_FILES['foto1']['name'];
                                    $ruta1 = $_FILES['foto1']['tmp_name'];
                                    if (is_uploaded_file($ruta1)) {
                                        if ($_FILES['foto1']['type'] == 'image/png' OR $_FILES['foto1']['type'] == 'image/gif'
                                                OR $_FILES['foto1']['type'] == 'image/jpeg') {
                                            $tips = 'jpg';
                                            $type = array('image/jpeg' => 'jpg');
//
                                            $name = $id . 'Foto-1' . '.' . $tips;
                                            $destino1 = "imagenes/" . $name;
                                            copy($ruta1, $destino1);

                                            $ruta_imagen = $destino1;

                                            $miniatura_ancho_maximo = 700;
                                            $miniatura_alto_maximo = 500;

                                            $info_imagen = getimagesize($ruta_imagen);
                                            $imagen_ancho = $info_imagen[0];
                                            $imagen_alto = $info_imagen[1];
                                            $imagen_tipo = $info_imagen['mime'];

                                            switch ($imagen_tipo) {
                                                case "image/jpg":
                                                case "image/jpeg":
                                                    $imagen = imagecreatefromjpeg($ruta_imagen);
                                                    break;
                                                case "image/png":
                                                    $imagen = imagecreatefrompng($ruta_imagen);
                                                    break;
                                                case "image/gif":
                                                    $imagen = imagecreatefromgif($ruta_imagen);
                                                    break;
                                            }

                                            $lienzo = imagecreatetruecolor($miniatura_ancho_maximo, $miniatura_alto_maximo);

                                            imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


                                            imagejpeg($lienzo, $destino1, 80);
                                        }
                                    }
                                    ?>
                                </td>
                                <td>
                                    <p> <input name="foto1" type="file" id="foto1"  >

                                        <input name="guardar" type="submit" value="GUARDAR" />
                                        <input type="reset" value="Restablecer" name="B2">
                                    </p>


                                </td>
                            </tr>

                        </tbody>
                    </table></center>
            </b>
        </form>
        <div style="color:#EB0000;font-family: MT Extra" >
            <?php
            $edad = filter_input(INPUT_POST, 'edad');
            $nombre = filter_input(INPUT_POST, 'nombre');
            $sexo = $_POST['sexo'];
            $signo = $_POST['signo'];
            $ojos = $_POST['ojos'];
            $estatura = filter_input(INPUT_POST, 'estatura');
            $peso = filter_input(INPUT_POST, 'peso');


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

            if ($_POST['descripcion'] != "") {
                $descripcion = $_POST['descripcion'];
            } else {
                $descripcion = "Ninguna";
            }
            if ($_POST['guardar']) {
                $act = ("INSERT INTO pareja (nombre ,edad ,sexo ,signo ,bailar ,leer ,musica ,voli ,ojos ,descripcion "
                        . ",estatura ,peso,Foto1) "
                        . "values ('$nombre','$edad','$sexo','$signo','$bailar','$leer','$Musica',"
                        . "'$voli','$ojos','$descripcion','$estatura','$peso','$destino1')") or die(mysql_error());

                if (@mysql_query($act)) {
                    echo "La foto fue publicada con exito";
                } else {
                    die(mysql_error());
                }
            }
            ?>
        </div>
    </body>
</html>

