<x-app-layout>
    <div class="container mx-auto py-10 px-10">
        <h1 class="text-4xl font-bold mb-6 text-gray-800">Edit Appointment</h1>

        <form action="{{ route('appointments.update', $appointment) }}" method="POST" class="bg-white shadow-md rounded-lg p-8">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="date" class="block text-gray-700 font-semibold">Date</label>
                <input type="date" name="date" value="{{ $appointment->date }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-300" required>
            </div>

            <div class="mb-6">
                <label for="time_slot" class="block text-gray-700 font-semibold">Time Slot</label>
                <select name="time_slot" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-300" required>
                    <option value="8 AM" {{ $appointment->time_slot == '8 AM' ? 'selected' : '' }}>8 AM</option>
                    <option value="9 AM" {{ $appointment->time_slot == '9 AM' ? 'selected' : '' }}>9 AM</option>
                    <option value="10 AM" {{ $appointment->time_slot == '10 AM' ? 'selected' : '' }}>10 AM</option>
                    <option value="11 AM" {{ $appointment->time_slot == '11 AM' ? 'selected' : '' }}>11 AM</option>
                    <option value="12 PM" {{ $appointment->time_slot == '12 PM' ? 'selected' : '' }}>12 PM</option>
                    <option value="1 PM" {{ $appointment->time_slot == '1 PM' ? 'selected' : '' }}>1 PM</option>
                    <option value="2 PM" {{ $appointment->time_slot == '2 PM' ? 'selected' : '' }}>2 PM</option>
                </select>
            </div>

            <div class="mb-6">
                <label for="client_name" class="block text-gray-700 font-semibold">Client Name</label>
                <input type="text" name="client_name" value="{{ $appointment->client_name }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-300" required>
            </div>

            <div class="mb-6">
                <label for="client_email" class="block text-gray-700 font-semibold">Client Email</label>
                <input type="email" name="client_email" value="{{ $appointment->client_email }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-300" required>
            </div>

            <div class="mb-6">
                <label for="client_phone" class="block text-gray-700 font-semibold">Client Phone</label>
                <input type="text" name="client_phone" value="{{ $appointment->client_phone }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-300" required>
            </div>

            <div class="flex items-center justify-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 transition duration-200">Update Appointment</button>
            </div>
        </form>
    </div>
</x-app-layout>
