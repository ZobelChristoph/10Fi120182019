<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Kochbuch</title>
</head>

<body>

    <h1>Rezept <?php echo $recipe->getName() ?></h1>
    <!-- VERZEICHNIS has to be included -->
    <a href="<?php echo VERZEICHNIS.'/index.php' ?>">Übersicht </a>
</body>

</html>