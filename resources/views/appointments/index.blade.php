<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Appointments') }}
        </h2>
    </x-slot>

        <div class="overflow-x-auto px-10 py-5">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-3 px-6 border-b">Property Address</th>
                    <th class="py-3 px-6 border-b">Client Name</th>
                    <th class="py-3 px-6 border-b">Client Email</th>
                    <th class="py-3 px-6 border-b">Client Phone</th>
                    <th class="py-3 px-6 border-b">Date</th>
                    <th class="py-3 px-6 border-b">Time Slot</th>
                    <th class="py-3 px-6 border-b">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($appointments as $appointment)
                    <tr class="hover:bg-gray-100 transition-colors">
                        <td class="py-2 px-4 border-b">{{ optional($appointment->property)->address ?? 'N/A' }}</td>
                        <td class="py-2 px-4 border-b">{{ $appointment->client_name }}</td>
                        <td class="py-2 px-4 border-b">{{ $appointment->client_email }}</td>
                        <td class="py-2 px-4 border-b">{{ $appointment->client_phone }}</td>
                        <td class="py-2 px-4 border-b">{{ $appointment->date }}</td>
                        <td class="py-2 px-4 border-b">{{ $appointment->time_slot }}</td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex space-x-4">
                                <a href="{{ route('appointments.edit', $appointment->id) }}" class="text-blue-600 hover:text-blue-800 font-semibold">Edit</a>
                                <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 font-semibold">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4 text-gray-500">No appointments found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="flex justify-center mt-6">
            {{ $appointments->links() }} <!-- Pagination -->
        </div>
    </div>
</x-app-layout>
