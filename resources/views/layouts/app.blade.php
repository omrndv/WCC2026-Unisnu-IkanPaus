<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getuk Goreng Asri - @yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#5C2E00',
                        secondary: '#8B4513',
                        bgLight: '#F5E6D3',
                        accent: '#4A7C59',
                        highlight: '#F4A843',
                    },
                    fontFamily: {
                        'title': ['Playfair Display', 'serif'],
                        'body': ['Poppins', 'sans-serif'],
                    },
                    backgroundImage: {
                        'batik-pattern': "url('data:image/svg+xml,%3Csvg width=\\'60\\' height=\\'60\\' viewBox=\\'0 0 60 60\\' xmlns=\\'http://www.w3.org/2000/svg\\'%3E%3Cg fill=\\'none\\' fill-rule=\\'evenodd\\'%3E%3Cg fill=\\'%235c2e00\\' fill-opacity=\\'0.4\\'%3E%3Cpath d=\\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')",
                    },
                    animation: {
                        'marquee': 'marquee 25s linear infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': {
                                transform: 'translateX(0%)'
                            },
                            '100%': {
                                transform: 'translateX(-100%)'
                            },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        .hero-bg {
            background-image: linear-gradient(to bottom, rgba(92, 46, 0, 0.6), rgba(0, 0, 0, 0.7)),
                url('https://lh3.googleusercontent.com/gps-cs-s/APNQkAFTMowFW85qgPA73oljpBhkFqnbGvNFXHnQlhQZ_bzgkHipcYHLVz1XO9VX2H8pGI4QEZgfkQZULki6omwvSfr9awShwXheMpsJiCuAZNRVYOdvpdHgU2JFOAHI7CqVOuTO5Qw=s1360-w1360-h1020-rw');
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            box-shadow: 0 10px 40px -10px rgba(92, 46, 0, 0.15);
        }

        .img-zoom-container {
            overflow: hidden;
        }

        .img-zoom-container img {
            transition: transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .product-card:hover .img-zoom-container img {
            transform: scale(1.1);
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-[#FAFAFA] font-body text-gray-800 overflow-x-hidden selection:bg-highlight selection:text-primary">

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <script>
        gsap.registerPlugin(ScrollTrigger);

        // logika animasi navbar
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (nav) {
                if (window.scrollY > 50) {
                    nav.classList.add('py-1');
                    nav.classList.remove('py-2');
                    nav.classList.add('max-w-3xl');
                    nav.classList.remove('max-w-7xl');
                } else {
                    nav.classList.add('py-2');
                    nav.classList.remove('py-1');
                    nav.classList.add('max-w-7xl');
                    nav.classList.remove('max-w-3xl');
                }
            }
        });
    </script>

    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil Keluar',
            text: "{{ session('success') }}",
            confirmButtonColor: '#5C2E00',
        });
    </script>
    @endif
    @stack('scripts')
</body>

</html>