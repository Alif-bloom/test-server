<?php
// Koneksi ke database
include('kon.php');
// Fungsi enkripsi
function encrypt($data, $key) {
    return urlencode(base64_encode(openssl_encrypt($data, 'AES-128-CTR', $key, 0, '1234567891011121'))); 
}

$key = "secretkey"; // Ganti dengan kunci rahasia

// Fungsi untuk mempersingkat URL menggunakan Bitly API (Contoh)
function shortenUrl($url) {
    $bitlyToken = 'YOUR_BITLY_TOKEN'; // Ganti dengan token Bitly Anda
    $bitlyApiUrl = "https://api-ssl.bitly.com/v4/shorten";
    $data = json_encode(['long_url' => $url]);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $bitlyApiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $bitlyToken,
        'Content-Type: application/json',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    curl_close($ch);

    $responseData = json_decode($response, true);
    return $responseData['link'] ?? $url; // Mengembalikan URL pendek atau URL asli jika gagal
}

// Ambil daftar tamu dari database
$result = $conn->query("SELECT name FROM recipients");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .copy-btn {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .copy-btn:hover {
            background-color: #45a049;
        }
        textarea {
            width: 100%;
            height: 150px;
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 4px;
            resize: none;
        }
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
                $encryptedName = encrypt($name, $key);
                $link = "http://localhost/test-server/index.php?data=" . $encryptedName;

                // Menggunakan Bitly untuk mempersingkat URL
                $shortenedLink = shortenUrl($link);

                // Pesan yang akan disalin dalam format teks
                $message = "Assalamu'alaikum Wr. Wb.\n\nTanpa mengurangi rasa hormat, perkenankan kami memberikan kabar gembira, serta mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara pernikahan kami.\n\nKlik tautan undangan berikut ini info lengkap dari acara kami.\n\nKlik di sini: " . $shortenedLink . "\n\nMerupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.\n\nMohon maaf dalam menyampaikan undangan melalui pesan singkat ini karena keterbatasan waktu dan jarak.\n\nWassalamu'alaikum Wr. Wb.\nTerima Kasih.";

                echo "<tr>
                        <td>{$no}</td>
                        <td>{$name}</td>
                        <td><textarea readonly id='message-{$no}'>{$message}</textarea></td>
                        <td><button class='copy-btn' onclick='copyMessageToClipboard(\"message-{$no}\")'>Salin Pesan</button></td>
                      </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>

    <script>
        // Fungsi untuk menyalin pesan lengkap
        function copyMessageToClipboard(id) {
            const textarea = document.getElementById(id);
            textarea.select();
            textarea.setSelectionRange(0, 99999); // Mendukung perangkat seluler
            navigator.clipboard.writeText(textarea.value).then(() => {
                alert("Pesan disalin: " + textarea.value);
            }).catch(err => {
                alert("Gagal menyalin pesan: " + err);
            });
        }
    </script>
</body>
</html>
