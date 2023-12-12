<h1 class="nombre-pagina">login</h1>
<p class="descripcion-pagina">Inicia sesion con tus datos</p>

<?php  
    include_once __DIR__ . "/../template/alertas.php";
?>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input 
        type="email"
        id="email"
        placeholder="Email"
        name="email"
      
        />
    </div>
    <!--  value="<?php echo s($auth->email);?>"-->
    <div class="campo">
        <label for="password">Password</label>
        <input 
        type="password"
        id="password"
        placeholder="password"
        name="password"
        />
    </div>

    <input type="submit" class="boton" value="Inicial Session">
</form>


<div class="acciones">
    <a href="/crear-cuenta">¿Aun no tienes una cuenta?, Crea una Aqui!!</a>
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
</div>