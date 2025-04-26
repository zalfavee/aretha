<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create()
    {
        return view('booking.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_whatsapp' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'kode_member' => 'nullable|string|max:20',
            'jadwal' => 'required|string',
            'layanan' => 'required|string',
            'bukti_pembayaran' => 'required|file|mimes:jpg,png,jpeg,pdf|max:2048',
        ]);

        // Simpan data atau logika lain sesuai kebutuhan

        return redirect()->back()->with('success', 'Booking berhasil dibuat!');
    }
}