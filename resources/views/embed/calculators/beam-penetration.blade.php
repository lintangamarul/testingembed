@extends('embed.layouts.company')

@section('title', 'Beam Penetration Calculator - ClarityTools')

@section('content')
    <!-- Hero Section -->
    <section class="py-16 bg-gradient-to-r from-primary-blue to-primary-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
                Beam Penetration Calculator
            </h1>
            <p class="mt-4 text-lg text-white opacity-90 max-w-2xl mx-auto">
                Comprehensive beam analysis tool for penetration and opening calculations in structural elements.
            </p>
        </div>
    </section>

    <!-- Calculator Description & Iframe Section -->
    <div class="pt-16 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Description Section -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">About Beam Penetration Calculator</h2>
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                    <div class="prose max-w-none text-gray-600">
                        <p class="text-lg leading-relaxed mb-4">
                            The Beam Penetration Calculator is an essential tool for structural engineers dealing with openings 
                            and penetrations in beam elements. It provides accurate calculations for reinforcement requirements, 
                            load redistribution, and structural integrity when creating openings in beams.
                        </p>
                        
                        <h3 class="text-xl font-semibold text-gray-800 mt-6 mb-4">Key Features:</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Penetration Analysis:</strong> Calculate stress concentrations and load paths around openings</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Reinforcement Design:</strong> Determine additional reinforcement requirements for penetrations</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Multiple Penetration Types:</strong> Support for circular, rectangular, and custom-shaped openings</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Safety Verification:</strong> Check compliance with structural safety factors and code requirements</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-blue mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span><strong>Detailed Reports:</strong> Generate comprehensive calculation reports with diagrams</span>
                            </li>
                        </ul>

                        <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4">Common Applications:</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">MEP Installations</h4>
                                <p class="text-sm text-gray-600">Calculate safe penetrations for HVAC ducts, plumbing, and electrical conduits through structural beams.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Building Renovations</h4>
                                <p class="text-sm text-gray-600">Assess feasibility of creating new openings in existing beams during renovation projects.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Service Integration</h4>
                                <p class="text-sm text-gray-600">Design openings for integration of building services without compromising structural integrity.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Architectural Features</h4>
                                <p class="text-sm text-gray-600">Create architectural openings while maintaining structural performance requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Calculator Iframe Container -->
            <div class="bg-white p-4 sm:p-8 rounded-2xl shadow-2xl border border-gray-100">
                <h3 class="text-2xl font-semibold text-primary-dark mb-4 border-b pb-3">
                    <i class="fas fa-calculator mr-2"></i>Beam Penetration Calculator Tool
                </h3>
                
                <div class="iframe-wrapper shadow-xl ring-4 ring-primary-blue/30">
                    <script src="https://review.clttoolbox.com.au/feature-dev/add-embed/embed/script/20cac6f800d11d49da4cb67fb06d56a77daaef57eb61ba217f5ca3ef190d4e4a.js" defer></script>
                    <script>
                    window.addEventListener('load', function() {
                        window.cltToolboxEmbedCalculator({
                            containerId: 'clt-toolbox-embed',
                            type: 'beam_design_2',
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
                        <li>1. Input beam dimensions and properties</li>
                        <li>2. Specify penetration size, location, and shape</li>
                        <li>3. Enter applied loads and support conditions</li>
                        <li>4. Review stress analysis and reinforcement recommendations</li>
                        <li>5. Download detailed calculation reports</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
