<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 1 de Ingenieria Web</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <header class="cabeceraPrincipal">
        <h1>Paisajes del Ecuador</h1>
        <img src="../internas/banEcuador.jpg" alt="Logotipo Ecuador">
    </header>
    <nav class="NavMenu">
        <a href="../index.html">Inicio</a>
        <a href="../internas/loja.html">Loja</a>
        <a href="../internas/zamora.html">Zamora</a>
        <a href="registro.php">Registro</a>
        <a href="login.php">Login</a>
    </nav>
    <main>
        <section class="zonalogeo">
        <section class="contenedor">
            <h2>Inicie sesión con su cuenta</h2>
        </section>
        <form method="post" action="validar.php">
             <div class="grupo">
                <label for="usuario">Usurio<br></label>
                <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario">
            </div>
             <div class="grupo">
                <label for="clave">Clave<br></label>
                <input type="password" id="clave" name="clave" placeholder="Ingrese su clave">
            </div>
            <button type="submit" class="btnGuardar">Iniciar sesion</button>
        </form>
        </section>
    </main>
    
    <footer class="footer">
        <h4>Derechos Reservados 2020 @ricardoifc</h4>
    </footer>
</body>
</html>