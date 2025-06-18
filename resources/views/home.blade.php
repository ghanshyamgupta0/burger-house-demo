@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-[600px]">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" 
                 alt="Burger Hero" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <div class="relative container mx-auto px-6 h-full flex items-center">
            <div class="text-white">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">The Burger House & Crunchy Fried Chicken</h1>
                <p class="text-xl md:text-2xl mb-8">Serving the best burgers and fried chicken in Dulegauda</p>
                <a href="{{ route('menu') }}" class="bg-red-600 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-red-700 transition duration-300">
                    View Our Menu
                </a>
            </div>
        </div>
    </div>

    <!-- Featured Items -->
    <div class="container mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold text-center mb-12">Our Specialties</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Burger Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                     alt="Classic Burger" 
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Classic Burger</h3>
                    <p class="text-gray-600 mb-4">Our signature beef patty with fresh vegetables and special sauce</p>
                    <p class="text-red-600 font-bold">Rs. 250</p>
                </div>
            </div>

            <!-- Fried Chicken Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://iwashyoudry.com/wp-content/uploads/2021/06/Crispy-Fried-Chicken-Recipe-7.jpg" 
                     alt="Crispy Fried Chicken" 
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Crispy Fried Chicken</h3>
                    <p class="text-gray-600 mb-4">Perfectly seasoned and crispy fried chicken pieces</p>
                    <p class="text-red-600 font-bold">Rs. 300</p>
                </div>
            </div>

            <!-- Combo Meal Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1551782450-a2132b4ba21d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                     alt="Family Combo" 
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Family Combo</h3>
                    <p class="text-gray-600 mb-4">2 burgers, 4 pieces of chicken, fries, and drinks</p>
                    <p class="text-red-600 font-bold">Rs. 800</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="bg-gray-100 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Why Choose Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <i class="fas fa-utensils text-4xl text-red-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Fresh Ingredients</h3>
                    <p class="text-gray-600">We use only the freshest ingredients in our dishes</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-clock text-4xl text-red-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Quick Service</h3>
                    <p class="text-gray-600">Fast and efficient service for your convenience</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-star text-4xl text-red-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Quality Food</h3>
                    <p class="text-gray-600">Consistently delicious food that you'll love</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-smile text-4xl text-red-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Happy Customers</h3>
                    <p class="text-gray-600">Join our satisfied customer base</p>
                </div>
            </div>
        </div>
    </div>
@endsection