@extends('embed.layouts.company')

@section('title', 'Ribbed Deck Calculator - ClarityTools')

@section('content')
    <!-- Hero Section -->
    <section class="py-16 bg-gradient-to-r from-primary-blue to-primary-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
                Ribbed Deck Calculator
            </h1>
            <p class="mt-4 text-lg text-white opacity-90 max-w-2xl mx-auto">
                Advanced deck design and analysis tool for structural engineering calculations.
            </p>
        </div>
    </section>

    <!-- Calculator Description & Iframe Section -->
    <div class="pt-16 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Description Section -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">About Ribbed Deck Calculator</h2>
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                    <div class="prose max-w-none text-gray-600">
                        <p class="text-lg leading-relaxed mb-4">
                            The Ribbed Deck Calculator is a sophisticated tool designed for structural engineers and architects 
                            to perform comprehensive deck design calculations. This powerful calculator helps you analyze and 
                            optimize ribbed deck structures with precision and efficiency.
                        </p>
                        
                        <h3 class="text-xl font-semibold text-gray-800 mt-6 mb-4">Key Features:</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Load Analysis:</strong> Calculate distributed loads, point loads, and moment distributions</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Material Properties:</strong> Support for various materials including concrete, steel, and composite materials</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Design Code Compliance:</strong> Adheres to international building codes and standards</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Visual Output:</strong> Generate detailed reports and visual representations of your design</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Real-time Calculations:</strong> Instant results as you adjust parameters</span>
                            </li>
                        </ul>

                        <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4">Use Cases:</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Commercial Buildings</h4>
                                <p class="text-sm text-gray-600">Design and analyze deck systems for office buildings, shopping malls, and commercial complexes.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Residential Projects</h4>
                                <p class="text-sm text-gray-600">Calculate optimal deck configurations for residential buildings and multi-family housing.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Industrial Facilities</h4>
                                <p class="text-sm text-gray-600">Handle heavy load requirements for warehouses and industrial structures.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Infrastructure Projects</h4>
                                <p class="text-sm text-gray-600">Design bridge decks and other infrastructure elements with confidence.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Calculator Iframe Container -->
            <div class="bg-white p-4 sm:p-8 rounded-2xl shadow-2xl border border-gray-100">
                <h3 class="text-2xl font-semibold text-primary-dark mb-4 border-b pb-3">
                    <i class="fas fa-calculator mr-2"></i>Ribbed Deck Calculator Tool
                </h3>
                
                <div class="iframe-wrapper shadow-xl ring-4 ring-primary-blue/30">
                    <script src="https://review.clttoolbox.com.au/feature-dev/add-embed/embed/script/20cac6f800d11d49da4cb67fb06d56a77daaef57eb61ba217f5ca3ef190d4e4a.js" defer></script>
                        <script>
                        window.addEventListener('load', function() {
                            window.cltToolboxEmbedCalculator({
                                containerId: 'clt-toolbox-embed',
                                type: 'ribbed_deck_design',
                                width: '100%',
                                height: '880px',
                                border: 'none',
                                borderRadius: '8px'
                            });
                        });
                        </script>
                    <div id="clt-toolbox-embed"></div>
                </div>

                <div class="mt-6 p-4 bg-blue-50 border-l-4 border-blue-500 text-blue-800 rounded-md">
                    <p class="font-bold flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        How to Use:
                    </p>
                    <ul class="text-sm mt-2 space-y-1 ml-7">
                        <li>1. Enter your deck dimensions and specifications</li>
                        <li>2. Select material properties from the dropdown</li>
                        <li>3. Input load conditions and constraints</li>
                        <li>4. Review the calculated results and design recommendations</li>
                        <li>5. Export or save your calculations for documentation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
