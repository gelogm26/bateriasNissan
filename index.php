<?php include 'app/backend/dbCode/db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Baterias Nissan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="app/assets/css/style.css" />
</head>
<body class="d-flex flex-column min-vh-100">

    <?php include 'app/frontend/plantilla/header.php'; ?>

    <main class="flex-grow-1">
        <h1 class="text-center py-4">Baterías disponibles</h1>
        <hr>

        <?php
        $sql = "SELECT * FROM baterias";
        $resultado = $conn->query($sql);
        ?>

        <div class="container my-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                <?php while ($bateria = $resultado->fetch_assoc()): ?>
                    <div class="col">
                        <div class="card h-100 text-center" >
                            <?php if (!empty($bateria['imagen'])): ?>
                                <img src="app/assets/img/baterias/<?= $bateria['imagen'] ?>" class="card-img-top" 
                                style="height: 350px; object-fit:cover;" alt="Bat">
                            <?php else: ?>
                                <img src="assets/img/baterias/default.png" class="card-img-top" alt="Sin imagen">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?= $bateria['referencia'] ?></h5>
                                <p class="card-text"><?= $bateria['descripcion'] ?></p>
                                <p class="text-primary fw-bold">$<?= number_format($bateria['precio'], 2) ?></p>
                            </div>
                            <div class="card-footer">
                                <span class="badge bg-<?= $bateria['estado'] === 'ACTIVO' ? 'success' : 'secondary' ?>">
                                    <?= $bateria['estado'] ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </main>

    <?php include 'app/frontend/plantilla/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
