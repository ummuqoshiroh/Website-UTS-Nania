<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $subjek = $_POST["subjek"];
    $pesan = $_POST["pesan"];

    // Validasi data (opsional)
    if (empty($nama) || empty($email) || empty($subjek) || empty($pesan)) {
        echo "Semua field harus diisi.";
        exit;
    }

    // Kirim email (opsional)
    $tujuan = "azzahranania04@gmail.com"; 
    $header = "From: " . $email;
    $pesan_email = "Nama: " . $nama . "\nEmail: " . $email . "\nSubjek: " . $subjek . "\nPesan: " . $pesan;

    if (mail($tujuan, $subjek, $pesan_email, $header)) {
        echo "Pesan Anda telah berhasil dikirim.";
    } else {
        echo "Gagal mengirim pesan. Silakan coba lagi.";
    }
} else {
    echo "Akses tidak sah.";
}
?>