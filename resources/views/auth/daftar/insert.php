<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "eventverse";

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];      // Pisahkan variabel nim
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // enkripsi password

// Pastikan kolom tabelnya seperti ini: nama, nim, email, password
$sql = "INSERT INTO users (nama, nim, email, password) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nama, $nim, $email, $password);

if ($stmt->execute()) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
<br><a href="index.php">Kembali ke Form</a>
