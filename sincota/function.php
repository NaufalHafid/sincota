<?php
$conn = mysqli_connect('localhost', 'root', '', 'sincota');
$query = "SELECT id_film,genre,judul,video,gambar,jadwal FROM film INNER JOIN genre ON film.id_genre = genre.id_genre ";


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}






function cari($keyword)
{
    $query = "SELECT id_film,genre,judul,video,gambar,jadwal FROM film INNER JOIN genre ON film.id_genre = genre.id_genre 
    WHERE judul LIKE '%$keyword%' OR
    genre LIKE '%$keyword%'  ";
    return query($query);
}
