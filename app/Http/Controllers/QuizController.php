<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    private array $questions = [
        [
            'id'       => 1,
            'teks'     => 'Gimana mood kamu hari ini?',
            'pilihan'  => [
                'a' => ['label' => '☀️ Semangat & Ceria',   'tag' => 'manis'],
                'b' => ['label' => '😌 Santai & Tenang',     'tag' => 'original'],
                'c' => ['label' => '🌧️ Butuh Mood Booster',  'tag' => 'cokelat'],
                'd' => ['label' => '🔥 Pengen Sesuatu Beda', 'tag' => 'keju'],
            ],
        ],
        [
            'id'       => 2,
            'teks'     => 'Kamu lebih suka rasa yang...',
            'pilihan'  => [
                'a' => ['label' => '🍬 Manis Legit',         'tag' => 'manis'],
                'b' => ['label' => '🌿 Natural & Sederhana', 'tag' => 'original'],
                'c' => ['label' => '🍫 Cokelat Creamy',      'tag' => 'cokelat'],
                'd' => ['label' => '🧀 Gurih Unik',          'tag' => 'keju'],
            ],
        ],
        [
            'id'       => 3,
            'teks'     => 'Getuk ini buat siapa?',
            'pilihan'  => [
                'a' => ['label' => '👨‍👩‍👧 Oleh-oleh Keluarga', 'tag' => 'original'],
                'b' => ['label' => '🧒 Camilan Anak-anak',   'tag' => 'cokelat'],
                'c' => ['label' => '🎁 Hampers / Hadiah',    'tag' => 'manis'],
                'd' => ['label' => '🙋 Buat Diri Sendiri',   'tag' => 'keju'],
            ],
        ],
    ];

    private array $recommendations = [
        'manis' => [
            'varian'     => 'Getuk Goreng Gula Merah Extra',
            'deskripsi'  => 'Manisnya gula merah murni yang meresap sempurna ke dalam singkong pilihan. Cocok banget buat kamu yang suka rasa legit dan tradisional.',
            'emoji'      => '🍯',
            'warna'      => 'bg-amber-500',
        ],
        'original' => [
            'varian'     => 'Getuk Goreng Original Asri',
            'deskripsi'  => 'Resep asli sejak 1940 — rasa autentik tanpa tambahan apa-apa. Pilihan terbaik untuk oleh-oleh keluarga yang ingin merasakan warisan rasa Banyumas.',
            'emoji'      => '✨',
            'warna'      => 'bg-yellow-600',
        ],
        'cokelat' => [
            'varian'     => 'Getuk Goreng Cokelat',
            'deskripsi'  => 'Perpaduan getuk tradisional dengan cokelat creamy yang bikin nagih. Favorit anak-anak dan mood booster nomor satu!',
            'emoji'      => '🍫',
            'warna'      => 'bg-amber-800',
        ],
        'keju' => [
            'varian'     => 'Getuk Goreng Keju',
            'deskripsi'  => 'Gurih keju berpadu dengan manisnya getuk — kombinasi tak terduga yang langsung jadi favorit. Cocok buat kamu yang suka hal-hal unik!',
            'emoji'      => '🧀',
            'warna'      => 'bg-yellow-400',
        ],
    ];

    /**
     * Tampilkan halaman quiz.
     */
    public function index()
    {
        return view('quiz.index', [
            'questions' => $this->questions,
        ]);
    }

    /**
     * Proses jawaban dan tampilkan hasil.
     */
    public function result(Request $request)
    {
        $request->validate([
            'jawaban'   => ['required', 'array', 'size:' . count($this->questions)],
            'jawaban.*' => ['required', 'in:a,b,c,d'],
        ]);

        // Hitung tag terbanyak dari jawaban
        $tagCount = [];
        foreach ($this->questions as $q) {
            $jawaban = $request->input("jawaban.{$q['id']}");
            if ($jawaban && isset($q['pilihan'][$jawaban])) {
                $tag = $q['pilihan'][$jawaban]['tag'];
                $tagCount[$tag] = ($tagCount[$tag] ?? 0) + 1;
            }
        }

        // Ambil tag dengan skor tertinggi (jika seri, ambil yang pertama)
        arsort($tagCount);
        $winnerTag = array_key_first($tagCount);

        $rekomendasi = $this->recommendations[$winnerTag] ?? $this->recommendations['original'];

        return view('quiz.result', [
            'rekomendasi' => $rekomendasi,
            'tag'         => $winnerTag,
        ]);
    }
}
