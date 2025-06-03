<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="script.js"></script>
</head>
<body>
    <header>
        <h1>Contact</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Hubungi Saya</h2>
        <p>Email: michellemunayang026@student.unsrat.ac.id</p>
        <p>Instagram: <a href="https://instagram.com/mchll.mnyg" target="_blank">@mchll.mnyg</a></p>
    </section>

    <section>
        <h2>Buku Tamu</h2>
        <form method="POST" action="">
            <label>Nama:</label><br>
            <input type="text" name="name" required><br><br>

            <label>Email:</label><br>
            <input type="email" name="email"><br><br>

            <label>Pesan:</label><br>
            <textarea name="message" rows="5" required></textarea><br><br>

            <button type="submit">Kirim</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $conn = new mysqli("localhost", "root", "", "personal_web");
            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            $name = $conn->real_escape_string($_POST['name']);
            $email = $conn->real_escape_string($_POST['email']);
            $message = $conn->real_escape_string($_POST['message']);

            $sql = "INSERT INTO guestbook (name, email, message) VALUES ('$name', '$email', '$message')";
            if ($conn->query($sql) === TRUE) {
                echo "<p><strong>Pesan berhasil dikirim!</strong></p>";
            } else {
                echo "<p>Gagal menyimpan pesan: " . $conn->error . "</p>";
            }

            $conn->close();
        }
        ?>

        <hr>
        <h3>Pesan Pengunjung</h3>
        <?php
        $conn = new mysqli("localhost", "root", "", "personal_web");
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT * FROM guestbook ORDER BY created_at DESC");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p><strong>" . htmlspecialchars($row['name']) . "</strong> (" . htmlspecialchars($row['email']) . ")<br>";
                echo nl2br(htmlspecialchars($row['message'])) . "</p><hr>";
            }
        } else {
            echo "<p>Belum ada pesan.</p>";
        }

        $conn->close();
        ?>
    </section>

    <footer>
        <p>&copy; 2025 Michelle Munayang</p>
    </footer>
</body>
</html>
