@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-green-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <!-- Logo -->
            <div class="flex justify-center">
                <div class="flex items-center bg-white p-4 rounded-full shadow-md">
                    <i class="fas fa-leaf text-green-600 text-3xl"></i>
                    <span class="ml-2 text-2xl font-semibold text-green-800">NutriClinic</span>
                </div>
            </div>

            <!-- Form Container -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Sign In</h2>
                    <p class="text-gray-600 mb-6">Enter your credentials to access your account</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                        <input id="email" type="email"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 @error('email') border-red-500 @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Enter your email">

                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                        <input id="password" type="password"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 @error('password') border-red-500 @enderror"
                            name="password" required autocomplete="current-password" placeholder="Enter your password">

                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                                class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                            <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                        </div>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-green-600 hover:text-green-800" href="{{ route('password.request') }}">
                                Forgot Password?
                            </a>
                        @endif
                    </div>

                    <button type="submit"
                        class="w-full bg-green-600 text-white py-3 px-4 rounded-lg font-medium hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition duration-150 ease-in-out">
                        Sign In
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-gray-600">Don't have an account?
                        <a href="{{ route('register') }}" class="text-green-600 font-medium hover:text-green-800">Sign
                            up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer id="contact" class="bg-green-600 text-white py-10">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div>
                <h5 class="font-bold text-lg">NutriClinic</h5>
                <p class="mt-2 text-sm">Your trusted partner in health & nutrition.</p>
            </div>
            <div>
                <h5 class="font-bold text-lg">Quick Links</h5>
                <ul class="mt-2 space-y-2 text-sm">
                    <li><a href="{{ route('welcome')}}" class="hover:underline">Home</a></li>
                    <li><a href="#services" class="hover:underline">Services</a></li>
                    <li><a href="#products" class="hover:underline">Products</a></li>
                    <li><a href="#contact" class="hover:underline">Contact</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-bold text-lg">Contact Us</h5>
                <p class="mt-2 text-sm">Email: support@nutriclinic.com</p>
                <p class="text-sm">Phone: +254 700 123 456</p>
            </div>
        </div>
        <div class="text-center mt-8 text-sm text-green-200">
            © {{ date('Y') }} NutriClinic. All Rights Reserved.
        </div>
    </footer>
@endsection
