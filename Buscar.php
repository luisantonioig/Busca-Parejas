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
        <form method="post" action="Buscar2.php">
            <br>
            <center> <h1 >BUSCA TU PAREJA IDEAL</h1></center>
            <b>
                <center> <table width='800' border='1' >
                        <tbody>
                            <TR>
                                <td>

                                    <p>EDAD:</p>
                                    <p>entre :<input type="text" name="edad" size="30" value=""></p>
                                    <p>y :<input type="text" name="edad2" size="30" value=""></p>
                                </td>
                                <td>
                                    <p>SEXO</p>
                                    <blockquote>
                                        <p>Hombre<input type="radio" value="Hombre" checked name="sexo"></p>
                                        <p>Mujer <input type="radio" name="sexo" value="Mujer"></p>
                                    </blockquote>
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
                                    <p>ESTATURA:</p>
                                    <p>entre:<input type="text" name="estatura" size="20" value=""></p>
                                    <p>y:<input type="text" name="estatura2" size="20" value=""></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">

                                    <p><input type="submit" value="Buscar" name="buacar">
                                        <input type="reset" value="Restablecer" name="B2">
                                </td>
                            </tr>

                        </tbody>
                    </table></center>
            </b>

        </form>

    </body>
</html>

