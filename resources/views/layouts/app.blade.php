<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
        }
        .menu-slide {
            transition: max-height 0.5s ease-in-out;
        }
        .menu-hidden {
            max-height: 0;
            overflow: hidden;
        }
        .menu-visible {
            max-height: 300px;
        }
		nav a:not(:first-child) {
			border-left: 1px solid #b3b3b3;
			padding-left: 10px;
		}
    </style>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('menu-hidden');
            menu.classList.toggle('menu-visible');
        }
    </script>

</head>
<body class="bg-gray-100">
    <div class="bg-red-600 py-2">
        <div class="container mx-auto text-white text-sm flex justify-between px-4">
            <a href="#" class="hover:underline">Müşteri İletişim Merkezi</a>
            <a href="#" class="hover:underline">0850 220 00 00</a>
        </div>
    </div>

    <header class="bg-white pt-2 md:pb-2 shadow-md">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Ziraat_Bankas%C4%B1_logo.svg/1200px-Ziraat_Bankas%C4%B1_logo.svg.png" alt="Logo" class="w-64 h-12">
            </a>
            <nav class="hidden md:flex space-x-6">
                <a href="#" class="text-gray-700 hover:text-red-600 font-medium">Bireysel</a>
                <a href="#" class="text-gray-700 hover:text-red-600 font-medium">Ticari</a>
                <a href="#" class="text-gray-700 hover:text-red-600 font-medium">Kurumsal</a>
            </nav>
            <div class="md:hidden">
                <button onclick="toggleMenu()" class="text-gray-700">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <nav id="mobile-menu" class="md:hidden bg-white px-4 py-2 menu-slide menu-hidden">
            <a href="#" class="block text-gray-700 py-2 hover:text-red-600">Bireysel</a>
            <a href="#" class="block text-gray-700 py-2 hover:text-red-600">Ticari</a>
            <a href="#" class="block text-gray-700 py-2 hover:text-red-600">Kurumsal</a>
        </nav>
    </header>

    <div class="flex flex-col items-center p-4 text-md my-4 text-justify">
        <h1 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-800 via-red-700 to-red-500 mb-4">İhtiyaç Krediniz Ziraat Bankası'nda Hazır!</h1>
        <p class="text-gray-600 mb-6">Ön onaylı ihtiyaç kredisi başvurunuzu şimdi yapın, hemen değerlensin! İhtiyaçlarınız beklemesin, Ziraat Bankası'nda özgürsün. 🚀</p>
    </div>

    <main class="container mx-auto pb-2 px-4">
        <div class="bg-zinc-50 p-8 shadow-lg rounded-lg max-w-lg mx-auto">
            <livewire:user-form />
        </div>
    </main>

<footer class="bg-[#3A3A3A] text-gray-50 py-8 mt-10">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <select class="bg-[#4C565A] w-full border-2 border-[#545f65] text-gray-200 p-2 rounded">
                    <option>Ziraat Bankası Hakkında</option>
                </select>
            </div>

            <div>
                <select class="bg-[#4C565A] w-full border-2 border-[#545f65] text-gray-200 p-2 rounded">
                    <option>Ziraat Mobil ve İnternet</option>
                </select>
            </div>

            <div>
                <select class="bg-[#4C565A] w-full border-2 border-[#545f65] text-gray-200 p-2 rounded">
                    <option>Krediler</option>
                </select>
            </div>

            <div>
                <select class="bg-[#4C565A] w-full border-2 border-[#545f65] text-gray-200 p-2 rounded">
                    <option>Faydalı Linkler</option>
                </select>
            </div>
        </div>

        <div class="mt-8 text-center text-gray-200 pt-2">
			<div class="mt-2 flex flex-col text-md">
                <a href="#" class="hover:underline">Kişisel Verilerin Korunması</a>
				<a href="#" class="hover:underline">Bilgi Toplumu Hizmetleri</a>
                <a href="#" class="hover:underline">Gizlilik</a>
                <a href="#" class="hover:underline">Yasal Uyarı</a>
            </div>
            <p class="pt-8">&copy; 2024 - T.C. Ziraat Bankası A.Ş.</p>
        </div>
    </div>

    <!-- Social Media Links -->
    <div class="mt-8 text-center">
        <p class="text-gray-50 font-bold mb-4">Bizi Takip Edin</p>
        <div class="flex justify-center items-center space-x-6 pb-2">
            <a href="#" class="w-10 text-gray-200 hover:text-gray-300 py-1 rounded-full"><i class="fab fa-facebook"></i></a>
            <a href="#" class="w-10 text-gray-200 hover:text-gray-300 py-1 rounded-full"><i class="fab fa-x-twitter"></i></a>
            <a href="#" class="w-10 text-gray-200 hover:text-gray-300 py-1 rounded-full"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="w-10 text-gray-200 hover:text-gray-300 py-1 rounded-full"><i class="fab fa-instagram"></i></a>
            <a href="#" class="w-10 text-gray-200 hover:text-gray-300 py-1 rounded-full"><i class="fab fa-youtube"></i></a>
        </div>
    </div>

</footer>

@livewireScripts
</body>
</html>
