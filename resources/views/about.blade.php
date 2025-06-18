@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-[400px]">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" 
                 alt="Restaurant Interior" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <div class="relative container mx-auto px-6 h-full flex items-center">
            <div class="text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Story</h1>
                <p class="text-xl">Serving delicious food since 2020</p>
            </div>
        </div>
    </div>

    <!-- About Content -->
    <div class="container mx-auto px-6 py-16">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold mb-8">Welcome to The Burger House & Crunchy Fried Chicken</h2>
            
            <div class="prose prose-lg">
                <p class="mb-6">
                    Located in the heart of Dulegauda, The Burger House & Crunchy Fried Chicken has been serving 
                    delicious burgers and fried chicken since 2020. Our journey began with a simple mission: to 
                    serve the best quality food with exceptional service.
                </p>

                <p class="mb-6">
                    We take pride in using only the freshest ingredients, sourced locally whenever possible. 
                    Our signature burgers are made with 100% beef patties, and our fried chicken is marinated 
                    in our secret recipe for 24 hours before being cooked to perfection.
                </p>

                <h3 class="text-2xl font-bold mt-12 mb-6">Our Commitment</h3>
                <ul class="list-disc pl-6 mb-6">
                    <li>Using fresh, high-quality ingredients</li>
                    <li>Maintaining consistent food quality</li>
                    <li>Providing excellent customer service</li>
                    <li>Creating a welcoming atmosphere</li>
                    <li>Supporting local suppliers</li>
                </ul>

                <h3 class="text-2xl font-bold mt-12 mb-6">Our Team</h3>
                <p class="mb-6">
                    Our team of experienced chefs and friendly staff work together to ensure that every visit 
                    to The Burger House & Crunchy Fried Chicken is memorable. We believe in continuous 
                    training and improvement to maintain the highest standards of food quality and service.
                </p>

                <h3 class="text-2xl font-bold mt-12 mb-6">Community Involvement</h3>
                <p class="mb-6">
                    We are proud to be part of the Dulegauda community. We regularly participate in local 
                    events and support community initiatives. Our restaurant has become a popular gathering 
                    place for families and friends to enjoy great food and create lasting memories.
                </p>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="bg-gray-100 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Why Choose Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <i class="fas fa-award text-4xl text-red-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-4">Quality Food</h3>
                    <p class="text-gray-600">
                        We use only the finest ingredients to ensure the best taste and quality in every dish.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <i class="fas fa-clock text-4xl text-red-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-4">Quick Service</h3>
                    <p class="text-gray-600">
                        Our efficient team ensures that you get your food quickly without compromising on quality.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <i class="fas fa-heart text-4xl text-red-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-4">Customer Satisfaction</h3>
                    <p class="text-gray-600">
                        Your satisfaction is our priority. We strive to provide the best dining experience.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection