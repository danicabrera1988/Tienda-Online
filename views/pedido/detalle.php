<h1>Datos del pedido</h1>

<?php if(isset($pedido)) : ?>
    <?php if(isset($_SESSION['admin'])) : ?>
        <h3>Cambiar estado del pedido</h3>
        <form action="<?=base_url?>pedido/estado" method="POST">
            <select name="estado" id="">
                <option value="confirm" <?=$pedido->estado == 'confirm' ? 'selected' : '' ?>>Pendiente</option>
                <option value="preparation" <?=$pedido->estado == 'preparation' ? 'selected' : '' ?>>En preparacion</option>
                <option value="ready" <?=$pedido->estado == 'ready' ? 'selected' : '' ?>>Preparado para enviar</option>
                <option value="sended" <?=$pedido->estado == 'sended' ? 'selected' : '' ?>>Enviado</option>
            </select>
            <input type="hidden" value="<?=$pedido->id?>" name="pedido_id">
            <input type="submit" name="Cambiar estado">
        </form>
    <?php endif; ?>
    <br>

    <h3>Direccion de envio</h3>
        <br>
        Estado: <?=Utils::showstatus($pedido->estado)?><br>
        Provincia: <?=$pedido->provincia?><br>
        Localidad: <?=$pedido->localidad?><br>
        Direccion: <?=$pedido->direccion?><br><br>

        <h3>Datos del pedido</h3>
        <br>
        Numero de pedido: <?=$pedido->id?><br>
        Total a pagar: $ <?=$pedido->coste?><br>
        Productos: <br><br>
        <table>
            <tr>
                <th>IMAGEN</th> 
                <th>NOMBRE</th>
                <th>PRECIO</th>
                <th>UNIDADES</th>
            </tr>
            <?php while($producto = $productos->fetch_object()): ?>
                <tr>
                    <td>
                        <?php if($producto->imagen != null) : ?>
                            <img src="<?=base_url?>uploads/images/<?=$producto->imagen?>" class="img-carrito" alt="">
                        <?php else : ?>
                            <img src="<?=base_url?>asset/img/camiseta.png" class="img-carrito" alt="">
                        <?php endif; ?>
                    </td>
                    <td><?=$producto->nombre?></td>
                    <td>$ <?=$producto->precio?></td>
                    <td><?=$producto->unidades?></td>
                </tr>       
            <?php endwhile; ?>
        </table>
    <?php endif; ?>
