<?php 
    $name = ['dandi', 'doni', 'budi', 'ari'];
    $vehicles = ['mobil', 'motor', 'pesawat'];
    $students = [
        ['john', '20', 'singing'],
        ['mark', '25', 'gaming'],
    ];
    $name[] = 'joni' ;
    // var_dump($name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .all {
            width: 50px;
            height: 50px;
            background-color: salmon;
            line-height: 50px;
            text-align: center;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    <!-- <?php for($i = 0; $i < count($name); $i++){ ?>
        <div>
            <?php echo $name[$i] ?>
        </div>
    <?php } ?> -->
<br>
    <!-- <?php foreach($vehicles as $vehicle): ?>
        <div>
            <?= $vehicle ?>
        </div>
    <?php endforeach; ?> -->
    <ul >
    <?php foreach($students as $student): ?>
        <br>
      <li>Name: <?= $student[0] ?></li>
      <li>Age: <?= $student[1] ?></li>
      <li>Hobby: <?= $student[2] ?></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
