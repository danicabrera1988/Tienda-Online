<h1>Carrito de compra</h1>
<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1) : ?>
    <table>
        <tr>
            <th>IMAGEN</th> 
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>UNIDADES</th>
            <th>ELIMIMAR</th>

        </tr>
        <?php 
            foreach($carrito as $indice => $elemento) :
            $producto = $elemento['producto'];
        ?>
        <tr>
            <td>
                <?php if($producto->imagen != null) : ?>
                    <img src="<?=base_url?>uploads/images/<?=$producto->imagen?>" class="img-carrito" alt="">
                <?php else : ?>
                    <img src="<?=base_url?>asset/img/camiseta.png" class="img-carrito" alt="">
                <?php endif; ?>
            </td>
            <td>
                <a href="<?=base_url?>producto/ver&id=<?=$producto->id?>"> <?=$producto->nombre?> </a>
            </td>
            <td>$ <?=$producto->precio?></td>
            <td>
                <?=$elemento['unidades']?>
                <div class="updown-unidades">
                    <a href="<?=base_url?>carrito/down&index=<?=$indice?>" class="button">-</a>
                    <a href="<?=base_url?>carrito/up&index=<?=$indice?>" class="button">+</a>
                </div>
            </td>
            <td>
                <a href="<?=base_url?>carrito/delete&index=<?=$indice?>" class="button button-carrito button-red">Eliminar producto</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <div class="delete-carrito">
        <a href="<?=base_url?>carrito/delete_all" class="button button-delete button-red">Vaciar carrito</a>
    </div>
    <div class="total-carrito">
        <?php $stats = Utils::statscarrito(); ?>
        <h3>Precio total: $ <?=$stats['total']?></h3>
        <a href="<?=base_url?>pedido/hacer" class="button button-pedido">Confirmar pedido</a>
    </div>
<?php else : ?>
    <p>El carrito esta vacio</p>
<?php endif; ?>