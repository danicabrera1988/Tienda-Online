<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Tienda de Camisetas</title>
</head>
<body>
    <div id="container">   
        <!-- CABECERA -->
        <header id="header">
            <div id="logo">
                <img src="asset/img/camiseta.png" alt="Logo">
                <a href="index.php">
                    Tienda de camisetas
                </a>
            </div>
        </header>

        <!-- MENU -->
        <nav id="menu"> <!-- 'NAV' Se ultiliza para el menu-->
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Categoria 1</a>
                </li>
                <li>
                    <a href="#">Categoria 2</a>
                </li>
                <li>
                    <a href="#">Categoria 3</a>
                </li>
                <li>
                    <a href="#">Categoria 4</a>
                </li>
                <li>
                    <a href="#">Categoria 5</a>
                </li>
            </ul>
        </nav>
        <div id="content">

            <!-- BARRA LATERAL -->
            <aside id="lateral"> <!-- 'ASIDE' Se ultiliza para las barras laterales-->
                <div id="login" class="block_aside">
                    <h3>Entrar a la Web</h3>
                    <form action="#" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password">
                        <input type="submit" value="Enviar">
                    </form>  
                    <ul>
                        <li><a href="#">Mis pedidos</a></li>
                        <li><a href="#">Gestionar pedidos</a></li>
                        <li><a href="#">Gestionar categorias</a></li>
                    </ul>
                </div>
            </aside>        

            <!-- CONTENIDO CENTRAL -->
            <div id="central">
                <h1>Productos destacados</h1>
                <div class="product">
                    <img src="asset/img/camiseta.png" alt="">
                    <h2>Camiseta Azul</h2>
                    <p>$2.000</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="asset/img/camiseta.png" alt="">
                    <h2>Camiseta Azul</h2>
                    <p>$2.000</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="asset/img/camiseta.png" alt="">
                    <h2>Camiseta Azul</h2>
                    <p>$2.000</p>
                    <a href="#" class="button">Comprar</a>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer id="footer">
            <p>Daniela Cabrera | &copy;<?=date('Y')?> </p>
        </footer>
    </div>
</body>
</html>