<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// query data dari table mahasiswa


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// ambil data (fetch) didalam object $result
// while ($mhs = mysqli_fetch_assoc($result)) {

//     var_dump($mhs);
// }
