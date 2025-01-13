<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'undangan');

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tambahkan data ke database
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    if (!empty($name)) {
        $stmt = $conn->prepare("INSERT INTO recipients (name) VALUES (?)");
        $stmt->bind_param("s", $name);
        if ($stmt->execute()) {
            $message = "Nama berhasil ditambahkan!";
        } else {
            $message = "Gagal menambahkan nama.";
        }
        $stmt->close();
    } else {
        $message = "Nama tidak boleh kosong.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Input Nama</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Dashboard Input Nama</h1>
        <?php if (!empty($message)): ?>
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            <?= htmlspecialchars($message) ?>
        </div>
        <?php endif; ?>
        <form method="POST" action="" class="bg-white p-6 rounded shadow-md">
            <label for="name" class="block text-sm font-medium mb-2">Masukkan Nama</label>
            <input type="text" id="name" name="name" class="border border-gray-300 rounded w-full px-4 py-2 mb-4"
                required>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</body>

</html>