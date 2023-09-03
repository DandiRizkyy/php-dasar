

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
<?php 
 $number = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
 ];
?>
<?php 
   $mahasiswa = [
    [
    "nama" => "joni", 
    "nrp" => "0012", 
    "kelas" => "informatika" , 
    "foto" => "https://media.licdn.com/dms/image/C5603AQGad3Qq6UDV0Q/profile-displayphoto-shrink_200_200/0/1592473813093?e=1695859200&v=beta&t=cBNslnGb4tQrPup6z0sSyeicYy7yPWap7TIhf_EWDwM"
    ],

    [
    "nama" => "nanda", 
    "nrp" => "0013", 
    "kelas" => "seni", 
    "foto" => "data:image/jpeg;base64,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"
    ],

    [
    "nama" => "ari", 
    "nrp" => "0014", 
    "kelas" => "matematika", 
    "foto" => "data:image/jpeg;base64,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"
    ],
];
?>
<!-- <?php foreach($number as $a): ?>
    <?php foreach($a as $b): ?>
        <div class="kotak"><?=$b?></div>
    <?php endforeach ?>
    <div class="clear"></div>
<?php endforeach ?> -->

<?php foreach($mahasiswa as $value): ?>
    <ul>
        <img src=<?=$value["foto"]?> />
        <li >Nama: <?=$value["nama"]?></li>
        <li >Nrp: <?=$value["nrp"]?></li>
        <li >Kelas: <?=$value["kelas"]?></li>
   
    </ul>
<?php endforeach ?>

</body>
</html>