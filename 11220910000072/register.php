
<?php
include "koneksi.php"; // Pastikan file koneksi sudah ada dan berfungsi

// Query untuk memasukkan data
$mysql = "INSERT INTO register (first_name, last_name, username, password, usia, jk, ttl, email, notel) VALUES 
    ('" . $_POST['first_name'] . "', '" . $_POST['last_name'] . "', '" . $_POST['username'] . "', '" . $_POST['password'] . "', 
    '" . $_POST['usia'] . "', '" . $_POST['jk'] . "', '" . $_POST['ttl'] . "', '" . $_POST['email'] . "', '" . $_POST['notel'] . "')";

// Eksekusi query dan cek hasilnya
if (!mysqli_query($conn, $mysql)) { // Gunakan variabel $conn yang berasal dari koneksi.php
    die("Error: " . mysqli_error($conn));
} else {
    echo "<script>
            alert('Data berhasil disimpan');
            window.location.href = 'index.php';
          </script>";
    exit(); // Menghentikan eksekusi agar redirect berjalan

}

// Menutup koneksi
mysqli_close($conn);
