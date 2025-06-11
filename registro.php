<?php include 'includes/header.php'; ?>

<main class="container">
    <h2>Registro de Usuario</h2>
    <form method="post" action="#">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Registrarse</button>
    </form>
</main>

<?php include 'includes/footer.php'; ?>
