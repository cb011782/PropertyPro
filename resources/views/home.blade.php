<x-app-layout>
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Home') }}--}}
{{--            hi--}}
{{--        </h2>--}}
{{--    </x-slot>--}}


    <main class="relative ">
        <div class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/home.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="container mx-auto h-full flex items-center justify-center text-center">
                <div class="relative text-white bg-opacity-70 p-8 text-shadow-lg rounded-lg">
                    <h1 class="text-5xl font-bold">Search. Explore. Find Your Home</h1>
                </div>
            </div>
        </div>

        <!-- Statistics section -->
{{--        <div class="absolute inset-x-0 bottom-0 transform translate-y-1/2 w-50">--}}
{{--            <div class="container mx-auto px-20">--}}
{{--                <div class="bg-white rounded-lg shadow-lg p-5 flex justify-around">--}}
{{--                    <div class="text-center text-blue-900">--}}
{{--                        <h2 class="text-2xl font-bold">100+</h2>--}}
{{--                        <p class="text-gray-600">Successful Services<br>Provided</p>--}}
{{--                    </div>--}}

{{--                    <div class="text-center text-blue-900">--}}
{{--                        <h2 class="text-2xl font-bold">50+</h2>--}}
{{--                        <p class="text-gray-600">Customers</p>--}}
{{--                    </div>--}}
{{--                    <div class="text-center text-blue-900">--}}
{{--                        <h2 class="text-2xl font-bold">90+</h2>--}}
{{--                        <p class="text-gray-600">Listings</p>--}}
{{--                    </div>--}}
{{--                    <div class="text-center" x-init="setInterval(() => { if(servicesCount < 100) servicesCount++ }, 20)">--}}
{{--                        <span class="text-4xl font-extra bold text-gray-900" x-text="servicesCount + '+'"></span>--}}
{{--                        <p class="mt-2 text-lg font-medium text-gray-900">Successful <br> Services provided</p>--}}
{{--                    </div>--}}
{{--                    <div class="text-center" x-init="setInterval(() => { if(customersCount < 50) customersCount++ }, 40)">--}}
{{--                        <span class="text-4xl font-extra bold text-gray-900" x-text="customersCount + '+'"></span>--}}
{{--                        <p class="mt-2 text-lg font-medium text-gray-900">Customers</p>--}}
{{--                    </div>--}}
{{--                    <div class="text-center" x-init="setInterval(() => { if(listingsCount < 90) listingsCount++ }, 30)">--}}
{{--                        <span class="text-4xl font-extra bold text-gray-900" x-text="listingsCount + '+'"></span>--}}
{{--                        <p class="mt-2 text-lg font-medium text-gray-900">Listings</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="absolute inset-x-0 bottom-0 transform translate-y-1/2 w-full">
            <div class="container mx-auto px-20" x-data="{
                    servicesCount: 0,
                    customersCount: 0,
                    listingsCount: 0,
                    initCounters() {
                        this.incrementCounter('servicesCount', 100, 20);
                        this.incrementCounter('customersCount', 50, 40);
                        this.incrementCounter('listingsCount', 90, 30);
                    },
                    incrementCounter(counter, target, interval) {
                        let count = 0;
                        const increment = () => {
                            if (count < target) {
                                count++;
                                this[counter] = count;
                                setTimeout(increment, interval);
                            }
                        };
                        increment();
                    }
                }" x-init="initCounters">
                <div class="bg-white rounded-lg shadow-lg p-5 flex justify-around">
                    <div class="text-center">
                        <span class="text-4xl font-bold text-gray-900" x-text="servicesCount + '+'"></span>
                        <p class="mt-2 text-lg font-medium text-gray-900">Successful <br> Services provided</p>
                    </div>
                    <div class="text-center">
                        <span class="text-4xl font-bold text-gray-900" x-text="customersCount + '+'"></span>
                        <p class="mt-2 text-lg font-medium text-gray-900">Customers</p>
                    </div>
                    <div class="text-center">
                        <span class="text-4xl font-bold text-gray-900" x-text="listingsCount + '+'"></span>
                        <p class="mt-2 text-lg font-medium text-gray-900">Listings</p>
                    </div>
                </div>
            </div>
        </div>


    </main>

    @section('properties')
    <!-- Featured Properties section -->
    <section class="py-20 mt-2.5">
        <div class="container mx-auto text-center">
            <h2 class="text-blue-900 text-3xl font-bold mb-4 mt-3">"Your key to unlocking your dream house"</h2>
            <h3 class="pt-20 text-2xl font-semibold mb-10 text-blue-900">Featured Properties</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-10">
                <!-- Property Card -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden relative group transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl border border-gray-200">
                    <img src="{{ asset('images/property1.jpg') }}" alt="Property Image" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h4 class="text-xl font-semibold">Property Name</h4>
                        <p class="text-gray-600">$200,000</p>
                        <div class="flex items-center justify-center mt-2">
                            <span class="mr-4"><i class="fas fa-bed"></i> 4</span>
                            <span class="mr-4"><i class="fas fa-bath"></i> 5</span>
                            <span><i class="fas fa-ruler-combined"></i> 2500sqft</span>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button class="bg-blue-500 text-base text-white font-semibold py-2 px-4 rounded hover:bg-blue-700">
                                Place a bid
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Repeat for other properties -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden relative group transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl border border-gray-200">
                    <img src="{{ asset('images/property2.jpg') }}" alt="Property Image" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h4 class="text-xl font-semibold">Property Name</h4>
                        <p class="text-gray-600">$200,000</p>
                        <div class="flex items-center justify-center mt-2">
                            <span class="mr-4"><i class="fas fa-bed"></i> 4</span>
                            <span class="mr-4"><i class="fas fa-bath"></i> 5</span>
                            <span><i class="fas fa-ruler-combined"></i> 2500sqft</span>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button class="bg-blue-500 text-base text-white font-semibold py-2 px-4 rounded hover:bg-blue-700">
                                Place a bid
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Additional property cards as needed -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden relative group transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl border border-gray-200">
                    <img src="{{ asset('images/property3.jpg') }}" alt="Property Image" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h4 class="text-xl font-semibold">Property Name</h4>
                        <p class="text-gray-600">$200,000</p>
                        <div class="flex items-center justify-center mt-2">
                            <span class="mr-4"><i class="fas fa-bed"></i> 4</span>
                            <span class="mr-4"><i class="fas fa-bath"></i> 5</span>
                            <span><i class="fas fa-ruler-combined"></i> 2500sqft</span>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button class="bg-blue-500 text-base text-white font-semibold py-2 px-4 rounded hover:bg-blue-700">
                                Place a bid
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden relative group transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl border border-gray-200">
                    <img src="{{ asset('images/property4.jpg') }}" alt="Property Image" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h4 class="text-xl font-semibold">Property Name</h4>
                        <p class="text-gray-600">$200,000</p>
                        <div class="flex items-center justify-center mt-2">
                            <span class="mr-4"><i class="fas fa-bed"></i> 4</span>
                            <span class="mr-4"><i class="fas fa-bath"></i> 5</span>
                            <span><i class="fas fa-ruler-combined"></i> 2500sqft</span>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button class="bg-blue-500 text-base text-white font-semibold py-2 px-4 rounded hover:bg-blue-700">
                                Place a bid
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden relative group transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl border border-gray-200">
                    <img src="{{ asset('images/property5.jpg') }}" alt="Property Image" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h4 class="text-xl font-semibold">Property Name</h4>
                        <p class="text-gray-600">$200,000</p>
                        <div class="flex items-center justify-center mt-2">
                            <span class="mr-4"><i class="fas fa-bed"></i> 4</span>
                            <span class="mr-4"><i class="fas fa-bath"></i> 5</span>
                            <span><i class="fas fa-ruler-combined"></i> 2500sqft</span>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button class="bg-blue-500 text-base text-white font-semibold py-2 px-4 rounded hover:bg-blue-700">
                                Place a bid
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden relative group transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl border border-gray-200">
                    <img src="{{ asset('images/property6.jpg') }}" alt="Property Image" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h4 class="text-xl font-semibold">Property Name</h4>
                        <p class="text-gray-600">$200,000</p>
                        <div class="flex items-center justify-center mt-2">
                            <span class="mr-4"><i class="fas fa-bed"></i> 4</span>
                            <span class="mr-4"><i class="fas fa-bath"></i> 5</span>
                            <span><i class="fas fa-ruler-combined"></i> 2500sqft</span>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button class="bg-blue-500 text-base text-white font-semibold py-2 px-4 rounded hover:bg-blue-700">
                                Place a bid
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endsection

{{--@section('whyUs')--}}
{{--    <section class="py-12 px-20">--}}
{{--        <div class="container mx-auto flex flex-row md:flex-row items-center">--}}
{{--            <div class="md:w-1/2 relative">--}}
{{--                <div class="relative">--}}
{{--                    <img src="{{ asset('images/choose2.jpg') }}" alt="Property 1" class="w-96 h-64">--}}
{{--                    <img src="{{ asset('images/choose1.jpg') }}" alt="Property 2" class="w-96 h-64 absolute top-16 left-16">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Why Choose Us Section -->--}}
{{--            <div class="md:w-1/2 mt-8 md:mt-0 md:ml-8 text-center md:text-left px-20">--}}
{{--                <h2 class="text-3xl font-semibold mb-8 text-blue-900">Why Choose Us?</h2>--}}
{{--                <div class="w-16 h-1 bg-yellow-400 mb-8 float-right"></div>--}}
{{--                <div class="space-y-8">--}}
{{--                    <div>--}}
{{--                        <h3 class="text-xl font-semibold text-blue-900">Low Commission</h3>--}}
{{--                        <p class="text-gray-600 mt-2">Pocket friendly low commissions for the best services ever</p>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <h3 class="text-xl font-semibold text-blue-900">Best agents Around</h3>--}}
{{--                        <p class="text-gray-600 mt-2">Pocket friendly low commissions for the best services ever</p>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <h3 class="text-xl font-semibold text-blue-900">Quality Services</h3>--}}
{{--                        <p class="text-gray-600 mt-2">Pocket friendly low commissions for the best services ever</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    @endsection--}}

    @section('whyUs')
        <section class="py-12 px-20 md:px-20">
            <div class="container mx-auto flex flex-row md:flex-row items-center">
                <div class="md:w-1/2 relative mb-8 md:mb-0">
                    <div class="relative">
                        <img src="{{ asset('images/choose2.jpg') }}" alt="Property 1" class="w-96 h-64 md:w-96 md:h-64">
                        <img src="{{ asset('images/choose1.jpg') }}" alt="Property 2" class="w-96 h-64 md:w-96 md:h-64 absolute top-16 left-8 md:left-16">
                    </div>
                </div>

                <!-- Why Choose Us Section -->
                <div class="md:w-1/2 text-center md:text-left px-4 md:px-20">
                    <h2 class="text-3xl font-semibold mb-2 md:mb-8 text-blue-900">Why Choose Us?</h2>
                    <div class="w-16 h-1 bg-yellow-400 mb-8 mx-auto md:mx-0"></div>
                    <div class="space-y-8">
                        <div>
                            <h3 class="text-xl font-semibold text-blue-900">Low Commission</h3>
                            <p class="text-gray-600 mt-2">Pocket friendly low commissions for the best services ever</p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-blue-900">Best Agents Around</h3>
                            <p class="text-gray-600 mt-2">Pocket friendly low commissions for the best services ever</p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-blue-900">Quality Services</h3>
                            <p class="text-gray-600 mt-2">Pocket friendly low commissions for the best services ever</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection


@section('agents')
{{--<section class="py-5 px-20">--}}
{{--    <div class="container mx-auto px-4 py-8">--}}
{{--        <h2 class="text-2xl font-semibold text-blue-900 mb-4">--}}
{{--            Get in contact with the best--}}
{{--            <br>--}}
{{--            agents in the industry--}}
{{--        </h2>--}}
{{--        <div class="w-16 h-1 bg-yellow-400 mb-6"></div>--}}
{{--        <div class="flex justify-center space-x-4 p-10 relative">--}}
{{--            <!-- Card 1 -->--}}
{{--            <div class="relative" x-data="{ open: false }">--}}
{{--                <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300" @click="open = true">--}}
{{--                    <img src="images/agent3.jpg" alt="Alysse Maria" class="rounded-t-lg w-full h-48 object-cover">--}}
{{--                    <div class="p-4">--}}
{{--                        <h3 class="text-lg font-semibold">Alysse Maria</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" @click="open = false">--}}
{{--                    <div class="bg-white rounded-lg p-4 shadow-lg relative w-80" @click.stop>--}}
{{--                        <button class="absolute top-2 right-2 text-xl z-60" @click="open = false">&times;</button>--}}
{{--                        <img src="images/agent3.jpg" alt="Alysse Maria" class="rounded-full w-24 h-24 mb-4 mx-auto">--}}
{{--                        <h3 class="text-xl font-semibold text-center">Alysse Maria</h3>--}}
{{--                        <p class="text-center">Email: alysse.maria@example.com</p>--}}
{{--                        <p class="text-center">Contact: (123) 456-7890</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Card 2 -->--}}
{{--            <div class="relative" x-data="{ open: false }">--}}
{{--                <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300" @click="open = true">--}}
{{--                    <img src="images/agent4.jpg" alt="John Austin" class="rounded-t-lg w-full h-48 object-cover">--}}
{{--                    <div class="p-4">--}}
{{--                        <h3 class="text-lg font-semibold">John Austin</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" @click="open = false">--}}
{{--                    <div class="bg-white rounded-lg p-4 shadow-lg relative w-80" @click.stop>--}}
{{--                        <button class="absolute top-2 right-2 text-xl z-60" @click="open = false">&times;</button>--}}
{{--                        <img src="images/agent4.jpg" alt="John Austin" class="rounded-full w-24 h-24 mb-4 mx-auto">--}}
{{--                        <h3 class="text-xl font-semibold text-center">John Austin</h3>--}}
{{--                        <p class="text-center">Email: john.austin@example.com</p>--}}
{{--                        <p class="text-center">Contact: (234) 567-8901</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Card 3 -->--}}
{{--            <div class="relative" x-data="{ open: false }">--}}
{{--                <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300" @click="open = true">--}}
{{--                    <img src="images/agent.jpg" alt="Sam Smith" class="rounded-t-lg w-full h-48 object-cover">--}}
{{--                    <div class="p-4">--}}
{{--                        <h3 class="text-lg font-semibold">Sam Smith</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" @click="open = false">--}}
{{--                    <div class="bg-white rounded-lg p-4 shadow-lg relative w-80" @click.stop>--}}
{{--                        <button class="absolute top-2 right-2 text-xl z-60" @click="open = false">&times;</button>--}}
{{--                        <img src="images/agent.jpg" alt="Sam Smith" class="rounded-full w-24 h-24 mb-4 mx-auto">--}}
{{--                        <h3 class="text-xl font-semibold text-center">Sam Smith</h3>--}}
{{--                        <p class="text-center">Email: sam.smith@example.com</p>--}}
{{--                        <p class="text-center">Contact: (345) 678-9012</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Card 4 -->--}}
{{--            <div class="relative" x-data="{ open: false }">--}}
{{--                <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300" @click="open = true">--}}
{{--                    <img src="images/agent2.jpg" alt="Ken James" class="rounded-t-lg w-full h-48 object-cover">--}}
{{--                    <div class="p-4">--}}
{{--                        <h3 class="text-lg font-semibold">Ken James</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" @click="open = false">--}}
{{--                    <div class="bg-white rounded-lg p-4 shadow-lg relative w-80" @click.stop>--}}
{{--                        <button class="absolute top-2 right-2 text-xl z-60" @click="open = false">&times;</button>--}}
{{--                        <img src="images/agent2.jpg" alt="Ken James" class="rounded-full w-24 h-24 mb-4 mx-auto">--}}
{{--                        <h3 class="text-xl font-semibold text-center">Ken James</h3>--}}
{{--                        <p class="text-center">Email: ken.james@example.com</p>--}}
{{--                        <p class="text-center">Contact: (456) 789-0123</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

        <section class="py-5 px-20">
            <div class="container mx-auto px-4 py-8">
                <h2 class="text-2xl font-semibold text-blue-900 mb-4">
                    Get in contact with the best
                    <br>
                    agents in the industry
                </h2>
                <div class="w-16 h-1 bg-yellow-400 mb-6"></div>
                <div class="flex justify-center space-x-4 p-10 relative">
                    <!-- Card 1 -->
                    <div class="relative" x-data="{ open: false }">
                        <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300" @click="open = true">
                            <img src="images/agent3.jpg" alt="Alysse Maria" class="rounded-t-lg w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Alysse Maria</h3>
                            </div>
                        </div>
{{--                        <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" @click="open = false">--}}
{{--                            <div class="bg-white rounded-lg p-4 shadow-lg relative w-80" @click.stop>--}}
{{--                                <button class="absolute top-2 right-2 text-xl z-60" @click="open = false">&times;</button>--}}
{{--                                <img src="images/agent3.jpg" alt="Alysse Maria" class="rounded-full w-24 h-24 mb-4 mx-auto">--}}
{{--                                <h3 class="text-xl font-semibold text-center">Alysse Maria</h3>--}}
{{--                                <p class="text-center">Email: alysse.maria@example.com</p>--}}
{{--                                <p class="text-center">Contact: (123) 456-7890</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

                    <!-- Card 2 -->
                    <div class="relative" x-data="{ open: false }">
                        <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300" @click="open = true">
                            <img src="images/agent4.jpg" alt="John Austin" class="rounded-t-lg w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">John Austin</h3>
                            </div>
                        </div>
{{--                        <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" @click="open = false">--}}
{{--                            <div class="bg-white rounded-lg p-4 shadow-lg relative w-80" @click.stop>--}}
{{--                                <button class="absolute top-2 right-2 text-xl z-60" @click="open = false">&times;</button>--}}
{{--                                <img src="images/agent4.jpg" alt="John Austin" class="rounded-full w-24 h-24 mb-4 mx-auto">--}}
{{--                                <h3 class="text-xl font-semibold text-center">John Austin</h3>--}}
{{--                                <p class="text-center">Email: john.austin@example.com</p>--}}
{{--                                <p class="text-center">Contact: (234) 567-8901</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

                    <!-- Card 3 -->
                    <div class="relative" x-data="{ open: false }">
                        <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300" @click="open = true">
                            <img src="images/agent.jpg" alt="Sam Smith" class="rounded-t-lg w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Sam Smith</h3>
                            </div>
                        </div>
{{--                        <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" @click="open = false">--}}
{{--                            <div class="bg-white rounded-lg p-4 shadow-lg relative w-80" @click.stop>--}}
{{--                                <button class="absolute top-2 right-2 text-xl z-60" @click="open = false">&times;</button>--}}
{{--                                <img src="images/agent.jpg" alt="Sam Smith" class="rounded-full w-24 h-24 mb-4 mx-auto">--}}
{{--                                <h3 class="text-xl font-semibold text-center">Sam Smith</h3>--}}
{{--                                <p class="text-center">Email: sam.smith@example.com</p>--}}
{{--                                <p class="text-center">Contact: (345) 678-9012</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

                    <!-- Card 4 -->
                    <div class="relative" x-data="{ open: false }">
                        <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300" @click="open = true">
                            <img src="images/agent2.jpg" alt="Ken James" class="rounded-t-lg w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Ken James</h3>
                            </div>
                        </div>
{{--                        <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" @click="open = false">--}}
{{--                            <div class="bg-white rounded-lg p-4 shadow-lg relative w-80" @click.stop>--}}
{{--                                <button class="absolute top-2 right-2 text-xl z-60" @click="open = false">&times;</button>--}}
{{--                                <img src="images/agent2.jpg" alt="Ken James" class="rounded-full w-24 h-24 mb-4 mx-auto">--}}
{{--                                <h3 class="text-xl font-semibold text-center">Ken James</h3>--}}
{{--                                <p class="text-center">Email: ken.james@example.com</p>--}}
{{--                                <p class="text-center">Contact: (456) 789-0123</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </section>

    @endsection


    @section('content')
        <div class="container mx-auto px-20 py-8 md:py-5" x-data="carousel()">
            <h2 class="text-2xl font-semibold text-blue-900 mb-4 text-right">
                Feedback
                <br>
                <span class="text-xl text-gray-600">What Our Clients Say About Us</span>
            </h2>
            <div class="w-16 h-1 bg-yellow-400 mb-6 float-right"></div>
            <div class="flex items-center justify-center space-x-4 md:py-5">
                <button @click="prev" class="text-blue-900 text-3xl focus:outline-none">
                    &#10094;
                </button>
                <div class="flex items-center justify-center space-x-4 w-full max-w-4xl">
                    <div class="flex items-center w-full space-x-6" x-show="current === 0">
                        <div class="w-1/2 flex-shrink-0">
                            <img class="rounded-lg shadow-lg mx-auto" src="{{asset('images/property1.jpg')}}" alt="House Image">
                        </div>
                        <div class="w-1/2">
                            <blockquote class="text-gray-700">
                                “Working with Property Pro was an absolute pleasure! As first-time home-buyers, we were feeling overwhelmed by the entire process. They patiently explained everything to us, answered all our questions (no matter how silly we thought they were!), and guided us through each step with expertise and a positive attitude.”
                            </blockquote>
                            <p class="mt-4 text-right text-blue-900 font-semibold">- John James</p>
                        </div>
                    </div>

                    <div class="flex items-center w-full space-x-6" x-show="current === 1">
                        <div class="w-1/2 flex-shrink-0">
                            <img class="rounded-lg shadow-lg mx-auto" src="{{asset('images/property2.jpg')}}" alt="House Image">
                        </div>
                        <div class="w-1/2">
                            <blockquote class="text-gray-700">
                                “The agents at Property Pro went above and beyond to ensure we found our dream home. Their dedication and attention to detail made the whole experience enjoyable and stress-free. Highly recommend their services!”
                            </blockquote>
                            <p class="mt-4 text-right text-blue-900 font-semibold">- Sarah Brown</p>
                        </div>
                    </div>

                    <div class="flex items-center w-full space-x-6" x-show="current === 2">
                        <div class="w-1/2 flex-shrink-0">
                            <img class="rounded-lg shadow-lg mx-auto" src="{{asset('images/property5.jpg')}}" alt="House Image">
                        </div>
                        <div class="w-1/2">
                            <blockquote class="text-gray-700">
                                “We were impressed by the professionalism and knowledge of the Property Pro team. They made the process of selling our house quick and easy. We couldn't be happier with the results.”
                            </blockquote>
                            <p class="mt-4 text-right text-blue-900 font-semibold">- Michael Lee</p>
                        </div>
                    </div>
                </div>
                <button @click="next" class="text-blue-900 text-3xl focus:outline-none">
                    &#10095;
                </button>
            </div>
        </div>

        <script>
            function carousel() {
                return {
                    current: 0,
                    total: 3,
                    next() {
                        if (this.current < this.total - 1) {
                            this.current++;
                        } else {
                            this.current = 0;
                        }
                    },
                    prev() {
                        if (this.current > 0) {
                            this.current--;
                        } else {
                            this.current = this.total - 1;
                        }
                    }
                }
            }
        </script>
    @endsection

    @section('contact')
        <div class="container mx-auto px-20 py-16">
            <h2 class="text-2xl font-semibold text-blue-900 mb-4">
                Contact us for property listings
            </h2>
            <div class="w-16 h-1 bg-yellow-400 mb-6"></div>
            <div class="bg-blue-600 rounded-lg p-8 flex flex-row sm:flex-row items-center justify-center text-white max-w-4xl mx-auto">
                <div class="text-center sm:text-left mb-6 sm:mb-0 px-10">
                    <p class="text-lg font-medium">Contact us to get your property listed now</p>
                    <p class="text-lg font-medium">Start your listing & get expert advice now!</p>
                    <button class="mt-4 px-6 py-2 bg-white text-blue-600 font-semibold rounded-full">Contact us</button>
                </div>
                <div class="flex justify-between sm:justify-end">
                    <div class="bg-white rounded-full p-4">
                        <img class="w-20 h-20" src="{{ asset('images/LG.png') }}" alt="Property Pro Logo">
                    </div>
                </div>
            </div>
        </div>

    @endsection



    @section('footer')
        <!-- Footer starts here -->
        <footer class="bg-blue-300 py-16 px-20">
            <div class="container mx-auto px-4 flex flex-row md:flex-row justify-between items-center space-y-8 md:space-y-0">
                <!-- Left Column -->
                <div class="flex flex-col items-center md:items-start md:w-1/3 space-y-3">
                    <a href="#" class="text-black font-bold hover:text-white">Products</a>
                    <a href="#" class="text-black font-bold hover:text-white">Our Listings</a>
                    <a href="#" class="text-black font-bold hover:text-white">Services</a>
                    <a href="#" class="text-black font-bold hover:text-white">Agents</a>
                    <a href="#" class="text-black font-bold hover:text-white">Sell your property</a>
                </div>
                <div class="flex flex-col items-center md:items-start md:w-1/3 space-y-3">
                    <a href="#" class="text-black font-bold hover:text-white">Company</a>
                    <a href="#" class="text-black font-bold hover:text-white">Terms and Conditions</a>
                    <a href="#" class="text-black font-bold hover:text-white">Partnerships</a>
                    <a href="#" class="text-black font-bold hover:text-white">Privacy</a>

                </div>
                <!-- Center Column -->
                <div class="flex justify-center md:w-1/3">
                    <div class="bg-white rounded-full p-4">
                        <img class="w-16 h-16" src="{{ asset('images/LG.png') }}" alt="Property Pro Logo">
                    </div>
                </div>
                <!-- Right Column -->
                <div class="flex flex-col items-center md:items-end md:w-1/3 space-y-4 text-center md:text-right">
                    <p class="text-black font-bold">Get in touch with us</p>
                    <p class="text-black font-bold">Find us to help you find your dream home! OR find us to help you sell your home!</p>
                    <div class="flex space-x-2">
                        <a href="#" class="w-6 h-6 flex items-center justify-center bg-white text-blue-600 rounded-full">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-6 h-6 flex items-center justify-center bg-white text-blue-600 rounded-full">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-6 h-6 flex items-center justify-center bg-white text-blue-600 rounded-full">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-6 h-6 flex items-center justify-center bg-white text-blue-600 rounded-full">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="w-6 h-6 flex items-center justify-center bg-white text-blue-600 rounded-full">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer ends here -->
    @endsection





    {{--    <div class="py-0">--}}
{{--       --}}
{{--        </div>--}}
</x-app-layout>
