<?php
?>
<html>
    <head>
        <script type="text/javascript" src="js/formularioInscripcion.js"></script>
        
        <title>Envio de formulario a  una base de datos</title>
    </head>
    <body>
        <form action="controller.php" method="POST"  name="form" onsubmit="return validarDatosInscripcion()">
            <label for="titulo">Titulo del Trabajo</label>
            <input type="text"  name="titulo" id="titulo" required/> <br/><br/>
            <label for="autor">Autor principal / expositor</label>
            <input type="text"  name="autor" id="autor" required/> <br/><br/>
            <label for="autores">Autores secundarios</label>
            <input type="text"  name="autores" id="autores" /> <br/>  <br/>
            <label for="resumen">Resumen</label> <br/><br/>
            <textarea name="resumen" rows="20" cols="100"  id="resumen"required ></textarea>
            <br/>
            <label for="tema">Tema</label>
            <select name="tema" id="tema">
                <option>Cloud</option>
                <option>WS</option>
                <option>BPM</option>
                <option>SOA</option>
            </select> <br/><br/>
            <label for="correoPersonal">Correo personal:</label>
            <input type="text"  name="correoPersonal" id="correoPersonal" /> <br/><br/>
            <label for="correoGmail">Correo de gmail:</label>
            <input type="text"  name="correoGmail" id="correoGmail" /> <br/><br/>

            <label>Tipo Presentacion:</label>
            <input type="radio" name="tipo" value="Poster" checked> Poster
            <input type="radio" name="tipo" value="Conferencia"> Conferencia<br/><br/>


            <input type="submit" value="Enviar datos"/>


        </form>

    </body>
</html>