<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Coloca tu nuevo password a continuacion</p>

<?php  
    include_once __DIR__ . "/../template/aletas.php";
?>

<?php if($error) return; ?>
<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Password</label>
        <input 
            type="password" 
            id="password"
            name="password"
            placeholder="Tu Nuevo Password"    
        />
    </div>

    <input type="submit" class="boton" value="Guardar Nuevo Password">

</form>

<div class="acciones">
    <a href="/">¿Ya tienes cuenta? | Iniciar Sesion</a>
    <a href="/crear-cuenta">¿Aun no tienes cuenta? | Crear Cuenta</a>
</div>