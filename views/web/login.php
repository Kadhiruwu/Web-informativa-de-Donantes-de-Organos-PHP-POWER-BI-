<?php 


// Conexión a la base de datos
$db = mysqli_connect('localhost', 'root', 'root', 'bussiness');

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}

$errores = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user = $_POST['user'];
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(!$user){
        $errores[] = "El user no es valido";
    }

    if(!$password){
        $errores[] = "El password es obligatorio";
    }

    if(empty ($errores)){
        //Revisar si el usuario existe
        $query ="SELECT * from usuarios WHERE user = '{$user}'";
        $resultado = mysqli_query($db, $query);
        
  
        if($resultado->num_rows){
            //Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);

            //Verificar si el password es correcto o no
            $auth = password_verify($password, $usuario['password']);
            if($auth){
                //El usuario está autenticado
                session_start();

                $_SESSION['user'] = $usuario['user'];
                $_SESSION['login'] = true;

                header('Location: /');
            }else{
                $errores[] = "El password es incorrecto";
            }
        }else{
            $errores[] = "El usuario no existe";
        }
    }

}
?>

<main class="generalbody">
<div class="contenidototal">
<div class="imagenlogin">
    <h2 class="textotitulo">Software BI Para Donantes de organos en el Perú</h2>
</div>
<div class="contenido_login">
<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia Sesión con tus Datos</p>

<?php 
    foreach($errores as $error) :?>
    <div class="alerta error">
        <?php echo $error;?>
    </div>
<?php endforeach; ?>


<form class="formulario" method="POST">
    <div class="campo">
        <label for="user">Usuario</label>
        <input type="text" id="user" placeholder="Ingresa tu usuario" name="user"> <!--name="email" es para leerlo con $_POST["email"]-->
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Tu Password" name="password">
    </div>

    <input type="submit" class="boton" value="Iniciar Sesion">
</form>
<div class="donaorganos">
<h3>"Cada donación es una nueva oportunidad de vida."</h3>
</div>

</div>
</div>
</main>

<script src="/build/js/alertas.js"></script>