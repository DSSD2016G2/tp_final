function validarDatosInscripcion()
{
    valido = false;
    if (validarTitulo())
    {
        if (validarAutor())
        {
            if (validarAutoresSecundarios())
            {
                if (validarResumen())
                {
                    if (validarTema())
                    {
                        if (validarCorreoPersonal())
                        {
                            if (validarCorreoGmail())
                            {
                                if (validarTipoPresentacion()) {
                                    valido = true;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return valido;
}

function validarTitulo()
{
    var inputTitulo = document.getElementById("titulo");
    if (inputTitulo.value == "")
    {
        alert("Ingrese el titulo del trabajo");
        inputTitulo.focus();
        return false;
    } else
    {
        return true;
    }
}



function validarTema()
{
    var inputTema = document.getElementById("tema");
    if (inputTema.value == "")
    {
        alert("Seleccione tema");
        inputTema.focus();
        return false;
    } else
    {
        return true;
    }
}

function validarAutor()
{
    var inputAutor = document.getElementById("autor");
    if (inputAutor.value == "")
    {
        alert("Ingrese el Autor");
        inputAutor.focus();
        return false;
    } else
    {
        return true;
    }
}

function validarAutoresSecundarios()
{

    return true;

}

function validarResumen()
{
    var inputResumen = document.getElementById("resumen");
    if (inputResumen.value == "")
    {
        alert("Ingrese el Resumen");
        inputResumen.focus();
        return false;
    } else {

        // Eliminamos los caracteres en blanco del inicio y del final.
        // Como no tenemos funciones del tipo trim, rtrim y ltrim usamos
        // expresiones regulares
        inicioBlanco = /^ / // El ^ indica principio de cadena
        finBlanco = / $/ // El $ indica final de cadena
        // El global (g) es para obtener todas las posibles combinaciones
        variosBlancos = /[ ]+/g
        inputResumen = inputResumen.replace(inicioBlanco, "");
       inputResumen = inputResumen.replace(finBlanco, "");
       inputResumen = inputResumen.replace(variosBlancos, " ");
        debugger;
        // Creamos un array con las diferentes palabras.
        // Teniendo en cuenta que la separación
        // entre palabras es el espacio en blanco.
        textoAreaDividido = inputResumen.value.split(" ");
        numeroPalabras = textoAreaDividido.length;
        //alert(numeroPalabras);
        if (numeroPalabras > 200)
        {
            alert("El resumen debe contener hasta 200 palabras");
            inputResumen.focus();
            return false;
        }
    }
}
function esDireccionEmail(texto)
{
    return (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(texto));
}
function validarCorreoPersonal()
{
    var inputEmail = document.getElementById("correoPersonal");
    if (!esDireccionEmail(inputEmail.value))
    {
        alert("Ingrese una dirección de e-mail válida");
        inputEmail.focus();
        return false;
    }
    else
    {
        return true;
    }
}
