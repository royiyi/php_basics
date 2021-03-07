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
    <h1>task log</h1>

    <form name="form1" method="get" action="Insertar_Registro.php">
        <table border="0" align="center">
            <tr>
                <td>Title</td>
                <td><label for="title"></label>
                    <input type="text" name="title" id="title">
                </td>
            </tr>
            <tr>
                <td>Start date</td>
                <td><label for="start_d"></label>
                    <input type="date" name="start_d" id="start_d">
                </td>
            </tr>
            <tr>
                <td>Priority</td>
                <td><label for="priority"></label>
                    <input type="number" name="priority" id="priority">
                </td>
            </tr>
            <tr>
                <td>Decription</td>
                <td><label for="Describe"></label>
                    <!-- <input type="text" name="Describe" id="Describe"> -->
                    <textarea name="Describe" id="Describe" rows="4" cols="25">
                  
                    </textarea>
                </td>
            </tr>

            <!-- <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr> -->
            <tr>
                <td align="center">
                    <input type="submit" name="enviar" id="enviar" value="Enviar">
                </td>
                <td align="center">
                    <input type="reset" name="Borrar" id="Borrar" value="Borrar">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>