@extends('layouts.app')

@section('title', 'Contact Us')

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
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
                <p class="text-xl">We'd love to hear from you</p>
            </div>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="container mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold mb-8">Send us a Message</h2>
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="tel" id="phone" name="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-red-600 text-white px-6 py-3 rounded-md hover:bg-red-700 transition duration-300">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold mb-8">Get in Touch</h2>
                <div class="space-y-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">Location</h3>
                        <p class="text-gray-600">Dulegauda, Nepal</p>
                        <p class="text-gray-600">Near City Center</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">Contact Information</h3>
                        <p class="text-gray-600"><i class="fas fa-phone mr-2"></i> +977 1234567890</p>
                        <p class="text-gray-600"><i class="fas fa-envelope mr-2"></i> info@burgerhouse.com</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">Opening Hours</h3>
                        <p class="text-gray-600">Monday - Friday: 10:00 AM - 10:00 PM</p>
                        <p class="text-gray-600">Saturday - Sunday: 11:00 AM - 11:00 PM</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-600 hover:text-red-600">
                                <i class="fab fa-facebook text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-red-600">
                                <i class="fab fa-instagram text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-red-600">
                                <i class="fab fa-twitter text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="w-full h-[400px] bg-gray-200">
        <!-- Replace with actual Google Maps embed code -->
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.383715783045!2d85.3173!3d27.7172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDQzJzAyLjAiTiA4NcKwMTknMDIuMyJF!5e0!3m2!1sen!2snp!4v1620000000000!5m2!1sen!2snp" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
@endsection