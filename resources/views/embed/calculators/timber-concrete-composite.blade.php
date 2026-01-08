@extends('embed.layouts.company')

@section('title', 'Timber Concrete Composite Calculator - ClarityTools')

@section('content')
    <!-- Hero Section -->
    <section class="py-16 bg-gradient-to-r from-primary-blue to-primary-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
                Timber Concrete Composite Calculator
            </h1>
            <p class="mt-4 text-lg text-white opacity-90 max-w-2xl mx-auto">
                Advanced design and analysis tool for composite structures combining timber and concrete materials.
            </p>
        </div>
    </section>

    <!-- Calculator Description & Iframe Section -->
    <div class="pt-16 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Description Section -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">About Timber Concrete Composite Calculator</h2>
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                    <div class="prose max-w-none text-gray-600">
                        <p class="text-lg leading-relaxed mb-4">
                            The Timber Concrete Composite Calculator is a specialized tool designed for structural engineers and architects 
                            working with hybrid structures that combine the benefits of timber and concrete materials. This powerful calculator 
                            enables precise analysis and optimization of composite structural systems.
                        </p>
                        
                        <h3 class="text-xl font-semibold text-gray-800 mt-6 mb-4">Key Features:</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Composite Analysis:</strong> Evaluate interaction between timber and concrete components</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Load Distribution:</strong> Accurate load path analysis through composite layers</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Material Properties:</strong> Support for various timber grades and concrete strengths</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Connection Design:</strong> Calculate connector requirements and shear transfer</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Deflection & Vibration:</strong> Check serviceability and comfort criteria</span>
                            </li>
                        </ul>

                        <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4">Use Cases:</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Hybrid Building Systems</h4>
                                <p class="text-sm text-gray-600">Design multi-story buildings using timber-concrete composite floors for enhanced performance.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Bridge Construction</h4>
                                <p class="text-sm text-gray-600">Create efficient bridge decks combining timber and concrete for optimal structural behavior.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Renovation & Retrofit</h4>
                                <p class="text-sm text-gray-600">Strengthen existing timber structures by adding concrete layers or elements.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Specialty Structures</h4>
                                <p class="text-sm text-gray-600">Design unique composite solutions for architectural and functional requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Calculator Iframe Container -->
            <div class="bg-white p-4 sm:p-8 rounded-2xl shadow-2xl border border-gray-100">
                <h3 class="text-2xl font-semibold text-primary-dark mb-4 border-b pb-3">
                    <i class="fas fa-calculator mr-2"></i>Timber Concrete Composite Calculator Tool
                </h3>
                
                <div class="iframe-wrapper shadow-xl ring-4 ring-primary-blue/30">
                    <script src="https://review.clttoolbox.com.au/feature-dev/add-embed/embed/script/20cac6f800d11d49da4cb67fb06d56a77daaef57eb61ba217f5ca3ef190d4e4a.js" defer></script>
                        <script>
                        window.addEventListener('load', function() {
                            window.cltToolboxEmbedCalculator({
                                containerId: 'clt-toolbox-embed',
                                type: 'tcc_floor_design',
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
                        <li>1. Define the composite structure geometry and dimensions</li>
                        <li>2. Select timber and concrete material properties</li>
                        <li>3. Specify connection details and connector spacing</li>
                        <li>4. Input loading conditions and constraints</li>
                        <li>5. Review composite behavior and design recommendations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
