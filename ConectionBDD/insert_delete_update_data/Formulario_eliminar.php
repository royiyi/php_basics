<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
    <style>
    h1 {
        text-align: center;
        color: #00F;
        border-bottom: dotted #0000FF;
        width: 50%;
        margin: auto;


    }

    table {
        border: 1px solid #F00;
        padding: 20px 50px;
        margin-top: 50px;
    }

    body {
        background-color: #FFC;
    }
    </style>
</head>

<body>
    <h1>DROP REg</h1>

    <form name="form1" method="get" action="eliminar_registro.php">
        <table border="0" align="center">
            <tr>
                <td>ID TASKS</td>
                <td><label for="id_task"></label>
                    <input type="text" name="id_task" id="id_task">
                </td>
            </tr>
  
            <tr>
                <td align="center">
                    <input type="submit" name="enviar" id="enviar" value="DELETE">
                </td>
                <td align="center">
                    <input type="reset" name="Borrar" id="Borrar" value="clear">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>