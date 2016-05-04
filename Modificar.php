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
        <form method="get" action="Modifica2.php">
            <br>
            <center> <h1 >MODIFICAR REGISTRO</h1></center>;
            <b>
                <center> <table width='800' border='1' style="color:#ffffff;text-align: center;font-family: Maiandra GD ">
                        <tbody>
                            <TR>
                                <td>
                                    
                                    
                                    <p>NOMBRE DE LA PERSONA A MODIFICAR</p>
                                    <P> <input type="text" name="nombre" size="30" value=""></p>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <p><input type="submit" value="Buscar" name="busca">
                                        <input type="reset" value="Restablecer" name="B2">
                                        
                                </td>
                                </p>
                            </tr>
                        </tbody>
                    </table></center>
            </b>

        </form>
    </body>
</html>