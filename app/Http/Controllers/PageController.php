<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $validUser = [
        'nim' => '222410101052',
        'password' => '123',
        'nama' => 'Satria Belva Nararya'
    ];

    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        $nim = $request->input('nim');
        $password = $request->input('password');

        if ($nim === $this->validUser['nim'] && $password === $this->validUser['password']) {
            return redirect()->route('dashboard', ['nim' => $nim, 'nama' => $this->validUser['nama']]);
        } else {
            return redirect()->route('login')->withErrors(['login' => 'nim atau password salah!']);
        }
    }

    public function dashboard(Request $request)
    {
        $nama = $request->query('nama', 'Gatau Sapa');
        $nim = $request->query('nim', 'Gatau NIM Berapa');
        $dashboard = [
            [
                'img' => "../assets/App/run.png",
                'title' => 'SKS Tempuh',
                'value' => 23,
                'bg'=> '#4AB58E'
            ],
            [
                'img' => "../assets/App/stars.png",
                'title' => 'IP',
                'value' => 0,
                'bg'=> '#009EF7'
            ],
            [
                'img' => "../assets/App/flag.png",
                'title' => 'SKS Total',
                'value' => 137,
                'bg'=> '#FFC700'
            ],
            [
                'img' => "../assets/App/graduate.png",
                'title' => 'IPK',
                'value' => "4.00",
                'bg'=> '#F1416C'
            ],
        ];
        
        $menuTop = [
            [
                'img' => "../assets/App/profil.png",
                'title' => 'Profil',
            ],
            [
                'img' => "../assets/App/persiapan_perkuliahan.png",
                'title' => 'Persiapan Kuliah',
            ],
            [
                'img' => "../assets/App/perkuliahan.png",
                'title' => 'Perkuliahan',
            ],
            [
                'img' => "",
                'title' => 'E-Office',
            ]
        ];
        $menuBottom = [
            [
                'img' => "../assets/App/profil.png",
                'title' => 'Kegiatan',
            ],
            [
                'img' => "../assets/App/layanan.png",
                'title' => 'Layanan',
            ],
            [
                'img' => "../assets/App/hasil_studi.png",
                'title' => 'Hasil Studi',
            ]
        ];
        
        return view('dashboard', [
            'nama' => $nama,
            'nim' => $nim,
            'dashboard' => $dashboard,
            'menuTop' => $menuTop,
            'menuBottom' => $menuBottom,
            'calendarContent' => ['Pembayaran UKT/SPP dan Her Registrasi Mahasiswa', 'Pengajuan Alternatif Pembayaran UKT/SPP', 'Pengajuan Cuti Oleh Mahasiswa', 'Pemrograman Rencana Studi', 'Perubahan Rencana Studi', 'Pembatalan Rencana Studi', 'Masa Kuliah/Praktikum', 'Pengisian Kuisioner Pembelajaran', 'Entry Nilai Semester', 'Batas Akhir Entri Nilai Tugas Akhir untuk bebas UKT/SPP']
        ]);
    }

    public function profile(Request $request)
    {
        $nama = $request->query('nama', 'Gatau Sapa');
        $nim = $request->query('nim', 'Gatau NIM Berapa');

        return view('profile', [
            'nama' => $nama,
            'nim' => $nim,
    ]);
    }

    public function pengelolaan(Request $request)
    {
        $nama = $request->query('nama', 'Gatau Sapa');
        $nim = $request->query('nim', 'Gatau NIM Berapa');
        $matkul = [
            [
                'title' => 'Pemrograman Berbasis Website',
                'body' => 'Mata kuliah ini memperkenalkan konsep-konsep dasar pemrograman di lingkungan web. HTML dan CSS diperkenalkan sebagai sarana untuk mengembangkan konten dan tampilan halaman web. Pemgrograman di sisi klien (client-side) dilakukan dengan JavaScript, sedangkan di sisi server (server-side) menggunakan PHP.',
                'category' => 'Sistem Informasi',
                'created_at' => now()->subDays(1),
            ],
            [
                'title' => 'Data Mining',
                'body' => 'Data mining adalah proses pengumpulan dan pengolahan data yang bertujuan untuk mengekstrak informasi penting pada data. Proses pengumpulan dan ekstraksi informasi tersebut dapat dilakukan menggunakan perangkat lunak dengan bantuan perhitungan statistika, matematika, ataupun teknologi Artificial Intelligence (AI). Data mining sering disebut juga Knowledge Discovery in Database (KDD).',
                'category' => 'Sistem Informasi',
                'created_at' => now()->subDays(2),
            ],
            [
                'title' => 'Professional Issue',
                'body' => 'Mata kuliah ini membahas etika, hukum, dan isu profesional dalam dunia teknologi informasi. Mahasiswa akan memahami tanggung jawab sosial dan etika profesi TI.',
                'category' => 'Sistem Informasi',
                'created_at' => now()->subDays(3),
            ],
            [
                'title' => 'Tata Kelola Teknologi Informasi',
                'body' => 'Tata kelola teknologi informasi (TI) mengacu pada kerangka kerja, yang mengelola bagaimana organisasi mengoptimalkan penggunaan operasi TI mereka untuk mendukung tujuan bisnis. Tata kelola TI yang efektif adalah komponen kunci dari keseluruhan strategi bisnis dan tata kelola perusahaan sebagai kebijakan tata kelola, risiko dan kepatuhan (GRC).',
                'category' => 'Sistem Informasi',
                'created_at' => now()->subDays(4),
            ],
            [
                'title' => 'Sistem Enterprise',
                'body' => 'Sistem enterprise adalah sebuah sistem teknologi informasi yang memiliki manfaat yang sangat besar bagi operasional perusahaan. Operasional perusahaan yang baik, efektif dan efisien tentu saja akan membantu perusahaan berjalan dengan baik dan tentunya berkembang. Berikut ini kami akan jelaskan mengenai sistem enterprise mulai dari pengertian, manfaat, tujuan, serta contohnya untuk membantu kalian memahaminya.',
                'category' => 'Sistem Informasi',
                'created_at' => now()->subDays(5),
            ],
            [
                'title' => 'Pengembangan PL Untuk Agroindustri Modern',
                'body' => 'Mata kuliah ini mengajarkan pengembangan perangkat lunak yang mendukung kebutuhan dan proses di sektor agroindustri modern dengan teknologi terkini.',
                'category' => 'Sistem Informasi',
                'created_at' => now()->subDays(7),
            ],
            [
                'title' => 'Manajemen Proyek TI',
                'body' => 'Manajemen proyek IT adalah proses perencanaan, koordinasi, dan mendelegasikan tanggung jawab untuk menyelesaikan tugas yang sesuai dengan permintaan pemangku kepentingan dan kebutuhan pasar. Manajemen proyek IT akan membantu mulai dari tahap awal hingga akhir.',
                'category' => 'Sistem Informasi',
                'created_at' => now()->subDays(8),
            ],
        ];

        return view('pengelolaan', [
            'URLTitle' => 'Halaman Blog',
            'judul' => 'Blog',
            'matkul' => collect($matkul),
            'nama' => $nama,
            'nim' => $nim
        ]);
    }
}
