<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ClarityTools - Innovative Embedding Solutions')</title>
    <!-- Memuat Tailwind CSS CDN untuk styling modern -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Setting Inter font as default */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fb;
            color: #1f2937;
        }
        /* Style for making the iframe responsive (4:3 ratio) */
        .iframe-wrapper {
            position: relative;
            width: 100%;
            padding-bottom: 75%; 
            height: 0;
            overflow: hidden;
            border-radius: 1rem; /* Rounded corners */
        }
        .iframe-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        /* Dropdown styles - persistent hover */
        .dropdown {
            position: relative;
        }
        
        /* Invisible bridge to prevent dropdown from disappearing */
        .dropdown::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            height: 8px;
            z-index: 999;
        }
        
        .dropdown-menu {
            display: none !important;
            position: absolute;
            top: calc(100% + 8px);
            left: 0;
            z-index: 1000;
            width: 224px;
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            border: 1px solid #f3f4f6;
            padding: 8px 0;
        }
        .dropdown.active .dropdown-menu {
            display: block !important;
        }
    </style>
    <script>
        // Konfigurasi warna Tailwind
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-blue': '#10b981', /* Teal 500 */
                        'primary-dark': '#0f766e', /* Teal 700 */
                    }
                }
            }
        }
    </script>
    @stack('styles')
</head>
<body class="antialiased">

    <!-- 1. Header/Navigation Bar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="{{ route('embed.demo') }}" class="flex-shrink-0 text-2xl font-bold text-primary-dark tracking-wide">
                    Clarity<span class="text-primary-blue">Tools</span>
                </a>
                <!-- Menu Desktop -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="{{ route('embed.demo') }}#products" class="text-gray-600 hover:text-primary-blue transition duration-300 font-medium">Products</a>
                    <a href="{{ route('embed.demo') }}#about" class="text-gray-600 hover:text-primary-blue transition duration-300 font-medium">About Us</a>
                    <a href="{{ route('embed.demo') }}#features" class="text-gray-600 hover:text-primary-blue transition duration-300 font-medium">Features</a>
                    
                    <!-- Calculator List Dropdown -->
                    <div class="relative dropdown">
                        <button class="text-gray-600 hover:text-primary-blue transition duration-300 font-medium flex items-center">
                            Calculator List
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute left-0 w-56 bg-white rounded-lg shadow-xl border border-gray-100 py-2">
                            <a href="{{ route('embed.calculator.ribbed-deck') }}" class="block px-4 py-2 text-gray-700 hover:bg-primary-blue hover:text-white transition duration-200">
                                <div class="font-semibold">Ribbed Deck</div>
                                <div class="text-xs opacity-75">Deck calculator tool</div>
                            </a>
                            <a href="{{ route('embed.calculator.beam-penetration') }}" class="block px-4 py-2 text-gray-700 hover:bg-primary-blue hover:text-white transition duration-200">
                                <div class="font-semibold">Beam Penetration</div>
                                <div class="text-xs opacity-75">Beam analysis tool</div>
                            </a>
                            <a href="{{ route('embed.calculator.clt-wall') }}" class="block px-4 py-2 text-gray-700 hover:bg-primary-blue hover:text-white transition duration-200">
                                <div class="font-semibold">CLT Wall</div>
                                <div class="text-xs opacity-75">Wall design tool</div>
                            </a>
                        </div>
                    </div>
                    
                    <a href="{{ route('embed.demo') }}#contact" class="text-white bg-primary-blue hover:bg-primary-dark px-4 py-1.5 rounded-full transition duration-300 shadow-md">Contact Us</a>
                </div>
                <!-- Menu Mobile (Placeholder) -->
                <button class="md:hidden text-gray-600 hover:text-primary-blue p-2 rounded-md transition duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- 7. Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Column 1: Logo & Description -->
                <div>
                    <h3 class="text-xl font-bold text-primary-blue mb-3">ClarityTools</h3>
                    <p class="text-sm text-gray-400">The leading data embedding solution for the modern web.</p>
                </div>
                <!-- Column 2: Navigation -->
                <div>
                    <h4 class="text-lg font-semibold mb-3">Navigation</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="{{ route('embed.demo') }}#products" class="hover:text-primary-blue transition duration-300">Our Products</a></li>
                        <li><a href="{{ route('embed.demo') }}#about" class="hover:text-primary-blue transition duration-300">About Us</a></li>
                        <li><a href="{{ route('embed.demo') }}#features" class="hover:text-primary-blue transition duration-300">Features</a></li>
                    </ul>
                </div>
                <!-- Column 3: Resources -->
                <div>
                    <h4 class="text-lg font-semibold mb-3">Resources</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-primary-blue transition duration-300">API Documentation</a></li>
                        <li><a href="#" class="hover:text-primary-blue transition duration-300">Terms & Conditions</a></li>
                        <li><a href="#" class="hover:text-primary-blue transition duration-300">Privacy Policy</a></li>
                    </ul>
                </div>
                <!-- Column 4: Contact -->
                <div>
                    <h4 class="text-lg font-semibold mb-3">Contact Us</h4>
                    <p class="text-sm text-gray-400">Email: info@claritytools.com</p>
                    <p class="text-sm text-gray-400">Phone: (021) 555-TOOLS</p>
                </div>
            </div>
            <div class="mt-10 pt-6 border-t border-gray-700 text-center">
                <p class="text-sm text-gray-500">© 2024 ClarityTools. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
    <script>
        // Handle dropdown menu visibility with invisible bridge
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            let hideTimeout;
            
            dropdown.addEventListener('mouseenter', function() {
                clearTimeout(hideTimeout);
                this.classList.add('active');
            });
            
            dropdown.addEventListener('mouseleave', function() {
                // Add small delay before hiding to ensure smooth transition
                hideTimeout = setTimeout(() => {
                    this.classList.remove('active');
                }, 100);
            });
            
            // Close dropdown when clicking a link inside
            dropdown.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', function() {
                    dropdown.classList.remove('active');
                });
            });
        });
    </script>
</body>
</html>
