<?php
//script php q recibe los datos del formulario enviado.
    
echo "<h1>Leer datos del fomulario</h1>";

//leo los datos enviados desde el form

$nombre = $_POST['nombre'];
$email = $_POST['email']; //dentro del get va el name de cada input del form
$password = $_POST['password'];

if( //valido desde el lado del backend q los campos esten correctos
    isset($_POST['nombre']) && !empty($_POST['nombre'])&& //el isset se fija si el campo existe, y el empty q no este vacío.
    isset($_POST['email']) && !empty($_POST['email'])&&
    isset($_POST['password'])&&!empty($_POST['password'])
){
    echo "<ul>";
    echo "<li>Nombre: $nombre</li>";
    echo "<li>Email: $email</li>";
    echo "<li>Password: $password</li>";
    echo "</ul>";
}else {
        echo "<h2>Error! Completar todos los datos</h2>";
    }

?>