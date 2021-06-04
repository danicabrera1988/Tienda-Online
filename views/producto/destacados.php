<h1>Alguno de nuestros productos</h1>
<?php while($prod = $productos->fetch_object()) : ?>
    <div class="product">
        <a href="<?=base_url?>producto/ver&id=<?=$prod->id?>">
            <?php if($prod->imagen != null) : ?>
                <img src="<?=base_url?>uploads/images/<?=$prod->imagen?>" alt="">
            <?php else : ?>
                <img src="<?=base_url?>asset/img/camiseta.png" alt="">
            <?php endif ?>
            <h2><?=$prod->nombre?></h2>
        </a>
        <p><?=$prod->precio?></p>
        <a href="<?=base_url?>carrito/add&id=<?=$prod->id?>" class="button">Comprar</a>
    </div>
<?php endwhile; ?>

