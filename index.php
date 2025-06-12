<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Masjid Baitul Hikmah</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <a href="index.html" class="logo"><img src="logo.png" alt="Logo" /></a>
            <ul class="nav-links">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="kegiatan.php">Kegiatan</a></li>
                <li><a href="artikel.php">Artikel</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Infaq</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Infaq Sholat Jum'at</a></li>
                        <li><a href="#">Infaq Air Minum</a></li>
                    </ul>
                </li>
                <li><a href="faqs.html">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section class="banner">
        <img src="jan2.jpg" alt="">
    </section>
    <section>
        <div class="jadwal-sholat">
            <h2>JADWAL SHOLAT</h2>
            <p>Kota Pekanbaru, <span id="hari">hari: -</span></p>
        </div>
        <table id="tabel-jadwal">
            <thead>
                <tr>
                    <th>Sholat</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Subuh</td>
                    <td id="subuh"></td>
                </tr>
                <tr>
                    <td>Dzuhur</td>
                    <td id="dzuhur"></td>
                </tr>
                <tr>
                    <td>Ashar</td>
                    <td id="ashar"></td>
                </tr>
                <tr>
                    <td>Maghrib</td>
                    <td id="maghrib"></td>
                </tr>
                <tr>
                    <td>Isya</td>
                    <td id="isya"></td>
                </tr>
            </tbody>
        </table>
    </section>

    <script src="script.js"></script>
    <section class="bottom-frame">
        <iframe
            src="https://www.youtube.com/embed/j2relFy3aJg"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </section>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section about">
                <img src="logo.png" alt="Logo" class="footer-logo" />
                <h3>Alamat</h3>
                <p>Simpang Komersil Arengka (SKA), Jl. Tuanku Tambusai, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28290</p>
            </div>

            <div class="footer-section links">
                <h3>Menu</h3>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="aboutme.html">Kegiatan</a></li>
                    <li><a href="courses.html">Artikel</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">Infaq</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Donasi Sekarang</a></li>
                            <li><a href="#">Riwayat Infaq</a></li>
                            <li><a href="#">Program</a></li>
                        </ul>
                    </li>
                    <li><a href="faqs.html">Kontak</a></li>
                </ul>
            </div>

            <div class="footer-section contact">
                <h3>Kontak</h3>
                <p>Email: masjid@gmail.com</p>
                <p>Telepon: +62 822 8364 2511</p>
                
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Masjid Baitul Hikmah. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
