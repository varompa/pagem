<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Restoran Pak Gembus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            background: #FFC82A;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        nav {
            background: #FFC82A;
            padding: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        nav a {
            color: #000000;
            text-decoration: none;
            padding: 10px 15px;
            display: inline-block;
            transition: background 0.3s;
        }
        nav a:hover {
            background: #ffb300; /* Darker shade for hover */
            color: #ffffff; /* Change text color on hover */
        }
        main {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .card {
            background: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            padding: 20px;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.02); /* Slightly enlarge card on hover */
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background: #FFC82A;
            color: #000000;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .button {
            background: #FFC82A;
            border: none;
            color: #000;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .button:hover {
            background: #ffb300; /* Change background on hover */
        }
    </style>
    <script>
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            section.scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</head>
<body>
    <header>
        <h1>Restoran Pak Gembus</h1>
    </header>
    <nav>
        <a href="#" onclick="scrollToSection('menuSection')">Menu</a>
        <a href="#" onclick="scrollToSection('reservasiSection')">Reservasi</a>
        <a href="#" onclick="scrollToSection('kontakSection')">Kontak</a>
        <a href="#" onclick="scrollToSection('tentangKamiSection')">Tentang Kami</a>
    </nav>
    <main>
        <div class="card">
            <h1>Selamat Datang Di Restoran Pak Gembus</h1>
            <p>Temukan berbagai hidangan lezat dan pengalaman bersantap yang tak terlupakan.</p>
            <a href="#" class="button" onclick="scrollToSection('reservasiSection')">Buat Reservasi</a>
        </div>

        <!-- Menu Section -->
        <section id="menuSection">
            <div class="card">
                <h2>Menu Spesial Hari Ini</h2>
                <ul>
                    <li>Nasi Goreng Spesial</li>
                    <li>Ayam Penyet</li>
                    <li>Rendang Daging</li>
                    <li>Soto Ayam</li>
                </ul>
                <a href="#" class="button">Lihat Semua Menu</a>
            </div>
        </section>

        <!-- Reservasi Section -->
        <section id="reservasiSection">
            <div class="card">
                <h2>Reservasi</h2>
                <p>Silakan hubungi kami untuk melakukan reservasi.</p>
                <form>
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required>
                    <br>
                    <label for="date">Tanggal:</label>
                    <input type="date" id="date" name="date" required>
                    <br>
                    <label for="time">Waktu:</label>
                    <input type="time" id="time" name="time" required>
                    <br>
                    <input type="submit" value="Reservasi" class="button">
                </form>
            </div>
        </section>

        <!-- Kontak Section -->
        <section id="kontakSection">
            <div class="card">
                <h2>Kontak Kami</h2>
                <p>Anda dapat menghubungi kami melalui:</p>
                <p>Email: info@pakgembus.com</p>
                <p>Telepon: 0123-456-789</p>
            </div>
        </section>

        <!-- Tentang Kami Section -->
        <section id="tentangKamiSection">
            <div class="card">
                <h2>Tentang Kami</h2>
                <p>Restoran Pak Gembus adalah tempat terbaik untuk menikmati hidangan lezat dengan suasana yang nyaman. Kami berkomitmen untuk memberikan pengalaman bersantap yang luar biasa.</p>
                <p>Temukan cita rasa autentik dan layanan terbaik di sini!</p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Restoran Pak Gembus. All rights reserved.</p>
    </footer>
</body>
</html>
