@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-[300px]">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" 
                 alt="Restaurant Interior" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <div class="relative container mx-auto px-6 h-full flex items-center">
            <div class="text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Gallery</h1>
                <p class="text-xl">Take a look at our delicious food and cozy atmosphere</p>
            </div>
        </div>
    </div>

    <!-- Gallery Grid -->
    <div class="container mx-auto px-6 py-16">
        <!-- Food Gallery -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-center">Our Food</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Burger Images -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Classic Burger" 
                         class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <p class="text-white text-xl font-bold">Classic Burger</p>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1553979459-d2229ba7433b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Cheese Burger" 
                         class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <p class="text-white text-xl font-bold">Cheese Burger</p>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1606755962773-d324e0a13086?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Chicken Burger" 
                         class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <p class="text-white text-xl font-bold">Chicken Burger</p>
                    </div>
                </div>

                <!-- Fried Chicken Images -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2023/2/23/FNK_Indian-Fried-Chicken_s4x3.jpg.rend.hgtvcom.1280.960.suffix/1677264108617.webp" 
                         alt="Fried Chicken" 
                         class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <p class="text-white text-xl font-bold">Crispy Fried Chicken</p>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://i.ytimg.com/vi/Uw7bgrFAzDE/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBYadf4GUlNgidLu1VuopkOHCRQoA" 
                         alt="Chicken Combo" 
                         class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <p class="text-white text-xl font-bold">Chicken Combo</p>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://kadhaikhana.com/wp-content/uploads/2023/05/Chicken-dum-Biryani-family-pack-600x600.webp" 
                         alt="Family Pack" 
                         class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <p class="text-white text-xl font-bold">Family Pack</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Restaurant Interior -->
        <div>
            <h2 class="text-3xl font-bold mb-8 text-center">Our Restaurant</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Restaurant Interior" 
                         class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <p class="text-white text-xl font-bold">Cozy Interior</p>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Dining Area" 
                         class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <p class="text-white text-xl font-bold">Dining Area</p>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Outdoor Seating" 
                         class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <p class="text-white text-xl font-bold">Outdoor Seating</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection