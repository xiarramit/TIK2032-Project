<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>
</head>
<body>
    <header>
        <h1>Blog</h1>
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
        <h2>Artikel Terbaru</h2>
        <?php
        $conn = new mysqli("localhost", "root", "", "personal_web");

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<article>";
                echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
                echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
                echo "</article>";
            }
        } else {
            echo "<p>Belum ada artikel.</p>";
        }

        $conn->close();
        ?>
    </section>

    <footer>
        <p>&copy; 2025 Michelle Munayang</p>
    </footer>
</body>
</html>
