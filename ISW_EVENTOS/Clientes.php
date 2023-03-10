<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <script src="https://kit.fontawesome.com/df59baf6b8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" href="img/Empresa.png">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="js/stock.js"></script>
    <script defer src="js/modal.js"></script>
    <script defer src="js/app.js"></script>
</head>

<body>
    <header>
     <h1 id="titulo" class="titulo">Lista de servicios</h1>
        

<nav>
<button id="boton-carrito"><i class="fas fa-shopping-cart"></i><span id="contadorCarrito">0</span></button>
        <div>
        <a href="Login.php" target="_blank">Cerrar Sesion</a>
        </div>
</nav>
        
        
    </header>


 <!-- 
    <select id="filtroTalle">
        <option value="all">Todos</option>
        <option value="L">Large</option>
        <option value="M">Medium</option>
        <option value="S">Small</option>
    </select>
-->

    
    <main id="contenedor-productos">

    </main>

        <div class="modal-contenedor">
            <div class="modal-carrito">

                
                <h3>Carrito</h3>
               
                
                <button id="carritoCerrar"><i class="fas fa-times-circle"></i></button>
                <div id="carrito-contenedor">
                    <!-- <div class="productoEnCarrito">
                        <p>Buzo 1</p>
                        <p>Precio: $1200</p>
                        <button class="boton-eliminar"><i class="fas fa-trash-alt"></i></button>
                    </div> -->
                </div>
                <p class="precioProducto">Precio total: $<span id="precioTotal">0</span></p>
                <button id="vaciar-carrito" class="boton-agregar">Vaciar carrito</button>
       
            </div>
        </div>

   
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>
</html>