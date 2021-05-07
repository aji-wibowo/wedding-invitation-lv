<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $r)
    {
        $guest = Guest::where('status', 'true')->orderby('created_at', 'desc')->get();

        $parseData = [
            'data' => $guest,
            'nama' => $r->nama
        ];

        return view('welcome', $parseData);
    }

    public function wish_proses(Request $r)
    {
        $r->validate([
            'name' => 'required',
            'email' => 'required',
            'wishes' => 'required'
        ]);

        $tambah = Guest::create([
            'name' => $r->name,
            'email' => $r->email,
            'wishes' => $r->wishes
        ]);

        if ($tambah) {
            return redirect('/')->with($this->messageSweetAlert('success', 'Terima Kasih!', 'Kamu sudah terdata di buku undangan Kita! Kita akan memberitahu via email H-1 acaranya, ya!'));
        } else {
            return redirect('/')->with($this->messageSweetAlert('success', 'Yahh, error!', 'Maafin Kita ya, nama kamu tidak berhasil terdaftar di sistem Kita, Mohon ulangi beberapa saat lagi ya! Jangan khawatir, kamu tetap bisa datang ke acara kita!'));
        }
    }

    public function mail()
    {
        $guest = Guest::find(1);

        $parseData = [
            'guest' => $guest
        ];

        return view('mail.index', $parseData);
    }
}
