<?php include 'includes/header.php'; ?>

<main class="container">
    <h2>Iniciar Sesión</h2>
    <form method="post" action="#">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Ingresar</button>
    </form>
    <p style="margin-top: 1em;">¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
</main>

<?php include 'includes/footer.php'; ?>
