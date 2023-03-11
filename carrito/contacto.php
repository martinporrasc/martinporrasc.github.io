<?php
 ?>
<?php include_once "encabezado.php" ?>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navegacion">
        <a class="navegacion__enlace" href="tienda.php"><h2 class="is-size-3">Inicio</h2></a>
    </nav>

    <main class="contenedor">
        <div class="nosotros">
            <div class="nosotros__contenido">
                <h2 class="comprar__titulo">Pongase en contacto con nosotros</h2>
            </div>
        </div>
        <form action="/my-handling-form-page" method="post">
            <ul>
             <li>
               <label for="name">Nombre:</label>
               <input type="text" id="name" name="user_name" />
             </li>  
             <li>
               <label for="mail">Correo electrónico:</label>
               <input type="email" id="mail" name="user_email" />
             </li>
             <li>
               <label for="msg">Mensaje:</label>
               <textarea id="msg" name="user_message"></textarea>
             </li> 
             <input class="formulario__submit" type="submit" value="Enviar">
    </main>


    <footer class="footer">
        <p class="footer__texto">, <h2 class="is-size-3"> Farmacias G y C - Programacion Web - Todos los derechos Reservados 2023.</p>
    </footer>
</body>
<?php include_once "pie.php" ?>