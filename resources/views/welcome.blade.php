<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUM Store Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center space-x-6">
                <h1 class="text-pink-500 font-bold text-xl">
                    <img src="{{ asset('assets/img/nhshop.png') }}" alt="" style="width: 100px;">
                </h1>
                <nav class="flex space-x-4">
                    <a href="#" class="text-gray-700 hover:text-pink-500">BELANJA</a>
                    <a href="#" class="text-gray-700 hover:text-pink-500">PENCARIAN</a>
                    <a href="#" class="text-gray-700 hover:text-pink-500">BLOG</a>
                    <a href="#" class="text-gray-700 hover:text-pink-500">TENTANG</a>
                    <a href="#" class="text-gray-700 hover:text-pink-500">KONTAK</a>
                </nav>
            </div>
            <div class="flex items-center space-x-4">
                <select class="text-gray-700 border-none outline-none">
                    <option>LANGUAGE</option>
                </select>
                <select class="text-gray-700 border-none outline-none">
                    <option>CURRENCY</option>
                </select>
                <a href="#"><svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></a>
                <a href="#"><svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg></a>
                <a href="#"><svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-gray-100 h-[500px] flex items-center">
        <div class="container mx-auto flex items-center justify-between px-6">
            <div class="max-w-md">
                <h2 class="text-4xl font-bold text-gray-800">Selamat Datang Di NHShop</h2>
                <h1 class="text-3xl font-bold text-gray-800 mt-2">Belanja Lebih Mudah Dan Hemat</h1>
                <button class="mt-6 bg-pink-500 text-white px-6 py-2 rounded-full hover:bg-pink-600">Belanja Sekarang</button>
            </div>
            <div class="w-1/2">
                <!-- Placeholder for image -->
                <div class="h-96 bg-gray-300"></div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto grid grid-cols-4 gap-8 text-center">
            <div>
                <div class="w-12 h-12 mx-auto mb-4 rounded-full border border-gray-300 flex items-center justify-center">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
                </div>
                <h3 class="font-bold">MUDAH DAN HEMAT</h3>
                <p class="text-gray-600">Proses Cepat</p>
            </div>
            <div>
                <div class="w-12 h-12 mx-auto mb-4 rounded-full border border-gray-300 flex items-center justify-center">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"></path></svg>
                </div>
                <h3 class="font-bold">HEMAT</h3>
                <p class="text-gray-600">Harga Terjangkau</p>
            </div>
            <div>
                <div class="w-12 h-12 mx-auto mb-4 rounded-full border border-gray-300 flex items-center justify-center">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 6h18M3 14h18M3 18h18"></path></svg>
                </div>
                <h3 class="font-bold">GRATIS ONGKIR</h3>
                <p class="text-gray-600">Khusus Lokasi Terdekat</p>
            </div>
            <div>
                <div class="w-12 h-12 mx-auto mb-4 rounded-full border border-gray-300 flex items-center justify-center">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <h3 class="font-bold">PEMBAYARAN AMAN DAN MUDAH</h3>
                <p class="text-gray-600">100% Pembayaran Aman</p>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-center mb-8">Kategori</h2>
            <div class="grid grid-cols-6 gap-4">
                <div class="text-center">
                    <div class="w-24 h-24 mx-auto bg-gray-300 rounded-full"></div>
                    <p class="mt-2">Makanan</p>
                </div>
                <div class="text-center">
                    <div class="w-24 h-24 mx-auto bg-gray-300 rounded-full"></div>
                    <p class="mt-2">Pakaian</p>
                </div>
                <div class="text-center">
                    <div class="w-24 h-24 mx-auto bg-gray-300 rounded-full"></div>
                    <p class="mt-2">Parfum</p>
                </div>
                <div class="text-center">
                    <div class="w-24 h-24 mx-auto bg-gray-300 rounded-full"></div>
                    <p class="mt-2">Helm</p>
                </div>
                <div class="text-center">
                    <div class="w-24 h-24 mx-auto bg-gray-300 rounded-full"></div>
                    <p class="mt-2">Rumah</p>
                </div>
                <div class="text-center">
                    <div class="w-24 h-24 mx-auto bg-gray-300 rounded-full"></div>
                    <p class="mt-2">Skincare</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mother's Day Banner -->
    <section class="py-12 bg-white text-center">
        <h2 class="text-3xl font-bold">SELAMAT BELANJA!</h2>
        <button class="mt-4 bg-pink-500 text-white px-6 py-2 rounded-full hover:bg-pink-600">GIFT CARD</button>
    </section>

    <!-- Popular Products Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-center mb-8">TERPOPULER</h2>
            <div class="grid grid-cols-4 gap-6">
                <div class="relative">
                    <div class="h-64 bg-gray-300"></div>
                    <button class="absolute top-2 right-2">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </button>
                    <p class="mt-2">SWEATSHIRT</p>
                    <p class="text-gray-600">Blue Cotton</p>
                    <p class="font-bold">105€</p>
                </div>
                <div class="relative">
                    <div class="h-64 bg-gray-300"></div>
                    <button class="absolute top-2 right-2">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </button>
                    <p class="mt-2">SWEATSHIRT</p>
                    <p class="text-gray-600">Dark Blue</p>
                    <p class="font-bold">105€</p>
                </div>
                <div class="relative">
                    <div class="h-64 bg-gray-300"></div>
                    <button class="absolute top-2 right-2">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </button>
                    <p class="mt-2">OVERSIZE SWEATSHIRT</p>
                    <p class="text-gray-600">Light Brown</p>
                    <p class="font-bold">205€</p>
                </div>
                <div class="relative">
                    <div class="h-64 bg-gray-300"></div>
                    <button class="absolute top-2 right-2">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </button>
                    <p class="mt-2">MINI SKIRT</p>
                    <p class="text-gray-600">Light Green</p>
                    <p class="font-bold">205€</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscription Section -->
    <section class="py-12 bg-white text-center">
        <h2 class="text-2xl font-bold">GET 10% OFF YOUR FIRST ORDER</h2>
        <p class="text-gray-600 mt-2">Get special giveaways and once-in-a-lifetime deals</p>
        <div class="mt-4 flex justify-center">
            <input type="email" placeholder="Enter your email" class="border border-gray-300 px-4 py-2 rounded-l-full">
            <button class="bg-gray-800 text-white px-6 py-2 rounded-r-full">SUBSCRIBE</button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-8 border-t">
        <div class="container mx-auto flex justify-between px-6">
            <div>
                <h3 class="text-pink-500 font-bold mb-4">GUM</h3>
                <p>STORE</p>
            </div>
            <div>
                <h3 class="font-bold mb-4">CORPORATE</h3>
                <p><a href="#" class="text-gray-700 hover:text-pink-500">Shipping & Returns</a></p>
                <p><a href="#" class="text-gray-700 hover:text-pink-500">About Us</a></p>
                <p><a href="#" class="text-gray-700 hover:text-pink-500">Gift Card</a></p>
                <p><a href="#" class="text-gray-700 hover:text-pink-500">Data Preference</a></p>
                <p><a href="#" class="text-gray-700 hover:text-pink-500">Submit a Return</a></p>
            </div>
            <div>
                <h3 class="font-bold mb-4">SUPPORT</h3>
                <p><a href="#" class="text-gray-700 hover:text-pink-500">Contact us</a></p>
                <p><a href="#" class="text-gray-700 hover:text-pink-500">FAQ</a></p>
                <p><a href="#" class="text-gray-700 hover:text-pink-500">Privacy Policy</a></p>
            </div>
            <div>
                <div class="flex space-x-4 mb-4">
                    <select class="text-gray-700 border-none outline-none">
                        <option>LANGUAGE</option>
                    </select>
                    <select class="text-gray-700 border-none outline-none">
                        <option>CURRENCY</option>
                    </select>
                </div>
                <div class="flex space-x-4">
                    <a href="#"><svg class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                    <a href="#"><svg class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.326 3.608 1.302.975.975 1.24 2.242 1.302 3.608.058 1.265.069 1.645.069 4.849s-.012 3.584-.07 4.85c-.062 1.366-.326 2.633-1.302 3.608-.975.975-2.242 1.24-3.608 1.302-1.265.058-1.645.069-4.849.069s-3.584-.012-4.85-.07c-1.366-.062-2.633-.326-3.608-1.302-.975-.975-1.24-2.242-1.302-3.608-.058-1.265-.069-1.645-.069-4.849s.012-3.584.07-4.85c.062-1.366.326-2.633 1.302-3.608.975-.975 2.242-1.24 3.608-1.302 1.265-.058 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-1.285.058-2.163.263-2.94 1.04-.777.777-.982 1.655-1.04 2.94-.058 1.28-.072 1.688-.072 4.947s.014 3.667.072 4.947c.058 1.285.263 2.163 1.04 2.94.777.777 1.655.982 2.94 1.04 1.28.058 1.688.072 4.947.072s3.667-.014 4.947-.072c1.285-.058 2.163-.263 2.94-1.04.777-.777.982-1.655 1.04-2.94.058-1.28.072-1.688.072-4.947s-.014-3.667-.072-4.947c-.058-1.285-.263-2.163-1.04-2.94-.777-.777-1.655-.982-2.94-1.04-1.28-.058-1.688-.072-4.947-.072zm0 5.838c-3.313 0-6 2.687-6 6s2.687 6 6 6 6-2.687 6-6-2.687-6-6-6zm0 9.834c-2.208 0-4-1.792-4-4s1.792-4 4-4 4 1.792 4 4-1.792 4-4 4zm4.766-9.834c-.776 0-1.405-.629-1.405-1.405s.629-1.405 1.405-1.405 1.405.629 1.405 1.405-.629 1.405-1.405 1.405z"/></svg></a>
                </div>
                <div class="flex space-x-2 mt-4">
                    <img src="https://via.placeholder.com/40x20?text=PayPal" alt="PayPal">
                    <img src="https://via.placeholder.com/40x20?text=Visa" alt="Visa">
                </div>
            </div>
        </div>
    </footer>
</body>
</html>