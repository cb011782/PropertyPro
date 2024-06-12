<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Clients
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('status'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="mb-4">
                <a href="{{ route('clients.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Client</a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">First Name</th>
                                <th class="border px-4 py-2">Last Name</th>
                                <th class="border px-4 py-2">Email</th>
                                <th class="border px-4 py-2">Phone</th>
                                <th class="border px-4 py-2">Address</th>
                                <th class="border px-4 py-2">Created At</th>
                                <th class="border px-4 py-2">Updated At</th>
                                <th class="border px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td class="border px-4 py-2">{{ $client->id }}</td>
                                    <td class="border px-4 py-2">{{ $client->first_name }}</td>
                                    <td class="border px-4 py-2">{{ $client->last_name }}</td>
                                    <td class="border px-4 py-2">{{ $client->email }}</td>
                                    <td class="border px-4 py-2">{{ $client->phone }}</td>
                                    <td class="border px-4 py-2">{{ $client->address }}</td>
                                    <td class="border px-4 py-2">{{ $client->created_at }}</td>
                                    <td class="border px-4 py-2">{{ $client->updated_at }}</td>
                                      <td class="border px-4 py-2">
                                        <a href="{{ route('clients.show', $client->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View</a>

                                        <a href="{{ route('clients.edit', $client->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    onclick="return confirm('Are you sure?')"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-
                                            4 rounded">Delete</button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
