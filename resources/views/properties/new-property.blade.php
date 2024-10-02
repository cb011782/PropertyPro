<x-app-layout>
    <div class="container mx-auto py-10 md:px-8">
        <h1 class="text-4xl font-bold mb-8 text-center text-blue-900">New Properties</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($properties as $property)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform duration-300 transform hover:scale-105 relative">
                    <!-- Status Badge -->
                    <span class="absolute top-4 right-4 px-3 py-1 text-xs font-bold {{ $property->status == 'sold' ? 'bg-red-600 text-white' : ($property->status == 'new' ? 'bg-yellow-600 text-white' : 'bg-green-600 text-white') }} rounded-full z-10">
                        {{ ucfirst($property->status) }}
                    </span>

                    <div class="relative">
                        <!-- Display Property Image -->
                        <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->type }}" class="w-full h-60 object-cover rounded-lg mb-4" />

                        <h5 class="text-lg font-semibold text-center mb-2">{{ $property->type }}</h5>
                    </div>

                    <div class="p-4">
                        <p class="text-gray-700">
                            <strong>Address:</strong> {{ $property->address }} <br>
                            <strong>Price:</strong> ${{ number_format($property->price, 2) }} <br>
                            <strong>Size:</strong> {{ $property->size }} sq ft <br>
                            <strong>Bedrooms:</strong> {{ $property->bedrooms }} <br>
                            <strong>Bathrooms:</strong> {{ $property->bathrooms }} <br>
                        </p>
                        <p class="mt-4 text-gray-600">
                            {{ Str::limit($property->description, 100) }} <!-- Short description -->
                        </p>
                    </div>
                    <div class="bg-gray-100 p-4 flex justify-center">
                        <!-- Disable the button if the property is sold -->
                        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300"
                                onclick="openBookingModal('{{ $property->id }}', '{{ $property->type }}')"
                            {{ $property->status == 'sold' ? 'disabled' : '' }}>
                            Book a House Tour
                        </button>
                    </div>
                </div>
            @empty
                <div class="col-span-1">
                    <p class="text-center text-gray-600">No new properties available.</p>
                </div>
            @endforelse
        </div>

        <div class="flex justify-center mt-6">
            {{ $properties->links() }} <!-- Pagination -->
        </div>
    </div>

    <!-- Booking Modal -->
    <div id="bookingModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg relative">
            <!-- Loading Spinner (Hidden Initially) -->
            <div id="loadingSpinner" class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-75 hidden">
                <div class="spinner-border animate-spin w-8 h-8 border-4 border-blue-500 border-t-transparent rounded-full"></div>
            </div>

            <!-- Close Button at the top right -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-gray-800 text-center" id="propertyName"></h2>
                <button type="button" class="text-gray-600 hover:text-gray-900" onclick="closeBookingModal()">✕</button>
            </div>

            <form id="bookingForm" action="{{ route('appointments.store') }}" method="POST" onsubmit="showLoading()">
                @csrf
                <input type="hidden" name="property_id" id="property_id">

                <div class="mb-4">
                    <label for="date" class="block text-gray-700 font-semibold">Select Date:</label>
                    <input type="date" name="date" id="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="time_slot" class="block text-gray-700 font-semibold">Select Time Slot:</label>
                    <select name="time_slot" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                        @foreach (range(8, 14) as $hour)
                            <option value="{{ $hour }}:00">{{ $hour }}:00</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="client_name" class="block text-gray-700 font-semibold">Your Name:</label>
                    <input type="text" name="client_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="client_email" class="block text-gray-700 font-semibold">Your Email:</label>
                    <input type="email" name="client_email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="client_phone" class="block text-gray-700 font-semibold">Your Phone:</label>
                    <input type="tel" name="client_phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                </div>

                <div class="flex justify-between mt-6">
                    <button type="button" class="bg-gray-300 text-black py-2 px-4 rounded-md hover:bg-gray-400 transition duration-300" onclick="closeBookingModal()">Cancel</button>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">Book Tour</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Function to set min date to today
        function setMinDate() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('date').setAttribute('min', today);
        }

        // Call this function when the modal is opened
        function openBookingModal(propertyId, propertyType) {
            document.getElementById('property_id').value = propertyId;
            document.getElementById('propertyName').innerText = propertyType;
            document.getElementById('bookingModal').classList.remove('hidden');
            setMinDate(); // Set the min date when opening the modal
        }

        function closeBookingModal() {
            document.getElementById('bookingModal').classList.add('hidden');
        }

        // Function to show loading spinner
        function showLoading() {
            document.getElementById('loadingSpinner').classList.remove('hidden');
        }
    </script>
</x-app-layout>
