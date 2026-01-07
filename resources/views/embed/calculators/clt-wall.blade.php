@extends('embed.layouts.company')

@section('title', 'CLT Wall Calculator - ClarityTools')

@section('content')
    <!-- Hero Section -->
    <section class="py-16 bg-gradient-to-r from-primary-blue to-primary-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
                CLT Wall Calculator
            </h1>
            <p class="mt-4 text-lg text-white opacity-90 max-w-2xl mx-auto">
                Advanced Cross-Laminated Timber wall design tool for modern timber construction.
            </p>
        </div>
    </section>

    <!-- Calculator Description & Iframe Section -->
    <div class="pt-16 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Description Section -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">About CLT Wall Calculator</h2>
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                    <div class="prose max-w-none text-gray-600">
                        <p class="text-lg leading-relaxed mb-4">
                            The CLT Wall Calculator is a state-of-the-art tool specifically designed for Cross-Laminated Timber 
                            (CLT) wall systems. It enables architects and structural engineers to design sustainable, efficient, 
                            and code-compliant timber wall structures with confidence and precision.
                        </p>
                        
                        <h3 class="text-xl font-semibold text-gray-800 mt-6 mb-4">Key Features:</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>CLT Panel Design:</strong> Optimize layer configuration and timber species selection</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Load Capacity Analysis:</strong> Calculate axial, lateral, and combined load capacities</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Fire Resistance:</strong> Evaluate fire rating and charring rates for different configurations</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Acoustic Performance:</strong> Analyze sound transmission properties and acoustic insulation</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Connection Design:</strong> Design and verify wall-to-wall and wall-to-foundation connections</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Sustainability Metrics:</strong> Calculate carbon footprint and environmental impact</span>
                            </li>
                        </ul>

                        <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4">Perfect For:</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Mass Timber Buildings</h4>
                                <p class="text-sm text-gray-600">Design load-bearing CLT walls for multi-story mass timber residential and commercial buildings.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Sustainable Construction</h4>
                                <p class="text-sm text-gray-600">Create eco-friendly building designs with reduced carbon emissions and renewable materials.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Hybrid Structures</h4>
                                <p class="text-sm text-gray-600">Integrate CLT walls with other structural systems in hybrid construction projects.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Modular Construction</h4>
                                <p class="text-sm text-gray-600">Design prefabricated CLT wall panels for rapid off-site construction and assembly.</p>
                            </div>
                        </div>

                        <div class="mt-6 p-4 bg-green-50 border-l-4 border-green-500 rounded-md">
                            <p class="text-green-800">
                                <strong class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    Sustainability Impact:
                                </strong>
                                <span class="text-sm ml-7">CLT construction can reduce carbon emissions by up to 75% compared to traditional concrete and steel structures, making it an excellent choice for green building projects.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Calculator Iframe Container -->
            <div class="bg-white p-4 sm:p-8 rounded-2xl shadow-2xl border border-gray-100">
                <h3 class="text-2xl font-semibold text-primary-dark mb-4 border-b pb-3">
                    <i class="fas fa-calculator mr-2"></i>CLT Wall Calculator Tool
                </h3>
                
                <div class="iframe-wrapper shadow-xl ring-4 ring-primary-blue/30">
                    <script src="https://review.clttoolbox.com.au/feature-dev/add-embed/embed/script/20cac6f800d11d49da4cb67fb06d56a77daaef57eb61ba217f5ca3ef190d4e4a.js" defer></script>
                    <script>
                    window.addEventListener('load', function() {
                        window.cltToolboxEmbedCalculator({
                            containerId: 'clt-toolbox-embed',
                            type: 'wall_design_2',
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
                        <li>1. Select CLT panel configuration (number of layers, thickness)</li>
                        <li>2. Choose timber species and grade</li>
                        <li>3. Input wall height, length, and loading conditions</li>
                        <li>4. Specify fire resistance and acoustic requirements</li>
                        <li>5. Review design checks and optimization recommendations</li>
                        <li>6. Export technical drawings and specifications</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
