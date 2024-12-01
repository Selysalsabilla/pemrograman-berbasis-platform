<?php
$conn = mysqli_connect("localhost", "root", "Jiyuu2704", "unpam_db");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
