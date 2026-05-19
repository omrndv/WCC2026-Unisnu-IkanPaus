<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    private array $questions = [
        [
            'id' => 1,
            'teks' => 'Gimana mood kamu hari ini?',
            'pilihan' => [
                'a' => [
                    'emoji' => '😌',
                    'label' => 'Santai & Pengen yang Aman',
                    'tag' => 'original',
                ],
                'b' => [
                    'emoji' => '🔥',
                    'label' => 'Pengen Rasa yang Beda',
                    'tag' => 'durian',
                ],
                'c' => [
                    'emoji' => '🌿',
                    'label' => 'Lagi Kangen Rasa Tradisional',
                    'tag' => 'original',
                ],
                'd' => [
                    'emoji' => '🤩',
                    'label' => 'Lagi Pengen yang Beraroma Khas',
                    'tag' => 'durian',
                ],
            ],
        ],
        [
            'id' => 2,
            'teks' => 'Kamu lebih suka rasa yang...',
            'pilihan' => [
                'a' => [
                    'emoji' => '🍯',
                    'label' => 'Manis Klasik dan Familiar',
                    'tag' => 'original',
                ],
                'b' => [
                    'emoji' => '🥭',
                    'label' => 'Manis Legit dengan Aroma Kuat',
                    'tag' => 'durian',
                ],
                'c' => [
                    'emoji' => '🌾',
                    'label' => 'Sederhana tapi Bikin Nyaman',
                    'tag' => 'original',
                ],
                'd' => [
                    'emoji' => '💛',
                    'label' => 'Unik, Creamy, dan Lebih Berani',
                    'tag' => 'durian',
                ],
            ],
        ],
        [
            'id' => 3,
            'teks' => 'Getuk ini rencananya buat siapa?',
            'pilihan' => [
                'a' => [
                    'emoji' => '👨‍👩‍👧',
                    'label' => 'Oleh-oleh Keluarga',
                    'tag' => 'original',
                ],
                'b' => [
                    'emoji' => '🙋',
                    'label' => 'Buat Diri Sendiri',
                    'tag' => 'durian',
                ],
                'c' => [
                    'emoji' => '🎁',
                    'label' => 'Hadiah yang Aman untuk Banyak Orang',
                    'tag' => 'original',
                ],
                'd' => [
                    'emoji' => '😋',
                    'label' => 'Buat Pecinta Durian',
                    'tag' => 'durian',
                ],
            ],
        ],
    ];

    private array $recommendations = [
        'original' => [
            'varian' => 'Getuk Goreng Original Jawa',
            'deskripsi' => 'Pilihan paling aman dan klasik. Rasa manis khas getuk goreng yang sederhana, familiar, dan cocok untuk oleh-oleh keluarga maupun teman.',
            'emoji' => '🌿',
            'warna' => 'bg-yellow-600',
        ],
        'durian' => [
            'varian' => 'Getuk Goreng Durian',
            'deskripsi' => 'Cocok buat kamu yang suka rasa lebih unik dan berani. Perpaduan getuk goreng dengan aroma durian yang khas bikin rasanya lebih legit dan beda dari biasanya.',
            'emoji' => '💛',
            'warna' => 'bg-amber-500',
        ],
    ];

    public function index()
    {
        return view('quiz.index', [
            'questions' => $this->questions,
        ]);
    }

    public function result(Request $request)
    {
        $request->validate([
            'jawaban' => ['required', 'array', 'size:' . count($this->questions)],
            'jawaban.*' => ['required', 'in:a,b,c,d'],
        ]);

        $scores = [
            'original' => 0,
            'durian' => 0,
        ];

        foreach ($this->questions as $question) {
            $answer = $request->input("jawaban.{$question['id']}");
            $tag = $question['pilihan'][$answer]['tag'] ?? 'original';

            if (isset($scores[$tag])) {
                $scores[$tag]++;
            }
        }

        arsort($scores);

        $winnerTag = array_key_first($scores) ?? 'original';

        return view('quiz.result', [
            'tag' => $winnerTag,
            'rekomendasi' => $this->recommendations[$winnerTag],
        ]);
    }
}