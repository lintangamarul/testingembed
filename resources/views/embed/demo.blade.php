@extends('embed.layouts.company')

@section('title', 'ClarityTools - Innovative Embedding Solutions')

@section('content')
    <!-- 2. Hero Section -->
    <section class="py-20 bg-primary-blue bg-opacity-90">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl md:text-6xl font-extrabold text-white leading-tight">
                Easy Integration, Accurate Analysis.
            </h1>
            <p class="mt-4 text-xl text-white opacity-80 max-w-3xl mx-auto">
                We provide web-based embeddable tools with high-level security to enhance your platform's functionality.
            </p>
            <a href="#products" class="mt-8 inline-block bg-white text-primary-dark font-bold py-3 px-8 rounded-full shadow-lg hover:shadow-xl hover:bg-gray-100 transition duration-300 transform hover:scale-105">
                View Our Product Demo
            </a>
        </div>
    </section>

    <!-- 3. Product & Iframe Demo Section -->
    <div id="products" class="pt-20 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">Integrate Fast Tools into Your Site</h2>
            <p class="text-center text-lg text-gray-500 mb-12 max-w-3xl mx-auto">
                With a simple *iframe* code, you can instantly present advanced calculators, 
                interactive forms, or data conversion tools directly on your web page.
            </p>
            
            <!-- Iframe Card Container -->
            <div class="bg-white p-4 sm:p-8 rounded-2xl shadow-2xl border border-gray-100">
                <h3 class="text-2xl font-semibold text-primary-dark mb-4 border-b pb-3">Embedded Tool Demonstration (Calculator)</h3>
                
                <div class="iframe-wrapper shadow-xl ring-4 ring-primary-blue/30">
                    <!-- The requested Iframe is here -->
                    <iframe 
                        src="https://review.clttoolbox.com.au/feature-dev/add-embed/embed/calculator/1d47b44c24b2912b7904788f735aceaf6e1512118e7e1cc64b11c88787c8dbc9" 
                        width="100%" 
                        height="600" 
                        frameborder="0" 
                        allowfullscreen 
                        class="rounded-xl">
                    </iframe>
                </div>

                <div class="mt-6 p-4 bg-yellow-50 border-l-4 border-yellow-500 text-yellow-800 rounded-md">
                    <p class="font-bold">Important Notice:</p>
                    <p class="text-sm">For actual use, ensure you replace 
                        <code class="bg-yellow-100 p-0.5 rounded text-sm font-mono text-yellow-900">{token}</code> 
                        in the *iframe*'s <code class="bg-yellow-100 p-0.5 rounded text-sm font-mono text-yellow-900">src</code> 
                        attribute with a valid authentication token from your ClarityTools dashboard.</p>
                </div>
                
            </div>
            
        </div>
    </div>

    <!-- 4. About Us Section -->
    <div class="bg-white py-20" id="about">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-primary-blue font-semibold uppercase tracking-wider">About ClarityTools</span>
                    <h2 class="mt-2 text-4xl font-extrabold text-gray-800">Our Mission: Simplifying Data Integration</h2>
                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Founded in 2020, ClarityTools exists to bridge the gap between complex *backend* functionality 
                        and seamless *frontend* user experience. We believe every platform, large or small, deserves sophisticated 
                        tools without needing development from scratch.
                    </p>
                    <ul class="mt-6 space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary-blue mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Focus on Security and Performance.
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary-blue mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Clear and Easy-to-Understand Documentation.
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary-blue mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Responsive Technical Support.
                        </li>
                    </ul>
                </div>
                <!-- Placeholder Image -->
                <div class="hidden md:block">
                     <img src="https://placehold.co/600x400/10b981/ffffff?text=Professional+Team" alt="Image of Professional Team" class="rounded-2xl shadow-xl">
                </div>
            </div>
        </div>
    </div>
    
    <!-- 5. Our Features Section -->
    <div class="py-20" id="features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-16">Why Choose ClarityTools?</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition duration-500 transform hover:-translate-y-1 border border-gray-100">
                    <div class="flex items-center justify-center w-12 h-12 bg-primary-blue rounded-full text-white mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Implementation Speed</h3>
                    <p class="text-gray-500">It only takes a few minutes to embed our tools. No complex installation or additional *libraries* are needed.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition duration-500 transform hover:-translate-y-1 border border-gray-100">
                    <div class="flex items-center justify-center w-12 h-12 bg-primary-blue rounded-full text-white mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.618a8.618 8.618 0 010 12.728l-6.364 6.364a9 9 0 01-12.728-12.728l6.364-6.364a8.618 8.618 0 0112.728 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Guaranteed Data Security</h3>
                    <p class="text-gray-500">All our tools are hosted on secure infrastructure with end-to-end (E2E) encryption and token authentication.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition duration-500 transform hover:-translate-y-1 border border-gray-100">
                    <div class="flex items-center justify-center w-12 h-12 bg-primary-blue rounded-full text-white mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Fully Responsive Design</h3>
                    <p class="text-gray-500">Our embedded tools are designed to look perfect on all devices, from desktops to smartphones.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- 6. Call to Action (CTA) Section -->
    <section class="bg-primary-dark py-16" id="contact">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white">Ready to Grow Your Platform?</h2>
            <p class="mt-4 text-white opacity-90 max-w-2xl mx-auto">
                Get access to thousands of powerful tools and optimize your user experience today.
            </p>
            <a href="#" class="mt-8 inline-block bg-yellow-400 text-gray-900 font-bold py-3 px-8 rounded-full shadow-lg hover:bg-yellow-300 transition duration-300 transform hover:scale-105">
                Start Your Free Trial
            </a>
        </div>
    </section>
@endsection
