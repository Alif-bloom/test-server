<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'undangan');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil daftar tamu
$result = $conn->query("SELECT name FROM recipients");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 10px; text-align: left; }
        .copy-btn { background-color: #4CAF50; color: white; padding: 5px 10px; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Daftar Tamu</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tamu</th>
                <th>Link Undangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                $name = $row['name'];
                $link = "http://localhost/invitation.php?nama=" . urlencode($name);
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$name}</td>
                        <td><input type='text' value='{$link}' readonly id='link-{$no}' style='width: 100%'></td>
                        <td><button class='copy-btn' onclick='copyToClipboard(\"link-{$no}\")'>Salin Link</button></td>
                      </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>

    <script>
        function copyToClipboard(id) {
            const input = document.getElementById(id);
            input.select();
            input.setSelectionRange(0, 99999); // Untuk mendukung perangkat seluler
            document.execCommand("copy");
            alert("Link disalin: " + input.value);
        }
    </script>
</body>
</html>
