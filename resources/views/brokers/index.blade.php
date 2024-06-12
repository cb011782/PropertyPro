<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Brokers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mt-4">
                    <a href="{{ route('brokers.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Broker</a>
                </div>
                <table class="auto-table">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">First Name</th>
                            <th class="px-4 py-2">Last Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Phone</th>
                            <th class="px-4 py-2">Created At</th>
                            <th class="px-4 py-2">Updated At</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($brokers as $broker)
                            <tr>
                                <td class="border px-4 py-2">{{ $broker->id }}</td>
                                <td class="border px-4 py-2">{{ $broker->first_name }}</td>
                                <td class="border px-4 py-2">{{ $broker->last_name }}</td>
                                <td class="border px-4 py-2">{{ $broker->email }}</td>
                                <td class="border px-4 py-2">{{ $broker->phone }}</td>
                                <td class="border px-4 py-2">{{ $broker->created_at }}</td>
                                <td class="border px-4 py-2">{{ $broker->updated_at }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('brokers.show', $broker->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                                    <a href="{{ route('brokers.edit', $broker->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                    <form action="{{ route('brokers.destroy', $broker->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                onclick="return confirm('Are you sure?')"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
</x-app-layout>
