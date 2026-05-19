<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

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
                    }
                }
            }
        }
    </script>

    <style>
        .selection-gold::selection {
            background-color: #F4A843;
            color: #5C2E00;
        }

        @stack('styles')
    </style>
</head>

<body class="bg-[#FAFAFA] font-body text-gray-800 selection-gold">

    <main>
        @yield('content')
    </main>

    @stack('scripts')
</body>

</html>