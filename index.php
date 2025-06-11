<?php include 'includes/header.php'; ?>

<main class="container">
    <section class="banner">
        <h2>Bienvenidos a la NebriTienda</h2>
        <p>Compra tu sudadera, camiseta, taza o lo que quieras con el logo del insti.</p>
        <a href="productos.php" class="boton">Ver productos</a>
    </section>

    <section class="productos-destacados">
        <h2>Destacados</h2>
        <div class="productos">
            <?php for ($i = 1; $i <= 3; $i++): ?>
                <div class="producto">
                    <img src="img/producto<?= $i ?>.jpg" alt="Producto <?= $i ?>">
                    <h3>Producto <?= $i ?></h3>
                    <p>$<?= 10 * $i ?>.00</p>
                    <button onclick="añadirAlCarrito()">Añadir al carrito</button>
                </div>
            <?php endfor; ?>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
<script src="js/script.js"></script>
