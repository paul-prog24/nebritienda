<?php include 'includes/header.php'; ?>

<main class="container">
    <h2>Catálogo de Productos</h2>
    <div class="productos">
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="producto">
                <img src="img/producto<?= $i ?>.jpg" alt="Producto <?= $i ?>">
                <h3>Producto <?= $i ?></h3>
                <p>Descripción breve del producto <?= $i ?></p>
                <p>$<?= 10 + $i * 2 ?>.00</p>
                <button onclick="añadirAlCarrito()">Añadir al carrito</button>
            </div>
        <?php endfor; ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
<script src="js/script.js"></script>
