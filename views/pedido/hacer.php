<?php if(isset($_SESSION['identity'])) : ?>
    <h1>Realizar pedido</h1>
    <p>
        <a href="<?=base_url?>carrito/index">Volver al carrito</a>
    </p>
    <br>
    <h3>Dirección del pedido:</h3>
    <form action="<?=base_url?>pedido/add" method="POST">
        <label for="provincia">Provincia</label>
        <input type="text" name="provincia" id="" require>

        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" id="" require>

        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="" require>

        <input type="submit" value="Confirmar">

    </form>
<?php else : ?>
    <h1>Entrar a la web</h1>
    <p>Es necesario iniciar sesion para poder realizar tu pedido</p>
<?php endif; ?>