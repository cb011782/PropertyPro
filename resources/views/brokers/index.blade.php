<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Brokers') }}
        </h2>
    </x-slot>

    <div class="py-6 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <!-- Add Broker Button -->
                    <div class="mb-4 flex justify-end">
                        <a href="{{ route('brokers.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded shadow">
                            Add Broker
                        </a>
                    </div>

                    <!-- Brokers Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead>
                            <tr class="bg-gray-100 text-gray-600 text-left">
                                <th class="px-4 py-2 border-b">ID</th>
                                <th class="px-4 py-2 border-b">First Name</th>
                                <th class="px-4 py-2 border-b">Last Name</th>
                                <th class="px-4 py-2 border-b">Email</th>
                                <th class="px-4 py-2 border-b">Phone</th>
                                <th class="px-4 py-2 border-b">Created At</th>
                                <th class="px-4 py-2 border-b">Updated At</th>
                                <th class="px-4 py-2 border-b">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brokers as $broker)
                                <tr class="hover:bg-gray-100 transition-colors">
                                    <td class="border px-4 py-2">{{ $broker->id }}</td>
                                    <td class="border px-4 py-2">{{ $broker->first_name }}</td>
                                    <td class="border px-4 py-2">{{ $broker->last_name }}</td>
                                    <td class="border px-4 py-2">{{ $broker->email }}</td>
                                    <td class="border px-4 py-2">{{ $broker->phone }}</td>
                                    <td class="border px-4 py-2">{{ $broker->created_at->format('Y-m-d H:i') }}</td>
                                    <td class="border px-4 py-2">{{ $broker->updated_at->format('Y-m-d H:i') }}</td>
                                    <td class="border px-4 py-2">
                                        <div class="space-y-1">
                                            <a href="{{ route('brokers.show', $broker->id) }}" class="block bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded">View</a>
                                            <a href="{{ route('brokers.edit', $broker->id) }}" class="block bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-2 rounded">Edit</a>
                                            <form action="{{ route('brokers.destroy', $broker->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure?')" class="block bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4">
{{--                        {{ $brokers->links() }} <!-- Pagination links -->--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
