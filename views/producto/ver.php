<?php if(isset($prod)) : ?>
    <h1><?=$prod->nombre?></h1>
    <div id="detail-product">
        <div class="image">
            <?php if($prod->imagen != null) : ?>
                <img src="<?=base_url?>uploads/images/<?=$prod->imagen?>" alt="">
            <?php else : ?>
                <img src="<?=base_url?>asset/img/camiseta.png" alt="">
            <?php endif ?>
        </div>
        <div class="data">
            <p class="description"><?=$prod->descripcion?></p>
            <p class="price">$<?=$prod->precio?></p>
            <a href="<?=base_url?>carrito/add&id=<?=$prod->id?>" class="button">Comprar</a>
        </div>
    </div>
<?php else : ?>
    <h1>El producto no existe</h1>
<?php endif; ?>
