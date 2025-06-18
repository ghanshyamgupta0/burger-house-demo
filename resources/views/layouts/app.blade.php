<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Burger House & Crunchy Fried Chicken - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-red-600 text-white shadow-lg">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold">
                    <a href="{{ route('home') }}">Burger House</a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="hover:text-gray-200">Home</a>
                    <a href="{{ route('menu') }}" class="hover:text-gray-200">Menu</a>
                    <a href="{{ route('about') }}" class="hover:text-gray-200">About Us</a>
                    <a href="{{ route('gallery') }}" class="hover:text-gray-200">Gallery</a>
                    <a href="{{ route('contact') }}" class="hover:text-gray-200">Contact</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button class="text-white focus:outline-none">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="container mx-auto px-6 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <p>Dulegauda, Nepal</p>
                    <p>Phone: +977 1234567890</p>
                    <p>Email: info@burgerhouse.com</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Opening Hours</h3>
                    <p>Monday - Friday: 10:00 AM - 10:00 PM</p>
                    <p>Saturday - Sunday: 11:00 AM - 11:00 PM</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p>&copy; 2025 The Burger House & Crunchy Fried Chicken. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>