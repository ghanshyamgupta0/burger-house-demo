@extends('layouts.app')

@section('title', 'Menu')

@section('content')
    <div class="container mx-auto px-6 py-16">
        <h1 class="text-4xl font-bold text-center mb-12">Our Menu</h1>

        <!-- Burgers Section -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-center">Burgers</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Classic Burger -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Classic Burger" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Classic Burger</h3>
                        <p class="text-gray-600 mb-4">Beef patty, lettuce, tomato, onion, special sauce</p>
                        <p class="text-red-600 font-bold">Rs. 250</p>
                    </div>
                </div>

                <!-- Cheese Burger -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1553979459-d2229ba7433b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Cheese Burger" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Cheese Burger</h3>
                        <p class="text-gray-600 mb-4">Beef patty, cheese, lettuce, tomato, special sauce</p>
                        <p class="text-red-600 font-bold">Rs. 280</p>
                    </div>
                </div>

                <!-- Chicken Burger -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1606755962773-d324e0a13086?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Chicken Burger" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Chicken Burger</h3>
                        <p class="text-gray-600 mb-4">Crispy chicken patty, lettuce, mayo, special sauce</p>
                        <p class="text-red-600 font-bold">Rs. 260</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fried Chicken Section -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-center">Fried Chicken</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- 2 Piece Chicken -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://selfiefamily.com/wp-content/uploads/2021/03/Fried-Chicken-2-Pcs.jpg" 
                         alt="2 Piece Chicken" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">2 Piece Chicken</h3>
                        <p class="text-gray-600 mb-4">2 pieces of crispy fried chicken with fries</p>
                        <p class="text-red-600 font-bold">Rs. 300</p>
                    </div>
                </div>

                <!-- 4 Piece Chicken -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1626082927389-6cd4f1f9d5f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="4 Piece Chicken" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">4 Piece Chicken</h3>
                        <p class="text-gray-600 mb-4">4 pieces of crispy fried chicken with fries</p>
                        <p class="text-red-600 font-bold">Rs. 550</p>
                    </div>
                </div>

                <!-- 8 Piece Chicken -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1626082927389-6cd4f1f9d5f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="8 Piece Chicken" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">8 Piece Chicken</h3>
                        <p class="text-gray-600 mb-4">8 pieces of crispy fried chicken with fries</p>
                        <p class="text-red-600 font-bold">Rs. 1000</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sides Section -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-center">Sides</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- French Fries -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1573080496219-bb080dd4f877?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="French Fries" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">French Fries</h3>
                        <p class="text-gray-600 mb-4">Crispy golden fries with seasoning</p>
                        <p class="text-red-600 font-bold">Rs. 120</p>
                    </div>
                </div>

                <!-- Onion Rings -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581006852262-e4307cf6283a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Onion Rings" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Onion Rings</h3>
                        <p class="text-gray-600 mb-4">Crispy battered onion rings</p>
                        <p class="text-red-600 font-bold">Rs. 150</p>
                    </div>
                </div>

                <!-- Coleslaw -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1625944525903-bb1f5d926436?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Coleslaw" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Coleslaw</h3>
                        <p class="text-gray-600 mb-4">Fresh cabbage and carrot salad</p>
                        <p class="text-red-600 font-bold">Rs. 100</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Beverages Section -->
        <div>
            <h2 class="text-3xl font-bold mb-8 text-center">Beverages</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Soft Drinks -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1622483767028-3f66f32aef97?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Soft Drinks" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Soft Drinks</h3>
                        <p class="text-gray-600 mb-4">Coca-Cola, Sprite, Fanta (330ml)</p>
                        <p class="text-red-600 font-bold">Rs. 80</p>
                    </div>
                </div>

                <!-- Milkshake -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1577805947697-89e18249d767?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Milkshake" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Milkshake</h3>
                        <p class="text-gray-600 mb-4">Chocolate, Vanilla, Strawberry</p>
                        <p class="text-red-600 font-bold">Rs. 150</p>
                    </div>
                </div>

                <!-- Iced Tea -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1556679343-cf6d7dd3cd83?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Iced Tea" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Iced Tea</h3>
                        <p class="text-gray-600 mb-4">Fresh brewed iced tea with lemon</p>
                        <p class="text-red-600 font-bold">Rs. 100</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection