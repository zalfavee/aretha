<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center">Form Booking</h1>
        
        @if (session('success'))
            <div class="bg-green-200 text-green-700 p-4 rounded my-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label for="no_whatsapp" class="block text-gray-700">No Whatsapp</label>
                <input type="text" name="no_whatsapp" id="no_whatsapp" class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label for="kode_member" class="block text-gray-700">Kode Member (Opsional)</label>
                <input type="text" name="kode_member" id="kode_member" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
    <label for="jadwal" class="block text-gray-700">Jadwal</label>
    <select name="jadwal" id="jadwal" class="w-full p-2 border rounded" required>
        <option value="">Pilih hari dan waktu</option>
        <option value="Senin 10:00">Senin 10:00</option>
        <option value="Senin 13:00">Senin 13:00</option>
        <option value="Senin 16:00">Senin 16:00</option>

        <option value="Selasa 10:00">Selasa 10:00</option>
        <option value="Selasa 13:00">Selasa 13:00</option>
        <option value="Selasa 16:00">Selasa 16:00</option>

        <option value="Rabu 10:00">Rabu 10:00</option>
        <option value="Rabu 13:00">Rabu 13:00</option>
        <option value="Rabu 16:00">Rabu 16:00</option>

        <option value="Kamis 10:00">Kamis 10:00</option>
        <option value="Kamis 13:00">Kamis 13:00</option>
        <option value="Kamis 16:00">Kamis 16:00</option>

        <option value="Jumat 10:00">Jumat 10:00</option>
        <option value="Jumat 13:00">Jumat 13:00</option>
        <option value="Jumat 16:00">Jumat 16:00</option>

        <option value="Sabtu 10:00">Sabtu 10:00</option>
        <option value="Sabtu 13:00">Sabtu 13:00</option>
        <option value="Sabtu 16:00">Sabtu 16:00</option>

        <option value="Minggu 10:00">Minggu 10:00</option>
        <option value="Minggu 13:00">Minggu 13:00</option>
        <option value="Minggu 16:00">Minggu 16:00</option>
    </select>
</div>


            <div class="mb-4">
    <label for="layanan" class="block text-gray-700">Layanan</label>
    <select name="layanan" id="layanan" class="w-full p-2 border rounded" required>
        <option value="">Pilih layanan</option>
        <option value="Nail Art - Rp150.000">Nail Art - Rp150.000</option>
        <option value="Make Up - Rp300.000">Make Up - Rp300.000</option>
        <option value="Lash Lift - Rp250.000">Lash Lift - Rp250.000</option>
    </select>
</div>


            <div class="mb-4">
                <label for="bukti_pembayaran" class="block text-gray-700">Upload Bukti Pembayaran</label>
                <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="w-full p-2 border rounded" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white p-2 rounded w-full">Submit</button>
        </form>
    </div>
</body>
</html>