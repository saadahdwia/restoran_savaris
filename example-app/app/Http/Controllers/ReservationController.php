<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        return view('pages.reservasi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'jumlah_orang' => 'required|integer',
            'tanggal' => 'required|date',
            'waktu' => 'required'
        ]);

        Reservation::create([
            'nama_pemesan' => $request->nama_pemesan,
            'jumlah_orang' => $request->jumlah_orang,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ]);

        return redirect()->route('reservasi.index')->with('pesan', 'Reservasi berhasil dilakukan!');
    }
}



