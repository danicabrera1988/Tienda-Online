<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete') : ?>
    <h1 class="alert_green">Tu pedido se confirmó con exito</h1>
    <?php if(isset($pedido)) : ?>

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
<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete') : ?>
    <h1>El pedido No se pudo procesar</h1>
<?php endif; ?>

