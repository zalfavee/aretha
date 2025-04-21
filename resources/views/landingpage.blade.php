<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aretha Beauty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: sans-serif;
        }
        .hero img {
            width: 100%;
            max-width: 400px;
            display: block;
            margin: auto;
        }
        .btn-black {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">ARETHA</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Booking</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Promo & Membership</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero text-center my-5">
        <img src="{{ asset('images/logo.png') }}" alt="Aretha Logo">
        <h1 class="mt-3">Nail - Henna - Make Up</h1>
    </section>

    <!-- Services -->
    <section class="container my-5">
        <h3 class="fw-bold mb-4">OUR SERVICES</h3>

        @php
            $services = [
                ['title' => 'Make Up', 'desc' => 'Tampil menawan di hari spesialmu!...', 'image' => 'makeup.jpg'],
                ['title' => 'Nail Art', 'desc' => 'Kami punya solusi untuk kamu tampil PD...', 'image' => 'nailart.jpg'],
                ['title' => 'Lashlift', 'desc' => 'Tatapan memikat dimulai dari detail kecil...', 'image' => 'lashlift.jpg'],
                ['title' => 'Henna', 'desc' => 'Tambahkan sentuhan seni di kulitmu...', 'image' => 'henna.jpg']
            ];
        @endphp

        @foreach ($services as $index => $service)
            <div class="row align-items-center my-4">
                @if ($index % 2 == 0)
                    <div class="col-md-6">
                        <h5 class="fw-bold">{{ $service['title'] }}</h5>
                        <p>{{ $service['desc'] }}</p>
                        <a href="#" class="btn btn-black">Booking Now</a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('images/' . $service['image']) }}" class="img-fluid rounded">
                    </div>
                @else
                    <div class="col-md-6 order-md-2">
                        <h5 class="fw-bold">{{ $service['title'] }}</h5>
                        <p>{{ $service['desc'] }}</p>
                        <a href="#" class="btn btn-black">Booking Now</a>
                    </div>
                    <div class="col-md-6 order-md-1">
                        <img src="{{ asset('images/' . $service['image']) }}" class="img-fluid rounded">
                    </div>
                @endif
            </div>
        @endforeach
    </section>

    <!-- Reservasi CTA -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h4>Pesan layanan kami untuk percantik dirimu</h4>
            <p><em>Nikmati layanan kecantikan profesional di tempat kami</em></p>
            <a href="#" class="btn btn-black">Reservasi Sekarang</a>
        </div>
    </section>

    <!-- Membership Promo -->
    <section class="container my-5">
        <h4 class="fw-bold">Gabung Jadi Member Aretha Beauty!</h4>
        <ul>
            <li>✨ Diskon hingga 20% untuk layanan tertentu</li>
            <li>⭐ Prioritas booking untuk event spesial</li>
            <li>💅 Free nail repair & touch-up untuk member premium</li>
            <li>🎁 Voucher ulang tahun eksklusif</li>
        </ul>
        <div class="p-4 bg-secondary text-white rounded">
            <p>❗ Promo Bulan Ini</p>
            <p><strong>Glow Up Deal – Paket Make Up + Nail Art hanya Rp 149.000</strong></p>
            <p><small>Promo berlaku hingga 30 April 2025</small></p>
        </div>
        <a href="#" class="btn btn-black mt-3">Daftar Member</a>
    </section>

    <!-- Booking CTA -->
    <section class="bg-light py-5 text-center">
        <h4>Booking Now!</h4>
        <p>Siap tampil cantik? Isi form berikut untuk reservasi layanan Aretha Beauty!</p>
        <a href="#" class="btn btn-black">Reservasi Sekarang</a>
    </section>

    <!-- Maps -->
    <div class="container my-5">
        <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=114.1, -8.3, 114.4, -8.1&amp;layer=mapnik"
                style="width:100%; height:400px; border:none;"></iframe>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-4">
        <p><strong>Aretha Beauty</strong><br>Nail - Henna - Lash Lift - Make Up</p>
        <p>
            Email: arethabeauty@gmail.com<br>
            Telp: 0812345678<br>
            Alamat: Jl. Songgon, Banyuwangi
        </p>
        <div>
            <a href="#">IG</a> |
            <a href="#">FB</a> |
            <a href="#">WA</a>
        </div>
    </footer>

</body>
</html>