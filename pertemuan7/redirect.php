<?php
if (!isset($_GET["nama"]) && !isset($_GET["nrp"]) && !isset($_GET["kelas"]) && !isset($_GET["foto"])) {
    // redirect
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <img src="img/<?= $_GET["foto"]; ?>" />
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["kelas"]; ?></li>
    </ul>
</body>

</html>