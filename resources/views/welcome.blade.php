<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriClinic</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            font-size: 1.2rem;
        }

        .hero-pattern {
            background: linear-gradient(rgba(16, 105, 77, 0.8), rgba(16, 105, 77, 0.8)), url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect fill="%2310694d" width="100" height="100"/><path fill="%23085541" d="M0 0L100 100" stroke-width="0"/></svg>');
            background-size: cover;
        }
    </style>
</head>

<body class="bg-green-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-leaf text-green-600 text-2xl"></i>
                        <span class="ml-2 text-xl font-semibold text-green-800">NutriClinic</span>
                    </div>
                    <div class="hidden md:ml-6 md:flex md:space-x-8">
                        <a href="#"
                            class="border-green-500 text-green-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Home</a>
                        <a href="#"
                            class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Services</a>
                        <a href="#"
                            class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Products</a>
                        <a href="#"
                            class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Contact</a>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="hidden md:ml-4 md:flex md:items-center space-x-3">
                        @guest
                            <a href="{{ route('register') }}"
                                class="bg-green-100 text-green-700 px-4 py-2 rounded-md text-sm font-medium hover:bg-green-200">
                                Register
                            </a>
                            <a href="{{ route('login') }}"
                                class="bg-green-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-700">
                                Login
                            </a>
                        @endguest
                    </div>

                    <div class="-mr-2 flex items-center md:hidden">
                        <button type="button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500"
                            aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-pattern text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="md:flex md:items-center md:justify-between">
                <div class="md:w-1/2">
                    <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl md:text-6xl">Your Journey to Better
                        Health Starts Here</h1>
                    <p class="mt-3 text-base text-green-100 sm:mt-5 sm:text-lg sm:max-w-xl md:mt-5 md:text-xl">
                        Personalized nutrition plans and expert medical guidance for a healthier you.</p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-start">
                        <div class="rounded-md shadow">
                            <a href="#"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-green-700 bg-white hover:bg-green-50 md:py-4 md:text-lg md:px-10">Book
                                an Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-green-600 tracking-wide uppercase">Services</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900 sm:text-4xl">How We Can Help You</p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Service 1 -->
                <div class="bg-green-50 rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow duration-300">
                    <div class="inline-flex items-center justify-center p-3 bg-green-100 rounded-md shadow-inner">
                        <i class="fas fa-user-md text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Nutrition Consultation</h3>
                    <p class="mt-2 text-base text-gray-500">One-on-one sessions with our certified nutritionists to
                        create personalized diet plans.</p>
                </div>

                <!-- Service 2 -->
                <div class="bg-green-50 rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow duration-300">
                    <div class="inline-flex items-center justify-center p-3 bg-green-100 rounded-md shadow-inner">
                        <i class="fas fa-heartbeat text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Health Monitoring</h3>
                    <p class="mt-2 text-base text-gray-500">Track your health progress with regular check-ups and
                        monitoring.</p>
                </div>

                <!-- Service 3 -->
                <div class="bg-green-50 rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow duration-300">
                    <div class="inline-flex items-center justify-center p-3 bg-green-100 rounded-md shadow-inner">
                        <i class="fas fa-utensils text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Diet Planning</h3>
                    <p class="mt-2 text-base text-gray-500">Custom meal plans tailored to your specific health needs and
                        preferences.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-12 bg-green-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-green-200 tracking-wide uppercase">Our Products</h2>
                <p class="mt-2 text-3xl font-extrabold text-white sm:text-4xl">Supplements & Health Packages</p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <!-- Product 1 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="h-48 bg-green-200 flex items-center justify-center">
                        <i class="fas fa-pills text-green-600 text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">Vitamin D Supplements</h3>
                        <p class="mt-2 text-sm text-gray-500">Boost your immunity with our high-quality Vitamin D
                            supplements.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-green-700 font-bold">$24.99</span>
                            <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="h-48 bg-green-200 flex items-center justify-center">
                        <i class="fas fa-capsules text-green-600 text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">Omega-3 Capsules</h3>
                        <p class="mt-2 text-sm text-gray-500">Essential fatty acids for heart and brain health.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-green-700 font-bold">$29.99</span>
                            <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="h-48 bg-green-200 flex items-center justify-center">
                        <i class="fas fa-weight text-green-600 text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">Weight Management</h3>
                        <p class="mt-2 text-sm text-gray-500">Complete package for healthy weight management.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-green-700 font-bold">$89.99</span>
                            <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="h-48 bg-green-200 flex items-center justify-center">
                        <i class="fas fa-apple-alt text-green-600 text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">Detox Cleanse</h3>
                        <p class="mt-2 text-sm text-gray-500">14-day detox program to cleanse your body.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-green-700 font-bold">$49.99</span>
                            <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center text-white font-medium hover:text-green-200">
                    View all products
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-green-600 tracking-wide uppercase">Testimonials</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900 sm:text-4xl">What Our Patients Say</p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-3">
                <!-- Testimonial 1 -->
                <div class="bg-green-50 rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="h-12 w-12 rounded-full bg-green-200 flex items-center justify-center">
                            <span class="text-green-700 font-bold">JD</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-gray-900">John Doe</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600">"The nutrition plan I received from NutriClinic completely
                        transformed my energy levels and overall health. Highly recommend!"</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-green-50 rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="h-12 w-12 rounded-full bg-green-200 flex items-center justify-center">
                            <span class="text-green-700 font-bold">SM</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-gray-900">Sarah Miller</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600">"The doctors at NutriClinic are incredibly knowledgeable and caring.
                        They took the time to understand my unique health needs."</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-green-50 rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="h-12 w-12 rounded-full bg-green-200 flex items-center justify-center">
                            <span class="text-green-700 font-bold">RJ</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-gray-900">Robert Johnson</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600">"I've tried many supplements, but NutriClinic's products are truly
                        effective. The omega-3 capsules have helped my joint pain significantly."</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="bg-green-600 text-white py-10">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div>
                <h5 class="font-bold text-lg">NutriClinic</h5>
                <p class="mt-2 text-sm">Your trusted partner in health & nutrition.</p>
            </div>
            <div>
                <h5 class="font-bold text-lg">Quick Links</h5>
                <ul class="mt-2 space-y-2 text-sm">
                    <li><a href="{{ route('welcome') }}" class="hover:underline">Home</a></li>
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

</body>

</html>
